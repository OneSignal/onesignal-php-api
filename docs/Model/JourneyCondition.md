# # JourneyCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Condition kind. Selects which other fields apply. |
**included_segment_ids** | **string[]** | segment_membership conditions: Segment UUIDs the user must belong to. | [optional]
**excluded_segment_ids** | **string[]** | segment_membership conditions: Segment UUIDs the user must not belong to. | [optional]
**action** | **string** | on_notification_action conditions: the notification action to branch on. Which actions apply depends on the sending node&#39;s channel. | [optional]
**sending_node_id** | **string** | on_notification_action conditions: id of the sending node this action refers to. Returned on reads; accepted on write. | [optional]
**client_node_id** | **string** | on_notification_action conditions: write-only alternative to sending_node_id. References the sending node by its client_node_id. | [optional]
**name** | **string** | event_trigger conditions: event name, up to 255 characters. | [optional]
**attributes** | **\onesignal\client\model\JourneyEventAttribute[][]** | Event attribute matchers, as a list of condition groups. Send a single group whose conditions are AND&#39;d together. More than one group is rejected. | [optional]
**entry_event_match_attributes** | **object[]** | event_trigger conditions: match incoming event properties against the journey&#39;s entry event. Only valid on event-triggered journeys. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
