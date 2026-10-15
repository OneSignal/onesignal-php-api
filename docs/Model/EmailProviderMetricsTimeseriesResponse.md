# # EmailProviderMetricsTimeseriesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**events** | [**\onesignal\client\model\EmailProviderMetricsEvent[]**](EmailProviderMetricsEvent.md) | One entry for every time bucket in the reporting window, oldest first. Buckets with no email activity are included with all metrics set to &#x60;0&#x60;. Empty when the domain is not found for the app or is not currently active for sending. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
