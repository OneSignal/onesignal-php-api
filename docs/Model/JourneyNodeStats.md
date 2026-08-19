# # JourneyNodeStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Node kind, repeated here so stats can be read without joining against the journey definition. | [optional]
**waiting** | **int** | Users currently held at this node. | [optional]
**completed** | **int** | Users who advanced past this node normally. | [optional]
**exited_early** | **int** | Users who left the journey from this node through an early exit rule. | [optional]
**message_stats** | [**\onesignal\client\model\JourneyMessageStats**](JourneyMessageStats.md) |  | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
