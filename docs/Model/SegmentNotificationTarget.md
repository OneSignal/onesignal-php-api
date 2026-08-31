# # SegmentNotificationTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**included_segments** | **string[]** | The segment names you want to target. Users in these segments will receive a notification. This targeting parameter is only compatible with excluded_segments. Example: [\&quot;Active Users\&quot;, \&quot;Inactive Users\&quot;] &#x60;\&quot;All\&quot;&#x60; is a shorthand for every subscribed user: if the array includes the string &#x60;\&quot;All\&quot;&#x60; and the app has no segment actually named &#x60;All&#x60;, it targets all subscribers instead of a literal segment lookup. | [optional]
**excluded_segments** | **string[]** | Segment that will be excluded when sending. Users in these segments will not receive a notification, even if they were included in included_segments. This targeting parameter is only compatible with included_segments. Example: [\&quot;Active Users\&quot;, \&quot;Inactive Users\&quot;] | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
