<?php

namespace onesignal\client\helpers;

/**
 * Result of NotificationHelpers::createNotificationWithRetry: the create
 * response plus whether the server replayed a previously completed request
 * (Idempotent-Replayed response header).
 */
class CreateNotificationWithRetryResult
{
    /**
     * @var \onesignal\client\model\CreateNotificationSuccessResponse
     */
    private $response;

    /**
     * @var bool
     */
    private $wasReplayed;

    public function __construct($response, $wasReplayed)
    {
        $this->response = $response;
        $this->wasReplayed = $wasReplayed;
    }

    /**
     * @return \onesignal\client\model\CreateNotificationSuccessResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return bool
     */
    public function getWasReplayed()
    {
        return $this->wasReplayed;
    }
}
