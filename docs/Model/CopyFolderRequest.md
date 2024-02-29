# # CopyFolderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**copyFiles** | **bool** | If &#x60;true&#x60; then copies files.  Default: true | [optional]
**copyOverriddenStorage** | **bool** | If &#x60;false&#x60; then if a file&#39;s parent folder has overridden storage settings, the file won&#39;t be copied.  If you don&#39;t use folders with custom storage settings (like AWS S3 buckets), you don&#39;t need to worry about this setting.  Conditional: &#x60;copyVirtualFolders&#x60; and &#x60;copyOverriddenStorage&#x60; cannot both be &#x60;true&#x60;.  Default: false | [optional]
**copyVirtualFolders** | **bool** | If &#x60;true&#x60; then copies virtual folder settings at the current path and below, else only files will be copied.  Virtual folders are folders that have been created using the PutFolder operation.  Conditional: &#x60;copyVirtualFolders&#x60; and &#x60;copyOverriddenStorage&#x60; cannot both be &#x60;true&#x60;.  Default: true | [optional]
**destination** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. |
**recursive** | **bool** | If &#x60;true&#x60; then copies files and virtual folders that are descendants of the &#x60;source&#x60; folder.  If &#x60;false&#x60; then only copies files that are direct children of the &#x60;source&#x60; folder, and does not copy descendant virtual folders (children or otherwise).  Default: true | [optional]
**source** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
