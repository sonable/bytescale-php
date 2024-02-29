# Bytescale\JobApi

All URIs are relative to https://api.bytescale.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelJob()**](JobApi.md#cancelJob) | **DELETE** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Cancels an in-progress background job.  Requires a &#x60;secret_*&#x60; API key. |
| [**getJob()**](JobApi.md#getJob) | **GET** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Gets information on a background job.  Requires a &#x60;secret_*&#x60; API key. |
| [**listRecentJobs()**](JobApi.md#listRecentJobs) | **GET** /v2/accounts/{accountId}/jobs | Lists the most recently issued background jobs.  Requires a &#x60;secret_*&#x60; API key. |


## `cancelJob()`

```php
cancelJob($accountId, $jobId, $jobType)
```

Cancels an in-progress background job.  Requires a `secret_*` API key.

Cancels an in-progress background job.  Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$jobId = 'jobId_example'; // string
$jobType = new \Bytescale\Model\AccountJobType(); // AccountJobType

try {
    $apiInstance->cancelJob($accountId, $jobId, $jobType);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **jobId** | **string**|  | |
| **jobType** | [**AccountJobType**](../Model/.md)|  | |

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

## `getJob()`

```php
getJob($accountId, $jobId, $jobType): \Bytescale\Model\JobSummary
```

Gets information on a background job.  Requires a `secret_*` API key.

Gets information on a background job.  Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$jobId = 'jobId_example'; // string
$jobType = new \Bytescale\Model\AccountJobType(); // AccountJobType

try {
    $result = $apiInstance->getJob($accountId, $jobId, $jobType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **jobId** | **string**|  | |
| **jobType** | [**AccountJobType**](../Model/.md)|  | |

### Return type

[**\Bytescale\Model\JobSummary**](../Model/JobSummary.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRecentJobs()`

```php
listRecentJobs($accountId, $jobType): \Bytescale\Model\ListRecentJobsResponse
```

Lists the most recently issued background jobs.  Requires a `secret_*` API key.

Lists the most recently issued background jobs.  Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authorization-header
$config = Bytescale\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bytescale\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Bytescale\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 'accountId_example'; // string
$jobType = array(new \Bytescale\Model\\Bytescale\Model\AccountJobType()); // \Bytescale\Model\AccountJobType[]

try {
    $result = $apiInstance->listRecentJobs($accountId, $jobType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listRecentJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountId** | **string**|  | |
| **jobType** | [**\Bytescale\Model\AccountJobType[]**](../Model/\Bytescale\Model\AccountJobType.md)|  | |

### Return type

[**\Bytescale\Model\ListRecentJobsResponse**](../Model/ListRecentJobsResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
