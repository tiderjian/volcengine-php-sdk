<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vefaas\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ItemForListReleaseRecordsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemForListReleaseRecordsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creation_time' => 'string',
        'description' => 'string',
        'finish_time' => 'string',
        'function_id' => 'string',
        'id' => 'string',
        'last_update_time' => 'string',
        'source_revision_number' => 'int',
        'status' => 'string',
        'target_revision_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'creation_time' => null,
        'description' => null,
        'finish_time' => null,
        'function_id' => null,
        'id' => null,
        'last_update_time' => null,
        'source_revision_number' => 'int32',
        'status' => null,
        'target_revision_number' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'creation_time' => 'CreationTime',
        'description' => 'Description',
        'finish_time' => 'FinishTime',
        'function_id' => 'FunctionId',
        'id' => 'Id',
        'last_update_time' => 'LastUpdateTime',
        'source_revision_number' => 'SourceRevisionNumber',
        'status' => 'Status',
        'target_revision_number' => 'TargetRevisionNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_time' => 'setCreationTime',
        'description' => 'setDescription',
        'finish_time' => 'setFinishTime',
        'function_id' => 'setFunctionId',
        'id' => 'setId',
        'last_update_time' => 'setLastUpdateTime',
        'source_revision_number' => 'setSourceRevisionNumber',
        'status' => 'setStatus',
        'target_revision_number' => 'setTargetRevisionNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_time' => 'getCreationTime',
        'description' => 'getDescription',
        'finish_time' => 'getFinishTime',
        'function_id' => 'getFunctionId',
        'id' => 'getId',
        'last_update_time' => 'getLastUpdateTime',
        'source_revision_number' => 'getSourceRevisionNumber',
        'status' => 'getStatus',
        'target_revision_number' => 'getTargetRevisionNumber'
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
        return self::$swaggerModelName;
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
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['function_id'] = isset($data['function_id']) ? $data['function_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_update_time'] = isset($data['last_update_time']) ? $data['last_update_time'] : null;
        $this->container['source_revision_number'] = isset($data['source_revision_number']) ? $data['source_revision_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['target_revision_number'] = isset($data['target_revision_number']) ? $data['target_revision_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets creation_time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param string $creation_time creation_time
     *
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return string
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param string $finish_time finish_time
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets function_id
     *
     * @return string
     */
    public function getFunctionId()
    {
        return $this->container['function_id'];
    }

    /**
     * Sets function_id
     *
     * @param string $function_id function_id
     *
     * @return $this
     */
    public function setFunctionId($function_id)
    {
        $this->container['function_id'] = $function_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_update_time
     *
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->container['last_update_time'];
    }

    /**
     * Sets last_update_time
     *
     * @param string $last_update_time last_update_time
     *
     * @return $this
     */
    public function setLastUpdateTime($last_update_time)
    {
        $this->container['last_update_time'] = $last_update_time;

        return $this;
    }

    /**
     * Gets source_revision_number
     *
     * @return int
     */
    public function getSourceRevisionNumber()
    {
        return $this->container['source_revision_number'];
    }

    /**
     * Sets source_revision_number
     *
     * @param int $source_revision_number source_revision_number
     *
     * @return $this
     */
    public function setSourceRevisionNumber($source_revision_number)
    {
        $this->container['source_revision_number'] = $source_revision_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets target_revision_number
     *
     * @return int
     */
    public function getTargetRevisionNumber()
    {
        return $this->container['target_revision_number'];
    }

    /**
     * Sets target_revision_number
     *
     * @param int $target_revision_number target_revision_number
     *
     * @return $this
     */
    public function setTargetRevisionNumber($target_revision_number)
    {
        $this->container['target_revision_number'] = $target_revision_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
