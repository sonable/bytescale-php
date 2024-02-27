# BeginMultipartUploadRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | [**\Swagger\Client\Model\FileMetadata**](FileMetadata.md) |  | [optional] 
**mime** | [**\Swagger\Client\Model\MimeType**](MimeType.md) |  | [optional] 
**original_file_name** | [**\Swagger\Client\Model\OriginalFileName**](OriginalFileName.md) |  | [optional] 
**path** | [**\Swagger\Client\Model\FilePathDefinition**](FilePathDefinition.md) |  | [optional] 
**protocol** | [**\Swagger\Client\Model\MultipartUploadProtocol**](MultipartUploadProtocol.md) |  | [optional] 
**size** | [**\Swagger\Client\Model\SizeInBytes**](SizeInBytes.md) |  | 
**tags** | [**\Swagger\Client\Model\FileTagName[]**](FileTagName.md) | The file tags to store against the file.  When you associate file tags with a file, Bytescale checks which rules match the tags (if any) and applies those rules to the upload request:  Rules can include max file size checks, traffic limit checks, rate limit checks, and so forth. These are configured in the Bytescale Dashboard. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

