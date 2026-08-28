# # EmailWarmUpRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stages** | [**\onesignal\client\model\EmailWarmUpStage[]**](EmailWarmUpStage.md) | Required. The ordered stages that make up the campaign&#39;s sending schedule. |
**strategy** | **string** | How the stage schedule should be treated:   * &#x60;recommended&#x60; - (Default) OneSignal may adjust the provided stages based on past delivery volumes, scheduled Auto Warm Up emails, and the size of the current audience.   * &#x60;custom&#x60; - The stages provided are sent as-is. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
