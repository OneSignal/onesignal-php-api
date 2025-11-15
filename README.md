# OneSignal

A powerful way to send personalized messages at scale and build effective customer engagement strategies. Learn more at onesignal.com

For more information, please visit [https://onesignal.com](https://onesignal.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/OneSignal/onesignal-php-api.git"
    }
  ],
  "require": {
    "onesignal/onesignal-php-api": "*@dev"
  }
}
```

Then run `composer update`


## Usage examples
### Imports
```php
use DateTime;
use onesignal\client\api\DefaultApi;
use onesignal\client\Configuration;
use onesignal\client\model\GetNotificationRequestBody;
use onesignal\client\model\Notification;
use onesignal\client\model\StringMap;
use onesignal\client\model\Player;
use onesignal\client\model\UpdatePlayerTagsRequestBody;
use onesignal\client\model\ExportPlayersRequestBody;
use onesignal\client\model\Segment;
use onesignal\client\model\FilterExpressions;
use PHPUnit\Framework\TestCase;
use GuzzleHttp;
```

### Constants
```php
const APP_ID = '<YOUR_APP_ID>';
const REST_API_KEY_TOKEN = '<YOUR_REST_API_KEY>'; // App REST API key required for most endpoints
const ORGANIZATION_API_KEY_TOKEN = '<YOUR_ORGANIZATION_API_KEY>'; // Organization key is only required for creating new apps and other top-level endpoints
```

### Configure authorization
```php
$config = Configuration::getDefaultConfiguration()
    ->setAppKeyToken(REST_API_KEY_TOKEN)
    ->setOrganizationApiKeyToken(ORGANIZATION_API_KEY_TOKEN);

$apiInstance = new DefaultApi(
    new GuzzleHttp\Client(),
    $config
);
```

## Notifications
### Creating a notification model
```php
function createNotification($enContent): Notification {
    $content = new StringMap();
    $content->setEn($enContent);

    $notification = new Notification();
    $notification->setAppId(APP_ID);
    $notification->setContents($content);
    $notification->setIncludedSegments(['Subscribed Users']);

    return $notification;
}
```

### Sending a notification immediately
```php
$notification = createNotification('PHP Test notification');

$result = $apiInstance->createNotification($notification);
print_r($result);
```

### Scheduling a notification to be sent in 24 hours
```php
$notification = self::createNotification('PHP Test scheduled notification');
$dt = new DateTime();
$dt->modify('+1 day');
$notification->setSendAfter($dt);

$scheduledNotification = $apiInstance->createNotification($notification);
print_r($scheduledNotification);
```

### Sending a notification using Filters
Send this notification only to the users that have not spent any USD on IAP.
```php
$notification = createNotification('PHP Test filtered notification');
$filter1 = new Filter();
$filter1->setField('amount_spent');
$filter1->setRelation('=');
$filter1->setValue('0');
$notification->setFilters([$filter1]);
$result = $apiInstance->createNotification($notification);
print_r($result);
```

### Sending a notification immediately
```php
$notification = createNotification('PHP Test notification');

$result = $apiInstance->createNotification($notification);
print_r($result);
```

### Retrieving a notification
```php
$scheduledNotification = $apiInstance->getNotification(APP_ID, $scheduledNotification->getId());
print_r($scheduledNotification);
```

### Listing notifications by application ID
```php
$getResult = $apiInstance->getNotifications(APP_ID);
print_r($getResult->getNotifications());
```

### Getting notification history
```php
$requestBody = new GetNotificationRequestBody();
$requestBody
    ->setAppId(APP_ID)
    ->setEvents('sent');

