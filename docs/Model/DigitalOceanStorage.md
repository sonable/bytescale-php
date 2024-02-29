# # DigitalOceanStorage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bucket** | [**\Bytescale\Model\PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket**](PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket.md) |  |
**credentials** | [**\Bytescale\Model\DigitalOceanStorageCredentials**](DigitalOceanStorageCredentials.md) |  |
**type** | **string** | The type of this storage layer. |
**useAbsolutePaths** | **bool** | If &#x60;true&#x60; then writes S3 objects with full &#x60;filePath&#x60; as key, prefixed with the &#x60;objectKeyPrefix&#x60;.  If &#x60;false&#x60; then writes S3 objects using a relative &#x60;filePath&#x60; in relation to folder&#39;s path, prefixed with the &#x60;objectKeyPrefix&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
