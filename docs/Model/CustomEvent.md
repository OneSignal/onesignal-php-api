# # CustomEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The identifier or name of the event. Maximum 128 characters. |
**external_id** | **string** | The external ID of the user targeted for the event. Either the user&#39;s External ID or OneSignal ID is required. | [optional]
**onesignal_id** | **string** | The OneSignal ID of the user targeted for the event. Either the user&#39;s External ID or OneSignal ID is required. | [optional]
**timestamp** | **\DateTime** | Time the event occurred as an ISO8601 formatted string. Defaults to now if not included or past date provided. | [optional]
**payload** | **array<string,mixed>** | Properties or data related to the event, like {\&quot;geography\&quot;: \&quot;USA\&quot;} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
