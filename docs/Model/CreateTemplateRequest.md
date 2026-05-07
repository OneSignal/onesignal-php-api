# # CreateTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | Your OneSignal App ID in UUID v4 format. |
**name** | **string** | Name of the template. |
**contents** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  |
**headings** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  | [optional]
**subtitle** | [**\onesignal\client\model\LanguageStringMap**](LanguageStringMap.md) |  | [optional]
**is_email** | **bool** | Set true for an Email template. | [optional]
**email_subject** | **string** | Subject of the email. | [optional]
**email_body** | **string** | Body of the email (HTML supported). | [optional]
**email_bcc** | **string[]** | BCC recipients for the email template. Maximum 5 addresses. Only supported when the email service provider is OneSignal Email. | [optional]
**is_sms** | **bool** | Set true for an SMS template. | [optional]
**dynamic_content** | **string** | JSON string for dynamic content personalization. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
