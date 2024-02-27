# DeleteFolderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delete_files** | **bool** | If &#x60;true&#x60; then deletes files.  Default: true | [optional] 
**delete_virtual_folders** | **bool** | If &#x60;true&#x60; then deletes folder settings.  Default: true | [optional] 
**folder_path** | [**\Swagger\Client\Model\FolderPath**](FolderPath.md) |  | 
**recursive** | **bool** | If &#x60;true&#x60; then deletes files and folder settings that descend &#x60;folderPath&#x60;.  If &#x60;false&#x60; then only deletes files that are direct children of &#x60;folderPath&#x60; and only deletes the folder settings of the current folder (if any). Does not delete the folder settings of any child or descendant folders.  Default: true | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

