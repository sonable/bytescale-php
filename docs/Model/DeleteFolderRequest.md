# # DeleteFolderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleteFiles** | **bool** | If &#x60;true&#x60; then deletes files.  Default: true | [optional]
**deleteVirtualFolders** | **bool** | If &#x60;true&#x60; then deletes folder settings.  Default: true | [optional]
**folderPath** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. |
**recursive** | **bool** | If &#x60;true&#x60; then deletes files and folder settings that descend &#x60;folderPath&#x60;.  If &#x60;false&#x60; then only deletes files that are direct children of &#x60;folderPath&#x60; and only deletes the folder settings of the current folder (if any). Does not delete the folder settings of any child or descendant folders.  Default: true | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
