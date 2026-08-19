# # UpdateJourneyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Journey name. | [optional]
**description** | **string** | Journey description. Send null to clear it. | [optional]
**audience** | [**\onesignal\client\model\JourneyAudience**](JourneyAudience.md) |  | [optional]
**early_exit** | [**\onesignal\client\model\JourneyEarlyExit**](JourneyEarlyExit.md) |  | [optional]
**reentry_rules** | [**\onesignal\client\model\JourneyReentryRules**](JourneyReentryRules.md) |  | [optional]
**schedule** | [**\onesignal\client\model\JourneySchedule**](JourneySchedule.md) |  | [optional]
**nodes** | [**\onesignal\client\model\JourneyNode[]**](JourneyNode.md) | Full ordered list of nodes, which replaces the existing graph wholesale. Preserve each node&#39;s server-assigned id from a prior fetch to keep in-flight users on that node; omit id to add a new node. | [optional]
**state** | **string** | Target state. Set active to activate a draft journey, or scheduled together with a future schedule.start_at to activate it later. Set archived to stop a running journey; archiving is permanent. Only scheduled and processing journeys can return to draft. | [optional]
**concurrency_key** | **string** | Optional optimistic-concurrency token. Pass the concurrency_key from a prior fetch to reject the update with 409 if the journey changed. Omit to skip the check. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
