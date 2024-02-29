# FolderSummary

## Properties

| Name            | Type                                                               | Description                                                                                                                                                                                                                                        | Notes |
| --------------- | ------------------------------------------------------------------ | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| **folder_path** | [**\BytescalePHP\Client\Model\FolderPath**](FolderPath.md)         |                                                                                                                                                                                                                                                    |
| **settings**    | [**\BytescalePHP\Client\Model\FolderSettings**](FolderSettings.md) |                                                                                                                                                                                                                                                    |
| **type**        | **string**                                                         | Indicates this item is a folder (as opposed to a file).                                                                                                                                                                                            |
| **virtual**     | **bool**                                                           | If &#x60;true&#x60; then the folder was created using the PutFolder operation. If &#x60;false&#x60; then the folder was created automatically as the result of a file upload operation, and will disappear if/when the folder later becomes empty. |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
