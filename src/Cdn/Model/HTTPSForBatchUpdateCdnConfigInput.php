<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Cdn\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class HTTPSForBatchUpdateCdnConfigInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HTTPSForBatchUpdateCdnConfigInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cert_check' => '\Volcengine\Cdn\Model\CertCheckForBatchUpdateCdnConfigInput',
        'cert_info' => '\Volcengine\Cdn\Model\CertInfoForBatchUpdateCdnConfigInput',
        'cert_info_list' => '\Volcengine\Cdn\Model\CertInfoListForBatchUpdateCdnConfigInput[]',
        'disable_http' => 'bool',
        'forced_redirect' => '\Volcengine\Cdn\Model\ForcedRedirectForBatchUpdateCdnConfigInput',
        'http2' => 'bool',
        'hsts' => '\Volcengine\Cdn\Model\HstsForBatchUpdateCdnConfigInput',
        'ocsp' => 'bool',
        'switch' => 'bool',
        'tls_version' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cert_check' => null,
        'cert_info' => null,
        'cert_info_list' => null,
        'disable_http' => null,
        'forced_redirect' => null,
        'http2' => null,
        'hsts' => null,
        'ocsp' => null,
        'switch' => null,
        'tls_version' => null
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
        'cert_check' => 'CertCheck',
        'cert_info' => 'CertInfo',
        'cert_info_list' => 'CertInfoList',
        'disable_http' => 'DisableHttp',
        'forced_redirect' => 'ForcedRedirect',
        'http2' => 'HTTP2',
        'hsts' => 'Hsts',
        'ocsp' => 'OCSP',
        'switch' => 'Switch',
        'tls_version' => 'TlsVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cert_check' => 'setCertCheck',
        'cert_info' => 'setCertInfo',
        'cert_info_list' => 'setCertInfoList',
        'disable_http' => 'setDisableHttp',
        'forced_redirect' => 'setForcedRedirect',
        'http2' => 'setHttp2',
        'hsts' => 'setHsts',
        'ocsp' => 'setOcsp',
        'switch' => 'setSwitch',
        'tls_version' => 'setTlsVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cert_check' => 'getCertCheck',
        'cert_info' => 'getCertInfo',
        'cert_info_list' => 'getCertInfoList',
        'disable_http' => 'getDisableHttp',
        'forced_redirect' => 'getForcedRedirect',
        'http2' => 'getHttp2',
        'hsts' => 'getHsts',
        'ocsp' => 'getOcsp',
        'switch' => 'getSwitch',
        'tls_version' => 'getTlsVersion'
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
        $this->container['cert_check'] = isset($data['cert_check']) ? $data['cert_check'] : null;
        $this->container['cert_info'] = isset($data['cert_info']) ? $data['cert_info'] : null;
        $this->container['cert_info_list'] = isset($data['cert_info_list']) ? $data['cert_info_list'] : null;
        $this->container['disable_http'] = isset($data['disable_http']) ? $data['disable_http'] : null;
        $this->container['forced_redirect'] = isset($data['forced_redirect']) ? $data['forced_redirect'] : null;
        $this->container['http2'] = isset($data['http2']) ? $data['http2'] : null;
        $this->container['hsts'] = isset($data['hsts']) ? $data['hsts'] : null;
        $this->container['ocsp'] = isset($data['ocsp']) ? $data['ocsp'] : null;
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['tls_version'] = isset($data['tls_version']) ? $data['tls_version'] : null;
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
     * Gets cert_check
     *
     * @return \Volcengine\Cdn\Model\CertCheckForBatchUpdateCdnConfigInput
     */
    public function getCertCheck()
    {
        return $this->container['cert_check'];
    }

    /**
     * Sets cert_check
     *
     * @param \Volcengine\Cdn\Model\CertCheckForBatchUpdateCdnConfigInput $cert_check cert_check
     *
     * @return $this
     */
    public function setCertCheck($cert_check)
    {
        $this->container['cert_check'] = $cert_check;

        return $this;
    }

    /**
     * Gets cert_info
     *
     * @return \Volcengine\Cdn\Model\CertInfoForBatchUpdateCdnConfigInput
     */
    public function getCertInfo()
    {
        return $this->container['cert_info'];
    }

    /**
     * Sets cert_info
     *
     * @param \Volcengine\Cdn\Model\CertInfoForBatchUpdateCdnConfigInput $cert_info cert_info
     *
     * @return $this
     */
    public function setCertInfo($cert_info)
    {
        $this->container['cert_info'] = $cert_info;

        return $this;
    }

    /**
     * Gets cert_info_list
     *
     * @return \Volcengine\Cdn\Model\CertInfoListForBatchUpdateCdnConfigInput[]
     */
    public function getCertInfoList()
    {
        return $this->container['cert_info_list'];
    }

    /**
     * Sets cert_info_list
     *
     * @param \Volcengine\Cdn\Model\CertInfoListForBatchUpdateCdnConfigInput[] $cert_info_list cert_info_list
     *
     * @return $this
     */
    public function setCertInfoList($cert_info_list)
    {
        $this->container['cert_info_list'] = $cert_info_list;

        return $this;
    }

    /**
     * Gets disable_http
     *
     * @return bool
     */
    public function getDisableHttp()
    {
        return $this->container['disable_http'];
    }

    /**
     * Sets disable_http
     *
     * @param bool $disable_http disable_http
     *
     * @return $this
     */
    public function setDisableHttp($disable_http)
    {
        $this->container['disable_http'] = $disable_http;

        return $this;
    }

    /**
     * Gets forced_redirect
     *
     * @return \Volcengine\Cdn\Model\ForcedRedirectForBatchUpdateCdnConfigInput
     */
    public function getForcedRedirect()
    {
        return $this->container['forced_redirect'];
    }

    /**
     * Sets forced_redirect
     *
     * @param \Volcengine\Cdn\Model\ForcedRedirectForBatchUpdateCdnConfigInput $forced_redirect forced_redirect
     *
     * @return $this
     */
    public function setForcedRedirect($forced_redirect)
    {
        $this->container['forced_redirect'] = $forced_redirect;

        return $this;
    }

    /**
     * Gets http2
     *
     * @return bool
     */
    public function getHttp2()
    {
        return $this->container['http2'];
    }

    /**
     * Sets http2
     *
     * @param bool $http2 http2
     *
     * @return $this
     */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;

        return $this;
    }

    /**
     * Gets hsts
     *
     * @return \Volcengine\Cdn\Model\HstsForBatchUpdateCdnConfigInput
     */
    public function getHsts()
    {
        return $this->container['hsts'];
    }

    /**
     * Sets hsts
     *
     * @param \Volcengine\Cdn\Model\HstsForBatchUpdateCdnConfigInput $hsts hsts
     *
     * @return $this
     */
    public function setHsts($hsts)
    {
        $this->container['hsts'] = $hsts;

        return $this;
    }

    /**
     * Gets ocsp
     *
     * @return bool
     */
    public function getOcsp()
    {
        return $this->container['ocsp'];
    }

    /**
     * Sets ocsp
     *
     * @param bool $ocsp ocsp
     *
     * @return $this
     */
    public function setOcsp($ocsp)
    {
        $this->container['ocsp'] = $ocsp;

        return $this;
    }

    /**
     * Gets switch
     *
     * @return bool
     */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
     * Sets switch
     *
     * @param bool $switch switch
     *
     * @return $this
     */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;

        return $this;
    }

    /**
     * Gets tls_version
     *
     * @return string[]
     */
    public function getTlsVersion()
    {
        return $this->container['tls_version'];
    }

    /**
     * Sets tls_version
     *
     * @param string[] $tls_version tls_version
     *
     * @return $this
     */
    public function setTlsVersion($tls_version)
    {
        $this->container['tls_version'] = $tls_version;

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
