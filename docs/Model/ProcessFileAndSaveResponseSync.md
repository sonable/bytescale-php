# # ProcessFileAndSaveResponseSync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **string** | Your account ID.  This is visible on the settings page:  https://www.bytescale.com/dashboard/settings |
**async** | **bool** | False for synchronous file processing operations (e.g. image processing).  For synchronous operations, the response body will contain links to the transformed file. |
**filePath** | **string** | Absolute path to a file. Begins with a &#x60;/&#x60;. |
**fileUrl** | **string** | URL for an http(s) resource. |
**summary** | **array<string,mixed>** | JSON response returned by certain File Processing APIs.  Structure varies between File Processing APIs (please see the documentation of each individual File Processing API). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
