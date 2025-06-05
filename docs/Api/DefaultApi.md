# onesignal\client\DefaultApi

All URIs are relative to https://api.onesignal.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelNotification()**](DefaultApi.md#cancelNotification) | **DELETE** /notifications/{notification_id} | Stop a scheduled or currently outgoing notification
[**createAlias()**](DefaultApi.md#createAlias) | **PATCH** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity | 
[**createAliasBySubscription()**](DefaultApi.md#createAliasBySubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id}/user/identity | 
[**createApp()**](DefaultApi.md#createApp) | **POST** /apps | Create an app
[**createNotification()**](DefaultApi.md#createNotification) | **POST** /notifications | Create notification
[**createSegment()**](DefaultApi.md#createSegment) | **POST** /apps/{app_id}/segments | Create Segment
[**createSubscription()**](DefaultApi.md#createSubscription) | **POST** /apps/{app_id}/users/by/{alias_label}/{alias_id}/subscriptions | 
[**createUser()**](DefaultApi.md#createUser) | **POST** /apps/{app_id}/users | 
[**deleteAlias()**](DefaultApi.md#deleteAlias) | **DELETE** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity/{alias_label_to_delete} | 
[**deleteSegment()**](DefaultApi.md#deleteSegment) | **DELETE** /apps/{app_id}/segments/{segment_id} | Delete Segment
[**deleteSubscription()**](DefaultApi.md#deleteSubscription) | **DELETE** /apps/{app_id}/subscriptions/{subscription_id} | 
[**deleteUser()**](DefaultApi.md#deleteUser) | **DELETE** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 
[**exportEvents()**](DefaultApi.md#exportEvents) | **POST** /notifications/{notification_id}/export_events?app_id&#x3D;{app_id} | Export CSV of Events
[**exportSubscriptions()**](DefaultApi.md#exportSubscriptions) | **POST** /players/csv_export?app_id&#x3D;{app_id} | Export CSV of Subscriptions
[**getAliases()**](DefaultApi.md#getAliases) | **GET** /apps/{app_id}/users/by/{alias_label}/{alias_id}/identity | 
[**getAliasesBySubscription()**](DefaultApi.md#getAliasesBySubscription) | **GET** /apps/{app_id}/subscriptions/{subscription_id}/user/identity | 
[**getApp()**](DefaultApi.md#getApp) | **GET** /apps/{app_id} | View an app
[**getApps()**](DefaultApi.md#getApps) | **GET** /apps | View apps
[**getNotification()**](DefaultApi.md#getNotification) | **GET** /notifications/{notification_id} | View notification
[**getNotificationHistory()**](DefaultApi.md#getNotificationHistory) | **POST** /notifications/{notification_id}/history | Notification History
[**getNotifications()**](DefaultApi.md#getNotifications) | **GET** /notifications | View notifications
[**getOutcomes()**](DefaultApi.md#getOutcomes) | **GET** /apps/{app_id}/outcomes | View Outcomes
[**getSegments()**](DefaultApi.md#getSegments) | **GET** /apps/{app_id}/segments | Get Segments
[**getUser()**](DefaultApi.md#getUser) | **GET** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 
[**transferSubscription()**](DefaultApi.md#transferSubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id}/owner | 
[**unsubscribeEmailWithToken()**](DefaultApi.md#unsubscribeEmailWithToken) | **POST** /apps/{app_id}/notifications/{notification_id}/unsubscribe | Unsubscribe with token
[**updateApp()**](DefaultApi.md#updateApp) | **PUT** /apps/{app_id} | Update an app
[**updateLiveActivity()**](DefaultApi.md#updateLiveActivity) | **POST** /apps/{app_id}/live_activities/{activity_id}/notifications | Update a Live Activity via Push
[**updateSubscription()**](DefaultApi.md#updateSubscription) | **PATCH** /apps/{app_id}/subscriptions/{subscription_id} | 
[**updateUser()**](DefaultApi.md#updateUser) | **PATCH** /apps/{app_id}/users/by/{alias_label}/{alias_id} | 


## `cancelNotification()`

```php
cancelNotification($app_id, $notification_id): \onesignal\client\model\GenericSuccessBoolResponse
```

Stop a scheduled or currently outgoing notification

Used to stop a scheduled or currently outgoing notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$notification_id = 'notification_id_example'; // string

try {
    $result = $apiInstance->cancelNotification($app_id, $notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **notification_id** | **string**|  |

### Return type

[**\onesignal\client\model\GenericSuccessBoolResponse**](../Model/GenericSuccessBoolResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAlias()`

```php
createAlias($app_id, $alias_label, $alias_id, $user_identity_body): \onesignal\client\model\UserIdentityBody
```



Upserts one or more Aliases to an existing User identified by (:alias_label, :alias_id).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string
$user_identity_body = new \onesignal\client\model\UserIdentityBody(); // \onesignal\client\model\UserIdentityBody

try {
    $result = $apiInstance->createAlias($app_id, $alias_label, $alias_id, $user_identity_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |
 **user_identity_body** | [**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAliasBySubscription()`

```php
createAliasBySubscription($app_id, $subscription_id, $user_identity_body): \onesignal\client\model\UserIdentityBody
```



Upserts one or more Aliases for the User identified by :subscription_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$subscription_id = 'subscription_id_example'; // string
$user_identity_body = new \onesignal\client\model\UserIdentityBody(); // \onesignal\client\model\UserIdentityBody

try {
    $result = $apiInstance->createAliasBySubscription($app_id, $subscription_id, $user_identity_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAliasBySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |
 **user_identity_body** | [**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApp()`

```php
createApp($app): \onesignal\client\model\App
```

Create an app

Creates a new OneSignal app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: organization_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = new \onesignal\client\model\App(); // \onesignal\client\model\App

try {
    $result = $apiInstance->createApp($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | [**\onesignal\client\model\App**](../Model/App.md)|  |

### Return type

[**\onesignal\client\model\App**](../Model/App.md)

### Authorization

[organization_api_key](../../README.md#organization_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNotification()`

```php
createNotification($notification): \onesignal\client\model\CreateNotificationSuccessResponse
```

Create notification

Sends notifications to your users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification = new \onesignal\client\model\Notification(); // \onesignal\client\model\Notification

try {
    $result = $apiInstance->createNotification($notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | [**\onesignal\client\model\Notification**](../Model/Notification.md)|  |

### Return type

[**\onesignal\client\model\CreateNotificationSuccessResponse**](../Model/CreateNotificationSuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSegment()`

```php
createSegment($app_id, $segment): \onesignal\client\model\CreateSegmentSuccessResponse
```

Create Segment

Create a segment visible and usable in the dashboard and API - Required: OneSignal Paid Plan The Create Segment method is used when you want your server to programmatically create a segment instead of using the OneSignal Dashboard UI. Just like creating Segments from the dashboard you can pass in filters with multiple \"AND\" or \"OR\" operator's. &#x1F6A7; Does Not Update Segments This endpoint will only create segments, it does not edit or update currently created Segments. You will need to use the Delete Segment endpoint and re-create it with this endpoint to edit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$segment = new \onesignal\client\model\Segment(); // \onesignal\client\model\Segment

try {
    $result = $apiInstance->createSegment($app_id, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **segment** | [**\onesignal\client\model\Segment**](../Model/Segment.md)|  | [optional]

### Return type

[**\onesignal\client\model\CreateSegmentSuccessResponse**](../Model/CreateSegmentSuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscription()`

```php
createSubscription($app_id, $alias_label, $alias_id, $subscription_body): \onesignal\client\model\SubscriptionBody
```



Creates a new Subscription under the User provided. Useful to add email addresses and SMS numbers to the User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string
$subscription_body = new \onesignal\client\model\SubscriptionBody(); // \onesignal\client\model\SubscriptionBody

try {
    $result = $apiInstance->createSubscription($app_id, $alias_label, $alias_id, $subscription_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |
 **subscription_body** | [**\onesignal\client\model\SubscriptionBody**](../Model/SubscriptionBody.md)|  |

### Return type

[**\onesignal\client\model\SubscriptionBody**](../Model/SubscriptionBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($app_id, $user): \onesignal\client\model\User
```



Creates a User, optionally Subscriptions owned by the User as well as Aliases. Aliases provided in the payload will be used to look up an existing User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$user = new \onesignal\client\model\User(); // \onesignal\client\model\User

try {
    $result = $apiInstance->createUser($app_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **user** | [**\onesignal\client\model\User**](../Model/User.md)|  |

### Return type

[**\onesignal\client\model\User**](../Model/User.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAlias()`

```php
deleteAlias($app_id, $alias_label, $alias_id, $alias_label_to_delete): \onesignal\client\model\UserIdentityBody
```



Deletes an alias by alias label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string
$alias_label_to_delete = 'alias_label_to_delete_example'; // string

try {
    $result = $apiInstance->deleteAlias($app_id, $alias_label, $alias_id, $alias_label_to_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |
 **alias_label_to_delete** | **string**|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSegment()`

```php
deleteSegment($app_id, $segment_id): \onesignal\client\model\GenericSuccessBoolResponse
```

Delete Segment

Delete a segment (not user devices) - Required: OneSignal Paid Plan You can delete a segment under your app by calling this API. You must provide an API key in the Authorization header that has admin access on the app. The segment_id can be found in the URL of the segment when viewing it in the dashboard.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$segment_id = 'segment_id_example'; // string | The segment_id can be found in the URL of the segment when viewing it in the dashboard.

try {
    $result = $apiInstance->deleteSegment($app_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **segment_id** | **string**| The segment_id can be found in the URL of the segment when viewing it in the dashboard. |

### Return type

[**\onesignal\client\model\GenericSuccessBoolResponse**](../Model/GenericSuccessBoolResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscription()`

```php
deleteSubscription($app_id, $subscription_id)
```



Deletes the Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$subscription_id = 'subscription_id_example'; // string

try {
    $apiInstance->deleteSubscription($app_id, $subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($app_id, $alias_label, $alias_id)
```



Removes the User identified by (:alias_label, :alias_id), and all Subscriptions and Aliases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string

try {
    $apiInstance->deleteUser($app_id, $alias_label, $alias_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportEvents()`

```php
exportEvents($notification_id, $app_id): \onesignal\client\model\ExportEventsSuccessResponse
```

Export CSV of Events

Generate a compressed CSV report of all of the events data for a notification. This will return a URL immediately upon success but it may take several minutes for the CSV to become available at that URL depending on the volume of data. Only one export can be in-progress per OneSignal account at any given time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = 'notification_id_example'; // string | The ID of the notification to export events from.
$app_id = 'app_id_example'; // string | The ID of the app that the notification belongs to.

try {
    $result = $apiInstance->exportEvents($notification_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->exportEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| The ID of the notification to export events from. |
 **app_id** | **string**| The ID of the app that the notification belongs to. |

### Return type

[**\onesignal\client\model\ExportEventsSuccessResponse**](../Model/ExportEventsSuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportSubscriptions()`

```php
exportSubscriptions($app_id, $export_subscriptions_request_body): \onesignal\client\model\ExportSubscriptionsSuccessResponse
```

Export CSV of Subscriptions

Generate a compressed CSV export of all of your current user data This method can be used to generate a compressed CSV export of all of your current user data. It is a much faster alternative than retrieving this data using the /players API endpoint. The file will be compressed using GZip. The file may take several minutes to generate depending on the number of users in your app. The URL generated will be available for 3 days and includes random v4 uuid as part of the resource name to be unguessable. &#x1F6A7; 403 Error Responses          You can test if it is complete by making a GET request to the csv_file_url value. This file may take time to generate depending on how many device records are being pulled. If the file is not ready, a 403 error will be returned. Otherwise the file itself will be returned. &#x1F6A7; Requires Authentication Key Requires your OneSignal App's REST API Key, available in Keys & IDs. &#x1F6A7; Concurrent Exports Only one concurrent export is allowed per OneSignal account. Please ensure you have successfully downloaded the .csv.gz file before exporting another app. CSV File Format: - Default Columns:   | Field | Details |   | --- | --- |   | id | OneSignal Player Id |   | identifier | Push Token |   | session_count | Number of times they visited the app or site   | language | Device language code |   | timezone | Number of seconds away from UTC. Example: -28800 |   | game_version | Version of your mobile app gathered from Android Studio versionCode in your App/build.gradle and iOS uses kCFBundleVersionKey in Xcode. |   | device_os | Device Operating System Version. Example: 80 = Chrome 80, 9 = Android 9 |   | device_type | Device Operating System Type |   | device_model | Device Hardware String Code. Example: Mobile Web Subscribers will have `Linux armv` |   | ad_id | Based on the Google Advertising Id for Android, identifierForVendor for iOS. OptedOut means user turned off Advertising tracking on the device. |   | tags | Current OneSignal Data Tags on the device. |   | last_active | Date and time the user last opened the mobile app or visited the site. |   | playtime | Total amount of time in seconds the user had the mobile app open. |   | amount_spent |  Mobile only - amount spent in USD on In-App Purchases. |    | created_at | Date and time the device record was created in OneSignal. Mobile - first time they opened the app with OneSignal SDK. Web - first time the user subscribed to the site. |   | invalid_identifier | t = unsubscribed, f = subscibed |   | badge_count | Current number of badges on the device | - Extra Columns:   | Field | Details |   | --- | --- |   | external_user_id | Your User Id set on the device |   | notification_types | Notification types |   | location | Location points (Latitude and Longitude) set on the device. |   | country | Country code |   | rooted | Android device rooted or not |   | ip | IP Address of the device if being tracked. See Handling Personal Data. |   | web_auth | Web Only authorization key. |   | web_p256 | Web Only p256 key. |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The app ID that you want to export devices from
$export_subscriptions_request_body = new \onesignal\client\model\ExportSubscriptionsRequestBody(); // \onesignal\client\model\ExportSubscriptionsRequestBody

try {
    $result = $apiInstance->exportSubscriptions($app_id, $export_subscriptions_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->exportSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app ID that you want to export devices from |
 **export_subscriptions_request_body** | [**\onesignal\client\model\ExportSubscriptionsRequestBody**](../Model/ExportSubscriptionsRequestBody.md)|  | [optional]

### Return type

[**\onesignal\client\model\ExportSubscriptionsSuccessResponse**](../Model/ExportSubscriptionsSuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAliases()`

```php
getAliases($app_id, $alias_label, $alias_id): \onesignal\client\model\UserIdentityBody
```



Lists all Aliases for the User identified by (:alias_label, :alias_id).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string

try {
    $result = $apiInstance->getAliases($app_id, $alias_label, $alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAliases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAliasesBySubscription()`

```php
getAliasesBySubscription($app_id, $subscription_id): \onesignal\client\model\UserIdentityBody
```



Lists all Aliases for the User identified by :subscription_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->getAliasesBySubscription($app_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAliasesBySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApp()`

```php
getApp($app_id): \onesignal\client\model\App
```

View an app

View the details of a single OneSignal app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: organization_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | An app id

try {
    $result = $apiInstance->getApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| An app id |

### Return type

[**\onesignal\client\model\App**](../Model/App.md)

### Authorization

[organization_api_key](../../README.md#organization_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApps()`

```php
getApps(): \onesignal\client\model\App[]
```

View apps

View the details of all of your current OneSignal apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: organization_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\onesignal\client\model\App[]**](../Model/App.md)

### Authorization

[organization_api_key](../../README.md#organization_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotification()`

```php
getNotification($app_id, $notification_id): \onesignal\client\model\NotificationWithMeta
```

View notification

View the details of a single notification and outcomes associated with it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$notification_id = 'notification_id_example'; // string

try {
    $result = $apiInstance->getNotification($app_id, $notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **notification_id** | **string**|  |

### Return type

[**\onesignal\client\model\NotificationWithMeta**](../Model/NotificationWithMeta.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationHistory()`

```php
getNotificationHistory($notification_id, $get_notification_history_request_body): \onesignal\client\model\NotificationHistorySuccessResponse
```

Notification History

-> View the devices sent a message - OneSignal Paid Plan Required This method will return all devices that were sent the given notification_id of an Email or Push Notification if used within 7 days of the date sent. After 7 days of the sending date, the message history data will be unavailable. After a successful response is received, the destination url may be polled until the file becomes available. Most exports are done in ~1-3 minutes, so setting a poll interval of 10 seconds should be adequate. For use cases that are not meant to be consumed by a script, an email will be sent to the supplied email address. &#x1F6A7; Requirements A OneSignal Paid Plan. Turn on Send History via OneSignal API in Settings -> Analytics. Cannot get data before this was turned on. Must be called within 7 days after sending the message. Messages targeting under 1000 recipients will not have \"sent\" events recorded, but will show \"clicked\" events. Requires your OneSignal App's REST API Key, available in Keys & IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = 'notification_id_example'; // string | The \"id\" of the message found in the Notification object
$get_notification_history_request_body = new \onesignal\client\model\GetNotificationHistoryRequestBody(); // \onesignal\client\model\GetNotificationHistoryRequestBody

try {
    $result = $apiInstance->getNotificationHistory($notification_id, $get_notification_history_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNotificationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| The \&quot;id\&quot; of the message found in the Notification object |
 **get_notification_history_request_body** | [**\onesignal\client\model\GetNotificationHistoryRequestBody**](../Model/GetNotificationHistoryRequestBody.md)|  |

### Return type

[**\onesignal\client\model\NotificationHistorySuccessResponse**](../Model/NotificationHistorySuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotifications()`

```php
getNotifications($app_id, $limit, $offset, $kind): \onesignal\client\model\NotificationSlice
```

View notifications

View the details of multiple notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The app ID that you want to view notifications from
$limit = 56; // int | How many notifications to return.  Max is 50.  Default is 50.
$offset = 56; // int | Page offset.  Default is 0.  Results are sorted by queued_at in descending order.  queued_at is a representation of the time that the notification was queued at.
$kind = 56; // int | Kind of notifications returned:   * unset - All notification types (default)   * `0` - Dashboard only   * `1` - API only   * `3` - Automated only

try {
    $result = $apiInstance->getNotifications($app_id, $limit, $offset, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app ID that you want to view notifications from |
 **limit** | **int**| How many notifications to return.  Max is 50.  Default is 50. | [optional]
 **offset** | **int**| Page offset.  Default is 0.  Results are sorted by queued_at in descending order.  queued_at is a representation of the time that the notification was queued at. | [optional]
 **kind** | **int**| Kind of notifications returned:   * unset - All notification types (default)   * &#x60;0&#x60; - Dashboard only   * &#x60;1&#x60; - API only   * &#x60;3&#x60; - Automated only | [optional]

### Return type

[**\onesignal\client\model\NotificationSlice**](../Model/NotificationSlice.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutcomes()`

```php
getOutcomes($app_id, $outcome_names, $outcome_names2, $outcome_time_range, $outcome_platforms, $outcome_attribution): \onesignal\client\model\OutcomesData
```

View Outcomes

View the details of all the outcomes associated with your app  &#x1F6A7; Requires Authentication Key Requires your OneSignal App's REST API Key, available in Keys & IDs.  &#x1F6A7; Outcome Data Limitations Outcomes are only accessible for around 30 days before deleted from our servers. You will need to export this data every month if you want to keep it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$outcome_names = 'outcome_names_example'; // string | Required Comma-separated list of names and the value (sum/count) for the returned outcome data. Note: Clicks only support count aggregation. For out-of-the-box OneSignal outcomes such as click and session duration, please use the \"os\" prefix with two underscores. For other outcomes, please use the name specified by the user. Example:os__session_duration.count,os__click.count,CustomOutcomeName.sum
$outcome_names2 = 'outcome_names_example'; // string | Optional If outcome names contain any commas, then please specify only one value at a time. Example: outcome_names[]=os__click.count&outcome_names[]=Sales, Purchase.count where \"Sales, Purchase\" is the custom outcomes with a comma in the name.
$outcome_time_range = 'outcome_time_range_example'; // string | Optional Time range for the returned data. The values can be 1h (for the last 1 hour data), 1d (for the last 1 day data), or 1mo (for the last 1 month data). Default is 1h if the parameter is omitted.
$outcome_platforms = 'outcome_platforms_example'; // string | Optional Platform id. Refer device's platform ids for values. Example: outcome_platform=0 for iOS outcome_platform=7,8 for Safari and Firefox Default is data from all platforms if the parameter is omitted.
$outcome_attribution = 'outcome_attribution_example'; // string | Optional Attribution type for the outcomes. The values can be direct or influenced or unattributed. Example: outcome_attribution=direct Default is total (returns direct+influenced+unattributed) if the parameter is omitted.

try {
    $result = $apiInstance->getOutcomes($app_id, $outcome_names, $outcome_names2, $outcome_time_range, $outcome_platforms, $outcome_attribution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOutcomes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **outcome_names** | **string**| Required Comma-separated list of names and the value (sum/count) for the returned outcome data. Note: Clicks only support count aggregation. For out-of-the-box OneSignal outcomes such as click and session duration, please use the \&quot;os\&quot; prefix with two underscores. For other outcomes, please use the name specified by the user. Example:os__session_duration.count,os__click.count,CustomOutcomeName.sum |
 **outcome_names2** | **string**| Optional If outcome names contain any commas, then please specify only one value at a time. Example: outcome_names[]&#x3D;os__click.count&amp;outcome_names[]&#x3D;Sales, Purchase.count where \&quot;Sales, Purchase\&quot; is the custom outcomes with a comma in the name. | [optional]
 **outcome_time_range** | **string**| Optional Time range for the returned data. The values can be 1h (for the last 1 hour data), 1d (for the last 1 day data), or 1mo (for the last 1 month data). Default is 1h if the parameter is omitted. | [optional]
 **outcome_platforms** | **string**| Optional Platform id. Refer device&#39;s platform ids for values. Example: outcome_platform&#x3D;0 for iOS outcome_platform&#x3D;7,8 for Safari and Firefox Default is data from all platforms if the parameter is omitted. | [optional]
 **outcome_attribution** | **string**| Optional Attribution type for the outcomes. The values can be direct or influenced or unattributed. Example: outcome_attribution&#x3D;direct Default is total (returns direct+influenced+unattributed) if the parameter is omitted. | [optional]

### Return type

[**\onesignal\client\model\OutcomesData**](../Model/OutcomesData.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegments()`

```php
getSegments($app_id, $offset, $limit): \onesignal\client\model\GetSegmentsSuccessResponse
```

Get Segments

Returns an array of segments from an app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$offset = 56; // int | Segments are listed in ascending order of created_at date. offset will omit that number of segments from the beginning of the list. Eg offset 5, will remove the 5 earliest created Segments.
$limit = 56; // int | The amount of Segments in the response. Maximum 300.

try {
    $result = $apiInstance->getSegments($app_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **offset** | **int**| Segments are listed in ascending order of created_at date. offset will omit that number of segments from the beginning of the list. Eg offset 5, will remove the 5 earliest created Segments. | [optional]
 **limit** | **int**| The amount of Segments in the response. Maximum 300. | [optional]

### Return type

[**\onesignal\client\model\GetSegmentsSuccessResponse**](../Model/GetSegmentsSuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($app_id, $alias_label, $alias_id): \onesignal\client\model\User
```



Returns the User’s properties, Aliases, and Subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string

try {
    $result = $apiInstance->getUser($app_id, $alias_label, $alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |

### Return type

[**\onesignal\client\model\User**](../Model/User.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferSubscription()`

```php
transferSubscription($app_id, $subscription_id, $transfer_subscription_request_body): \onesignal\client\model\UserIdentityBody
```



Transfers this Subscription to the User identified by the identity in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$subscription_id = 'subscription_id_example'; // string
$transfer_subscription_request_body = new \onesignal\client\model\TransferSubscriptionRequestBody(); // \onesignal\client\model\TransferSubscriptionRequestBody

try {
    $result = $apiInstance->transferSubscription($app_id, $subscription_id, $transfer_subscription_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transferSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |
 **transfer_subscription_request_body** | [**\onesignal\client\model\TransferSubscriptionRequestBody**](../Model/TransferSubscriptionRequestBody.md)|  |

### Return type

[**\onesignal\client\model\UserIdentityBody**](../Model/UserIdentityBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeEmailWithToken()`

```php
unsubscribeEmailWithToken($app_id, $notification_id, $token): \onesignal\client\model\GenericSuccessBoolResponse
```

Unsubscribe with token

Unsubscribe an email with a token when using your own custom email unsubscribe landing page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$notification_id = 'notification_id_example'; // string | The id of the message found in the creation notification POST response, View Notifications GET response, or URL within the Message Report.
$token = 'token_example'; // string | The unsubscribe token that is generated via liquid syntax in {{subscription.unsubscribe_token}} when personalizing an email.

try {
    $result = $apiInstance->unsubscribeEmailWithToken($app_id, $notification_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unsubscribeEmailWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **notification_id** | **string**| The id of the message found in the creation notification POST response, View Notifications GET response, or URL within the Message Report. |
 **token** | **string**| The unsubscribe token that is generated via liquid syntax in {{subscription.unsubscribe_token}} when personalizing an email. |

### Return type

[**\onesignal\client\model\GenericSuccessBoolResponse**](../Model/GenericSuccessBoolResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApp()`

```php
updateApp($app_id, $app): \onesignal\client\model\App
```

Update an app

Updates the name or configuration settings of an existing OneSignal app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: organization_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | An app id
$app = new \onesignal\client\model\App(); // \onesignal\client\model\App

try {
    $result = $apiInstance->updateApp($app_id, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| An app id |
 **app** | [**\onesignal\client\model\App**](../Model/App.md)|  |

### Return type

[**\onesignal\client\model\App**](../Model/App.md)

### Authorization

[organization_api_key](../../README.md#organization_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLiveActivity()`

```php
updateLiveActivity($app_id, $activity_id, $update_live_activity_request): \onesignal\client\model\UpdateLiveActivitySuccessResponse
```

Update a Live Activity via Push

Updates a specified live activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | The OneSignal App ID for your app.  Available in Keys & IDs.
$activity_id = 'activity_id_example'; // string | Live Activity record ID
$update_live_activity_request = new \onesignal\client\model\UpdateLiveActivityRequest(); // \onesignal\client\model\UpdateLiveActivityRequest

try {
    $result = $apiInstance->updateLiveActivity($app_id, $activity_id, $update_live_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateLiveActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The OneSignal App ID for your app.  Available in Keys &amp; IDs. |
 **activity_id** | **string**| Live Activity record ID |
 **update_live_activity_request** | [**\onesignal\client\model\UpdateLiveActivityRequest**](../Model/UpdateLiveActivityRequest.md)|  |

### Return type

[**\onesignal\client\model\UpdateLiveActivitySuccessResponse**](../Model/UpdateLiveActivitySuccessResponse.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($app_id, $subscription_id, $subscription_body)
```



Updates an existing Subscription’s properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$subscription_id = 'subscription_id_example'; // string
$subscription_body = new \onesignal\client\model\SubscriptionBody(); // \onesignal\client\model\SubscriptionBody

try {
    $apiInstance->updateSubscription($app_id, $subscription_id, $subscription_body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |
 **subscription_body** | [**\onesignal\client\model\SubscriptionBody**](../Model/SubscriptionBody.md)|  |

### Return type

void (empty response body)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($app_id, $alias_label, $alias_id, $update_user_request): \onesignal\client\model\PropertiesBody
```



Updates an existing User’s properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_api_key
$config = onesignal\client\Configuration::getDefaultConfiguration()
                                                ->setRestApiKeyToken('YOUR_REST_API_KEY')
                                                ->setOrganizationApiKeyToken('YOUR_ORGANIZATION_API_KEY');



$apiInstance = new onesignal\client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string
$alias_label = 'alias_label_example'; // string
$alias_id = 'alias_id_example'; // string
$update_user_request = new \onesignal\client\model\UpdateUserRequest(); // \onesignal\client\model\UpdateUserRequest

try {
    $result = $apiInstance->updateUser($app_id, $alias_label, $alias_id, $update_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **alias_label** | **string**|  |
 **alias_id** | **string**|  |
 **update_user_request** | [**\onesignal\client\model\UpdateUserRequest**](../Model/UpdateUserRequest.md)|  |

### Return type

[**\onesignal\client\model\PropertiesBody**](../Model/PropertiesBody.md)

### Authorization

[rest_api_key](../../README.md#rest_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
