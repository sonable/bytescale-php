# # FileDownloadGrants

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**downloadFile** | **string[]** | An array of transformation URL slug patterns.  This array specifies which transformation slugs can be used when downloading files from this location.  - Use &#x60;\&quot;*\&quot;&#x60; to allow all file downloads.  - Use &#x60;\&quot;raw\&quot;&#x60; to allow raw/original file downloads.  - Use a &#x60;*&#x60; suffix to allow transformation prefixes. For example: &#x60;\&quot;thumbnail-*\&quot;&#x60; will allow &#x60;thumbnail-sm&#x60; and &#x60;thumbnail-lg&#x60;.  - Use any other value to allow specific transformations. For example: &#x60;\&quot;thumbnail\&quot;&#x60; will allow &#x60;thumbnail&#x60; downloads only.  - Use an empty array to indicate no file downloads are allowed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
