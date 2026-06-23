# # NotificationSlice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_count** | **int** |  | [optional]
**offset** | **int** |  | [optional]
**limit** | **int** |  | [optional]
**time_offset** | **string** | The time_offset cursor specified in the request, if any. | [optional]
**next_time_offset** | **string** | An opaque Base64 cursor token representing the next page of messages to fetch.  Present when time_offset was provided in the request.  Pass this value as time_offset on the next request to continue paginating. | [optional]
**notifications** | [**\onesignal\client\model\NotificationWithMeta[]**](NotificationWithMeta.md) |  | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
