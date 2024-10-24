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

class ItemForListTriggersOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemForListTriggersOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'creation_time' => 'string',
        'description' => 'string',
        'detailed_config' => 'string',
        'enabled' => 'bool',
        'function_id' => 'string',
        'id' => 'string',
        'image_version' => 'string',
        'last_update_time' => 'string',
        'name' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'creation_time' => null,
        'description' => null,
        'detailed_config' => null,
        'enabled' => null,
        'function_id' => null,
        'id' => null,
        'image_version' => null,
        'last_update_time' => null,
        'name' => null,
        'type' => null
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
        'account_id' => 'AccountID',
        'creation_time' => 'CreationTime',
        'description' => 'Description',
        'detailed_config' => 'DetailedConfig',
        'enabled' => 'Enabled',
        'function_id' => 'FunctionID',
        'id' => 'Id',
        'image_version' => 'ImageVersion',
        'last_update_time' => 'LastUpdateTime',
        'name' => 'Name',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'creation_time' => 'setCreationTime',
        'description' => 'setDescription',
        'detailed_config' => 'setDetailedConfig',
        'enabled' => 'setEnabled',
        'function_id' => 'setFunctionId',
        'id' => 'setId',
        'image_version' => 'setImageVersion',
        'last_update_time' => 'setLastUpdateTime',
        'name' => 'setName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'creation_time' => 'getCreationTime',
        'description' => 'getDescription',
        'detailed_config' => 'getDetailedConfig',
        'enabled' => 'getEnabled',
        'function_id' => 'getFunctionId',
        'id' => 'getId',
        'image_version' => 'getImageVersion',
        'last_update_time' => 'getLastUpdateTime',
        'name' => 'getName',
        'type' => 'getType'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['detailed_config'] = isset($data['detailed_config']) ? $data['detailed_config'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['function_id'] = isset($data['function_id']) ? $data['function_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_version'] = isset($data['image_version']) ? $data['image_version'] : null;
        $this->container['last_update_time'] = isset($data['last_update_time']) ? $data['last_update_time'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
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
     * Gets detailed_config
     *
     * @return string
     */
    public function getDetailedConfig()
    {
        return $this->container['detailed_config'];
    }

    /**
     * Sets detailed_config
     *
     * @param string $detailed_config detailed_config
     *
     * @return $this
     */
    public function setDetailedConfig($detailed_config)
    {
        $this->container['detailed_config'] = $detailed_config;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * Gets image_version
     *
     * @return string
     */
    public function getImageVersion()
    {
        return $this->container['image_version'];
    }

    /**
     * Sets image_version
     *
     * @param string $image_version image_version
     *
     * @return $this
     */
    public function setImageVersion($image_version)
    {
        $this->container['image_version'] = $image_version;

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
