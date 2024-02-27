# Swagger\Client\JobApi

All URIs are relative to *https://api.bytescale.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJob**](JobApi.md#canceljob) | **DELETE** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Cancels an in-progress background job.  Requires a &#x60;secret_*&#x60; API key.
[**getJob**](JobApi.md#getjob) | **GET** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Gets information on a background job.  Requires a &#x60;secret_*&#x60; API key.
[**listRecentJobs**](JobApi.md#listrecentjobs) | **GET** /v2/accounts/{accountId}/jobs | Lists the most recently issued background jobs.  Requires a &#x60;secret_*&#x60; API key.

# **cancelJob**
> cancelJob($account_id, $job_id, $job_type)

Cancels an in-progress background job.  Requires a `secret_*` API key.

Cancels an in-progress background job.  Requires a `secret_*` API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 
$job_id = new \Swagger\Client\Model\AccountJobId(); // \Swagger\Client\Model\AccountJobId | 
$job_type = new \Swagger\Client\Model\AccountJobType(); // \Swagger\Client\Model\AccountJobType | 

try {
    $apiInstance->cancelJob($account_id, $job_id, $job_type);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |
 **job_id** | [**\Swagger\Client\Model\AccountJobId**](../Model/.md)|  |
 **job_type** | [**\Swagger\Client\Model\AccountJobType**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \Swagger\Client\Model\JobSummary getJob($account_id, $job_id, $job_type)

Gets information on a background job.  Requires a `secret_*` API key.

Gets information on a background job.  Requires a `secret_*` API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 
$job_id = new \Swagger\Client\Model\AccountJobId(); // \Swagger\Client\Model\AccountJobId | 
$job_type = new \Swagger\Client\Model\AccountJobType(); // \Swagger\Client\Model\AccountJobType | 

try {
    $result = $apiInstance->getJob($account_id, $job_id, $job_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |
 **job_id** | [**\Swagger\Client\Model\AccountJobId**](../Model/.md)|  |
 **job_type** | [**\Swagger\Client\Model\AccountJobType**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\JobSummary**](../Model/JobSummary.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRecentJobs**
> \Swagger\Client\Model\ListRecentJobsResponse listRecentJobs($account_id, $job_type)

Lists the most recently issued background jobs.  Requires a `secret_*` API key.

Lists the most recently issued background jobs.  Requires a `secret_*` API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 
$job_type = array(new \Swagger\Client\Model\AccountJobType()); // \Swagger\Client\Model\AccountJobType[] | 

try {
    $result = $apiInstance->listRecentJobs($account_id, $job_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listRecentJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |
 **job_type** | [**\Swagger\Client\Model\AccountJobType[]**](../Model/\Swagger\Client\Model\AccountJobType.md)|  |

### Return type

[**\Swagger\Client\Model\ListRecentJobsResponse**](../Model/ListRecentJobsResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

