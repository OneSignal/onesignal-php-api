<?php

namespace onesignal\client\helpers;

use GuzzleHttp\Exception\ConnectException;
use onesignal\client\ApiException;

/**
 * Helpers for common OneSignal API usage patterns.
 */
class NotificationHelpers
{
    const DEFAULT_MAX_RETRIES = 3;
    const DEFAULT_BASE_DELAY = 1.0;
    const MIN_BASE_DELAY = 1.0;
    const MAX_BASE_DELAY = 60.0;

    private static $retryableStatuses = [429, 503];

    /**
     * Create a notification with safe, idempotent retries.
     *
     * Ensures the notification's idempotency_key is set (generating a UUIDv4
     * when absent) so the server can deduplicate, then calls
     * createNotification. Transient failures (HTTP 429, HTTP 503, or
     * connection-level errors) are retried with the SAME idempotency key,
     * honoring the Retry-After response header when present and falling back
     * to exponential backoff (baseDelay * 2^attempt seconds) otherwise. Other
     * errors are thrown immediately.
     *
     * @param \onesignal\client\api\DefaultApi          $api          the API instance to call through
     * @param \onesignal\client\model\Notification      $notification an existing idempotency key is respected, never overwritten
     * @param int                                       $maxRetries   retries after the initial attempt
     * @param float                                     $baseDelay    backoff base in seconds when Retry-After is absent; clamped to [1.0, 60.0]
     *
     * @throws ApiException     when the call fails with a non-retryable error or the retry budget is exhausted
     * @throws ConnectException when connection errors persist past the retry budget
     * @return CreateNotificationWithRetryResult the response plus the replay flag
     */
    public static function createNotificationWithRetry($api, $notification, $maxRetries = self::DEFAULT_MAX_RETRIES, $baseDelay = self::DEFAULT_BASE_DELAY)
    {
        if (!$notification->getIdempotencyKey()) {
            $notification->setIdempotencyKey(self::uuidV4());
        }

        // Clamp the backoff base so a stray value can neither hammer the API
        // (too small) nor stall the caller for an unbounded stretch (too large).
        $baseDelay = min(self::MAX_BASE_DELAY, max(self::MIN_BASE_DELAY, (float) $baseDelay));

        $attempt = 0;
        while (true) {
            try {
                list($data, $_status, $headers) = $api->createNotificationWithHttpInfo($notification);
                return new CreateNotificationWithRetryResult($data, self::isReplayed($headers));
            } catch (ApiException $e) {
                // Code 0 means the request never received a response
                // (connection failure surfaced through RequestException).
                $retryable = $e->getCode() === 0 || in_array($e->getCode(), self::$retryableStatuses, true);
                if (!$retryable || $attempt >= $maxRetries) {
                    throw $e;
                }
                $delay = self::retryDelay($e->getResponseHeaders(), $attempt, $baseDelay);
            } catch (ConnectException $e) {
                if ($attempt >= $maxRetries) {
                    throw $e;
                }
                $delay = $baseDelay * (2 ** $attempt);
            }

            if ($delay > 0) {
                usleep((int) round($delay * 1000000));
            }
            $attempt++;
        }
    }

    private static function headerValue($headers, $name)
    {
        if (!is_array($headers)) {
            return null;
        }
        foreach ($headers as $key => $values) {
            if (strcasecmp((string) $key, $name) === 0) {
                if (is_array($values)) {
                    return count($values) > 0 ? $values[0] : null;
                }
                return $values;
            }
        }
        return null;
    }

    private static function isReplayed($headers)
    {
        $value = self::headerValue($headers, 'Idempotent-Replayed');
        return $value !== null && strcasecmp(trim((string) $value), 'true') === 0;
    }

    private static function retryDelay($headers, $attempt, $baseDelay)
    {
        $retryAfter = self::headerValue($headers, 'Retry-After');
        if ($retryAfter !== null && is_numeric(trim((string) $retryAfter))) {
            return max((float) trim((string) $retryAfter), 0.0);
        }
        return $baseDelay * (2 ** $attempt);
    }

    private static function uuidV4()
    {
        $bytes = random_bytes(16);
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x40);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));
    }
}
