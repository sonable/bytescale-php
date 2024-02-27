# R2Storage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bucket** | [**\Swagger\Client\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket**](PickR2StorageExcludeKeyofR2StorageCredentialsBucket.md) |  | 
**cloudflare_account_id** | [**\Swagger\Client\Model\CloudflareAccountId**](CloudflareAccountId.md) |  | 
**credentials** | [**\Swagger\Client\Model\R2StorageCredentials**](R2StorageCredentials.md) |  | 
**type** | **string** | The type of this storage layer. | 
**use_absolute_paths** | **bool** | If &#x60;true&#x60; then writes Google Storage objects with full &#x60;filePath&#x60; as key, prefixed with the &#x60;objectKeyPrefix&#x60;.  If &#x60;false&#x60; then writes Google Storage objects using a relative &#x60;filePath&#x60; in relation to folder&#x27;s path, prefixed with the &#x60;objectKeyPrefix&#x60;. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

