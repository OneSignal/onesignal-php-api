# # DuplicateJourneyOverrides

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name for the copy, up to 300 characters. If you omit it, the copy takes the name of the source plus \&quot; (Copy)\&quot;. | [optional]
**description** | **string** | Optional journey description, up to 1024 characters. If you omit it, the copy takes the description of the source. Send null to clear it. | [optional]
**audience** | [**\onesignal\client\model\JourneyAudience**](JourneyAudience.md) |  | [optional]
**early_exit** | [**\onesignal\client\model\JourneyEarlyExit**](JourneyEarlyExit.md) |  | [optional]
**reentry_rules** | [**\onesignal\client\model\JourneyReentryRules**](JourneyReentryRules.md) |  | [optional]
**schedule** | [**\onesignal\client\model\JourneySchedule**](JourneySchedule.md) |  | [optional]
**nodes** | [**\onesignal\client\model\JourneyNode[]**](JourneyNode.md) | Full ordered list of nodes. Replaces the copied graph. Server-assigned id fields are rejected. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
