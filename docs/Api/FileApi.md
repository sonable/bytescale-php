# Bytescale\FileApi

All URIs are relative to https://api.bytescale.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyFile()**](FileApi.md#copyFile) | **POST** /v2/accounts/{accountId}/files/copy | Copies a file synchronously. |
| [**copyFileBatch()**](FileApi.md#copyFileBatch) | **POST** /v2/accounts/{accountId}/files/copy/batch | Copies multiple files asynchronously. |
| [**deleteFile()**](FileApi.md#deleteFile) | **DELETE** /v2/accounts/{accountId}/files | Deletes a file synchronously.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |
| [**deleteFileBatch()**](FileApi.md#deleteFileBatch) | **DELETE** /v2/accounts/{accountId}/files/batch | Deletes multiple files asynchronously.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth. |
| [**downloadFile()**](FileApi.md#downloadFile) | **GET** /{accountId}/raw{filePath} | Downloads a file in its original/unprocessed state. |
| [**getFileDetails()**](FileApi.md#getFileDetails) | **GET** /v2/accounts/{accountId}/files/details | Gets the full details (e.g. metadata, tags, etc.) for a file. |
| [**processFile()**](FileApi.md#processFile) | **GET** /{accountId}/{transformation}{filePath} | Processes a file and returns the result. |
| [**processFileAndSave()**](FileApi.md#processFileAndSave) | **POST** /{accountId}/save/{transformation}{filePath} | Processes a file and saves the result. |


## `copyFile()`

```php
copyFile($accountId, $copyFileRequest): \Bytescale\Model\CopyFileResponse
```

Copies a file synchronously.

Copies a file synchronously.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **copyFileRequest** | [**\Bytescale\Model\CopyFileRequest**](../Model/CopyFileRequest.md)|  | |

### Return type

[**\Bytescale\Model\CopyFileResponse**](../Model/CopyFileResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyFileBatch()`

```php
copyFileBatch($accountId, $copyFileBatchRequest): \Bytescale\Model\AsyncResponse
```

Copies multiple files asynchronously.

Copies multiple files asynchronously.

### Example

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
$copyFileBatchRequest = new \Bytescale\Model\CopyFileBatchRequest(); // \Bytescale\Model\CopyFileBatchRequest

try {
    $result = $apiInstance->copyFileBatch($accountId, $copyFileBatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFileBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **copyFileBatchRequest** | [**\Bytescale\Model\CopyFileBatchRequest**](../Model/CopyFileBatchRequest.md)|  | |

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

## `deleteFile()`

```php
deleteFile($accountId, $filePath)
```

Deletes a file synchronously.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes a file synchronously.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

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
$filePath = 'filePath_example'; // string

try {
    $apiInstance->deleteFile($accountId, $filePath);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **filePath** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileBatch()`

```php
deleteFileBatch($accountId, $deleteFileBatchRequest): \Bytescale\Model\AsyncResponse
```

Deletes multiple files asynchronously.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes multiple files asynchronously.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

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
$deleteFileBatchRequest = new \Bytescale\Model\DeleteFileBatchRequest(); // \Bytescale\Model\DeleteFileBatchRequest

try {
    $result = $apiInstance->deleteFileBatch($accountId, $deleteFileBatchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **deleteFileBatchRequest** | [**\Bytescale\Model\DeleteFileBatchRequest**](../Model/DeleteFileBatchRequest.md)|  | |

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

## `downloadFile()`

```php
downloadFile($accountId, $filePath, $cache, $cacheTtl, $version): \SplFileObject
```
### URI(s):
- https://upcdn.io 
Downloads a file in its original/unprocessed state.

Downloads a file in its original/unprocessed state.

### Example

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
$filePath = 'filePath_example'; // string
$cache = true; // bool | Specifies whether to cache the raw file in the Bytescale CDN.  Default: true
$cacheTtl = 31536000; // float | Specifies the maximum amount of time, in seconds, the file will be cached on the user's device and in the Bytescale CDN's edge cache.  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$version = 1; // string | Downloads the latest version of your file (if you have overwritten it) when added to the URL with a unique value.    The value of the `version` parameter can be anything, e.g. an incremental number, a timestamp, etc.    You only need to provide and update this value if/when you overwrite your file.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->downloadFile($accountId, $filePath, $cache, $cacheTtl, $version, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **filePath** | **string**|  | |
| **cache** | **bool**| Specifies whether to cache the raw file in the Bytescale CDN.  Default: true | [optional] |
| **cacheTtl** | **float**| Specifies the maximum amount of time, in seconds, the file will be cached on the user&#39;s device and in the Bytescale CDN&#39;s edge cache.  Default: Please refer to your account&#39;s default cache settings in the Bytescale Dashboard. | [optional] |
| **version** | **string**| Downloads the latest version of your file (if you have overwritten it) when added to the URL with a unique value.    The value of the &#x60;version&#x60; parameter can be anything, e.g. an incremental number, a timestamp, etc.    You only need to provide and update this value if/when you overwrite your file. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileDetails()`

```php
getFileDetails($accountId, $filePath): \Bytescale\Model\FileDetails
```

Gets the full details (e.g. metadata, tags, etc.) for a file.

Gets the full details (e.g. metadata, tags, etc.) for a file.

### Example

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
$filePath = 'filePath_example'; // string

try {
    $result = $apiInstance->getFileDetails($accountId, $filePath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **filePath** | **string**|  | |

### Return type

[**\Bytescale\Model\FileDetails**](../Model/FileDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processFile()`

```php
processFile($accountId, $filePath, $transformation, $artifact, $cache, $cacheOnly, $cachePerm, $cacheTtl, $transformationParams, $version): \SplFileObject
```
### URI(s):
- https://upcdn.io 
Processes a file and returns the result.

Processes a file and returns the result.

### Example

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
$filePath = 'filePath_example'; // string
$transformation = 'transformation_example'; // string | The name of the File Processing API (e.g. `image`, `video`, `audio`) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.
$artifact = 'artifact_example'; // string | Some transformations output multiple files, called artifacts.  You can download each individual transformation artifact by specifying its path with this parameter
$cache = true; // bool | Specifies whether to cache the transformed result.  If set to `false` the transformation will be executed on every request.  *Recommendation:* instead of disabling the cache, a more performant solution is to use the `version` parameter and to increment it each time you require an updated result.  Default: true
$cacheOnly = false; // bool | Only serve transformations from the cache; do not perform new transformations on cache miss.  If `true`, then if the transformation result does not exist in the cache, a 404 will be returned. No transformations will be performed.  If `false`, then if the transformation result does not exist in the cache, a new transformation will be performed to produce the result.  Default: `false`
$cachePerm = auto; // string | Specifies whether to cache the transformed result in the Bytescale CDN perma-cache.  Perma-caching works by storing your file permanently, or until a manual cache purge is performed.  When `cache=false` this parameter is automatically set to `false`.  When `cache_perm=auto` the perma-cache will only be used for files that take more than 1000ms to process.  When the perma-cache is used, approximately 200ms of latency is added to the initial request. Thereafter, files will be served from the Bytescale CDN's edge cache or perma-cache, so will have minimal latency.  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$cacheTtl = 31536000; // float | Specifies the maximum amount of time, in seconds, the transformed result will be cached on the user's device and in the Bytescale CDN's edge cache.  If the file is perma-cached, then the file will not be reprocessed on edge cache misses.  If the file is not perma-cached, then the file will be reprocessed on edge cache misses.  For more information on perma-caching, see: `cache_perm`  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$transformationParams = [{"w":800,"h":600,"fit":"crop"}]; // TransformationParams | Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api
$version = 1; // string | Add this parameter and increment its value to force the file to be reprocessed.  The Bytescale CDN caches files based on the full URL (including the querystring), meaning this parameter is useful when dealing with changes made to transformation presets. By contrast, File Processing APIs (like the Image Processing API) shouldn't ever require this parameter, since the URL/querystring naturally changes each time you adjust a parameter, causing a cache miss and the file to be reprocessed with the new querystring parameters.  The value of the `version` parameter can be anything, e.g. an incremental number, a timestamp, etc.  You only need to provide and update this value if/when you make changes to a transformation preset's settings.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->processFile($accountId, $filePath, $transformation, $artifact, $cache, $cacheOnly, $cachePerm, $cacheTtl, $transformationParams, $version, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->processFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **filePath** | **string**|  | |
| **transformation** | **string**| The name of the File Processing API (e.g. &#x60;image&#x60;, &#x60;video&#x60;, &#x60;audio&#x60;) or transformation preset (created in the Bytescale Dashboard) to use when processing the file. | |
| **artifact** | **string**| Some transformations output multiple files, called artifacts.  You can download each individual transformation artifact by specifying its path with this parameter | [optional] |
| **cache** | **bool**| Specifies whether to cache the transformed result.  If set to &#x60;false&#x60; the transformation will be executed on every request.  *Recommendation:* instead of disabling the cache, a more performant solution is to use the &#x60;version&#x60; parameter and to increment it each time you require an updated result.  Default: true | [optional] |
| **cacheOnly** | **bool**| Only serve transformations from the cache; do not perform new transformations on cache miss.  If &#x60;true&#x60;, then if the transformation result does not exist in the cache, a 404 will be returned. No transformations will be performed.  If &#x60;false&#x60;, then if the transformation result does not exist in the cache, a new transformation will be performed to produce the result.  Default: &#x60;false&#x60; | [optional] |
| **cachePerm** | **string**| Specifies whether to cache the transformed result in the Bytescale CDN perma-cache.  Perma-caching works by storing your file permanently, or until a manual cache purge is performed.  When &#x60;cache&#x3D;false&#x60; this parameter is automatically set to &#x60;false&#x60;.  When &#x60;cache_perm&#x3D;auto&#x60; the perma-cache will only be used for files that take more than 1000ms to process.  When the perma-cache is used, approximately 200ms of latency is added to the initial request. Thereafter, files will be served from the Bytescale CDN&#39;s edge cache or perma-cache, so will have minimal latency.  Default: Please refer to your account&#39;s default cache settings in the Bytescale Dashboard. | [optional] |
| **cacheTtl** | **float**| Specifies the maximum amount of time, in seconds, the transformed result will be cached on the user&#39;s device and in the Bytescale CDN&#39;s edge cache.  If the file is perma-cached, then the file will not be reprocessed on edge cache misses.  If the file is not perma-cached, then the file will be reprocessed on edge cache misses.  For more information on perma-caching, see: &#x60;cache_perm&#x60;  Default: Please refer to your account&#39;s default cache settings in the Bytescale Dashboard. | [optional] |
| **transformationParams** | [**TransformationParams**](../Model/.md)| Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api | [optional] |
| **version** | **string**| Add this parameter and increment its value to force the file to be reprocessed.  The Bytescale CDN caches files based on the full URL (including the querystring), meaning this parameter is useful when dealing with changes made to transformation presets. By contrast, File Processing APIs (like the Image Processing API) shouldn&#39;t ever require this parameter, since the URL/querystring naturally changes each time you adjust a parameter, causing a cache miss and the file to be reprocessed with the new querystring parameters.  The value of the &#x60;version&#x60; parameter can be anything, e.g. an incremental number, a timestamp, etc.  You only need to provide and update this value if/when you make changes to a transformation preset&#39;s settings. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processFileAndSave()`

```php
processFileAndSave($accountId, $filePath, $transformation, $processFileAndSaveRequest, $transformationParams): \Bytescale\Model\ProcessFileAndSaveResponse
```
### URI(s):
- https://upcdn.io 
Processes a file and saves the result.

Processes a file and saves the result.

### Example

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
$filePath = /source/image.jpg; // string
$transformation = 'transformation_example'; // string | The name of the File Processing API (e.g. `image`, `video`, `audio`) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.
$processFileAndSaveRequest = new \Bytescale\Model\ProcessFileAndSaveRequest(); // \Bytescale\Model\ProcessFileAndSaveRequest | File output parameters.
$transformationParams = [{"w":800,"h":600,"fit":"crop"}]; // TransformationParams | Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->processFileAndSave($accountId, $filePath, $transformation, $processFileAndSaveRequest, $transformationParams, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->processFileAndSave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **filePath** | **string**|  | |
| **transformation** | **string**| The name of the File Processing API (e.g. &#x60;image&#x60;, &#x60;video&#x60;, &#x60;audio&#x60;) or transformation preset (created in the Bytescale Dashboard) to use when processing the file. | |
| **processFileAndSaveRequest** | [**\Bytescale\Model\ProcessFileAndSaveRequest**](../Model/ProcessFileAndSaveRequest.md)| File output parameters. | |
| **transformationParams** | [**TransformationParams**](../Model/.md)| Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Bytescale\Model\ProcessFileAndSaveResponse**](../Model/ProcessFileAndSaveResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
