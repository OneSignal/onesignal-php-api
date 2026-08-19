# # JourneyBranch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Server-assigned branch identifier. Read-only on create; echo it on update to keep the branch. | [optional]
**condition** | [**\onesignal\client\model\JourneyCondition**](JourneyCondition.md) |  | [optional]
**weight** | **float** | Branch weight for split_range nodes. Weights across a node&#39;s branches must sum to 100. | [optional]
**nodes** | [**\onesignal\client\model\JourneyNode[]**](JourneyNode.md) | Nodes run when this branch is taken, before flow converges to the next sibling node. | [optional]

[[Back to API list]](https://github.com/OneSignal/onesignal-php-api#full-api-reference) [[Back to README]](https://github.com/OneSignal/onesignal-php-api)
