# OpenAPIClient-php

Bytescale API

For more information, please visit [https://www.bytescale.com](https://www.bytescale.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$copyFileRequest = new \Bytescale\Model\CopyFileRequest(); // \Bytescale\Model\CopyFileRequest

try {
    $result = $apiInstance->copyFile($accountId, $copyFileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFile: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bytescale.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FileApi* | [**copyFile**](docs/Api/FileApi.md#copyfile) | **POST** /v2/accounts/{accountId}/files/copy | Copies a file synchronously.
*FileApi* | [**copyFileBatch**](docs/Api/FileApi.md#copyfilebatch) | **POST** /v2/accounts/{accountId}/files/copy/batch | Copies multiple files asynchronously.
*FileApi* | [**deleteFile**](docs/Api/FileApi.md#deletefile) | **DELETE** /v2/accounts/{accountId}/files | Deletes a file synchronously.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*FileApi* | [**deleteFileBatch**](docs/Api/FileApi.md#deletefilebatch) | **DELETE** /v2/accounts/{accountId}/files/batch | Deletes multiple files asynchronously.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*FileApi* | [**downloadFile**](docs/Api/FileApi.md#downloadfile) | **GET** /{accountId}/raw{filePath} | Downloads a file in its original/unprocessed state.
*FileApi* | [**getFileDetails**](docs/Api/FileApi.md#getfiledetails) | **GET** /v2/accounts/{accountId}/files/details | Gets the full details (e.g. metadata, tags, etc.) for a file.
*FileApi* | [**processFile**](docs/Api/FileApi.md#processfile) | **GET** /{accountId}/{transformation}{filePath} | Processes a file and returns the result.
*FileApi* | [**processFileAndSave**](docs/Api/FileApi.md#processfileandsave) | **POST** /{accountId}/save/{transformation}{filePath} | Processes a file and saves the result.
*FolderApi* | [**copyFolder**](docs/Api/FolderApi.md#copyfolder) | **POST** /v2/accounts/{accountId}/folders/copy | Copies a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.
*FolderApi* | [**copyFolderBatch**](docs/Api/FolderApi.md#copyfolderbatch) | **POST** /v2/accounts/{accountId}/folders/copy/batch | Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.
*FolderApi* | [**deleteFolder**](docs/Api/FolderApi.md#deletefolder) | **DELETE** /v2/accounts/{accountId}/folders | Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#39;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*FolderApi* | [**deleteFolderBatch**](docs/Api/FolderApi.md#deletefolderbatch) | **DELETE** /v2/accounts/{accountId}/folders/batch | Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#39;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*FolderApi* | [**getFolderDetails**](docs/Api/FolderApi.md#getfolderdetails) | **GET** /v2/accounts/{accountId}/folders | Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*FolderApi* | [**listFolder**](docs/Api/FolderApi.md#listfolder) | **GET** /v2/accounts/{accountId}/folders/list | Lists the folder&#39;s contents.  The result may be paginated: subsequent pages can be requested by passing the &#x60;&#x60;&#x60;cursor&#x60;&#x60;&#x60; from the response into the next request.  Pagination is complete when the response includes &#x60;isPaginationComplete&#x3D;true&#x60;.
*FolderApi* | [**putFolder**](docs/Api/FolderApi.md#putfolder) | **PUT** /v2/accounts/{accountId}/folders | Creates or updates the folder specified by the &#x60;folderPath&#x60;.  If the folder&#39;s ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don&#39;t need to create folders before uploading files to them.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
*JobApi* | [**cancelJob**](docs/Api/JobApi.md#canceljob) | **DELETE** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Cancels an in-progress background job.  Requires a &#x60;secret_*&#x60; API key.
*JobApi* | [**getJob**](docs/Api/JobApi.md#getjob) | **GET** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Gets information on a background job.  Requires a &#x60;secret_*&#x60; API key.
*JobApi* | [**listRecentJobs**](docs/Api/JobApi.md#listrecentjobs) | **GET** /v2/accounts/{accountId}/jobs | Lists the most recently issued background jobs.  Requires a &#x60;secret_*&#x60; API key.
*UploadApi* | [**beginMultipartUpload**](docs/Api/UploadApi.md#beginmultipartupload) | **POST** /v2/accounts/{accountId}/uploads | Begins a new multipart file upload process.
*UploadApi* | [**completeUploadPart**](docs/Api/UploadApi.md#completeuploadpart) | **PUT** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Marks an upload part as uploaded.  You must call this endpoint after you have successfully issued a &#x60;PUT&#x60; request to the &#x60;uploadUrl&#x60; on the corresponding UploadPart.
*UploadApi* | [**getUploadPart**](docs/Api/UploadApi.md#getuploadpart) | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Gets a remaining upload part for a multipart file upload.
*UploadApi* | [**listUploadParts**](docs/Api/UploadApi.md#listuploadparts) | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts | Lists the remaining upload parts for a multipart file upload.  An empty array is returned when the upload is complete.
*UploadApi* | [**uploadFromUrl**](docs/Api/UploadApi.md#uploadfromurl) | **POST** /v2/accounts/{accountId}/uploads/url | Upload from a URL with a single HTTP request:

## Models

- [AccountJobStatus](docs/Model/AccountJobStatus.md)
- [AccountJobType](docs/Model/AccountJobType.md)
- [AsyncResponse](docs/Model/AsyncResponse.md)
- [AwsRegion](docs/Model/AwsRegion.md)
- [BasicUploadResponse](docs/Model/BasicUploadResponse.md)
- [BeginMultipartUploadRequest](docs/Model/BeginMultipartUploadRequest.md)
- [BeginMultipartUploadResponse](docs/Model/BeginMultipartUploadResponse.md)
- [BeginMultipartUploadResponseUploadParts](docs/Model/BeginMultipartUploadResponseUploadParts.md)
- [CompleteUploadPartRequest](docs/Model/CompleteUploadPartRequest.md)
- [CopyFileBatchRequest](docs/Model/CopyFileBatchRequest.md)
- [CopyFileRequest](docs/Model/CopyFileRequest.md)
- [CopyFileResponse](docs/Model/CopyFileResponse.md)
- [CopyFolderBatchRequest](docs/Model/CopyFolderBatchRequest.md)
- [CopyFolderRequest](docs/Model/CopyFolderRequest.md)
- [CopyableFileDataFileMetadata](docs/Model/CopyableFileDataFileMetadata.md)
- [CopyableFileDataFileTagNameArray](docs/Model/CopyableFileDataFileTagNameArray.md)
- [DeleteFileBatchRequest](docs/Model/DeleteFileBatchRequest.md)
- [DeleteFolderBatchRequest](docs/Model/DeleteFolderBatchRequest.md)
- [DeleteFolderRequest](docs/Model/DeleteFolderRequest.md)
- [DigitalOceanStorage](docs/Model/DigitalOceanStorage.md)
- [DigitalOceanStorageCredentials](docs/Model/DigitalOceanStorageCredentials.md)
- [DynamicFilePath](docs/Model/DynamicFilePath.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseError](docs/Model/ErrorResponseError.md)
- [FileCopyStatus](docs/Model/FileCopyStatus.md)
- [FileDetails](docs/Model/FileDetails.md)
- [FileDownloadGrants](docs/Model/FileDownloadGrants.md)
- [FilePathDefinition](docs/Model/FilePathDefinition.md)
- [FileSummary](docs/Model/FileSummary.md)
- [FolderDetails](docs/Model/FolderDetails.md)
- [FolderSettingsInherited](docs/Model/FolderSettingsInherited.md)
- [FolderSettingsStorageLayerSummary](docs/Model/FolderSettingsStorageLayerSummary.md)
- [FolderSummary](docs/Model/FolderSummary.md)
- [GoogleStorage](docs/Model/GoogleStorage.md)
- [GoogleStorageCredentials](docs/Model/GoogleStorageCredentials.md)
- [InternalStorageV1](docs/Model/InternalStorageV1.md)
- [InternalStorageV2](docs/Model/InternalStorageV2.md)
- [JobSummary](docs/Model/JobSummary.md)
- [JobSummaryError](docs/Model/JobSummaryError.md)
- [ListFolderResponse](docs/Model/ListFolderResponse.md)
- [ListRecentJobsResponse](docs/Model/ListRecentJobsResponse.md)
- [MultipartUploadProtocol](docs/Model/MultipartUploadProtocol.md)
- [ObjectSummary](docs/Model/ObjectSummary.md)
- [PatchFolderSettings](docs/Model/PatchFolderSettings.md)
- [PathPermissionScope](docs/Model/PathPermissionScope.md)
- [PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentials](docs/Model/PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentials.md)
- [PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket](docs/Model/PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket.md)
- [PickGoogleStorageExcludeKeyofGoogleStorageCredentials](docs/Model/PickGoogleStorageExcludeKeyofGoogleStorageCredentials.md)
- [PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket](docs/Model/PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket.md)
- [PickR2StorageExcludeKeyofR2StorageCredentials](docs/Model/PickR2StorageExcludeKeyofR2StorageCredentials.md)
- [PickR2StorageExcludeKeyofR2StorageCredentialsBucket](docs/Model/PickR2StorageExcludeKeyofR2StorageCredentialsBucket.md)
- [PickS3StorageExcludeKeyofS3StorageCredentials](docs/Model/PickS3StorageExcludeKeyofS3StorageCredentials.md)
- [PickS3StorageExcludeKeyofS3StorageCredentialsBucket](docs/Model/PickS3StorageExcludeKeyofS3StorageCredentialsBucket.md)
- [ProcessFileAndSaveRequest](docs/Model/ProcessFileAndSaveRequest.md)
- [ProcessFileAndSaveResponse](docs/Model/ProcessFileAndSaveResponse.md)
- [ProcessFileAndSaveResponseAsync](docs/Model/ProcessFileAndSaveResponseAsync.md)
- [ProcessFileAndSaveResponseSync](docs/Model/ProcessFileAndSaveResponseSync.md)
- [PublicPermissions](docs/Model/PublicPermissions.md)
- [PublicPermissionsGrants](docs/Model/PublicPermissionsGrants.md)
- [PutFolderRequest](docs/Model/PutFolderRequest.md)
- [R2Storage](docs/Model/R2Storage.md)
- [R2StorageCredentials](docs/Model/R2StorageCredentials.md)
- [S3Storage](docs/Model/S3Storage.md)
- [S3StorageCredentials](docs/Model/S3StorageCredentials.md)
- [SpecifiedFieldValueEmptiableFolderDescription](docs/Model/SpecifiedFieldValueEmptiableFolderDescription.md)
- [SpecifiedFieldValueEmptiablePublicPermissionsArray](docs/Model/SpecifiedFieldValueEmptiablePublicPermissionsArray.md)
- [SpecifiedFieldValueEmptiableStorageLayerUpdate](docs/Model/SpecifiedFieldValueEmptiableStorageLayerUpdate.md)
- [StorageLayerSummary](docs/Model/StorageLayerSummary.md)
- [StorageLayerUpdate](docs/Model/StorageLayerUpdate.md)
- [TransformationParamValue](docs/Model/TransformationParamValue.md)
- [TransformationParams](docs/Model/TransformationParams.md)
- [UnspecifiedFieldValue](docs/Model/UnspecifiedFieldValue.md)
- [UpdatableFieldEmptiableFolderDescription](docs/Model/UpdatableFieldEmptiableFolderDescription.md)
- [UpdatableFieldEmptiablePublicPermissionsArray](docs/Model/UpdatableFieldEmptiablePublicPermissionsArray.md)
- [UpdatableFieldEmptiableStorageLayerUpdate](docs/Model/UpdatableFieldEmptiableStorageLayerUpdate.md)
- [UploadFromUrlRequest](docs/Model/UploadFromUrlRequest.md)
- [UploadPart](docs/Model/UploadPart.md)
- [UploadPartList](docs/Model/UploadPartList.md)
- [UploadPartRange](docs/Model/UploadPartRange.md)
- [WebStorage](docs/Model/WebStorage.md)
- [WithFolderPathPublicPermissionsArray](docs/Model/WithFolderPathPublicPermissionsArray.md)
- [WithFolderPathStorageLayerSummary](docs/Model/WithFolderPathStorageLayerSummary.md)

## Authorization

Authentication schemes defined for the API:
### authorization-header

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@bytescale.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
