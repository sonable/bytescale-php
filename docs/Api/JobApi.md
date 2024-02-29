# BytescalePHP\Client\JobApi

All URIs are relative to *https://api.bytescale.com*

| Method                                         | HTTP request                                               | Description                                                                                |
| ---------------------------------------------- | ---------------------------------------------------------- | ------------------------------------------------------------------------------------------ |
| [**cancelJob**](JobApi.md#canceljob)           | **DELETE** /v2/accounts/{accountId}/jobs/{jobType}/{jobId} | Cancels an in-progress background job. Requires a &#x60;secret\_\*&#x60; API key.          |
| [**getJob**](JobApi.md#getjob)                 | **GET** /v2/accounts/{accountId}/jobs/{jobType}/{jobId}    | Gets information on a background job. Requires a &#x60;secret\_\*&#x60; API key.           |
| [**listRecentJobs**](JobApi.md#listrecentjobs) | **GET** /v2/accounts/{accountId}/jobs                      | Lists the most recently issued background jobs. Requires a &#x60;secret\_\*&#x60; API key. |

# **cancelJob**

> cancelJob($account_id, $job_id, $job_type)

Cancels an in-progress background job. Requires a `secret_*` API key.

Cancels an in-progress background job. Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$job_id = new \BytescalePHP\Client\Model\AccountJobId(); // \BytescalePHP\Client\Model\AccountJobId |
$job_type = new \BytescalePHP\Client\Model\AccountJobType(); // \BytescalePHP\Client\Model\AccountJobType |

try {
    $apiInstance->cancelJob($account_id, $job_id, $job_type);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                          | Description | Notes |
| -------------- | ------------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)      |             |
| **job_id**     | [**\BytescalePHP\Client\Model\AccountJobId**](../Model/.md)   |             |
| **job_type**   | [**\BytescalePHP\Client\Model\AccountJobType**](../Model/.md) |             |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**

> \BytescalePHP\Client\Model\JobSummary getJob($account_id, $job_id, $job_type)

Gets information on a background job. Requires a `secret_*` API key.

Gets information on a background job. Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$job_id = new \BytescalePHP\Client\Model\AccountJobId(); // \BytescalePHP\Client\Model\AccountJobId |
$job_type = new \BytescalePHP\Client\Model\AccountJobType(); // \BytescalePHP\Client\Model\AccountJobType |

try {
    $result = $apiInstance->getJob($account_id, $job_id, $job_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                          | Description | Notes |
| -------------- | ------------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)      |             |
| **job_id**     | [**\BytescalePHP\Client\Model\AccountJobId**](../Model/.md)   |             |
| **job_type**   | [**\BytescalePHP\Client\Model\AccountJobType**](../Model/.md) |             |

### Return type

[**\BytescalePHP\Client\Model\JobSummary**](../Model/JobSummary.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRecentJobs**

> \BytescalePHP\Client\Model\ListRecentJobsResponse listRecentJobs($account_id, $job_type)

Lists the most recently issued background jobs. Requires a `secret_*` API key.

Lists the most recently issued background jobs. Requires a `secret_*` API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$job_type = array(new \BytescalePHP\Client\Model\AccountJobType()); // \BytescalePHP\Client\Model\AccountJobType[] |

try {
    $result = $apiInstance->listRecentJobs($account_id, $job_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listRecentJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                                     | Description | Notes |
| -------------- | -------------------------------------------------------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                                 |             |
| **job_type**   | [**\BytescalePHP\Client\Model\AccountJobType[]**](../Model/\BytescalePHP\Client\Model\AccountJobType.md) |             |

### Return type

[**\BytescalePHP\Client\Model\ListRecentJobsResponse**](../Model/ListRecentJobsResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
