# # SegmentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the segment (UUID v4). | [optional]
**name** | **string** | The segment name. | [optional]
**description** | **string** | Human-readable description for the segment. &#x60;null&#x60; when unset. Maximum 255 characters. | [optional]
**created_at** | **int** | Unix timestamp when the segment was created. | [optional]
**source** | **string** | The source of the segment. | [optional]
**filters** | [**\onesignal\client\model\FilterExpression[]**](FilterExpression.md) | Array of filter and operator objects defining the segment criteria. Uses the same format as the Create Segment API, so filters can be directly used to recreate or update the segment. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
