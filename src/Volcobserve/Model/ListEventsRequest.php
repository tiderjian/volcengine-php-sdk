<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Volcobserve\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ListEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListEventsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asc' => 'bool',
        'end_time' => 'int',
        'event_type' => 'string[]',
        'id' => 'string[]',
        'order_by' => 'string',
        'page_number' => 'int',
        'page_size' => 'int',
        'region' => 'string',
        'source' => 'string[]',
        'start_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asc' => null,
        'end_time' => null,
        'event_type' => null,
        'id' => null,
        'order_by' => null,
        'page_number' => null,
        'page_size' => null,
        'region' => null,
        'source' => null,
        'start_time' => null
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
        'asc' => 'Asc',
        'end_time' => 'EndTime',
        'event_type' => 'EventType',
        'id' => 'ID',
        'order_by' => 'OrderBy',
        'page_number' => 'PageNumber',
        'page_size' => 'PageSize',
        'region' => 'Region',
        'source' => 'Source',
        'start_time' => 'StartTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asc' => 'setAsc',
        'end_time' => 'setEndTime',
        'event_type' => 'setEventType',
        'id' => 'setId',
        'order_by' => 'setOrderBy',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize',
        'region' => 'setRegion',
        'source' => 'setSource',
        'start_time' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asc' => 'getAsc',
        'end_time' => 'getEndTime',
        'event_type' => 'getEventType',
        'id' => 'getId',
        'order_by' => 'getOrderBy',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize',
        'region' => 'getRegion',
        'source' => 'getSource',
        'start_time' => 'getStartTime'
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

    const ORDER_BY_HAPPEN_TIME = 'HappenTime';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_HAPPEN_TIME,
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
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrderByAllowableValues();
        if (!is_null($this->container['order_by']) && !in_array($this->container['order_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets asc
     *
     * @return bool
     */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
     * Sets asc
     *
     * @param bool $asc asc
     *
     * @return $this
     */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param int $end_time end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string[]
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string[] $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string[] $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param string $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $allowedValues = $this->getOrderByAllowableValues();
        if (!is_null($order_by) && !in_array($order_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string[]
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string[] $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param int $start_time start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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

