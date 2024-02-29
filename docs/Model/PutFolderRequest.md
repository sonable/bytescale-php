# # PutFolderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowUnnamedFolder** | **bool** | You must specify &#x60;true&#x60; if the &#x60;folderPath&#x60; ends with a &#x60;/&#x60;.  This prevents the accidental creation of folders that produce file paths with double forward-slashes in them.  Default: false | [optional]
**folderPath** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. |
**folderSettings** | [**\Bytescale\Model\PatchFolderSettings**](PatchFolderSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
