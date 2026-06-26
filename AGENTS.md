# AGENTS.md — OneSignal PHP SDK

Integration guide for AI agents and LLMs using `onesignal/onesignal-php-api`, the OneSignal server SDK for PHP. Human-oriented docs are in the [README](./README.md).

## What this SDK does

Server-side access to the OneSignal REST API: send push / email / SMS, manage users, subscriptions, segments, templates and live activities, and administer apps & API keys.

- Composer package: `onesignal/onesignal-php-api`
- Repository: https://github.com/OneSignal/onesignal-php-api

## Install

```sh
composer require onesignal/onesignal-php-api
```

## Authentication — two key types

OneSignal uses two bearer credentials; each endpoint requires a specific one:

- **REST API key** — used by almost every endpoint (notifications, users, subscriptions, segments, templates, live activities, custom events). Found in **App Settings → Keys & IDs**.
- **Organization API key** — required *only* for organization-level endpoints: app management (list / create / get / update apps), API-key management (view / create / update / rotate / delete API keys), and copying a template to another app. Found in **Organization Settings**.

Set both on the configuration; the SDK sends the correct credential per endpoint. Never hard-code keys — read them from environment variables or a secrets manager.

```php
use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;
use GuzzleHttp;

$config = Configuration::getDefaultConfiguration()
    ->setRestApiKeyToken(getenv('ONESIGNAL_REST_API_KEY'))
    ->setOrganizationApiKeyToken(getenv('ONESIGNAL_ORGANIZATION_API_KEY'));

$client = new DefaultApi(new GuzzleHttp\Client(), $config);
```

## Calling convention

Methods take **positional arguments**. Build the model object and pass it directly — do **not** wrap arguments in a request/options object.

```php
$notification = new onesignal\client\Model\Notification();
$notification->setAppId('YOUR_APP_ID');
$contents = new onesignal\client\Model\LanguageStringMap();
$contents->setEn('Hello from OneSignal!');
$notification->setContents($contents);
$notification->setIncludeAliases(['external_id' => ['YOUR_USER_EXTERNAL_ID']]);
$notification->setTargetChannel('push');

$response = $client->createNotification($notification);
```

## Idempotent sends & retries

Set `idempotency_key` (a UUID) so a create-notification request can be safely retried — the server returns the original result instead of sending twice. The `NotificationHelpers::createNotificationWithRetry` helper handles this for you: it generates an `idempotency_key` when absent, retries `429` / `503` / transport errors with the **same** key (honoring `Retry-After`), and reports via `getWasReplayed()` whether the server answered from a previously completed request.

```php
use onesignal\client\helpers\NotificationHelpers;

$result = NotificationHelpers::createNotificationWithRetry($client, $notification, 5, 1.0);
echo 'id: ', $result->getResponse()->getId(), ' replayed: ', $result->getWasReplayed() ? 'true' : 'false', PHP_EOL;
```

> The notification-level `external_id` field is the **deprecated** idempotency mechanism — prefer `idempotency_key`. Don't confuse it with the `external_id` **alias label** (under `include_aliases`) used to target users.

## Full API reference

- [DefaultApi.md](https://github.com/OneSignal/onesignal-php-api/blob/main/docs/Api/DefaultApi.md) — every endpoint, parameter, and model, with runnable examples.
- [OneSignal REST API reference](https://documentation.onesignal.com/reference)