$getResult = $apiInstance->getNotificationHistory($scheduledNotification->getId(), $requestBody);
print_r($getResult->getSuccess());
```

## Players
### Creating a new Player model
```php
function createPlayerModel($playerId): Player {
    $player = new Player();

    $player->setAppId(APP_ID);
    $player->setIdentifier($playerId);
    $player->setDeviceType(1);

    return $player;
}
```

### Creating a Player
```php
$player = createPlayerModel('php_test_player_id');
$createPlayerResult = $apiInstance->createPlayer($player);
print_r($createPlayerResult);
```

### Getting a Player
```php
$getPlayerResult = $apiInstance->getPlayer(APP_ID, 'php_test_player_id');
print_r($getPlayerResult);
```

### Getting a list of Players
```php
$limit = 10;
$getPlayersResult = $apiInstance->getPlayers(APP_ID, $limit);
print_r($getPlayersResult->getPlayers());
```

### Deleting a player
```php
$deletePlayerResult = $apiInstance->deletePlayer(APP_ID, 'php_test_player_id');
print_r($deletePlayerResult->getSuccess());
```

### Exporting players into CSV-spreadsheet
```php
$exportPlayersRequestBody = new ExportPlayersRequestBody();
$exportPlayersRequestBody->setExtraFields([]);
$exportPlayersRequestBody->setSegmentName('');

$exportPlayersResult =  $apiInstance->exportPlayers(APP_ID, $exportPlayersRequestBody);
print_r($exportPlayersResult->getCsvFileUrl());
```

## Segments
### Creating a segment
```php
// Settings up the filter. Filters determine a segment.
$filterExpressions = new FilterExpressions();
$filterExpressions->setField('session_count');
$filterExpressions->setRelation('>');
$filterExpressions->setValue('1');
```

### Setting up the segment itself
```php
$segment = new Segment();
$segment->setName('test_segment_name');
$segment->setFilters([$filterExpressions]);

$createSegmentResponse = $apiInstance->createSegments(APP_ID, $segment);
print_r($createSegmentResponse);
```

### Deleting a segment
```php
$deleteSegmentResponse = $apiInstance->deleteSegments(APP_ID, $createSegmentResponse->getId());
print_r($deleteSegmentResponse->getSuccess());
```

## Working with Apps
### Getting an app
```php
$getAppResponse = $apiInstance->getApp(APP_ID);
print_r($getAppResponse);
```

### Getting a list of apps
```php
$getAppsResponse = $apiInstance->getApps();
print_r($getAppsResponse);
```

### Updating an app
```php
$getAppResponse = $apiInstance->getApp(APP_ID);
$getAppResponse->setName('php_test_app_name');
$updateAppResponse = $apiInstance->updateApp(APP_ID, $getAppResponse);
print_r($updateAppResponse);
```

### Outcomes
```php
$outcomeNames = "os__session_duration.count,os__click.count";
$outcomeTimeRange = "1d";
$outcomePlatforms = "5";
$outcomeAttribution = "direct";
$outcomesResponse = $apiInstance->getOutcomes(APP_ID, $outcomeNames, null, $outcomeTimeRange, $outcomePlatforms, $outcomeAttribution);
print_r($outcomesResponse->getOutcomes());
```

## Live Activities
### Begin Live Activity
```php
$activityId = "activity_id_example";
$beginLiveActivityRequest = new BeginLiveActivityRequest(array(
    'push_token' => "push_token_example",
    'subscription_id' => "player_id_example"
));

self::$apiInstance->beginLiveActivity(APP_ID, $activityId, $beginLiveActivityRequest);
```

### Update Live Activity
```php
$activityId = "activity_id_example";
$updateLiveActivityRequest = new UpdateLiveActivityRequest(array(
    'event' => 'update',
    'name' => 'contents',
    'event_updates' => array('data' => 'test')
));

self::$apiInstance->updateLiveActivity(APP_ID, $activityId, $updateLiveActivityRequest);
```

### End Live Activity
```php
$activityId = "activity_id_example";
$subscriptionId = "player_id_example";
self::$apiInstance->endLiveActivity(APP_ID, $activityId, $subscriptionId);
```

## Users
### Creating a user
```php
// Create user model
$user = new User();
$aliasLabel = '<ALIAS_LABEL>';
$aliasId = '<ALIAS_ID>';
$pushToken = '<DEVICE_PUSH_TOKEN>';

$subscriptionObject = new SubscriptionObject();
$subscriptionObject->setType('iOSPush');
$subscriptionObject->setToken($pushToken);

$user->setIdentity(array($aliasLabel => $aliasId));
$user->setSubscriptions([$subscriptionObject]);

