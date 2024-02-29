# # StorageLayerUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mount** | **string** | Absolute path to a folder. Begins with a &#x60;/&#x60;. Should not end with a &#x60;/&#x60;. | [optional]
**type** | **string** | The type of this storage layer. |
**baseUrl** | **string** | URL for an http(s) resource. | [optional]
**bucket** | [**\Bytescale\Model\PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket**](PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket.md) |  |
**credentials** | [**\Bytescale\Model\GoogleStorageCredentials**](GoogleStorageCredentials.md) |  |
**useAbsolutePaths** | **bool** | If &#x60;true&#x60; then writes Google Storage objects with full &#x60;filePath&#x60; as key, prefixed with the &#x60;objectKeyPrefix&#x60;.  If &#x60;false&#x60; then writes Google Storage objects using a relative &#x60;filePath&#x60; in relation to folder&#39;s path, prefixed with the &#x60;objectKeyPrefix&#x60;. |
**useTransferAcceleration** | **bool** | Enables S3 transfer acceleration, providing improved file upload speeds for larger files.  Note: this setting must also be enabled on the S3 bucket. |
**cloudflareAccountId** | **string** | Cloudflare Account ID. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
