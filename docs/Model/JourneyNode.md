# # JourneyNode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Server-assigned node UUID. Returned on reads. Required on update to keep an existing node. Rejected on create with a 400 validation error. | [optional]
**kind** | **string** | Node kind. Selects which other fields apply. |
**client_node_id** | **string** | Optional client-assigned identifier, unique within the journey. Use it to reference this node from elsewhere in the same request. Persisted and returned on reads. | [optional]
**annotation** | **string** | Optional free-text label, up to 255 characters. Stored and returned as-is with no effect on journey behavior. | [optional]
**duration_seconds** | **int** | wait nodes: seconds to hold the user. Minimum 60, maximum 31556952 (1 year). | [optional]
**relative_to** | **string** | time_window nodes: schedule_in_timezone uses the configured windows; last_active_time holds relative to the user&#39;s last active time. | [optional]
**windows** | [**\onesignal\client\model\JourneyTimeWindow[]**](JourneyTimeWindow.md) | time_window nodes: one or more time windows. A window with no day_of_week applies to every day. Required when relative_to is schedule_in_timezone; omit when it is last_active_time. | [optional]
**time_zone** | **string** | time_window nodes: IANA timezone identifier used when the user&#39;s timezone is unavailable. | [optional]
**use_user_time_zone** | **bool** | time_window nodes: when true, uses the user&#39;s timezone if available. | [optional]
**template_id** | **string** | send_push, send_email, and send_sms nodes: UUID of the template to send. | [optional]
**iam_id** | **string** | send_iam nodes: UUID of the in-app message to send. | [optional]
**user_ttl_seconds** | **int** | send_iam nodes: optional time-to-live for the in-app message, in seconds. | [optional]
**webhook_id** | **string** | send_webhook nodes: UUID of the webhook to send. | [optional]
**assignments** | **array<string,string>** | tag nodes: tag key-value pairs to assign. An empty string value removes the tag. Keys are limited to 255 characters and values to 1024. | [optional]
**randomize_on_entry** | **bool** | split_range nodes: when true, assigns each user to a branch at random on entry. Defaults to false. | [optional]
**branches** | [**\onesignal\client\model\JourneyBranch[]**](JourneyBranch.md) | Branching nodes: nested branches. split_range requires 2-20 weighted branches that sum to 100. yes_no requires exactly 2 branches. wait_until requires 1-10 condition branches. | [optional]
**expiration** | [**\onesignal\client\model\JourneyWaitUntilExpiration**](JourneyWaitUntilExpiration.md) |  | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
