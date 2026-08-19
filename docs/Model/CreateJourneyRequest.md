# # CreateJourneyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Journey name, up to 300 characters. |
**description** | **string** | Optional journey description, up to 1024 characters. | [optional]
**audience** | [**\onesignal\client\model\JourneyAudience**](JourneyAudience.md) |  | [optional]
**early_exit** | [**\onesignal\client\model\JourneyEarlyExit**](JourneyEarlyExit.md) |  | [optional]
**reentry_rules** | [**\onesignal\client\model\JourneyReentryRules**](JourneyReentryRules.md) |  | [optional]
**schedule** | [**\onesignal\client\model\JourneySchedule**](JourneySchedule.md) |  | [optional]
**nodes** | [**\onesignal\client\model\JourneyNode[]**](JourneyNode.md) | Ordered list of journey nodes. Server-assigned id fields are rejected on create. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
