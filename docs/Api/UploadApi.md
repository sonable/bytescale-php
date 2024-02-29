# Bytescale\UploadApi

All URIs are relative to https://api.bytescale.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**beginMultipartUpload()**](UploadApi.md#beginMultipartUpload) | **POST** /v2/accounts/{accountId}/uploads | Begins a new multipart file upload process. |
| [**completeUploadPart()**](UploadApi.md#completeUploadPart) | **PUT** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Marks an upload part as uploaded.  You must call this endpoint after you have successfully issued a &#x60;PUT&#x60; request to the &#x60;uploadUrl&#x60; on the corresponding UploadPart. |
| [**getUploadPart()**](UploadApi.md#getUploadPart) | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Gets a remaining upload part for a multipart file upload. |
| [**listUploadParts()**](UploadApi.md#listUploadParts) | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts | Lists the remaining upload parts for a multipart file upload.  An empty array is returned when the upload is complete. |
| [**uploadFromUrl()**](UploadApi.md#uploadFromUrl) | **POST** /v2/accounts/{accountId}/uploads/url | Upload from a URL with a single HTTP request: |


## `beginMultipartUpload()`

```php
beginMultipartUpload($accountId, $beginMultipartUploadRequest): \Bytescale\Model\BeginMultipartUploadResponse
```

Begins a new multipart file upload process.

Begins a new multipart file upload process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$beginMultipartUploadRequest = new \Bytescale\Model\BeginMultipartUploadRequest(); // \Bytescale\Model\BeginMultipartUploadRequest | File upload parameters.

try {
    $result = $apiInstance->beginMultipartUpload($accountId, $beginMultipartUploadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->beginMultipartUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **beginMultipartUploadRequest** | [**\Bytescale\Model\BeginMultipartUploadRequest**](../Model/BeginMultipartUploadRequest.md)| File upload parameters. | |

### Return type

[**\Bytescale\Model\BeginMultipartUploadResponse**](../Model/BeginMultipartUploadResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeUploadPart()`

```php
completeUploadPart($accountId, $uploadId, $uploadPartIndex, $completeUploadPartRequest)
```

Marks an upload part as uploaded.  You must call this endpoint after you have successfully issued a `PUT` request to the `uploadUrl` on the corresponding UploadPart.

Marks an upload part as uploaded.  You must call this endpoint after you have successfully issued a `PUT` request to the `uploadUrl` on the corresponding UploadPart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$uploadId = 'uploadId_example'; // string
$uploadPartIndex = 56; // int
$completeUploadPartRequest = new \Bytescale\Model\CompleteUploadPartRequest(); // \Bytescale\Model\CompleteUploadPartRequest

try {
    $apiInstance->completeUploadPart($accountId, $uploadId, $uploadPartIndex, $completeUploadPartRequest);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->completeUploadPart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **uploadId** | **string**|  | |
| **uploadPartIndex** | **int**|  | |
| **completeUploadPartRequest** | [**\Bytescale\Model\CompleteUploadPartRequest**](../Model/CompleteUploadPartRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUploadPart()`

```php
getUploadPart($accountId, $uploadId, $uploadPartIndex): \Bytescale\Model\UploadPart
```

Gets a remaining upload part for a multipart file upload.

Gets a remaining upload part for a multipart file upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$uploadId = 'uploadId_example'; // string
$uploadPartIndex = 56; // int

try {
    $result = $apiInstance->getUploadPart($accountId, $uploadId, $uploadPartIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->getUploadPart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **uploadId** | **string**|  | |
| **uploadPartIndex** | **int**|  | |

### Return type

[**\Bytescale\Model\UploadPart**](../Model/UploadPart.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUploadParts()`

```php
listUploadParts($accountId, $uploadId): \Bytescale\Model\UploadPartList
```

Lists the remaining upload parts for a multipart file upload.  An empty array is returned when the upload is complete.

Lists the remaining upload parts for a multipart file upload.  An empty array is returned when the upload is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$uploadId = 'uploadId_example'; // string

try {
    $result = $apiInstance->listUploadParts($accountId, $uploadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->listUploadParts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **uploadId** | **string**|  | |

### Return type

[**\Bytescale\Model\UploadPartList**](../Model/UploadPartList.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFromUrl()`

```php
uploadFromUrl($accountId, $uploadFromUrlRequest): \Bytescale\Model\BasicUploadResponse
```

Upload from a URL with a single HTTP request:

Upload from a URL with a single HTTP request:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$uploadFromUrlRequest = new \Bytescale\Model\UploadFromUrlRequest(); // \Bytescale\Model\UploadFromUrlRequest | File upload parameters.

try {
    $result = $apiInstance->uploadFromUrl($accountId, $uploadFromUrlRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **uploadFromUrlRequest** | [**\Bytescale\Model\UploadFromUrlRequest**](../Model/UploadFromUrlRequest.md)| File upload parameters. | |

### Return type

[**\Bytescale\Model\BasicUploadResponse**](../Model/BasicUploadResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
