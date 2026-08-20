# # JourneyAudience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Audience kind. Selects which other fields apply. |
**included_segment_ids** | **string[]** | segment audiences: Segment UUIDs whose users enter the journey. | [optional]
**excluded_segment_ids** | **string[]** | segment audiences: Segment UUIDs whose users are excluded. | [optional]
**future_additions_only** | **bool** | segment audiences: when true, only users who newly match the segment after activation enter the journey. Defaults to false. | [optional]
**name** | **string** | event_trigger audiences: event name that triggers entry, up to 255 characters. | [optional]
**attributes** | **\onesignal\client\model\JourneyEventAttribute[][]** | Event attribute matchers, as a list of condition groups. Send a single group whose conditions are AND&#39;d together. More than one group is rejected. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
