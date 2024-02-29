<?php
/**
 * R2Storage
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
 * R2Storage Class Doc Comment
 *
 * @category Class
 * @description Storage layer used for storing files in Cloudflare R2, as opposed to Bytescale&#39;s built-in storage.  This is a read/write storage layer.
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class R2Storage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'R2Storage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bucket' => '\Bytescale\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket',
        'cloudflareAccountId' => 'string',
        'credentials' => '\Bytescale\Model\R2StorageCredentials',
        'type' => 'string',
        'useAbsolutePaths' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bucket' => null,
        'cloudflareAccountId' => null,
        'credentials' => null,
        'type' => null,
        'useAbsolutePaths' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bucket' => false,
        'cloudflareAccountId' => false,
        'credentials' => false,
        'type' => false,
        'useAbsolutePaths' => false
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
        'bucket' => 'bucket',
        'cloudflareAccountId' => 'cloudflareAccountId',
        'credentials' => 'credentials',
        'type' => 'type',
        'useAbsolutePaths' => 'useAbsolutePaths'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket' => 'setBucket',
        'cloudflareAccountId' => 'setCloudflareAccountId',
        'credentials' => 'setCredentials',
        'type' => 'setType',
        'useAbsolutePaths' => 'setUseAbsolutePaths'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket' => 'getBucket',
        'cloudflareAccountId' => 'getCloudflareAccountId',
        'credentials' => 'getCredentials',
        'type' => 'getType',
        'useAbsolutePaths' => 'getUseAbsolutePaths'
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

    public const TYPE_R2 = 'R2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_R2,
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
        $this->setIfExists('bucket', $data ?? [], null);
        $this->setIfExists('cloudflareAccountId', $data ?? [], null);
        $this->setIfExists('credentials', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('useAbsolutePaths', $data ?? [], null);
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

        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['cloudflareAccountId'] === null) {
            $invalidProperties[] = "'cloudflareAccountId' can't be null";
        }
        if ((mb_strlen($this->container['cloudflareAccountId']) > 64)) {
            $invalidProperties[] = "invalid value for 'cloudflareAccountId', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['cloudflareAccountId']) < 1)) {
            $invalidProperties[] = "invalid value for 'cloudflareAccountId', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^\\S*$/", $this->container['cloudflareAccountId'])) {
            $invalidProperties[] = "invalid value for 'cloudflareAccountId', must be conform to the pattern /^\\S*$/.";
        }

        if ($this->container['credentials'] === null) {
            $invalidProperties[] = "'credentials' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['useAbsolutePaths'] === null) {
            $invalidProperties[] = "'useAbsolutePaths' can't be null";
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
     * Gets bucket
     *
     * @return \Bytescale\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param \Bytescale\Model\PickR2StorageExcludeKeyofR2StorageCredentialsBucket $bucket bucket
     *
     * @return self
     */
    public function setBucket($bucket)
    {
        if (is_null($bucket)) {
            throw new \InvalidArgumentException('non-nullable bucket cannot be null');
        }
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets cloudflareAccountId
     *
     * @return string
     */
    public function getCloudflareAccountId()
    {
        return $this->container['cloudflareAccountId'];
    }

    /**
     * Sets cloudflareAccountId
     *
     * @param string $cloudflareAccountId Cloudflare Account ID.
     *
     * @return self
     */
    public function setCloudflareAccountId($cloudflareAccountId)
    {
        if (is_null($cloudflareAccountId)) {
            throw new \InvalidArgumentException('non-nullable cloudflareAccountId cannot be null');
        }
        if ((mb_strlen($cloudflareAccountId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cloudflareAccountId when calling R2Storage., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($cloudflareAccountId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cloudflareAccountId when calling R2Storage., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\\S*$/", ObjectSerializer::toString($cloudflareAccountId)))) {
            throw new \InvalidArgumentException("invalid value for \$cloudflareAccountId when calling R2Storage., must conform to the pattern /^\\S*$/.");
        }

        $this->container['cloudflareAccountId'] = $cloudflareAccountId;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \Bytescale\Model\R2StorageCredentials
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \Bytescale\Model\R2StorageCredentials $credentials credentials
     *
     * @return self
     */
    public function setCredentials($credentials)
    {
        if (is_null($credentials)) {
            throw new \InvalidArgumentException('non-nullable credentials cannot be null');
        }
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of this storage layer.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useAbsolutePaths
     *
     * @return bool
     */
    public function getUseAbsolutePaths()
    {
        return $this->container['useAbsolutePaths'];
    }

    /**
     * Sets useAbsolutePaths
     *
     * @param bool $useAbsolutePaths If `true` then writes Google Storage objects with full `filePath` as key, prefixed with the `objectKeyPrefix`.  If `false` then writes Google Storage objects using a relative `filePath` in relation to folder's path, prefixed with the `objectKeyPrefix`.
     *
     * @return self
     */
    public function setUseAbsolutePaths($useAbsolutePaths)
    {
        if (is_null($useAbsolutePaths)) {
            throw new \InvalidArgumentException('non-nullable useAbsolutePaths cannot be null');
        }
        $this->container['useAbsolutePaths'] = $useAbsolutePaths;

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


