# # ObjectSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**folderPath** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. |
**settings** | [**\Bytescale\Model\FolderSettingsStorageLayerSummary**](FolderSettingsStorageLayerSummary.md) |  |
**type** | **string** | Indicates this item is a folder (as opposed to a file). |
**virtual** | **bool** | If &#x60;true&#x60; then the folder was created using the PutFolder operation.  If &#x60;false&#x60; then the folder was created automatically as the result of a file upload operation, and will disappear if/when the folder later becomes empty. |
**filePath** | **string** | Absolute path to a file. Begins with a &#x60;/&#x60;. |
**fileUrl** | **string** | URL for a raw file hosted on the Bytescale CDN. |
**lastModified** | **int** | Epoch milliseconds (since midnight 1 January 1970, UTC). |
**size** | **int** | Size in bytes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
