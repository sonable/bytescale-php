# # UploadPart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**range** | [**\Bytescale\Model\UploadPartRange**](UploadPartRange.md) |  |
**uploadId** | **string** | The ID for the multipart file upload. |
**uploadPartIndex** | **int** | Index of an uploadable file part.  Can be used as the &#x60;uploadPartIndex&#x60; parameter in the GetUploadPart and CompleteUploadPart operations. |
**uploadUrl** | **string** | Pre-signed upload URL for this part.  You are required to issue a &#x60;PUT&#x60; to this URL, with the file&#39;s bytes as the request body (limited to the range indicated by this upload part).  The &#x60;PUT&#x60; request will return an &#x60;etag&#x60; response header, which must be provided in a subsequent CompleteUploadPart request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
