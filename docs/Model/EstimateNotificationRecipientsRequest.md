# # EstimateNotificationRecipientsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**included_segments** | **string[]** | The segment names you want to target. Users in these segments will receive a notification. This targeting parameter is only compatible with excluded_segments. Example: [\&quot;Active Users\&quot;, \&quot;Inactive Users\&quot;] &#x60;\&quot;All\&quot;&#x60; is a shorthand for every subscribed user: if the array includes the string &#x60;\&quot;All\&quot;&#x60; and the app has no segment actually named &#x60;All&#x60;, it targets all subscribers instead of a literal segment lookup. | [optional]
**excluded_segments** | **string[]** | Segment that will be excluded when sending. Users in these segments will not receive a notification, even if they were included in included_segments. This targeting parameter is only compatible with included_segments. Example: [\&quot;Active Users\&quot;, \&quot;Inactive Users\&quot;] | [optional]
**app_id** | **string** | The OneSignal App ID for your app, which can be found in Keys &amp; IDs. |
**filters** | [**\onesignal\client\model\FilterExpression[]**](FilterExpression.md) |  | [optional]
**include_aliases** | **array<string,string[]>** | Target specific users by aliases assigned via API. An alias can be an external_id, onesignal_id, or a custom alias. Accepts an object where keys are alias labels and values are arrays of alias IDs to include Example usage: { \&quot;external_id\&quot;: [\&quot;exId1\&quot;, \&quot;extId2\&quot;], \&quot;internal_label\&quot;: [\&quot;id1\&quot;, \&quot;id2\&quot;] } Keys must match API spellings exactly (for example the label for External ID is the string &#x60;external_id&#x60;; arbitrary keys such as camelCase variants are not aliases and may yield no recipients). Not compatible with any other targeting parameters. REQUIRED: REST API Key Authentication Limit of 2,000 entries per REST API call Note: If targeting push, email, or sms subscribers with same ids, use with target_channel to indicate you are sending a push or email or sms. | [optional]
**target_channel** | **string** | Which platforms to count recipients for. Selects the same default platforms Create notification would use for the channel. Individual platform flags (&#x60;isIos&#x60;, &#x60;isAndroid&#x60;, etc.) are not supported by this endpoint. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
