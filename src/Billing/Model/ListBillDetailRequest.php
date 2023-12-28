<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Billing\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ListBillDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListBillDetailRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_category' => 'string[]',
        'bill_period' => 'string',
        'billing_mode' => 'string[]',
        'expense_date' => 'string',
        'group_period' => 'int',
        'group_term' => 'int',
        'ignore_zero' => 'int',
        'instance_no' => 'string',
        'limit' => 'int',
        'need_record_num' => 'int',
        'offset' => 'int',
        'product' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_category' => null,
        'bill_period' => null,
        'billing_mode' => null,
        'expense_date' => null,
        'group_period' => 'int32',
        'group_term' => 'int32',
        'ignore_zero' => 'int32',
        'instance_no' => null,
        'limit' => 'int32',
        'need_record_num' => 'int32',
        'offset' => 'int32',
        'product' => null
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
        'bill_category' => 'BillCategory',
        'bill_period' => 'BillPeriod',
        'billing_mode' => 'BillingMode',
        'expense_date' => 'ExpenseDate',
        'group_period' => 'GroupPeriod',
        'group_term' => 'GroupTerm',
        'ignore_zero' => 'IgnoreZero',
        'instance_no' => 'InstanceNo',
        'limit' => 'Limit',
        'need_record_num' => 'NeedRecordNum',
        'offset' => 'Offset',
        'product' => 'Product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_category' => 'setBillCategory',
        'bill_period' => 'setBillPeriod',
        'billing_mode' => 'setBillingMode',
        'expense_date' => 'setExpenseDate',
        'group_period' => 'setGroupPeriod',
        'group_term' => 'setGroupTerm',
        'ignore_zero' => 'setIgnoreZero',
        'instance_no' => 'setInstanceNo',
        'limit' => 'setLimit',
        'need_record_num' => 'setNeedRecordNum',
        'offset' => 'setOffset',
        'product' => 'setProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_category' => 'getBillCategory',
        'bill_period' => 'getBillPeriod',
        'billing_mode' => 'getBillingMode',
        'expense_date' => 'getExpenseDate',
        'group_period' => 'getGroupPeriod',
        'group_term' => 'getGroupTerm',
        'ignore_zero' => 'getIgnoreZero',
        'instance_no' => 'getInstanceNo',
        'limit' => 'getLimit',
        'need_record_num' => 'getNeedRecordNum',
        'offset' => 'getOffset',
        'product' => 'getProduct'
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
        $this->container['bill_category'] = isset($data['bill_category']) ? $data['bill_category'] : null;
        $this->container['bill_period'] = isset($data['bill_period']) ? $data['bill_period'] : null;
        $this->container['billing_mode'] = isset($data['billing_mode']) ? $data['billing_mode'] : null;
        $this->container['expense_date'] = isset($data['expense_date']) ? $data['expense_date'] : null;
        $this->container['group_period'] = isset($data['group_period']) ? $data['group_period'] : null;
        $this->container['group_term'] = isset($data['group_term']) ? $data['group_term'] : null;
        $this->container['ignore_zero'] = isset($data['ignore_zero']) ? $data['ignore_zero'] : null;
        $this->container['instance_no'] = isset($data['instance_no']) ? $data['instance_no'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['need_record_num'] = isset($data['need_record_num']) ? $data['need_record_num'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bill_period'] === null) {
            $invalidProperties[] = "'bill_period' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
     * Gets bill_category
     *
     * @return string[]
     */
    public function getBillCategory()
    {
        return $this->container['bill_category'];
    }

    /**
     * Sets bill_category
     *
     * @param string[] $bill_category bill_category
     *
     * @return $this
     */
    public function setBillCategory($bill_category)
    {
        $this->container['bill_category'] = $bill_category;

        return $this;
    }

    /**
     * Gets bill_period
     *
     * @return string
     */
    public function getBillPeriod()
    {
        return $this->container['bill_period'];
    }

    /**
     * Sets bill_period
     *
     * @param string $bill_period bill_period
     *
     * @return $this
     */
    public function setBillPeriod($bill_period)
    {
        $this->container['bill_period'] = $bill_period;

        return $this;
    }

    /**
     * Gets billing_mode
     *
     * @return string[]
     */
    public function getBillingMode()
    {
        return $this->container['billing_mode'];
    }

    /**
     * Sets billing_mode
     *
     * @param string[] $billing_mode billing_mode
     *
     * @return $this
     */
    public function setBillingMode($billing_mode)
    {
        $this->container['billing_mode'] = $billing_mode;

        return $this;
    }

    /**
     * Gets expense_date
     *
     * @return string
     */
    public function getExpenseDate()
    {
        return $this->container['expense_date'];
    }

    /**
     * Sets expense_date
     *
     * @param string $expense_date expense_date
     *
     * @return $this
     */
    public function setExpenseDate($expense_date)
    {
        $this->container['expense_date'] = $expense_date;

        return $this;
    }

    /**
     * Gets group_period
     *
     * @return int
     */
    public function getGroupPeriod()
    {
        return $this->container['group_period'];
    }

    /**
     * Sets group_period
     *
     * @param int $group_period group_period
     *
     * @return $this
     */
    public function setGroupPeriod($group_period)
    {
        $this->container['group_period'] = $group_period;

        return $this;
    }

    /**
     * Gets group_term
     *
     * @return int
     */
    public function getGroupTerm()
    {
        return $this->container['group_term'];
    }

    /**
     * Sets group_term
     *
     * @param int $group_term group_term
     *
     * @return $this
     */
    public function setGroupTerm($group_term)
    {
        $this->container['group_term'] = $group_term;

        return $this;
    }

    /**
     * Gets ignore_zero
     *
     * @return int
     */
    public function getIgnoreZero()
    {
        return $this->container['ignore_zero'];
    }

    /**
     * Sets ignore_zero
     *
     * @param int $ignore_zero ignore_zero
     *
     * @return $this
     */
    public function setIgnoreZero($ignore_zero)
    {
        $this->container['ignore_zero'] = $ignore_zero;

        return $this;
    }

    /**
     * Gets instance_no
     *
     * @return string
     */
    public function getInstanceNo()
    {
        return $this->container['instance_no'];
    }

    /**
     * Sets instance_no
     *
     * @param string $instance_no instance_no
     *
     * @return $this
     */
    public function setInstanceNo($instance_no)
    {
        $this->container['instance_no'] = $instance_no;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets need_record_num
     *
     * @return int
     */
    public function getNeedRecordNum()
    {
        return $this->container['need_record_num'];
    }

    /**
     * Sets need_record_num
     *
     * @param int $need_record_num need_record_num
     *
     * @return $this
     */
    public function setNeedRecordNum($need_record_num)
    {
        $this->container['need_record_num'] = $need_record_num;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string[]
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string[] $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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

