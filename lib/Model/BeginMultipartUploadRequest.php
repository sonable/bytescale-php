<?php
/**
 * BeginMultipartUploadRequest
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
 * BeginMultipartUploadRequest Class Doc Comment
 *
 * @category Class
 * @description Request body for BeginMultipartUpload.
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BeginMultipartUploadRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BeginMultipartUploadRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metadata' => 'array<string,mixed>',
        'mime' => 'string',
        'originalFileName' => 'string',
        'path' => '\Bytescale\Model\FilePathDefinition',
        'protocol' => '\Bytescale\Model\MultipartUploadProtocol',
        'size' => 'int',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metadata' => null,
        'mime' => null,
        'originalFileName' => null,
        'path' => null,
        'protocol' => null,
        'size' => 'int32',
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'metadata' => false,
        'mime' => false,
        'originalFileName' => false,
        'path' => false,
        'protocol' => false,
        'size' => false,
        'tags' => false
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
        'metadata' => 'metadata',
        'mime' => 'mime',
        'originalFileName' => 'originalFileName',
        'path' => 'path',
        'protocol' => 'protocol',
        'size' => 'size',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metadata' => 'setMetadata',
        'mime' => 'setMime',
        'originalFileName' => 'setOriginalFileName',
        'path' => 'setPath',
        'protocol' => 'setProtocol',
        'size' => 'setSize',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metadata' => 'getMetadata',
        'mime' => 'getMime',
        'originalFileName' => 'getOriginalFileName',
        'path' => 'getPath',
        'protocol' => 'getProtocol',
        'size' => 'getSize',
        'tags' => 'getTags'
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
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('mime', $data ?? [], null);
        $this->setIfExists('originalFileName', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('protocol', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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

        if (!is_null($this->container['mime']) && (mb_strlen($this->container['mime']) > 255)) {
            $invalidProperties[] = "invalid value for 'mime', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['mime']) && (mb_strlen($this->container['mime']) < 3)) {
            $invalidProperties[] = "invalid value for 'mime', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['mime']) && !preg_match("/^[a-zA-Z0-9]+\/[a-zA-Z0-9+\\-._]+(?:;[^=]+=[^;]+)*$/", $this->container['mime'])) {
            $invalidProperties[] = "invalid value for 'mime', must be conform to the pattern /^[a-zA-Z0-9]+\/[a-zA-Z0-9+\\-._]+(?:;[^=]+=[^;]+)*$/.";
        }

        if (!is_null($this->container['originalFileName']) && (mb_strlen($this->container['originalFileName']) > 255)) {
            $invalidProperties[] = "invalid value for 'originalFileName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['originalFileName']) && (mb_strlen($this->container['originalFileName']) < 1)) {
            $invalidProperties[] = "invalid value for 'originalFileName', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['originalFileName']) && !preg_match("/^.+$/", $this->container['originalFileName'])) {
            $invalidProperties[] = "invalid value for 'originalFileName', must be conform to the pattern /^.+$/.";
        }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if (($this->container['size'] < 0)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
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
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata The file metadata specified in the original upload request as a JSON object.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets mime
     *
     * @return string|null
     */
    public function getMime()
    {
        return $this->container['mime'];
    }

    /**
     * Sets mime
     *
     * @param string|null $mime File MIME type.
     *
     * @return self
     */
    public function setMime($mime)
    {
        if (is_null($mime)) {
            throw new \InvalidArgumentException('non-nullable mime cannot be null');
        }
        if ((mb_strlen($mime) > 255)) {
            throw new \InvalidArgumentException('invalid length for $mime when calling BeginMultipartUploadRequest., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($mime) < 3)) {
            throw new \InvalidArgumentException('invalid length for $mime when calling BeginMultipartUploadRequest., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+\/[a-zA-Z0-9+\\-._]+(?:;[^=]+=[^;]+)*$/", ObjectSerializer::toString($mime)))) {
            throw new \InvalidArgumentException("invalid value for \$mime when calling BeginMultipartUploadRequest., must conform to the pattern /^[a-zA-Z0-9]+\/[a-zA-Z0-9+\\-._]+(?:;[^=]+=[^;]+)*$/.");
        }

        $this->container['mime'] = $mime;

        return $this;
    }

    /**
     * Gets originalFileName
     *
     * @return string|null
     */
    public function getOriginalFileName()
    {
        return $this->container['originalFileName'];
    }

    /**
     * Sets originalFileName
     *
     * @param string|null $originalFileName The file's original name on the user's device.
     *
     * @return self
     */
    public function setOriginalFileName($originalFileName)
    {
        if (is_null($originalFileName)) {
            throw new \InvalidArgumentException('non-nullable originalFileName cannot be null');
        }
        if ((mb_strlen($originalFileName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $originalFileName when calling BeginMultipartUploadRequest., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($originalFileName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $originalFileName when calling BeginMultipartUploadRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^.+$/", ObjectSerializer::toString($originalFileName)))) {
            throw new \InvalidArgumentException("invalid value for \$originalFileName when calling BeginMultipartUploadRequest., must conform to the pattern /^.+$/.");
        }

        $this->container['originalFileName'] = $originalFileName;

        return $this;
    }

    /**
     * Gets path
     *
     * @return \Bytescale\Model\FilePathDefinition|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param \Bytescale\Model\FilePathDefinition|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return \Bytescale\Model\MultipartUploadProtocol|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param \Bytescale\Model\MultipartUploadProtocol|null $protocol protocol
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        if (is_null($protocol)) {
            throw new \InvalidArgumentException('non-nullable protocol cannot be null');
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Size in bytes.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        if (($size < 0)) {
            throw new \InvalidArgumentException('invalid value for $size when calling BeginMultipartUploadRequest., must be bigger than or equal to 0.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags The file tags to store against the file.  When you associate file tags with a file, Bytescale checks which rules match the tags (if any) and applies those rules to the upload request:  Rules can include max file size checks, traffic limit checks, rate limit checks, and so forth. These are configured in the Bytescale Dashboard.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

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


