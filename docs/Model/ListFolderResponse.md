# ListFolderResponse

## Properties

| Name                       | Type                                                                   | Description                                                                          | Notes |
| -------------------------- | ---------------------------------------------------------------------- | ------------------------------------------------------------------------------------ | ----- |
| **cursor**                 | [**\BytescalePHP\Client\Model\FileOrFolderPath**](FileOrFolderPath.md) |                                                                                      |
| **folder**                 | [**\BytescalePHP\Client\Model\FolderSummary**](FolderSummary.md)       |                                                                                      |
| **is_pagination_complete** | **bool**                                                               | If &#x60;true&#x60; then paging has completed.                                       |
| **items**                  | [**\BytescalePHP\Client\Model\ObjectSummary[]**](ObjectSummary.md)     | Summary information about each of the folder&#x27;s descendants (files and folders). |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
