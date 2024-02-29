<?php
/**
 * AsyncResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bytescale\Model;

use \ArrayAccess;
use \Bytescale\ObjectSerializer;

/**
 * AsyncResponse Class Doc Comment
 *
 * @category Class
 * @description Response body from an API endpoint that performs work asynchronously (i.e. does not complete the work immediately).
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AsyncResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AsyncResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'jobDocs' => 'string',
        'jobId' => 'string',
        'jobType' => '\Bytescale\Model\AccountJobType',
        'jobUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'jobDocs' => null,
        'jobId' => null,
        'jobType' => null,
        'jobUrl' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'jobDocs' => false,
        'jobId' => false,
        'jobType' => false,
        'jobUrl' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'jobDocs' => 'jobDocs',
        'jobId' => 'jobId',
        'jobType' => 'jobType',
        'jobUrl' => 'jobUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jobDocs' => 'setJobDocs',
        'jobId' => 'setJobId',
        'jobType' => 'setJobType',
        'jobUrl' => 'setJobUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jobDocs' => 'getJobDocs',
        'jobId' => 'getJobId',
        'jobType' => 'getJobType',
        'jobUrl' => 'getJobUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const JOB_DOCS_HTTPS__WWW_BYTESCALE_COM_DOCS_JOB_API_GET_JOB = 'https://www.bytescale.com/docs/job-api/GetJob';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJobDocsAllowableValues()
    {
        return [
            self::JOB_DOCS_HTTPS__WWW_BYTESCALE_COM_DOCS_JOB_API_GET_JOB,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('jobDocs', $data ?? [], null);
        $this->setIfExists('jobId', $data ?? [], null);
        $this->setIfExists('jobType', $data ?? [], null);
        $this->setIfExists('jobUrl', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['jobDocs'] === null) {
            $invalidProperties[] = "'jobDocs' can't be null";
        }
        $allowedValues = $this->getJobDocsAllowableValues();
        if (!is_null($this->container['jobDocs']) && !in_array($this->container['jobDocs'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'jobDocs', must be one of '%s'",
                $this->container['jobDocs'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ((mb_strlen($this->container['jobId']) > 26)) {
            $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 26.";
        }

        if ((mb_strlen($this->container['jobId']) < 26)) {
            $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 26.";
        }

        if (!preg_match("/^[0-9A-Z]+$/", $this->container['jobId'])) {
            $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /^[0-9A-Z]+$/.";
        }

        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['jobUrl'] === null) {
            $invalidProperties[] = "'jobUrl' can't be null";
        }
        if ((mb_strlen($this->container['jobUrl']) > 255)) {
            $invalidProperties[] = "invalid value for 'jobUrl', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['jobUrl']) < 1)) {
            $invalidProperties[] = "invalid value for 'jobUrl', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[-a-zA-Z0-9]+(?:\\.[-a-zA-Z0-9]+)+(\/.*)?$/", $this->container['jobUrl'])) {
            $invalidProperties[] = "invalid value for 'jobUrl', must be conform to the pattern /^https?:\/\/[-a-zA-Z0-9]+(?:\\.[-a-zA-Z0-9]+)+(\/.*)?$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets jobDocs
     *
     * @return string
     */
    public function getJobDocs()
    {
        return $this->container['jobDocs'];
    }

    /**
     * Sets jobDocs
     *
     * @param string $jobDocs Link to the documentation that describes how to get a job's status from its job ID.
     *
     * @return self
     */
    public function setJobDocs($jobDocs)
    {
        if (is_null($jobDocs)) {
            throw new \InvalidArgumentException('non-nullable jobDocs cannot be null');
        }
        $allowedValues = $this->getJobDocsAllowableValues();
        if (!in_array($jobDocs, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'jobDocs', must be one of '%s'",
                    $jobDocs,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['jobDocs'] = $jobDocs;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string $jobId Job ID.
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        if (is_null($jobId)) {
            throw new \InvalidArgumentException('non-nullable jobId cannot be null');
        }
        if ((mb_strlen($jobId) > 26)) {
            throw new \InvalidArgumentException('invalid length for $jobId when calling AsyncResponse., must be smaller than or equal to 26.');
        }
        if ((mb_strlen($jobId) < 26)) {
            throw new \InvalidArgumentException('invalid length for $jobId when calling AsyncResponse., must be bigger than or equal to 26.');
        }
        if ((!preg_match("/^[0-9A-Z]+$/", ObjectSerializer::toString($jobId)))) {
            throw new \InvalidArgumentException("invalid value for \$jobId when calling AsyncResponse., must conform to the pattern /^[0-9A-Z]+$/.");
        }

        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobType
     *
     * @return \Bytescale\Model\AccountJobType
     */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
     * Sets jobType
     *
     * @param \Bytescale\Model\AccountJobType $jobType jobType
     *
     * @return self
     */
    public function setJobType($jobType)
    {
        if (is_null($jobType)) {
            throw new \InvalidArgumentException('non-nullable jobType cannot be null');
        }
        $this->container['jobType'] = $jobType;

        return $this;
    }

    /**
     * Gets jobUrl
     *
     * @return string
     */
    public function getJobUrl()
    {
        return $this->container['jobUrl'];
    }

    /**
     * Sets jobUrl
     *
     * @param string $jobUrl URL for the job's status.  You can `GET` this URL to retrieve the job's status.  You must authorize your `GET` request with a ```secret_*``` API key when accessing the URL.
     *
     * @return self
     */
    public function setJobUrl($jobUrl)
    {
        if (is_null($jobUrl)) {
            throw new \InvalidArgumentException('non-nullable jobUrl cannot be null');
        }
        if ((mb_strlen($jobUrl) > 255)) {
            throw new \InvalidArgumentException('invalid length for $jobUrl when calling AsyncResponse., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($jobUrl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $jobUrl when calling AsyncResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^https?:\/\/[-a-zA-Z0-9]+(?:\\.[-a-zA-Z0-9]+)+(\/.*)?$/", ObjectSerializer::toString($jobUrl)))) {
            throw new \InvalidArgumentException("invalid value for \$jobUrl when calling AsyncResponse., must conform to the pattern /^https?:\/\/[-a-zA-Z0-9]+(?:\\.[-a-zA-Z0-9]+)+(\/.*)?$/.");
        }

        $this->container['jobUrl'] = $jobUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


