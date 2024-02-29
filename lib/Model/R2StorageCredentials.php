<?php
/**
 * R2StorageCredentials
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
 * R2StorageCredentials Class Doc Comment
 *
 * @category Class
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class R2StorageCredentials implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'R2Storage_credentials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'r2SecretKey' => 'string',
        'r2AccessKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'r2SecretKey' => null,
        'r2AccessKey' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'r2SecretKey' => false,
        'r2AccessKey' => false
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
        'r2SecretKey' => 'r2SecretKey',
        'r2AccessKey' => 'r2AccessKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'r2SecretKey' => 'setR2SecretKey',
        'r2AccessKey' => 'setR2AccessKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'r2SecretKey' => 'getR2SecretKey',
        'r2AccessKey' => 'getR2AccessKey'
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
        $this->setIfExists('r2SecretKey', $data ?? [], null);
        $this->setIfExists('r2AccessKey', $data ?? [], null);
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

        if ($this->container['r2SecretKey'] === null) {
            $invalidProperties[] = "'r2SecretKey' can't be null";
        }
        if ((mb_strlen($this->container['r2SecretKey']) > 128)) {
            $invalidProperties[] = "invalid value for 'r2SecretKey', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['r2SecretKey']) < 30)) {
            $invalidProperties[] = "invalid value for 'r2SecretKey', the character length must be bigger than or equal to 30.";
        }

        if (!preg_match("/^\\S*$/", $this->container['r2SecretKey'])) {
            $invalidProperties[] = "invalid value for 'r2SecretKey', must be conform to the pattern /^\\S*$/.";
        }

        if ($this->container['r2AccessKey'] === null) {
            $invalidProperties[] = "'r2AccessKey' can't be null";
        }
        if ((mb_strlen($this->container['r2AccessKey']) > 128)) {
            $invalidProperties[] = "invalid value for 'r2AccessKey', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['r2AccessKey']) < 16)) {
            $invalidProperties[] = "invalid value for 'r2AccessKey', the character length must be bigger than or equal to 16.";
        }

        if (!preg_match("/^\\S*$/", $this->container['r2AccessKey'])) {
            $invalidProperties[] = "invalid value for 'r2AccessKey', must be conform to the pattern /^\\S*$/.";
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
     * Gets r2SecretKey
     *
     * @return string
     */
    public function getR2SecretKey()
    {
        return $this->container['r2SecretKey'];
    }

    /**
     * Sets r2SecretKey
     *
     * @param string $r2SecretKey AWS Secret Access Key.
     *
     * @return self
     */
    public function setR2SecretKey($r2SecretKey)
    {
        if (is_null($r2SecretKey)) {
            throw new \InvalidArgumentException('non-nullable r2SecretKey cannot be null');
        }
        if ((mb_strlen($r2SecretKey) > 128)) {
            throw new \InvalidArgumentException('invalid length for $r2SecretKey when calling R2StorageCredentials., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($r2SecretKey) < 30)) {
            throw new \InvalidArgumentException('invalid length for $r2SecretKey when calling R2StorageCredentials., must be bigger than or equal to 30.');
        }
        if ((!preg_match("/^\\S*$/", ObjectSerializer::toString($r2SecretKey)))) {
            throw new \InvalidArgumentException("invalid value for \$r2SecretKey when calling R2StorageCredentials., must conform to the pattern /^\\S*$/.");
        }

        $this->container['r2SecretKey'] = $r2SecretKey;

        return $this;
    }

    /**
     * Gets r2AccessKey
     *
     * @return string
     */
    public function getR2AccessKey()
    {
        return $this->container['r2AccessKey'];
    }

    /**
     * Sets r2AccessKey
     *
     * @param string $r2AccessKey AWS Access Key.
     *
     * @return self
     */
    public function setR2AccessKey($r2AccessKey)
    {
        if (is_null($r2AccessKey)) {
            throw new \InvalidArgumentException('non-nullable r2AccessKey cannot be null');
        }
        if ((mb_strlen($r2AccessKey) > 128)) {
            throw new \InvalidArgumentException('invalid length for $r2AccessKey when calling R2StorageCredentials., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($r2AccessKey) < 16)) {
            throw new \InvalidArgumentException('invalid length for $r2AccessKey when calling R2StorageCredentials., must be bigger than or equal to 16.');
        }
        if ((!preg_match("/^\\S*$/", ObjectSerializer::toString($r2AccessKey)))) {
            throw new \InvalidArgumentException("invalid value for \$r2AccessKey when calling R2StorageCredentials., must conform to the pattern /^\\S*$/.");
        }

        $this->container['r2AccessKey'] = $r2AccessKey;

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


