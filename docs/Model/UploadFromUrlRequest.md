# # UploadFromUrlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | **array<string,mixed>** | The file metadata specified in the original upload request as a JSON object. | [optional]
**mime** | **string** | File MIME type. | [optional]
**originalFileName** | **string** | The file&#39;s original name on the user&#39;s device. | [optional]
**path** | [**\Bytescale\Model\FilePathDefinition**](FilePathDefinition.md) |  | [optional]
**tags** | **string[]** | The file tags to store against the file.  When you associate file tags with a file, Bytescale checks which rules match the tags (if any) and applies those rules to the upload request:  Rules can include max file size checks, traffic limit checks, rate limit checks, and so forth. These are configured in the Bytescale Dashboard. | [optional]
**url** | **string** | Source URL to upload. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
