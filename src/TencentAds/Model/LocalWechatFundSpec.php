<?php
/**
 * LocalWechatFundSpec
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * LocalWechatFundSpec Class Doc Comment
 *
 * @category Class
 * @description 附近推微信账户更多信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalWechatFundSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'local_wechat_fund_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cashUsableAmount' => 'int',
        'giftUsableAmount' => 'int',
        'cashLockedAmount' => 'int',
        'giftLockedAmount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cashUsableAmount' => 'int64',
        'giftUsableAmount' => 'int64',
        'cashLockedAmount' => 'int64',
        'giftLockedAmount' => 'int64'
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
        'cashUsableAmount' => 'cash_usable_amount',
        'giftUsableAmount' => 'gift_usable_amount',
        'cashLockedAmount' => 'cash_locked_amount',
        'giftLockedAmount' => 'gift_locked_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashUsableAmount' => 'setCashUsableAmount',
        'giftUsableAmount' => 'setGiftUsableAmount',
        'cashLockedAmount' => 'setCashLockedAmount',
        'giftLockedAmount' => 'setGiftLockedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashUsableAmount' => 'getCashUsableAmount',
        'giftUsableAmount' => 'getGiftUsableAmount',
        'cashLockedAmount' => 'getCashLockedAmount',
        'giftLockedAmount' => 'getGiftLockedAmount'
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
        $this->container['cashUsableAmount'] = isset($data['cashUsableAmount']) ? $data['cashUsableAmount'] : null;
        $this->container['giftUsableAmount'] = isset($data['giftUsableAmount']) ? $data['giftUsableAmount'] : null;
        $this->container['cashLockedAmount'] = isset($data['cashLockedAmount']) ? $data['cashLockedAmount'] : null;
        $this->container['giftLockedAmount'] = isset($data['giftLockedAmount']) ? $data['giftLockedAmount'] : null;
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
     * Gets cashUsableAmount
     *
     * @return int
     */
    public function getCashUsableAmount()
    {
        return $this->container['cashUsableAmount'];
    }

    /**
     * Sets cashUsableAmount
     *
     * @param int $cashUsableAmount cashUsableAmount
     *
     * @return $this
     */
    public function setCashUsableAmount($cashUsableAmount)
    {
        $this->container['cashUsableAmount'] = $cashUsableAmount;

        return $this;
    }

    /**
     * Gets giftUsableAmount
     *
     * @return int
     */
    public function getGiftUsableAmount()
    {
        return $this->container['giftUsableAmount'];
    }

    /**
     * Sets giftUsableAmount
     *
     * @param int $giftUsableAmount giftUsableAmount
     *
     * @return $this
     */
    public function setGiftUsableAmount($giftUsableAmount)
    {
        $this->container['giftUsableAmount'] = $giftUsableAmount;

        return $this;
    }

    /**
     * Gets cashLockedAmount
     *
     * @return int
     */
    public function getCashLockedAmount()
    {
        return $this->container['cashLockedAmount'];
    }

    /**
     * Sets cashLockedAmount
     *
     * @param int $cashLockedAmount cashLockedAmount
     *
     * @return $this
     */
    public function setCashLockedAmount($cashLockedAmount)
    {
        $this->container['cashLockedAmount'] = $cashLockedAmount;

        return $this;
    }

    /**
     * Gets giftLockedAmount
     *
     * @return int
     */
    public function getGiftLockedAmount()
    {
        return $this->container['giftLockedAmount'];
    }

    /**
     * Sets giftLockedAmount
     *
     * @param int $giftLockedAmount giftLockedAmount
     *
     * @return $this
     */
    public function setGiftLockedAmount($giftLockedAmount)
    {
        $this->container['giftLockedAmount'] = $giftLockedAmount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


