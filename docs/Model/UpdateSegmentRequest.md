# # UpdateSegmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Required. The segment name. Maximum 128 characters. |
**description** | **string** | Optional human-readable description for the segment. Maximum 255 characters. Pass an empty string to clear; omit to leave unchanged. | [optional]
**filters** | [**\onesignal\client\model\FilterExpression[]**](FilterExpression.md) | Optional. When provided, replaces all existing filters. Filters define the segment based on user properties like tags, activity, or location using flexible AND/OR logic. Limited to 200 total entries, including fields and OR operators. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
