# OneSignal

A powerful way to send personalized messages at scale and build effective customer engagement strategies. Learn more at onesignal.com

For more information, please visit [https://onesignal.com](https://onesignal.com).

- API version: 5.3.0
- Package version: 5.3.0

## Requirements

PHP 7.3 and later.

## Installation

Add the following to `composer.json`:

```json
{
  "require": {
    "onesignal/onesignal-php-api": "^5.3"
  }
}
```

Then run `composer update`.

## Configuration

Every SDK requires authentication via API keys. Two key types are available:

- **REST API Key** — required for most endpoints (sending notifications, managing users, etc.). Found in your app's **Settings > Keys & IDs**.
- **Organization API Key** — only required for organization-level endpoints like creating or listing apps. Found in **Organization Settings**.

> **Warning:** Store your API keys in environment variables or a secrets manager. Never commit them to source control.

```php
use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;
use GuzzleHttp;

$config = Configuration::getDefaultConfiguration()
    ->setRestApiKeyToken('YOUR_REST_API_KEY')
    ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');

$client = new DefaultApi(
    new GuzzleHttp\Client(),
    $config
);
```

## Send a push notification

```php
use onesignal\client\model\Notification;
use onesignal\client\model\StringMap;

$content = new StringMap();
$content->setEn('Hello from OneSignal!');

$headings = new StringMap();
$headings->setEn('Push Notification');

$notification = new Notification();
$notification->setAppId('YOUR_APP_ID');
$notification->setContents($content);
$notification->setHeadings($headings);
$notification->setIncludedSegments(['Subscribed Users']);

$response = $client->createNotification($notification);
echo 'Notification ID: ' . $response->getId();
```

## Send an email

```php
$notification = new Notification();
$notification->setAppId('YOUR_APP_ID');
$notification->setEmailSubject('Important Update');
$notification->setEmailBody('<h1>Hello!</h1><p>This is an HTML email.</p>');
$notification->setIncludedSegments(['Subscribed Users']);
$notification->setChannelForExternalUserIds('email');

$response = $client->createNotification($notification);
```

## Send an SMS

```php
$content = new StringMap();
$content->setEn('Your SMS message content here');

$notification = new Notification();
$notification->setAppId('YOUR_APP_ID');
$notification->setContents($content);
$notification->setIncludedSegments(['Subscribed Users']);
$notification->setChannelForExternalUserIds('sms');
$notification->setSmsFrom('+15551234567');

$response = $client->createNotification($notification);
```

## Full API reference

The complete list of API endpoints and their parameters is available in the [DefaultApi documentation](https://github.com/OneSignal/onesignal-php-api/blob/main/docs/Api/DefaultApi.md).

For the underlying REST API, see the [OneSignal API reference](https://documentation.onesignal.com/reference).
