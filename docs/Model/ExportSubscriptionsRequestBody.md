# # ExportSubscriptionsRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extra_fields** | **string[]** | Additional fields that you wish to include. Currently supports location, country, rooted, notification_types, ip, external_user_id, web_auth, and web_p256. | [optional]
**last_active_since** | **string** | Export all devices with a last_active timestamp greater than this time.  Unixtime in seconds. | [optional]
**segment_name** | **string** | Export all devices belonging to the segment. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
