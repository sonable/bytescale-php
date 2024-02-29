# # ListFolderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cursor** | **string** | Absolute path to a file or folder. Begins with a &#x60;/&#x60;. |
**folder** | [**\Bytescale\Model\FolderSummary**](FolderSummary.md) |  |
**isPaginationComplete** | **bool** | If &#x60;true&#x60; then paging has completed. |
**items** | [**\Bytescale\Model\ObjectSummary[]**](ObjectSummary.md) | Summary information about each of the folder&#39;s descendants (files and folders). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
