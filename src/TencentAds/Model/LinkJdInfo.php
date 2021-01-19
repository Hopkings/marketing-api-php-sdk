<?php
/**
 * LinkJdInfo
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
 * LinkJdInfo Class Doc Comment
 *
 * @category Class
 * @description 京东POP商户投放商品信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkJdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'link_jd_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ecommerceType' => '\TencentAds\Model\EcommerceType',
        'itemId' => 'string',
        'shopId' => 'string',
        'itemCategory' => '\TencentAds\Model\Category[]',
        'shopCategory' => '\TencentAds\Model\Category[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ecommerceType' => null,
        'itemId' => null,
        'shopId' => null,
        'itemCategory' => null,
        'shopCategory' => null
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
        'ecommerceType' => 'ecommerce_type',
        'itemId' => 'item_id',
        'shopId' => 'shop_id',
        'itemCategory' => 'item_category',
        'shopCategory' => 'shop_category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ecommerceType' => 'setEcommerceType',
        'itemId' => 'setItemId',
        'shopId' => 'setShopId',
        'itemCategory' => 'setItemCategory',
        'shopCategory' => 'setShopCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ecommerceType' => 'getEcommerceType',
        'itemId' => 'getItemId',
        'shopId' => 'getShopId',
        'itemCategory' => 'getItemCategory',
        'shopCategory' => 'getShopCategory'
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
        $this->container['ecommerceType'] = isset($data['ecommerceType']) ? $data['ecommerceType'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['shopId'] = isset($data['shopId']) ? $data['shopId'] : null;
        $this->container['itemCategory'] = isset($data['itemCategory']) ? $data['itemCategory'] : null;
        $this->container['shopCategory'] = isset($data['shopCategory']) ? $data['shopCategory'] : null;
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
     * Gets ecommerceType
     *
     * @return \TencentAds\Model\EcommerceType
     */
    public function getEcommerceType()
    {
        return $this->container['ecommerceType'];
    }

    /**
     * Sets ecommerceType
     *
     * @param \TencentAds\Model\EcommerceType $ecommerceType ecommerceType
     *
     * @return $this
     */
    public function setEcommerceType($ecommerceType)
    {
        $this->container['ecommerceType'] = $ecommerceType;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string $itemId itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string $shopId shopId
     *
     * @return $this
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets itemCategory
     *
     * @return \TencentAds\Model\Category[]
     */
    public function getItemCategory()
    {
        return $this->container['itemCategory'];
    }

    /**
     * Sets itemCategory
     *
     * @param \TencentAds\Model\Category[] $itemCategory itemCategory
     *
     * @return $this
     */
    public function setItemCategory($itemCategory)
    {
        $this->container['itemCategory'] = $itemCategory;

        return $this;
    }

    /**
     * Gets shopCategory
     *
     * @return \TencentAds\Model\Category[]
     */
    public function getShopCategory()
    {
        return $this->container['shopCategory'];
    }

    /**
     * Sets shopCategory
     *
     * @param \TencentAds\Model\Category[] $shopCategory shopCategory
     *
     * @return $this
     */
    public function setShopCategory($shopCategory)
    {
        $this->container['shopCategory'] = $shopCategory;

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

