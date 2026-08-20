# # Journey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Journey UUID. Read-only. | [optional]
**app_id** | **string** | UUID of the app the journey belongs to. Read-only. | [optional]
**name** | **string** | Journey name, up to 300 characters. | [optional]
**description** | **string** | Journey description, up to 1024 characters. Defaults to an empty string. | [optional]
**state** | **string** | Journey state. New journeys are created as draft. processing is transient while activation is in progress. archived is a journey that has been stopped. Change it through the state field on Update journey. | [optional]
**created_at** | **string** | ISO 8601 creation time. Read-only. | [optional]
**updated_at** | **string** | ISO 8601 last-update time. Read-only. | [optional]
**started_at** | **string** | ISO 8601 time the journey was activated, or null. Read-only. May stay null briefly after you set state to active: activation is enqueued, and started_at populates once the journey finishes processing. | [optional]
**archived_at** | **string** | ISO 8601 time the journey was archived, or null. Read-only. | [optional]
**created_source** | **string** | Origin of the journey, for example public_api or dashboard. Read-only. | [optional]
**audience** | [**\onesignal\client\model\JourneyAudience**](JourneyAudience.md) |  | [optional]
**early_exit** | [**\onesignal\client\model\JourneyEarlyExit**](JourneyEarlyExit.md) |  | [optional]
**reentry_rules** | [**\onesignal\client\model\JourneyReentryRules**](JourneyReentryRules.md) |  | [optional]
**schedule** | [**\onesignal\client\model\JourneySchedule**](JourneySchedule.md) |  | [optional]
**nodes** | [**\onesignal\client\model\JourneyNode[]**](JourneyNode.md) | Ordered list of journey nodes. | [optional]
**concurrency_key** | **string** | Opaque optimistic-concurrency token. Read-only. Pass it back on update to guard against overwriting a concurrent change (409). Send it back exactly as read; do not construct or parse it. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
