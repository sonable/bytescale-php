# Swagger\Client\FolderApi

All URIs are relative to *https://api.bytescale.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFolder**](FolderApi.md#copyfolder) | **POST** /v2/accounts/{accountId}/folders/copy | Copies a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.
[**copyFolderBatch**](FolderApi.md#copyfolderbatch) | **POST** /v2/accounts/{accountId}/folders/copy/batch | Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.
[**deleteFolder**](FolderApi.md#deletefolder) | **DELETE** /v2/accounts/{accountId}/folders | Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#x27;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
[**deleteFolderBatch**](FolderApi.md#deletefolderbatch) | **DELETE** /v2/accounts/{accountId}/folders/batch | Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.  *When deleting a folder with external storage:* if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#x27;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
[**getFolderDetails**](FolderApi.md#getfolderdetails) | **GET** /v2/accounts/{accountId}/folders | Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.
[**listFolder**](FolderApi.md#listfolder) | **GET** /v2/accounts/{accountId}/folders/list | Lists the folder&#x27;s contents.  The result may be paginated: subsequent pages can be requested by passing the &#x60;&#x60;&#x60;cursor&#x60;&#x60;&#x60; from the response into the next request.  Pagination is complete when the response includes &#x60;isPaginationComplete&#x3D;true&#x60;.
[**putFolder**](FolderApi.md#putfolder) | **PUT** /v2/accounts/{accountId}/folders | Creates or updates the folder specified by the &#x60;folderPath&#x60;.  If the folder&#x27;s ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don&#x27;t need to create folders before uploading files to them.  Requires a &#x60;secret_*&#x60; API key. Alternatively, you can use a &#x60;public_*&#x60; API key and JWT-based auth.

# **copyFolder**
> \Swagger\Client\Model\AsyncResponse copyFolder($body, $account_id)

Copies a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

Copies a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CopyFolderRequest(); // \Swagger\Client\Model\CopyFolderRequest | 
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 

try {
    $result = $apiInstance->copyFolder($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->copyFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CopyFolderRequest**](../Model/CopyFolderRequest.md)|  |
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyFolderBatch**
> \Swagger\Client\Model\AsyncResponse copyFolderBatch($body, $account_id)

Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

Copies multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CopyFolderBatchRequest(); // \Swagger\Client\Model\CopyFolderBatchRequest | 
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 

try {
    $result = $apiInstance->copyFolderBatch($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->copyFolderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CopyFolderBatchRequest**](../Model/CopyFolderBatchRequest.md)|  |
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolder**
> \Swagger\Client\Model\AsyncResponse deleteFolder($body, $account_id)

Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes a folder asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeleteFolderRequest(); // \Swagger\Client\Model\DeleteFolderRequest | 
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 

try {
    $result = $apiInstance->deleteFolder($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteFolderRequest**](../Model/DeleteFolderRequest.md)|  |
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolderBatch**
> \Swagger\Client\Model\AsyncResponse deleteFolderBatch($body, $account_id)

Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Deletes multiple folders asynchronously.  You can use ListFolder to preview the operation using the `dryRun` parameter.  *When deleting a folder with external storage:* if the folder at `folderPath` has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at `folderPath` has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won't be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeleteFolderBatchRequest(); // \Swagger\Client\Model\DeleteFolderBatchRequest | 
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 

try {
    $result = $apiInstance->deleteFolderBatch($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->deleteFolderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteFolderBatchRequest**](../Model/DeleteFolderBatchRequest.md)|  |
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderDetails**
> \Swagger\Client\Model\FolderDetails getFolderDetails($account_id, $folder_path)

Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Gets the full details (e.g. permission, storage layer, etc.) for a folder.  Returns an empty object if no settings have been configured for this folder.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 
$folder_path = new \Swagger\Client\Model\FolderPath(); // \Swagger\Client\Model\FolderPath | 

try {
    $result = $apiInstance->getFolderDetails($account_id, $folder_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->getFolderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |
 **folder_path** | [**\Swagger\Client\Model\FolderPath**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\FolderDetails**](../Model/FolderDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFolder**
> \Swagger\Client\Model\ListFolderResponse listFolder($account_id, $folder_path, $cursor, $dry_run, $include_files, $include_overridden_storage, $include_physical_folders, $include_virtual_folders, $limit, $recursive)

Lists the folder's contents.  The result may be paginated: subsequent pages can be requested by passing the ```cursor``` from the response into the next request.  Pagination is complete when the response includes `isPaginationComplete=true`.

Lists the folder's contents.  The result may be paginated: subsequent pages can be requested by passing the ```cursor``` from the response into the next request.  Pagination is complete when the response includes `isPaginationComplete=true`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 
$folder_path = new \Swagger\Client\Model\FolderPath(); // \Swagger\Client\Model\FolderPath | 
$cursor = new \Swagger\Client\Model\ListFolderCursor(); // \Swagger\Client\Model\ListFolderCursor | 
$dry_run = new \Swagger\Client\Model\ListFolderDryRun(); // \Swagger\Client\Model\ListFolderDryRun | 
$include_files = new \Swagger\Client\Model\IncludeFiles(); // \Swagger\Client\Model\IncludeFiles | 
$include_overridden_storage = new \Swagger\Client\Model\IncludeOverriddenStorage(); // \Swagger\Client\Model\IncludeOverriddenStorage | 
$include_physical_folders = new \Swagger\Client\Model\IncludePhysicalFolders(); // \Swagger\Client\Model\IncludePhysicalFolders | 
$include_virtual_folders = new \Swagger\Client\Model\IncludeVirtualFolders(); // \Swagger\Client\Model\IncludeVirtualFolders | 
$limit = new \Swagger\Client\Model\ListFolderItemLimit(); // \Swagger\Client\Model\ListFolderItemLimit | 
$recursive = new \Swagger\Client\Model\IterateFolderRecursively(); // \Swagger\Client\Model\IterateFolderRecursively | 

try {
    $result = $apiInstance->listFolder($account_id, $folder_path, $cursor, $dry_run, $include_files, $include_overridden_storage, $include_physical_folders, $include_virtual_folders, $limit, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->listFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |
 **folder_path** | [**\Swagger\Client\Model\FolderPath**](../Model/.md)|  |
 **cursor** | [**\Swagger\Client\Model\ListFolderCursor**](../Model/.md)|  | [optional]
 **dry_run** | [**\Swagger\Client\Model\ListFolderDryRun**](../Model/.md)|  | [optional]
 **include_files** | [**\Swagger\Client\Model\IncludeFiles**](../Model/.md)|  | [optional]
 **include_overridden_storage** | [**\Swagger\Client\Model\IncludeOverriddenStorage**](../Model/.md)|  | [optional]
 **include_physical_folders** | [**\Swagger\Client\Model\IncludePhysicalFolders**](../Model/.md)|  | [optional]
 **include_virtual_folders** | [**\Swagger\Client\Model\IncludeVirtualFolders**](../Model/.md)|  | [optional]
 **limit** | [**\Swagger\Client\Model\ListFolderItemLimit**](../Model/.md)|  | [optional]
 **recursive** | [**\Swagger\Client\Model\IterateFolderRecursively**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ListFolderResponse**](../Model/ListFolderResponse.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFolder**
> \Swagger\Client\Model\FolderDetails putFolder($body, $account_id)

Creates or updates the folder specified by the `folderPath`.  If the folder's ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don't need to create folders before uploading files to them.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

Creates or updates the folder specified by the `folderPath`.  If the folder's ancestors do not exist, they will be created automatically (with empty FolderSettings).  Note: you don't need to create folders before uploading files to them.  Requires a `secret_*` API key. Alternatively, you can use a `public_*` API key and JWT-based auth.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: authorization-header
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PutFolderRequest(); // \Swagger\Client\Model\PutFolderRequest | 
$account_id = new \Swagger\Client\Model\AccountId(); // \Swagger\Client\Model\AccountId | 

try {
    $result = $apiInstance->putFolder($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderApi->putFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PutFolderRequest**](../Model/PutFolderRequest.md)|  |
 **account_id** | [**\Swagger\Client\Model\AccountId**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\FolderDetails**](../Model/FolderDetails.md)

### Authorization

[authorization-header](../../README.md#authorization-header)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

