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

class CreateEventRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateEventRuleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_group_ids' => 'string[]',
        'contact_methods' => 'string[]',
        'description' => 'string',
        'effective_time' => '\Volcengine\Volcobserve\Model\EffectiveTimeForCreateEventRuleInput',
        'endpoint' => 'string',
        'event_bus_name' => 'string',
        'event_source' => 'string',
        'event_type' => 'string[]',
        'filter_pattern' => 'map[string,object]',
        'level' => 'string',
        'message_queue' => '\Volcengine\Volcobserve\Model\MessageQueueForCreateEventRuleInput[]',
        'rule_name' => 'string',
        'status' => 'string',
        'tls_target' => '\Volcengine\Volcobserve\Model\TLSTargetForCreateEventRuleInput[]',
        'webhook_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_group_ids' => null,
        'contact_methods' => null,
        'description' => null,
        'effective_time' => null,
        'endpoint' => null,
        'event_bus_name' => null,
        'event_source' => null,
        'event_type' => null,
        'filter_pattern' => null,
        'level' => null,
        'message_queue' => null,
        'rule_name' => null,
        'status' => null,
        'tls_target' => null,
        'webhook_ids' => null
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
        'contact_group_ids' => 'ContactGroupIds',
        'contact_methods' => 'ContactMethods',
        'description' => 'Description',
        'effective_time' => 'EffectiveTime',
        'endpoint' => 'Endpoint',
        'event_bus_name' => 'EventBusName',
        'event_source' => 'EventSource',
        'event_type' => 'EventType',
        'filter_pattern' => 'FilterPattern',
        'level' => 'Level',
        'message_queue' => 'MessageQueue',
        'rule_name' => 'RuleName',
        'status' => 'Status',
        'tls_target' => 'TLSTarget',
        'webhook_ids' => 'WebhookIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_group_ids' => 'setContactGroupIds',
        'contact_methods' => 'setContactMethods',
        'description' => 'setDescription',
        'effective_time' => 'setEffectiveTime',
        'endpoint' => 'setEndpoint',
        'event_bus_name' => 'setEventBusName',
        'event_source' => 'setEventSource',
        'event_type' => 'setEventType',
        'filter_pattern' => 'setFilterPattern',
        'level' => 'setLevel',
        'message_queue' => 'setMessageQueue',
        'rule_name' => 'setRuleName',
        'status' => 'setStatus',
        'tls_target' => 'setTlsTarget',
        'webhook_ids' => 'setWebhookIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_group_ids' => 'getContactGroupIds',
        'contact_methods' => 'getContactMethods',
        'description' => 'getDescription',
        'effective_time' => 'getEffectiveTime',
        'endpoint' => 'getEndpoint',
        'event_bus_name' => 'getEventBusName',
        'event_source' => 'getEventSource',
        'event_type' => 'getEventType',
        'filter_pattern' => 'getFilterPattern',
        'level' => 'getLevel',
        'message_queue' => 'getMessageQueue',
        'rule_name' => 'getRuleName',
        'status' => 'getStatus',
        'tls_target' => 'getTlsTarget',
        'webhook_ids' => 'getWebhookIds'
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

    const EVENT_BUS_NAME__DEFAULT = 'default';
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventBusNameAllowableValues()
    {
        return [
            self::EVENT_BUS_NAME__DEFAULT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
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
        $this->container['contact_group_ids'] = isset($data['contact_group_ids']) ? $data['contact_group_ids'] : null;
        $this->container['contact_methods'] = isset($data['contact_methods']) ? $data['contact_methods'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['effective_time'] = isset($data['effective_time']) ? $data['effective_time'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['event_bus_name'] = isset($data['event_bus_name']) ? $data['event_bus_name'] : null;
        $this->container['event_source'] = isset($data['event_source']) ? $data['event_source'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['filter_pattern'] = isset($data['filter_pattern']) ? $data['filter_pattern'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['message_queue'] = isset($data['message_queue']) ? $data['message_queue'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tls_target'] = isset($data['tls_target']) ? $data['tls_target'] : null;
        $this->container['webhook_ids'] = isset($data['webhook_ids']) ? $data['webhook_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_bus_name'] === null) {
            $invalidProperties[] = "'event_bus_name' can't be null";
        }
        $allowedValues = $this->getEventBusNameAllowableValues();
        if (!is_null($this->container['event_bus_name']) && !in_array($this->container['event_bus_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_bus_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['event_source'] === null) {
            $invalidProperties[] = "'event_source' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['rule_name'] === null) {
            $invalidProperties[] = "'rule_name' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets contact_group_ids
     *
     * @return string[]
     */
    public function getContactGroupIds()
    {
        return $this->container['contact_group_ids'];
    }

    /**
     * Sets contact_group_ids
     *
     * @param string[] $contact_group_ids contact_group_ids
     *
     * @return $this
     */
    public function setContactGroupIds($contact_group_ids)
    {
        $this->container['contact_group_ids'] = $contact_group_ids;

        return $this;
    }

    /**
     * Gets contact_methods
     *
     * @return string[]
     */
    public function getContactMethods()
    {
        return $this->container['contact_methods'];
    }

    /**
     * Sets contact_methods
     *
     * @param string[] $contact_methods contact_methods
     *
     * @return $this
     */
    public function setContactMethods($contact_methods)
    {
        $this->container['contact_methods'] = $contact_methods;

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
     * Gets effective_time
     *
     * @return \Volcengine\Volcobserve\Model\EffectiveTimeForCreateEventRuleInput
     */
    public function getEffectiveTime()
    {
        return $this->container['effective_time'];
    }

    /**
     * Sets effective_time
     *
     * @param \Volcengine\Volcobserve\Model\EffectiveTimeForCreateEventRuleInput $effective_time effective_time
     *
     * @return $this
     */
    public function setEffectiveTime($effective_time)
    {
        $this->container['effective_time'] = $effective_time;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string $endpoint endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets event_bus_name
     *
     * @return string
     */
    public function getEventBusName()
    {
        return $this->container['event_bus_name'];
    }

    /**
     * Sets event_bus_name
     *
     * @param string $event_bus_name event_bus_name
     *
     * @return $this
     */
    public function setEventBusName($event_bus_name)
    {
        $allowedValues = $this->getEventBusNameAllowableValues();
        if (!in_array($event_bus_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_bus_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_bus_name'] = $event_bus_name;

        return $this;
    }

    /**
     * Gets event_source
     *
     * @return string
     */
    public function getEventSource()
    {
        return $this->container['event_source'];
    }

    /**
     * Sets event_source
     *
     * @param string $event_source event_source
     *
     * @return $this
     */
    public function setEventSource($event_source)
    {
        $this->container['event_source'] = $event_source;

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
     * Gets filter_pattern
     *
     * @return map[string,object]
     */
    public function getFilterPattern()
    {
        return $this->container['filter_pattern'];
    }

    /**
     * Sets filter_pattern
     *
     * @param map[string,object] $filter_pattern filter_pattern
     *
     * @return $this
     */
    public function setFilterPattern($filter_pattern)
    {
        $this->container['filter_pattern'] = $filter_pattern;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets message_queue
     *
     * @return \Volcengine\Volcobserve\Model\MessageQueueForCreateEventRuleInput[]
     */
    public function getMessageQueue()
    {
        return $this->container['message_queue'];
    }

    /**
     * Sets message_queue
     *
     * @param \Volcengine\Volcobserve\Model\MessageQueueForCreateEventRuleInput[] $message_queue message_queue
     *
     * @return $this
     */
    public function setMessageQueue($message_queue)
    {
        $this->container['message_queue'] = $message_queue;

        return $this;
    }

    /**
     * Gets rule_name
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     *
     * @param string $rule_name rule_name
     *
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

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
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tls_target
     *
     * @return \Volcengine\Volcobserve\Model\TLSTargetForCreateEventRuleInput[]
     */
    public function getTlsTarget()
    {
        return $this->container['tls_target'];
    }

    /**
     * Sets tls_target
     *
     * @param \Volcengine\Volcobserve\Model\TLSTargetForCreateEventRuleInput[] $tls_target tls_target
     *
     * @return $this
     */
    public function setTlsTarget($tls_target)
    {
        $this->container['tls_target'] = $tls_target;

        return $this;
    }

    /**
     * Gets webhook_ids
     *
     * @return string[]
     */
    public function getWebhookIds()
    {
        return $this->container['webhook_ids'];
    }

    /**
     * Sets webhook_ids
     *
     * @param string[] $webhook_ids webhook_ids
     *
     * @return $this
     */
    public function setWebhookIds($webhook_ids)
    {
        $this->container['webhook_ids'] = $webhook_ids;

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
