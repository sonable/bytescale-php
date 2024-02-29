# BytescalePHP\Client\UploadApi

All URIs are relative to *https://api.bytescale.com*

| Method                                                        | HTTP request                                                                | Description                                                                                                                                                                              |
| ------------------------------------------------------------- | --------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [**beginMultipartUpload**](UploadApi.md#beginmultipartupload) | **POST** /v2/accounts/{accountId}/uploads                                   | Begins a new multipart file upload process.                                                                                                                                              |
| [**completeUploadPart**](UploadApi.md#completeuploadpart)     | **PUT** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Marks an upload part as uploaded. You must call this endpoint after you have successfully issued a &#x60;PUT&#x60; request to the &#x60;uploadUrl&#x60; on the corresponding UploadPart. |
| [**getUploadPart**](UploadApi.md#getuploadpart)               | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Gets a remaining upload part for a multipart file upload.                                                                                                                                |
| [**listUploadParts**](UploadApi.md#listuploadparts)           | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts                   | Lists the remaining upload parts for a multipart file upload. An empty array is returned when the upload is complete.                                                                    |
| [**uploadFromUrl**](UploadApi.md#uploadfromurl)               | **POST** /v2/accounts/{accountId}/uploads/url                               | Upload from a URL with a single HTTP request:                                                                                                                                            |

# **beginMultipartUpload**

> \BytescalePHP\Client\Model\BeginMultipartUploadResponse beginMultipartUpload($body, $account_id)

Begins a new multipart file upload process.

Begins a new multipart file upload process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\BeginMultipartUploadRequest(); // \BytescalePHP\Client\Model\BeginMultipartUploadRequest | File upload parameters.
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |

try {
    $result = $apiInstance->beginMultipartUpload($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->beginMultipartUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                                  | Description             | Notes |
| -------------- | ----------------------------------------------------------------------------------------------------- | ----------------------- | ----- |
| **body**       | [**\BytescalePHP\Client\Model\BeginMultipartUploadRequest**](../Model/BeginMultipartUploadRequest.md) | File upload parameters. |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                              |                         |

### Return type

[**\BytescalePHP\Client\Model\BeginMultipartUploadResponse**](../Model/BeginMultipartUploadResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completeUploadPart**

> completeUploadPart($body, $account_id, $upload_id, $upload_part_index)

Marks an upload part as uploaded. You must call this endpoint after you have successfully issued a `PUT` request to the `uploadUrl` on the corresponding UploadPart.

Marks an upload part as uploaded. You must call this endpoint after you have successfully issued a `PUT` request to the `uploadUrl` on the corresponding UploadPart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\CompleteUploadPartRequest(); // \BytescalePHP\Client\Model\CompleteUploadPartRequest |
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$upload_id = new \BytescalePHP\Client\Model\UploadId(); // \BytescalePHP\Client\Model\UploadId |
$upload_part_index = new \BytescalePHP\Client\Model\UploadPartIndex(); // \BytescalePHP\Client\Model\UploadPartIndex |

try {
    $apiInstance->completeUploadPart($body, $account_id, $upload_id, $upload_part_index);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->completeUploadPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                  | Type                                                                                              | Description | Notes |
| --------------------- | ------------------------------------------------------------------------------------------------- | ----------- | ----- |
| **body**              | [**\BytescalePHP\Client\Model\CompleteUploadPartRequest**](../Model/CompleteUploadPartRequest.md) |             |
| **account_id**        | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                          |             |
| **upload_id**         | [**\BytescalePHP\Client\Model\UploadId**](../Model/.md)                                           |             |
| **upload_part_index** | [**\BytescalePHP\Client\Model\UploadPartIndex**](../Model/.md)                                    |             |

### Return type

void (empty response body)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadPart**

> \BytescalePHP\Client\Model\UploadPart getUploadPart($account_id, $upload_id, $upload_part_index)

Gets a remaining upload part for a multipart file upload.

Gets a remaining upload part for a multipart file upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$upload_id = new \BytescalePHP\Client\Model\UploadId(); // \BytescalePHP\Client\Model\UploadId |
$upload_part_index = new \BytescalePHP\Client\Model\UploadPartIndex(); // \BytescalePHP\Client\Model\UploadPartIndex |

try {
    $result = $apiInstance->getUploadPart($account_id, $upload_id, $upload_part_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->getUploadPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                  | Type                                                           | Description | Notes |
| --------------------- | -------------------------------------------------------------- | ----------- | ----- |
| **account_id**        | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)       |             |
| **upload_id**         | [**\BytescalePHP\Client\Model\UploadId**](../Model/.md)        |             |
| **upload_part_index** | [**\BytescalePHP\Client\Model\UploadPartIndex**](../Model/.md) |             |

### Return type

[**\BytescalePHP\Client\Model\UploadPart**](../Model/UploadPart.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUploadParts**

> \BytescalePHP\Client\Model\UploadPartList listUploadParts($account_id, $upload_id)

Lists the remaining upload parts for a multipart file upload. An empty array is returned when the upload is complete.

Lists the remaining upload parts for a multipart file upload. An empty array is returned when the upload is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |
$upload_id = new \BytescalePHP\Client\Model\UploadId(); // \BytescalePHP\Client\Model\UploadId |

try {
    $result = $apiInstance->listUploadParts($account_id, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->listUploadParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                     | Description | Notes |
| -------------- | -------------------------------------------------------- | ----------- | ----- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md) |             |
| **upload_id**  | [**\BytescalePHP\Client\Model\UploadId**](../Model/.md)  |             |

### Return type

[**\BytescalePHP\Client\Model\UploadPartList**](../Model/UploadPartList.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFromUrl**

> \BytescalePHP\Client\Model\BasicUploadResponse uploadFromUrl($body, $account_id)

Upload from a URL with a single HTTP request:

Upload from a URL with a single HTTP request:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BytescalePHP\Client\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BytescalePHP\Client\Model\UploadFromUrlRequest(); // \BytescalePHP\Client\Model\UploadFromUrlRequest | File upload parameters.
$account_id = new \BytescalePHP\Client\Model\AccountId(); // \BytescalePHP\Client\Model\AccountId |

try {
    $result = $apiInstance->uploadFromUrl($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadFromUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                    | Description             | Notes |
| -------------- | --------------------------------------------------------------------------------------- | ----------------------- | ----- |
| **body**       | [**\BytescalePHP\Client\Model\UploadFromUrlRequest**](../Model/UploadFromUrlRequest.md) | File upload parameters. |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](../Model/.md)                                |                         |

### Return type

[**\BytescalePHP\Client\Model\BasicUploadResponse**](../Model/BasicUploadResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
