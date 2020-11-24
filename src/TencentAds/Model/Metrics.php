<?php
/**
 * Metrics
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
 * Metrics Class Doc Comment
 *
 * @category Class
 * @description 数据指标
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Metrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'videoOuterPlayIndex' => 'double',
        'videoOuterClickIndex' => 'double',
        'videoOffsetIndex' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'videoOuterPlayIndex' => 'double',
        'videoOuterClickIndex' => 'double',
        'videoOffsetIndex' => 'double'
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
        'videoOuterPlayIndex' => 'video_outer_play_index',
        'videoOuterClickIndex' => 'video_outer_click_index',
        'videoOffsetIndex' => 'video_offset_index'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'videoOuterPlayIndex' => 'setVideoOuterPlayIndex',
        'videoOuterClickIndex' => 'setVideoOuterClickIndex',
        'videoOffsetIndex' => 'setVideoOffsetIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'videoOuterPlayIndex' => 'getVideoOuterPlayIndex',
        'videoOuterClickIndex' => 'getVideoOuterClickIndex',
        'videoOffsetIndex' => 'getVideoOffsetIndex'
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
        $this->container['videoOuterPlayIndex'] = isset($data['videoOuterPlayIndex']) ? $data['videoOuterPlayIndex'] : null;
        $this->container['videoOuterClickIndex'] = isset($data['videoOuterClickIndex']) ? $data['videoOuterClickIndex'] : null;
        $this->container['videoOffsetIndex'] = isset($data['videoOffsetIndex']) ? $data['videoOffsetIndex'] : null;
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
     * Gets videoOuterPlayIndex
     *
     * @return double
     */
    public function getVideoOuterPlayIndex()
    {
        return $this->container['videoOuterPlayIndex'];
    }

    /**
     * Sets videoOuterPlayIndex
     *
     * @param double $videoOuterPlayIndex videoOuterPlayIndex
     *
     * @return $this
     */
    public function setVideoOuterPlayIndex($videoOuterPlayIndex)
    {
        $this->container['videoOuterPlayIndex'] = $videoOuterPlayIndex;

        return $this;
    }

    /**
     * Gets videoOuterClickIndex
     *
     * @return double
     */
    public function getVideoOuterClickIndex()
    {
        return $this->container['videoOuterClickIndex'];
    }

    /**
     * Sets videoOuterClickIndex
     *
     * @param double $videoOuterClickIndex videoOuterClickIndex
     *
     * @return $this
     */
    public function setVideoOuterClickIndex($videoOuterClickIndex)
    {
        $this->container['videoOuterClickIndex'] = $videoOuterClickIndex;

        return $this;
    }

    /**
     * Gets videoOffsetIndex
     *
     * @return double
     */
    public function getVideoOffsetIndex()
    {
        return $this->container['videoOffsetIndex'];
    }

    /**
     * Sets videoOffsetIndex
     *
     * @param double $videoOffsetIndex videoOffsetIndex
     *
     * @return $this
     */
    public function setVideoOffsetIndex($videoOffsetIndex)
    {
        $this->container['videoOffsetIndex'] = $videoOffsetIndex;

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


