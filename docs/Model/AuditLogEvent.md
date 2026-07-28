# # AuditLogEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action that was performed (e.g. notification.sent, segment.created, member.invited). | [optional]
**actor** | [**\onesignal\client\model\AuditLogActor**](AuditLogActor.md) |  | [optional]
**app_id** | **string** | UUID of the app the event is associated with. Absent for org-level events. | [optional]
**context** | [**\onesignal\client\model\AuditLogContext**](AuditLogContext.md) |  | [optional]
**id** | **string** | UUID of the audit log event. | [optional]
**metadata** | **object** | Additional event-specific data that does not fit into the standard fields. | [optional]
**occurred_at** | **string** | RFC 3339 timestamp of when the event occurred (e.g. 2026-02-18T12:34:56Z). | [optional]
**organization_id** | **string** | UUID of the organization the event belongs to. | [optional]
**targets** | [**\onesignal\client\model\AuditLogTarget[]**](AuditLogTarget.md) | The resources the action was performed on. May be empty for org-level events. | [optional]
**version** | **int** | Schema version of the event payload. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
