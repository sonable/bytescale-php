# # DynamicFilePath

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fileName** | **string** | The file name to upload the file with.  Must not contain &#x60;/&#x60;.  Supports path variables. | [optional]
**fileNameFallback** | **string** | The file name to upload the file with.  Must not contain &#x60;/&#x60;.  Supports path variables. | [optional]
**fileNameVariablesEnabled** | **bool** | If &#x60;true&#x60; then path variables like &#x60;{UTC_DATE}&#x60; in the &#x60;fileName&#x60; will be replaced. You can escape &#x60;{&#x60; characters with a &#x60;\\&#x60;.  If &#x60;false&#x60; then path variables like &#x60;{UTC_DATE}&#x60; in the &#x60;fileName&#x60; will be taken literally.  Default: true | [optional]
**folderPath** | **string** | Absolute or relative path to a folder in your Bytescale account&#39;s storage.  Relative paths are relative to the API key&#39;s default folder (configured per API key in the Bytescale Dashboard).  Should not end with &#x60;/&#x60;.  Does not support path traversals (e.g. &#x60;..&#x60;).  Supports path variables. | [optional]
**folderPathVariablesEnabled** | **bool** | If &#x60;true&#x60; then path variables like &#x60;{UTC_DATE}&#x60; in the &#x60;folderPath&#x60; will be replaced. You can escape &#x60;{&#x60; characters with a &#x60;\\&#x60;.  If &#x60;false&#x60; then path variables like &#x60;{UTC_DATE}&#x60; in the &#x60;folderPath&#x60; will be taken literally.  Default: true | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
