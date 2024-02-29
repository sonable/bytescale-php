# Bytescale\FolderApi

All URIs are relative to https://api.bytescale.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyFolder()**](FolderApi.md#copyFolder) | **POST** /v2/accounts/{accountId}/folders/copy | Copies a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter. |
| [**copyFolderBatch()**](FolderApi.md#copyFolderBatch) | **POST** /v2/accounts/{accountId}/folders/copy/batch | Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter. |
| [**deleteFolder()**](FolderApi.md#deleteFolder) | **DELETE** /v2/accounts/{accountId}/folders | Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#39;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |
| [**deleteFolderBatch()**](FolderApi.md#deleteFolderBatch) | **DELETE** /v2/accounts/{accountId}/folders/batch | Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#39;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |
| [**getFolderDetails()**](FolderApi.md#getFolderDetails) | **GET** /v2/accounts/{accountId}/folders | Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |
| [**listFolder()**](FolderApi.md#listFolder) | **GET** /v2/accounts/{accountId}/folders/list | Lists the folder&#39;s contents.  The result may be paginated: subsequent pages can be requested by passing the &#x60;&#x60;&#x60;cursor&#x60;&#x60;&#x60; from the response into the next request.  Pagination is complete when the response includes &#x60;isPaginationComplete&#x3D;true&#x60;. |
| [**putFolder()**](FolderApi.md#putFolder) | **PUT** /v2/accounts/{accountId}/folders | Creates or updates the folder specified by the &#x60;folderPath&#x60;.  If the folder&#39;s ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don&#39;t need to create folders before uploading files to them.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |


## `copyFolder()`

```php
copyFolder($accountId, $copyFolderRequest): \Bytescale\Model\AsyncResponse
```

Copies a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

Copies a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$copyFolderRequest = new \Bytescale\Model\CopyFolderRequest(); // \Bytescale\Model\CopyFolderRequest

try {
    $result = $apiInstance->copyFolder($accountId, $copyFolderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->copyFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **copyFolderRequest** | [**\Bytescale\Model\CopyFolderRequest**](../Model/CopyFolderRequest.md)|  | |

### Return type

[**\Bytescale\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyFolderBatch()`

```php
copyFolderBatch($accountId, $copyFolderBatchRequest): \Bytescale\Model\AsyncResponse
```

Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$copyFolderBatchRequest = new \Bytescale\Model\CopyFolderBatchRequest(); // \Bytescale\Model\CopyFolderBatchRequest

try {
    $result = $apiInstance->copyFolderBatch($accountId, $copyFolderBatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->copyFolderBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **copyFolderBatchRequest** | [**\Bytescale\Model\CopyFolderBatchRequest**](../Model/CopyFolderBatchRequest.md)|  | |

### Return type

[**\Bytescale\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolder()`

```php
deleteFolder($accountId, $deleteFolderRequest): \Bytescale\Model\AsyncResponse
```

Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$deleteFolderRequest = new \Bytescale\Model\DeleteFolderRequest(); // \Bytescale\Model\DeleteFolderRequest

try {
    $result = $apiInstance->deleteFolder($accountId, $deleteFolderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **deleteFolderRequest** | [**\Bytescale\Model\DeleteFolderRequest**](../Model/DeleteFolderRequest.md)|  | |

### Return type

[**\Bytescale\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolderBatch()`

```php
deleteFolderBatch($accountId, $deleteFolderBatchRequest): \Bytescale\Model\AsyncResponse
```

Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$deleteFolderBatchRequest = new \Bytescale\Model\DeleteFolderBatchRequest(); // \Bytescale\Model\DeleteFolderBatchRequest

try {
    $result = $apiInstance->deleteFolderBatch($accountId, $deleteFolderBatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolderBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **deleteFolderBatchRequest** | [**\Bytescale\Model\DeleteFolderBatchRequest**](../Model/DeleteFolderBatchRequest.md)|  | |

### Return type

[**\Bytescale\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderDetails()`

```php
getFolderDetails($accountId, $folderPath): \Bytescale\Model\FolderDetails
```

Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$folderPath = 'folderPath_example'; // string

try {
    $result = $apiInstance->getFolderDetails($accountId, $folderPath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFolderDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **folderPath** | **string**|  | |

### Return type

[**\Bytescale\Model\FolderDetails**](../Model/FolderDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFolder()`

```php
listFolder($accountId, $folderPath, $cursor, $dryRun, $includeFiles, $includeOverriddenStorage, $includePhysicalFolders, $includeVirtualFolders, $limit, $recursive): \Bytescale\Model\ListFolderResponse
```

Lists the folder's contents.  The result may be paginated: subsequent pages can be requested by passing the ```cursor``` from the response into the next request.  Pagination is complete when the response includes `isPaginationComplete=true`.

Lists the folder's contents.  The result may be paginated: subsequent pages can be requested by passing the ```cursor``` from the response into the next request.  Pagination is complete when the response includes `isPaginationComplete=true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$folderPath = 'folderPath_example'; // string
$cursor = 'cursor_example'; // string
$dryRun = True; // bool
$includeFiles = True; // bool
$includeOverriddenStorage = True; // bool
$includePhysicalFolders = True; // bool
$includeVirtualFolders = True; // bool
$limit = 56; // int
$recursive = True; // bool

try {
    $result = $apiInstance->listFolder($accountId, $folderPath, $cursor, $dryRun, $includeFiles, $includeOverriddenStorage, $includePhysicalFolders, $includeVirtualFolders, $limit, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->listFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **folderPath** | **string**|  | |
| **cursor** | **string**|  | [optional] |
| **dryRun** | **bool**|  | [optional] |
| **includeFiles** | **bool**|  | [optional] |
| **includeOverriddenStorage** | **bool**|  | [optional] |
| **includePhysicalFolders** | **bool**|  | [optional] |
| **includeVirtualFolders** | **bool**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recursive** | **bool**|  | [optional] |

### Return type

[**\Bytescale\Model\ListFolderResponse**](../Model/ListFolderResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFolder()`

```php
putFolder($accountId, $putFolderRequest): \Bytescale\Model\FolderDetails
```

Creates or updates the folder specified by the `folderPath`.  If the folder's ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don't need to create folders before uploading files to them.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Creates or updates the folder specified by the `folderPath`.  If the folder's ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don't need to create folders before uploading files to them.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$putFolderRequest = new \Bytescale\Model\PutFolderRequest(); // \Bytescale\Model\PutFolderRequest

try {
    $result = $apiInstance->putFolder($accountId, $putFolderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->putFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **putFolderRequest** | [**\Bytescale\Model\PutFolderRequest**](../Model/PutFolderRequest.md)|  | |

### Return type

[**\Bytescale\Model\FolderDetails**](../Model/FolderDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
