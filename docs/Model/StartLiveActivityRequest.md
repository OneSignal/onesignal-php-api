# # StartLiveActivityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | An internal name to assist with your campaign organization. This does not get displayed in the message itself. |
**event** | **string** |  | [default to 'start']
**activity_id** | **string** | Set a unique activity_id to track and manage the Live Activity. |
**event_attributes** | **object** | Default/static data to initialize the Live Activity upon start. |
**event_updates** | **object** | Dynamic content used to update the running Live Activity at start. Must match the ContentState interface defined in your app. |
**contents** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  |
**headings** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  |
**stale_date** | **int** | Accepts Unix timestamp in seconds. When time reaches the configured stale date, the system considers the Live Activity out of date, and the ActivityState of the Live Activity changes to ActivityState.stale. | [optional]
**priority** | **int** | Delivery priority through the push provider (APNs). Pass 10 for higher priority notifications, or 5 for lower priority notifications. Lower priority notifications are sent based on the power considerations of the end user&#39;s device. If not set, defaults to 10. | [optional]
**ios_relevance_score** | **float** | iOS 15+. A score to indicate how a notification should be displayed when grouped. Use a float between 0-1. | [optional]
**idempotency_key** | **string** | Correlation and idempotency key. A request received with this parameter will first look for another notification with the same idempotency key. If one exists, a notification will not be sent, and result of the previous operation will instead be returned. Therefore, if you plan on using this feature, it&#39;s important to use a good source of randomness to generate the UUID passed here. This key is only idempotent for 30 days. After 30 days, the notification could be removed from our system and a notification with the same idempotency key will be sent again.   See Idempotent Notification Requests for more details writeOnly: true | [optional]
**include_aliases** | **array<string,string[]>** | Target specific users by aliases assigned via API. An alias can be an external_id, onesignal_id, or a custom alias. Accepts an object where keys are alias labels and values are arrays of alias IDs to include Example usage: { \&quot;external_id\&quot;: [\&quot;exId1\&quot;, \&quot;extId2\&quot;], \&quot;internal_label\&quot;: [\&quot;id1\&quot;, \&quot;id2\&quot;] } Not compatible with any other targeting parameters. REQUIRED: REST API Key Authentication Limit of 2,000 entries per REST API call Note: If targeting push, email, or sms subscribers with same ids, use with target_channel to indicate you are sending a push or email or sms. | [optional]
**include_subscription_ids** | **string[]** | Specific subscription ids to target. Not compatible with other targeting parameters. | [optional]
**included_segments** | **string[]** | Segment names to include. Only compatible with excluded_segments. | [optional]
**excluded_segments** | **string[]** | Segment names to exclude. Only compatible with included_segments. | [optional]
**filters** | [**\onesignal\client\model\FilterExpression[]**](FilterExpression.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
