# # JourneyStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID of the journey these stats belong to. | [optional]
**started** | **int** | Users who entered the journey. | [optional]
**completed** | **int** | Users who reached the end of the journey normally. | [optional]
**exited_early** | **int** | Users who left the journey through an early exit rule. | [optional]
**nodes** | [**array<string,\onesignal\client\model\JourneyNodeStats>**](JourneyNodeStats.md) | Node stats keyed by node id. Includes every node in the graph, at any nesting depth. | [optional]
**branches** | [**array<string,\onesignal\client\model\JourneyBranchStats>**](JourneyBranchStats.md) | Branch stats keyed by branch id. Empty for a journey with no branching nodes. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
