# # JourneyListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**journeys** | [**\onesignal\client\model\JourneyListItem[]**](JourneyListItem.md) | Journeys ordered by creation time, newest first. | [optional]
**has_more** | **bool** | true if more journeys exist beyond this page. | [optional]
**next_cursor** | **string** | Cursor for the next page. Present only when has_more is true. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
