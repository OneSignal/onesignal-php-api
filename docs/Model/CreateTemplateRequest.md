# # CreateTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | Your OneSignal App ID in UUID v4 format. |
**name** | **string** | Name of the template. |
**contents** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  |
**is_email** | **bool** | Set true for an Email template. | [optional]
**email_subject** | **string** | Subject of the email. | [optional]
**email_body** | **string** | Body of the email (HTML supported). | [optional]
**is_sms** | **bool** | Set true for an SMS template. | [optional]
**dynamic_content** | **string** | JSON string for dynamic content personalization. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
