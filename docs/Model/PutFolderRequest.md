# PutFolderRequest

## Properties

| Name                     | Type                                                                         | Description                                                                                                                                                                                                             | Notes      |
| ------------------------ | ---------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **allow_unnamed_folder** | **bool**                                                                     | You must specify &#x60;true&#x60; if the &#x60;folderPath&#x60; ends with a &#x60;/&#x60;. This prevents the accidental creation of folders that produce file paths with double forward-slashes in them. Default: false | [optional] |
| **folder_path**          | [**\BytescalePHP\Client\Model\FolderPath**](FolderPath.md)                   |                                                                                                                                                                                                                         |
| **folder_settings**      | [**\BytescalePHP\Client\Model\PatchFolderSettings**](PatchFolderSettings.md) |                                                                                                                                                                                                                         | [optional] |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
