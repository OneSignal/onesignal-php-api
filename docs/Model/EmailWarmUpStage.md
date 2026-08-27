# # EmailWarmUpStage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | **\DateTime** | ISO 8601 timestamp for the start of this stage. Sending for this stage will not begin before this time. |
**end** | **\DateTime** | ISO 8601 timestamp for the end of this stage. This stage&#39;s quota is expected to be sent by this time. |
**quota** | **int** | Number of emails to send during this stage. |
**acked** | **bool** | Whether this stage has been picked up and acknowledged by the warm-up scheduler. Not accepted on create. This is only present when reading back a campaign. | [optional] [readonly]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
