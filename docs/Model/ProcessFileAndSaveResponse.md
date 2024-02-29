# # ProcessFileAndSaveResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobDocs** | **string** | Link to the documentation that describes how to get a job&#39;s status from its job ID. |
**jobId** | **string** | Job ID. |
**jobType** | [**\Bytescale\Model\AccountJobType**](AccountJobType.md) |  |
**jobUrl** | **string** | URL for the job&#39;s status.  You can &#x60;GET&#x60; this URL to retrieve the job&#39;s status.  You must authorize your &#x60;GET&#x60; request with a &#x60;&#x60;&#x60;secret_*&#x60;&#x60;&#x60; API key when accessing the URL. |
**accountId** | **string** | Your account ID.  This is visible on the settings page:  https://www.bytescale.com/dashboard/settings |
**created** | **int** | Epoch milliseconds (since midnight 1 January 1970, UTC). |
**error** | [**\Bytescale\Model\JobSummaryError**](JobSummaryError.md) |  |
**lastUpdated** | **int** | Epoch milliseconds (since midnight 1 January 1970, UTC). |
**status** | [**\Bytescale\Model\AccountJobStatus**](AccountJobStatus.md) |  |
**summary** | **array<string,object>** | JSON response returned by certain File Processing APIs.  Structure varies between File Processing APIs (please see the documentation of each individual File Processing API). |
**async** | **bool** | False for synchronous file processing operations (e.g. image processing).  For synchronous operations, the response body will contain links to the transformed file. |
**filePath** | **string** | Absolute path to a file. Begins with a &#x60;/&#x60;. |
**fileUrl** | **string** | URL for an http(s) resource. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
