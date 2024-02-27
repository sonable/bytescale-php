# PickS3StorageExcludeKeyofS3StorageCredentials_

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this storage layer. | 
**bucket** | [**\Swagger\Client\Model\PickS3StorageExcludeKeyofS3StorageCredentialsBucket**](PickS3StorageExcludeKeyofS3StorageCredentialsBucket.md) |  | 
**use_absolute_paths** | **bool** | If &#x60;true&#x60; then writes S3 objects with full &#x60;filePath&#x60; as key, prefixed with the &#x60;objectKeyPrefix&#x60;.  If &#x60;false&#x60; then writes S3 objects using a relative &#x60;filePath&#x60; in relation to folder&#x27;s path, prefixed with the &#x60;objectKeyPrefix&#x60;. | 
**use_transfer_acceleration** | **bool** | Enables S3 transfer acceleration, providing improved file upload speeds for larger files.  Note: this setting must also be enabled on the S3 bucket. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

