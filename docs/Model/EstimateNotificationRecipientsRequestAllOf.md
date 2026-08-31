# # EstimateNotificationRecipientsRequestAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The OneSignal App ID for your app, which can be found in Keys &amp; IDs. | [optional]
**filters** | [**\onesignal\client\model\FilterExpression[]**](FilterExpression.md) |  | [optional]
**include_aliases** | **array<string,string[]>** | Target specific users by aliases assigned via API. An alias can be an external_id, onesignal_id, or a custom alias. Accepts an object where keys are alias labels and values are arrays of alias IDs to include Example usage: { \&quot;external_id\&quot;: [\&quot;exId1\&quot;, \&quot;extId2\&quot;], \&quot;internal_label\&quot;: [\&quot;id1\&quot;, \&quot;id2\&quot;] } Keys must match API spellings exactly (for example the label for External ID is the string &#x60;external_id&#x60;; arbitrary keys such as camelCase variants are not aliases and may yield no recipients). Not compatible with any other targeting parameters. REQUIRED: REST API Key Authentication Limit of 2,000 entries per REST API call Note: If targeting push, email, or sms subscribers with same ids, use with target_channel to indicate you are sending a push or email or sms. | [optional]
**target_channel** | **string** | Which platforms to count recipients for. Selects the same default platforms Create notification would use for the channel. Individual platform flags (&#x60;isIos&#x60;, &#x60;isAndroid&#x60;, etc.) are not supported by this endpoint. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
