# # JourneyListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Journey UUID. Read-only. | [optional]
**app_id** | **string** | UUID of the app the journey belongs to. Read-only. | [optional]
**name** | **string** | Journey name, up to 300 characters. | [optional]
**state** | **string** | Journey state. New journeys are created as draft. processing is transient while activation is in progress. archived is a journey that has been stopped. Change it through the state field on Update journey. | [optional]
**created_at** | **string** | ISO 8601 creation time. Read-only. | [optional]
**updated_at** | **string** | ISO 8601 last-update time. Read-only. | [optional]
**started_at** | **string** | ISO 8601 time the journey was activated, or null. Read-only. | [optional]
**archived_at** | **string** | ISO 8601 time the journey was archived, or null. Read-only. | [optional]
**created_source** | **string** | Origin of the journey, for example public_api or dashboard. Read-only. | [optional]
**schedule** | [**\onesignal\client\model\JourneySchedule**](JourneySchedule.md) |  | [optional]
**audience** | [**\onesignal\client\model\JourneyListAudience**](JourneyListAudience.md) |  | [optional]
**reentry_rules** | [**\onesignal\client\model\JourneyReentryRules**](JourneyReentryRules.md) |  | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