// Send model to API
$createUserResponse = self::$apiInstance->createUser(APP_ID, $user);
```

### Fetch user by an alias
```php
$fetchUserResponse = self::$apiInstance->fetchUser(APP_ID, $aliasLabel, $aliasId);
```

### Update user
```php
$updateUserRequest = new UpdateUserRequest(array(
    'properties' => array(
        'language' => 'fr'
    ))
);

$updateUserResponse = self::$apiInstance->updateUser(APP_ID, $aliasLabel, $aliasId, $updateUserRequest);
```

### Delete user
```php
self::$apiInstance->deleteUser(APP_ID, $aliasLabel, $aliasId);
```

### Create subscription
```php
$createSubscriptionRequestBody = new CreateSubscriptionRequestBody();
$subscriptionObject = new SubscriptionObject();
$subscriptionObject->setType('AndroidPush');
$subscriptionObject->setToken('DEVICE_PUSH_TOKEN');
$createSubscriptionRequestBody->setSubscription($subscriptionObject);

$createSubscriptionResponse =
    self::$apiInstance->createSubscription(APP_ID, $aliasLabel, $aliasId, $createSubscriptionRequestBody);
```

### Update subscription
```php
$updateSubscriptionRequestBody = new UpdateSubscriptionRequestBody();
$subscriptionObject = new SubscriptionObject();
$subscriptionObject->setType('AndroidPush');
$subscriptionObject->setToken('DEVICE_PUSH_TOKEN'
$updateSubscriptionRequestBody->setSubscription($subscriptionObject);

self::$apiInstance->updateSubscription(APP_ID, $subscriptionId, $updateSubscriptionRequestBody);
```

### Delete subscription
```php
self::$apiInstance->deleteSubscription(APP_ID, '<SUBSCRIPTION_ID>');
```
### Delete Alias
```php
self::$apiInstance->deleteAlias(APP_ID, '<ALIAS_LABEL>', '<ALIAS_ID>', '<ALIAS_LABEL_TO_DELETE>');
```

### Fetch aliases by subscription id
```php
$fetchAliasesResponse = self::$apiInstance->fetchAliases(APP_ID, '<SUBSCRIPTION_ID>');
```

### Fetch aliases by another alias
```php
$fetchAliasesResponse = self::$apiInstance->fetchUserIdentity(APP_ID, '<ALIAS_LABEL>', '<ALIAS_ID>');
```

### Identify user by subscription id
```php
$userIdentityRequestBody = new UserIdentityRequestBody();

$userIdentityRequestBody->setIdentity(array(
    '<NEW_ALIAS_LABEL>' => '<NEW_ALIAS_ID>'
));

// Act
$fetchAliasesResponse = self::$apiInstance->identifyUserBySubscriptionId(
    APP_ID, '<SUBSCRIPTION_ID>', $userIdentityRequestBody);
```

### Identify user by another alias
```php
$userIdentityRequestBody = new UserIdentityRequestBody();

$userIdentityRequestBody->setIdentity(array(
    '<NEW_ALIAS_LABEL>' => '<NEW_ALIAS_ID>'
));

// Act
$fetchAliasesResponse = self::$apiInstance->identifyUserByAlias(
    APP_ID, '<ALIAS_LABEL>', '<ALIAS_ID>', $userIdentityRequestBody);
```


### Transfer subscription to another user
```php
$transferSubscriptionRequestBody = new TransferSubscriptionRequestBody();
$transferSubscriptionRequestBody->setIdentity(array('<USER_FROM_ALIAS_LABEL>' => '<USER_FROM_ALIAS_ID>'));

// Act
$transferSubscriptionResponse = self::$apiInstance->transferSubscription(
    APP_ID, '<USER_TO_SUBSCRIPTION_ID>', $transferSubscriptionRequestBody);
```

### Fetch in app messages
```php
$getEligibleIamsResponse = self::$apiInstance->getEligibleIams(APP_ID, '<SUBSCRIPTION_ID>');
```

## API Endpoints

All URIs are relative to *https://api.onesignal.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**cancelNotification**](docs/Api/DefaultApi.md#cancelnotification) | **DELETE** /notifications/{notification_id} | Stop a scheduled or currently outgoing notification
*DefaultApi* | [**copyTemplateToApp**](docs/Api/DefaultApi.md#copytemplatetoapp) | **POST** /templates/{template_id}/copy_to_app | Copy template to another app
*DefaultApi* | [**createAlias**](docs/Api/DefaultApi.md#createalias) | **PATCH** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity | 
*DefaultApi* | [**createAliasBySubscription**](docs/Api/DefaultApi.md#createaliasbysubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id}/user/identity | 
*DefaultApi* | [**createApiKey**](docs/Api/DefaultApi.md#createapikey) | **POST** /apps/{app_id}/auth/tokens | Create API key
*DefaultApi* | [**createApp**](docs/Api/DefaultApi.md#createapp) | **POST** /apps | Create an app
*DefaultApi* | [**createCustomEvents**](docs/Api/DefaultApi.md#createcustomevents) | **POST** /apps/{app_id}/integrations/custom_events | Create custom events
*DefaultApi* | [**createNotification**](docs/Api/DefaultApi.md#createnotification) | **POST** /notifications | Create notification
*DefaultApi* | [**createSegment**](docs/Api/DefaultApi.md#createsegment) | **POST** /apps/{app_id}/segments | Create Segment
*DefaultApi* | [**createSubscription**](docs/Api/DefaultApi.md#createsubscription) | **POST** /apps/{app_id}/users/by/{alias_label}/{alias_id}/subscriptions | 
*DefaultApi* | [**createTemplate**](docs/Api/DefaultApi.md#createtemplate) | **POST** /templates | Create template
*DefaultApi* | [**createUser**](docs/Api/DefaultApi.md#createuser) | **POST** /apps/{app_id}/users | 
*DefaultApi* | [**deleteAlias**](docs/Api/DefaultApi.md#deletealias) | **DELETE** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity/{alias_label_to_delete} | 
*DefaultApi* | [**deleteApiKey**](docs/Api/DefaultApi.md#deleteapikey) | **DELETE** /apps/{app_id}/auth/tokens/{token_id} | Delete API key
*DefaultApi* | [**deleteSegment**](docs/Api/DefaultApi.md#deletesegment) | **DELETE** /apps/{app_id}/segments/{segment_id} | Delete Segment
*DefaultApi* | [**deleteSubscription**](docs/Api/DefaultApi.md#deletesubscription) | **DELETE** /apps/{app_id}/subscriptions/{subscription_id} | 
*DefaultApi* | [**deleteTemplate**](docs/Api/DefaultApi.md#deletetemplate) | **DELETE** /templates/{template_id} | Delete template
*DefaultApi* | [**deleteUser**](docs/Api/DefaultApi.md#deleteuser) | **DELETE** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 
*DefaultApi* | [**exportEvents**](docs/Api/DefaultApi.md#exportevents) | **POST** /notifications/{notification_id}/export_events?app_id&#x3D;{app_id} | Export CSV of Events
*DefaultApi* | [**exportSubscriptions**](docs/Api/DefaultApi.md#exportsubscriptions) | **POST** /players/csv_export?app_id&#x3D;{app_id} | Export CSV of Subscriptions
*DefaultApi* | [**getAliases**](docs/Api/DefaultApi.md#getaliases) | **GET** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity | 
*DefaultApi* | [**getAliasesBySubscription**](docs/Api/DefaultApi.md#getaliasesbysubscription) | **GET** /apps/{app_id}/subscriptions/{subscription_id}/user/identity | 
*DefaultApi* | [**getApp**](docs/Api/DefaultApi.md#getapp) | **GET** /apps/{app_id} | View an app
*DefaultApi* | [**getApps**](docs/Api/DefaultApi.md#getapps) | **GET** /apps | View apps
*DefaultApi* | [**getNotification**](docs/Api/DefaultApi.md#getnotification) | **GET** /notifications/{notification_id} | View notification
*DefaultApi* | [**getNotificationHistory**](docs/Api/DefaultApi.md#getnotificationhistory) | **POST** /notifications/{notification_id}/history | Notification History
*DefaultApi* | [**getNotifications**](docs/Api/DefaultApi.md#getnotifications) | **GET** /notifications | View notifications
*DefaultApi* | [**getOutcomes**](docs/Api/DefaultApi.md#getoutcomes) | **GET** /apps/{app_id}/outcomes | View Outcomes
*DefaultApi* | [**getSegments**](docs/Api/DefaultApi.md#getsegments) | **GET** /apps/{app_id}/segments | Get Segments
*DefaultApi* | [**getUser**](docs/Api/DefaultApi.md#getuser) | **GET** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 
*DefaultApi* | [**rotateApiKey**](docs/Api/DefaultApi.md#rotateapikey) | **POST** /apps/{app_id}/auth/tokens/{token_id}/rotate | Rotate API key
*DefaultApi* | [**startLiveActivity**](docs/Api/DefaultApi.md#startliveactivity) | **POST** /apps/{app_id}/activities/activity/{activity_type} | Start Live Activity
*DefaultApi* | [**transferSubscription**](docs/Api/DefaultApi.md#transfersubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id}/owner | 
*DefaultApi* | [**unsubscribeEmailWithToken**](docs/Api/DefaultApi.md#unsubscribeemailwithtoken) | **POST** /apps/{app_id}/notifications/{notification_id}/unsubscribe | Unsubscribe with token
*DefaultApi* | [**updateApiKey**](docs/Api/DefaultApi.md#updateapikey) | **PATCH** /apps/{app_id}/auth/tokens/{token_id} | Update API key
*DefaultApi* | [**updateApp**](docs/Api/DefaultApi.md#updateapp) | **PUT** /apps/{app_id} | Update an app
*DefaultApi* | [**updateLiveActivity**](docs/Api/DefaultApi.md#updateliveactivity) | **POST** /apps/{app_id}/live_activities/{activity_id}/notifications | Update a Live Activity via Push
*DefaultApi* | [**updateSubscription**](docs/Api/DefaultApi.md#updatesubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id} | 
*DefaultApi* | [**updateSubscriptionByToken**](docs/Api/DefaultApi.md#updatesubscriptionbytoken) | **PATCH** /apps/{app_id}/subscriptions_by_token/{token_type}/{token} | Update subscription by token
*DefaultApi* | [**updateTemplate**](docs/Api/DefaultApi.md#updatetemplate) | **PATCH** /templates/{template_id} | Update template
*DefaultApi* | [**updateUser**](docs/Api/DefaultApi.md#updateuser) | **PATCH** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 
*DefaultApi* | [**viewApiKeys**](docs/Api/DefaultApi.md#viewapikeys) | **GET** /apps/{app_id}/auth/tokens | View API keys
*DefaultApi* | [**viewTemplate**](docs/Api/DefaultApi.md#viewtemplate) | **GET** /templates/{template_id} | View template
*DefaultApi* | [**viewTemplates**](docs/Api/DefaultApi.md#viewtemplates) | **GET** /templates | View templates

## Models

- [ApiKeyToken](docs/Model/ApiKeyToken.md)
- [ApiKeyTokensListResponse](docs/Model/ApiKeyTokensListResponse.md)
- [App](docs/Model/App.md)
- [BasicNotification](docs/Model/BasicNotification.md)
- [BasicNotificationAllOf](docs/Model/BasicNotificationAllOf.md)
- [BasicNotificationAllOfAndroidBackgroundLayout](docs/Model/BasicNotificationAllOfAndroidBackgroundLayout.md)
- [Button](docs/Model/Button.md)
- [CopyTemplateRequest](docs/Model/CopyTemplateRequest.md)
- [CreateApiKeyRequest](docs/Model/CreateApiKeyRequest.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateNotificationSuccessResponse](docs/Model/CreateNotificationSuccessResponse.md)
- [CreateSegmentConflictResponse](docs/Model/CreateSegmentConflictResponse.md)
- [CreateSegmentSuccessResponse](docs/Model/CreateSegmentSuccessResponse.md)
- [CreateTemplateRequest](docs/Model/CreateTemplateRequest.md)
- [CreateUserConflictResponse](docs/Model/CreateUserConflictResponse.md)
- [CreateUserConflictResponseErrorsInner](docs/Model/CreateUserConflictResponseErrorsInner.md)
- [CreateUserConflictResponseErrorsItemsMeta](docs/Model/CreateUserConflictResponseErrorsItemsMeta.md)
- [CustomEvent](docs/Model/CustomEvent.md)
- [CustomEventsRequest](docs/Model/CustomEventsRequest.md)
- [DeliveryData](docs/Model/DeliveryData.md)
- [ExportEventsSuccessResponse](docs/Model/ExportEventsSuccessResponse.md)
- [ExportSubscriptionsRequestBody](docs/Model/ExportSubscriptionsRequestBody.md)
- [ExportSubscriptionsSuccessResponse](docs/Model/ExportSubscriptionsSuccessResponse.md)
- [Filter](docs/Model/Filter.md)
- [FilterExpression](docs/Model/FilterExpression.md)
- [GenericError](docs/Model/GenericError.md)
- [GenericSuccessBoolResponse](docs/Model/GenericSuccessBoolResponse.md)
- [GetNotificationHistoryRequestBody](docs/Model/GetNotificationHistoryRequestBody.md)
- [GetSegmentsSuccessResponse](docs/Model/GetSegmentsSuccessResponse.md)
- [LanguageStringMap](docs/Model/LanguageStringMap.md)
- [Notification](docs/Model/Notification.md)
- [NotificationAllOf](docs/Model/NotificationAllOf.md)
- [NotificationHistorySuccessResponse](docs/Model/NotificationHistorySuccessResponse.md)
- [NotificationSlice](docs/Model/NotificationSlice.md)
- [NotificationTarget](docs/Model/NotificationTarget.md)
- [NotificationWithMeta](docs/Model/NotificationWithMeta.md)
- [NotificationWithMetaAllOf](docs/Model/NotificationWithMetaAllOf.md)
- [Operator](docs/Model/Operator.md)
- [OutcomeData](docs/Model/OutcomeData.md)
- [OutcomesData](docs/Model/OutcomesData.md)
- [PlatformDeliveryData](docs/Model/PlatformDeliveryData.md)
- [PlatformDeliveryDataEmailAllOf](docs/Model/PlatformDeliveryDataEmailAllOf.md)
- [PlatformDeliveryDataSmsAllOf](docs/Model/PlatformDeliveryDataSmsAllOf.md)
- [PropertiesBody](docs/Model/PropertiesBody.md)
- [PropertiesDeltas](docs/Model/PropertiesDeltas.md)
- [PropertiesObject](docs/Model/PropertiesObject.md)
- [Purchase](docs/Model/Purchase.md)
- [RateLimitError](docs/Model/RateLimitError.md)
- [Segment](docs/Model/Segment.md)
- [SegmentData](docs/Model/SegmentData.md)
- [SegmentNotificationTarget](docs/Model/SegmentNotificationTarget.md)
- [StartLiveActivityRequest](docs/Model/StartLiveActivityRequest.md)
- [StartLiveActivitySuccessResponse](docs/Model/StartLiveActivitySuccessResponse.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionBody](docs/Model/SubscriptionBody.md)
- [SubscriptionNotificationTarget](docs/Model/SubscriptionNotificationTarget.md)
- [TemplateResource](docs/Model/TemplateResource.md)
- [TemplatesListResponse](docs/Model/TemplatesListResponse.md)
- [TransferSubscriptionRequestBody](docs/Model/TransferSubscriptionRequestBody.md)
- [UpdateApiKeyRequest](docs/Model/UpdateApiKeyRequest.md)
- [UpdateLiveActivityRequest](docs/Model/UpdateLiveActivityRequest.md)
- [UpdateLiveActivitySuccessResponse](docs/Model/UpdateLiveActivitySuccessResponse.md)
- [UpdateTemplateRequest](docs/Model/UpdateTemplateRequest.md)
- [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
- [User](docs/Model/User.md)
- [UserIdentityBody](docs/Model/UserIdentityBody.md)
- [WebButton](docs/Model/WebButton.md)

## Authorization
All the OneSignal endpoints require either an *app_key* or *user_key* tokens for authorization. It is recommended to
set up both of those keys during the initial config initialization so that you don't need to worry about which endpoint
requires app_key and which user_key. You can get the value of these keys from your
[app dashboard]([https://app.onesignal.com/apps]) and [user settings](https://app.onesignal.com/profile) pages.



### organization_api_key

- **Type**: Bearer authentication


### rest_api_key

- **Type**: Bearer authentication


## Author

devrel@onesignal.com


- API version: `5.3.0`
    - Package version: `5.3.0-beta1`
