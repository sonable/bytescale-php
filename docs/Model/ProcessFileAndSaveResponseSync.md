# ProcessFileAndSaveResponseSync

## Properties

| Name           | Type                                                                             | Description                                                                                                                                                         | Notes      |
| -------------- | -------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------- |
| **account_id** | [**\BytescalePHP\Client\Model\AccountId**](AccountId.md)                         |                                                                                                                                                                     |
| **async**      | **bool**                                                                         | False for synchronous file processing operations (e.g. image processing). For synchronous operations, the response body will contain links to the transformed file. |
| **file_path**  | [**\BytescalePHP\Client\Model\FilePath**](FilePath.md)                           |                                                                                                                                                                     |
| **file_url**   | [**\BytescalePHP\Client\Model\HttpUrl**](HttpUrl.md)                             |                                                                                                                                                                     |
| **summary**    | [**\BytescalePHP\Client\Model\TransformationSummary**](TransformationSummary.md) |                                                                                                                                                                     | [optional] |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
