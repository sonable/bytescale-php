<?php
/**
 * ListFolderResponse
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
 * ListFolderResponse Class Doc Comment
 *
 * @category Class
 * @description Response body for ListFolderDescendants.
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListFolderResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListFolderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cursor' => 'string',
        'folder' => '\Bytescale\Model\FolderSummary',
        'isPaginationComplete' => 'bool',
        'items' => '\Bytescale\Model\ObjectSummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cursor' => null,
        'folder' => null,
        'isPaginationComplete' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cursor' => false,
        'folder' => false,
        'isPaginationComplete' => false,
        'items' => false
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
        'cursor' => 'cursor',
        'folder' => 'folder',
        'isPaginationComplete' => 'isPaginationComplete',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cursor' => 'setCursor',
        'folder' => 'setFolder',
        'isPaginationComplete' => 'setIsPaginationComplete',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cursor' => 'getCursor',
        'folder' => 'getFolder',
        'isPaginationComplete' => 'getIsPaginationComplete',
        'items' => 'getItems'
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
        $this->setIfExists('cursor', $data ?? [], null);
        $this->setIfExists('folder', $data ?? [], null);
        $this->setIfExists('isPaginationComplete', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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

        if ($this->container['cursor'] === null) {
            $invalidProperties[] = "'cursor' can't be null";
        }
        if ((mb_strlen($this->container['cursor']) > 512)) {
            $invalidProperties[] = "invalid value for 'cursor', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['cursor']) < 1)) {
            $invalidProperties[] = "invalid value for 'cursor', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^\/.*$/", $this->container['cursor'])) {
            $invalidProperties[] = "invalid value for 'cursor', must be conform to the pattern /^\/.*$/.";
        }

        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['isPaginationComplete'] === null) {
            $invalidProperties[] = "'isPaginationComplete' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets cursor
     *
     * @return string
     */
    public function getCursor()
    {
        return $this->container['cursor'];
    }

    /**
     * Sets cursor
     *
     * @param string $cursor Absolute path to a file or folder. Begins with a `/`.
     *
     * @return self
     */
    public function setCursor($cursor)
    {
        if (is_null($cursor)) {
            throw new \InvalidArgumentException('non-nullable cursor cannot be null');
        }
        if ((mb_strlen($cursor) > 512)) {
            throw new \InvalidArgumentException('invalid length for $cursor when calling ListFolderResponse., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($cursor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cursor when calling ListFolderResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^\/.*$/", ObjectSerializer::toString($cursor)))) {
            throw new \InvalidArgumentException("invalid value for \$cursor when calling ListFolderResponse., must conform to the pattern /^\/.*$/.");
        }

        $this->container['cursor'] = $cursor;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \Bytescale\Model\FolderSummary
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \Bytescale\Model\FolderSummary $folder folder
     *
     * @return self
     */
    public function setFolder($folder)
    {
        if (is_null($folder)) {
            throw new \InvalidArgumentException('non-nullable folder cannot be null');
        }
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets isPaginationComplete
     *
     * @return bool
     */
    public function getIsPaginationComplete()
    {
        return $this->container['isPaginationComplete'];
    }

    /**
     * Sets isPaginationComplete
     *
     * @param bool $isPaginationComplete If `true` then paging has completed.
     *
     * @return self
     */
    public function setIsPaginationComplete($isPaginationComplete)
    {
        if (is_null($isPaginationComplete)) {
            throw new \InvalidArgumentException('non-nullable isPaginationComplete cannot be null');
        }
        $this->container['isPaginationComplete'] = $isPaginationComplete;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Bytescale\Model\ObjectSummary[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Bytescale\Model\ObjectSummary[] $items Summary information about each of the folder's descendants (files and folders).
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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


