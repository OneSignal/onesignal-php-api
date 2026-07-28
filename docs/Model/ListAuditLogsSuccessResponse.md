# # ListAuditLogsSuccessResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audit_logs** | [**\onesignal\client\model\AuditLogEvent[]**](AuditLogEvent.md) | Array of audit log events, ordered by occurred_at ascending. | [optional]
**has_more** | **bool** | True if additional events exist beyond this page. Use next_cursor to fetch the next page. | [optional]
**next_cursor** | **string** | Opaque cursor to pass as cursor in the next request. Only present when has_more is true. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
