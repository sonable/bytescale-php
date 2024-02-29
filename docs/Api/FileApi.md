# BytescalePHP\Client\FileApi

All URIs are relative to *https://api.bytescale.com*

| Method                                                  | HTTP request                                          | Description                                                                                                                                                     |
| ------------------------------------------------------- | ----------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [**copyFile**](FileApi.md#copyfile)                     | **POST** /v2/accounts/{accountId}/files/copy          | Copies a file synchronously.                                                                                                                                    |
| [**copyFileBatch**](FileApi.md#copyfilebatch)           | **POST** /v2/accounts/{accountId}/files/copy/batch    | Copies multiple files asynchronously.                                                                                                                           |
| [**deleteFile**](FileApi.md#deletefile)                 | **DELETE** /v2/accounts/{accountId}/files             | Deletes a file synchronously. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.          |
| [**deleteFileBatch**](FileApi.md#deletefilebatch)       | **DELETE** /v2/accounts/{accountId}/files/batch       | Deletes multiple files asynchronously. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth. |
| [**downloadFile**](FileApi.md#downloadfile)             | **GET** /{accountId}/raw{filePath}                    | Downloads a file in its original/unprocessed state.                                                                                                             |
| [**getFileDetails**](FileApi.md#getfiledetails)         | **GET** /v2/accounts/{accountId}/files/details        | Gets the full details (e.g. metadata, tags, etc.) for a file.                                                                                                   |
| [**processFile**](FileApi.md#processfile)               | **GET** /{accountId}/{transformation}{filePath}       | Processes a file and returns the result.                                                                                                                        |
| [**processFileAndSave**](FileApi.md#processfileandsave) | **POST** /{accountId}/save/{transformation}{filePath} | Processes a file and saves the result.                                                                                                                          |

# **copyFile**

> \BytescalePHP\Client\Model\CopyFileResponse copyFile($body, $account_id)

Copies a file synchronously.

Copies a file synchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\CopyFileRequest(); // \BytescalePHP\Client\Model\CopyFileRequest |
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |

try {
    $result = $apiInstance->copyFile($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                          | Description | Notes |
| -------------- | ----------------------------------------------------------------------------- | ----------- | ----- |
| **body**       | [**\BytescalePHP\Client\Model\CopyFileRequest**](../Model/CopyFileRequest.md) |             |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                      |             |

### Return type

[**\BytescalePHP\Client\Model\CopyFileResponse**](../Model/CopyFileResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyFileBatch**

> \BytescalePHP\Client\Model\AsyncResponse copyFileBatch($body, $account_id)

Copies multiple files asynchronously.

Copies multiple files asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\CopyFileBatchRequest(); // \BytescalePHP\Client\Model\CopyFileBatchRequest |
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |

try {
    $result = $apiInstance->copyFileBatch($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->copyFileBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                    | Description | Notes |
| -------------- | --------------------------------------------------------------------------------------- | ----------- | ----- |
| **body**       | [**\BytescalePHP\Client\Model\CopyFileBatchRequest**](../Model/CopyFileBatchRequest.md) |             |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                |             |

### Return type

[**\BytescalePHP\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFile**

> deleteFile($account_id, $file_path)

Deletes a file synchronously. Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes a file synchronously. Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$file_path = new \BytescalePHP\Client\Model\FilePath(); // \BytescalePHP\Client\Model\FilePath |

try {
    $apiInstance->deleteFile($account_id, $file_path);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                     | Description | Notes |
| -------------- | -------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md) |             |
| **file_path**  | [**\BytescalePHP\Client\Model\FilePath**](../Model/.md)  |             |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileBatch**

> \BytescalePHP\Client\Model\AsyncResponse deleteFileBatch($body, $account_id)

Deletes multiple files asynchronously. Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes multiple files asynchronously. Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\DeleteFileBatchRequest(); // \BytescalePHP\Client\Model\DeleteFileBatchRequest |
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |

try {
    $result = $apiInstance->deleteFileBatch($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                        | Description | Notes |
| -------------- | ------------------------------------------------------------------------------------------- | ----------- | ----- |
| **body**       | [**\BytescalePHP\Client\Model\DeleteFileBatchRequest**](../Model/DeleteFileBatchRequest.md) |             |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                    |             |

### Return type

[**\BytescalePHP\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadFile**

> string downloadFile($account_id, $file_path, $cache, $cache_ttl, $version)

Downloads a file in its original/unprocessed state.

Downloads a file in its original/unprocessed state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$file_path = new \BytescalePHP\Client\Model\FilePath(); // \BytescalePHP\Client\Model\FilePath |
$cache = true; // bool | Specifies whether to cache the raw file in the Bytescale CDN.  Default: true
$cache_ttl = 1.2; // float | Specifies the maximum amount of time, in seconds, the file will be cached on the user's device and in the Bytescale CDN's edge cache.  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$version = "version_example"; // string | Downloads the latest version of your file (if you have overwritten it) when added to the URL with a unique value.    The value of the `version` parameter can be anything, e.g. an incremental number, a timestamp, etc.    You only need to provide and update this value if/when you overwrite your file.

try {
    $result = $apiInstance->downloadFile($account_id, $file_path, $cache, $cache_ttl, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                     | Description                                                                                                                                                                                                                                                                                                     | Notes      |
| -------------- | -------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md) |                                                                                                                                                                                                                                                                                                                 |
| **file_path**  | [**\BytescalePHP\Client\Model\FilePath**](../Model/.md)  |                                                                                                                                                                                                                                                                                                                 |
| **cache**      | **bool**                                                 | Specifies whether to cache the raw file in the Bytescale CDN. Default: true                                                                                                                                                                                                                                     | [optional] |
| **cache_ttl**  | **float**                                                | Specifies the maximum amount of time, in seconds, the file will be cached on the user&#x27;s device and in the Bytescale CDN&#x27;s edge cache. Default: Please refer to your account&#x27;s default cache settings in the Bytescale Dashboard.                                                                 | [optional] |
| **version**    | **string**                                               | Downloads the latest version of your file (if you have overwritten it) when added to the URL with a unique value. The value of the &#x60;version&#x60; parameter can be anything, e.g. an incremental number, a timestamp, etc. You only need to provide and update this value if/when you overwrite your file. | [optional] |

### Return type

**string**

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: \*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileDetails**

> \BytescalePHP\Client\Model\FileDetails getFileDetails($account_id, $file_path)

Gets the full details (e.g. metadata, tags, etc.) for a file.

Gets the full details (e.g. metadata, tags, etc.) for a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$file_path = new \BytescalePHP\Client\Model\FilePath(); // \BytescalePHP\Client\Model\FilePath |

try {
    $result = $apiInstance->getFileDetails($account_id, $file_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                     | Description | Notes |
| -------------- | -------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md) |             |
| **file_path**  | [**\BytescalePHP\Client\Model\FilePath**](../Model/.md)  |             |

### Return type

[**\BytescalePHP\Client\Model\FileDetails**](../Model/FileDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processFile**

> string processFile($account_id, $file_path, $transformation, $artifact, $cache, $cache_only, $cache_perm, $cache_ttl, $transformation_params, $version)

Processes a file and returns the result.

Processes a file and returns the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$file_path = new \BytescalePHP\Client\Model\FilePath(); // \BytescalePHP\Client\Model\FilePath |
$transformation = new \BytescalePHP\Client\Model\TransformationUrlSlug(); // \BytescalePHP\Client\Model\TransformationUrlSlug | The name of the File Processing API (e.g. `image`, `video`, `audio`) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.
$artifact = new \BytescalePHP\Client\Model\TransformationArtifactPath(); // \BytescalePHP\Client\Model\TransformationArtifactPath | Some transformations output multiple files, called artifacts.  You can download each individual transformation artifact by specifying its path with this parameter
$cache = true; // bool | Specifies whether to cache the transformed result.  If set to `false` the transformation will be executed on every request.  *Recommendation:* instead of disabling the cache, a more performant solution is to use the `version` parameter and to increment it each time you require an updated result.  Default: true
$cache_only = true; // bool | Only serve transformations from the cache; do not perform new transformations on cache miss.  If `true`, then if the transformation result does not exist in the cache, a 404 will be returned. No transformations will be performed.  If `false`, then if the transformation result does not exist in the cache, a new transformation will be performed to produce the result.  Default: `false`
$cache_perm = "cache_perm_example"; // string | Specifies whether to cache the transformed result in the Bytescale CDN perma-cache.  Perma-caching works by storing your file permanently, or until a manual cache purge is performed.  When `cache=false` this parameter is automatically set to `false`.  When `cache_perm=auto` the perma-cache will only be used for files that take more than 1000ms to process.  When the perma-cache is used, approximately 200ms of latency is added to the initial request. Thereafter, files will be served from the Bytescale CDN's edge cache or perma-cache, so will have minimal latency.  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$cache_ttl = 1.2; // float | Specifies the maximum amount of time, in seconds, the transformed result will be cached on the user's device and in the Bytescale CDN's edge cache.  If the file is perma-cached, then the file will not be reprocessed on edge cache misses.  If the file is not perma-cached, then the file will be reprocessed on edge cache misses.  For more information on perma-caching, see: `cache_perm`  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$transformation_params = new \BytescalePHP\Client\Model\TransformationParams(); // \BytescalePHP\Client\Model\TransformationParams | Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api
$version = "version_example"; // string | Add this parameter and increment its value to force the file to be reprocessed.  The Bytescale CDN caches files based on the full URL (including the querystring), meaning this parameter is useful when dealing with changes made to transformation presets. By contrast, File Processing APIs (like the Image Processing API) shouldn't ever require this parameter, since the URL/querystring naturally changes each time you adjust a parameter, causing a cache miss and the file to be reprocessed with the new querystring parameters.  The value of the `version` parameter can be anything, e.g. an incremental number, a timestamp, etc.  You only need to provide and update this value if/when you make changes to a transformation preset's settings.

try {
    $result = $apiInstance->processFile($account_id, $file_path, $transformation, $artifact, $cache, $cache_only, $cache_perm, $cache_ttl, $transformation_params, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->processFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                      | Type                                                                      | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Notes      |
| ------------------------- | ------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **account_id**            | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                  |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **file_path**             | [**\BytescalePHP\Client\Model\FilePath**](../Model/.md)                   |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **transformation**        | [**\BytescalePHP\Client\Model\TransformationUrlSlug**](../Model/.md)      | The name of the File Processing API (e.g. &#x60;image&#x60;, &#x60;video&#x60;, &#x60;audio&#x60;) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **artifact**              | [**\BytescalePHP\Client\Model\TransformationArtifactPath**](../Model/.md) | Some transformations output multiple files, called artifacts. You can download each individual transformation artifact by specifying its path with this parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [optional] |
| **cache**                 | **bool**                                                                  | Specifies whether to cache the transformed result. If set to &#x60;false&#x60; the transformation will be executed on every request. _Recommendation:_ instead of disabling the cache, a more performant solution is to use the &#x60;version&#x60; parameter and to increment it each time you require an updated result. Default: true                                                                                                                                                                                                                                                                                                                                                                                                                                            | [optional] |
| **cache_only**            | **bool**                                                                  | Only serve transformations from the cache; do not perform new transformations on cache miss. If &#x60;true&#x60;, then if the transformation result does not exist in the cache, a 404 will be returned. No transformations will be performed. If &#x60;false&#x60;, then if the transformation result does not exist in the cache, a new transformation will be performed to produce the result. Default: &#x60;false&#x60;                                                                                                                                                                                                                                                                                                                                                        | [optional] |
| **cache_perm**            | **string**                                                                | Specifies whether to cache the transformed result in the Bytescale CDN perma-cache. Perma-caching works by storing your file permanently, or until a manual cache purge is performed. When &#x60;cache&#x3D;false&#x60; this parameter is automatically set to &#x60;false&#x60;. When &#x60;cache_perm&#x3D;auto&#x60; the perma-cache will only be used for files that take more than 1000ms to process. When the perma-cache is used, approximately 200ms of latency is added to the initial request. Thereafter, files will be served from the Bytescale CDN&#x27;s edge cache or perma-cache, so will have minimal latency. Default: Please refer to your account&#x27;s default cache settings in the Bytescale Dashboard.                                                    | [optional] |
| **cache_ttl**             | **float**                                                                 | Specifies the maximum amount of time, in seconds, the transformed result will be cached on the user&#x27;s device and in the Bytescale CDN&#x27;s edge cache. If the file is perma-cached, then the file will not be reprocessed on edge cache misses. If the file is not perma-cached, then the file will be reprocessed on edge cache misses. For more information on perma-caching, see: &#x60;cache_perm&#x60; Default: Please refer to your account&#x27;s default cache settings in the Bytescale Dashboard.                                                                                                                                                                                                                                                                  | [optional] |
| **transformation_params** | [**\BytescalePHP\Client\Model\TransformationParams**](../Model/.md)       | Parameters to submit to the File Processing API (e.g. the Image Processing API). Please see the documentation for each File Processing API to determine which values can appear here: - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api                                                                                                                                                                                                                                                                                                                                                                     | [optional] |
| **version**               | **string**                                                                | Add this parameter and increment its value to force the file to be reprocessed. The Bytescale CDN caches files based on the full URL (including the querystring), meaning this parameter is useful when dealing with changes made to transformation presets. By contrast, File Processing APIs (like the Image Processing API) shouldn&#x27;t ever require this parameter, since the URL/querystring naturally changes each time you adjust a parameter, causing a cache miss and the file to be reprocessed with the new querystring parameters. The value of the &#x60;version&#x60; parameter can be anything, e.g. an incremental number, a timestamp, etc. You only need to provide and update this value if/when you make changes to a transformation preset&#x27;s settings. | [optional] |

### Return type

**string**

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: \*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processFileAndSave**

> \BytescalePHP\Client\Model\ProcessFileAndSaveResponse processFileAndSave($body, $account_id, $file_path, $transformation, $transformation_params)

Processes a file and saves the result.

Processes a file and saves the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\ProcessFileAndSaveRequest(); // \BytescalePHP\Client\Model\ProcessFileAndSaveRequest | File output parameters.
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$file_path = new \BytescalePHP\Client\Model\FilePath(); // \BytescalePHP\Client\Model\FilePath |
$transformation = new \BytescalePHP\Client\Model\TransformationUrlSlug(); // \BytescalePHP\Client\Model\TransformationUrlSlug | The name of the File Processing API (e.g. `image`, `video`, `audio`) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.
$transformation_params = new \BytescalePHP\Client\Model\TransformationParams(); // \BytescalePHP\Client\Model\TransformationParams | Parameters to submit to the File Processing API (e.g. the Image Processing API).  Please see the documentation for each File Processing API to determine which values can appear here:  - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api

try {
    $result = $apiInstance->processFileAndSave($body, $account_id, $file_path, $transformation, $transformation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->processFileAndSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                      | Type                                                                                              | Description                                                                                                                                                                                                                                                                                                                                                                                                     | Notes      |
| ------------------------- | ------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **body**                  | [**\BytescalePHP\Client\Model\ProcessFileAndSaveRequest**](../Model/ProcessFileAndSaveRequest.md) | File output parameters.                                                                                                                                                                                                                                                                                                                                                                                         |
| **account_id**            | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                          |                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **file_path**             | [**\BytescalePHP\Client\Model\FilePath**](../Model/.md)                                           |                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **transformation**        | [**\BytescalePHP\Client\Model\TransformationUrlSlug**](../Model/.md)                              | The name of the File Processing API (e.g. &#x60;image&#x60;, &#x60;video&#x60;, &#x60;audio&#x60;) or transformation preset (created in the Bytescale Dashboard) to use when processing the file.                                                                                                                                                                                                               |
| **transformation_params** | [**\BytescalePHP\Client\Model\TransformationParams**](../Model/.md)                               | Parameters to submit to the File Processing API (e.g. the Image Processing API). Please see the documentation for each File Processing API to determine which values can appear here: - https://www.bytescale.com/docs/image-processing-api - https://www.bytescale.com/docs/video-processing-api - https://www.bytescale.com/docs/audio-processing-api - https://www.bytescale.com/docs/archive-processing-api | [optional] |

### Return type

[**\BytescalePHP\Client\Model\ProcessFileAndSaveResponse**](../Model/ProcessFileAndSaveResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
