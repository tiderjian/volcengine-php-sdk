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

class DataForGetMetricDataOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataForGetMetricDataOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description_cn' => 'string',
        'description_en' => 'string',
        'end_time' => 'int',
        'metric_data_results' => '\Volcengine\Volcobserve\Model\MetricDataResultForGetMetricDataOutput[]',
        'metric_name' => 'string',
        'namespace' => 'string',
        'period' => 'string',
        'start_time' => 'int',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description_cn' => null,
        'description_en' => null,
        'end_time' => null,
        'metric_data_results' => null,
        'metric_name' => null,
        'namespace' => null,
        'period' => null,
        'start_time' => null,
        'unit' => null
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
        'description_cn' => 'DescriptionCN',
        'description_en' => 'DescriptionEN',
        'end_time' => 'EndTime',
        'metric_data_results' => 'MetricDataResults',
        'metric_name' => 'MetricName',
        'namespace' => 'Namespace',
        'period' => 'Period',
        'start_time' => 'StartTime',
        'unit' => 'Unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description_cn' => 'setDescriptionCn',
        'description_en' => 'setDescriptionEn',
        'end_time' => 'setEndTime',
        'metric_data_results' => 'setMetricDataResults',
        'metric_name' => 'setMetricName',
        'namespace' => 'setNamespace',
        'period' => 'setPeriod',
        'start_time' => 'setStartTime',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description_cn' => 'getDescriptionCn',
        'description_en' => 'getDescriptionEn',
        'end_time' => 'getEndTime',
        'metric_data_results' => 'getMetricDataResults',
        'metric_name' => 'getMetricName',
        'namespace' => 'getNamespace',
        'period' => 'getPeriod',
        'start_time' => 'getStartTime',
        'unit' => 'getUnit'
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
        $this->container['description_cn'] = isset($data['description_cn']) ? $data['description_cn'] : null;
        $this->container['description_en'] = isset($data['description_en']) ? $data['description_en'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['metric_data_results'] = isset($data['metric_data_results']) ? $data['metric_data_results'] : null;
        $this->container['metric_name'] = isset($data['metric_name']) ? $data['metric_name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
     * Gets description_cn
     *
     * @return string
     */
    public function getDescriptionCn()
    {
        return $this->container['description_cn'];
    }

    /**
     * Sets description_cn
     *
     * @param string $description_cn description_cn
     *
     * @return $this
     */
    public function setDescriptionCn($description_cn)
    {
        $this->container['description_cn'] = $description_cn;

        return $this;
    }

    /**
     * Gets description_en
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->container['description_en'];
    }

    /**
     * Sets description_en
     *
     * @param string $description_en description_en
     *
     * @return $this
     */
    public function setDescriptionEn($description_en)
    {
        $this->container['description_en'] = $description_en;

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
     * Gets metric_data_results
     *
     * @return \Volcengine\Volcobserve\Model\MetricDataResultForGetMetricDataOutput[]
     */
    public function getMetricDataResults()
    {
        return $this->container['metric_data_results'];
    }

    /**
     * Sets metric_data_results
     *
     * @param \Volcengine\Volcobserve\Model\MetricDataResultForGetMetricDataOutput[] $metric_data_results metric_data_results
     *
     * @return $this
     */
    public function setMetricDataResults($metric_data_results)
    {
        $this->container['metric_data_results'] = $metric_data_results;

        return $this;
    }

    /**
     * Gets metric_name
     *
     * @return string
     */
    public function getMetricName()
    {
        return $this->container['metric_name'];
    }

    /**
     * Sets metric_name
     *
     * @param string $metric_name metric_name
     *
     * @return $this
     */
    public function setMetricName($metric_name)
    {
        $this->container['metric_name'] = $metric_name;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

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
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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

