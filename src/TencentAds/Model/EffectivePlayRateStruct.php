<?php
/**
 * EffectivePlayRateStruct
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
 * EffectivePlayRateStruct Class Doc Comment
 *
 * @category Class
 * @description 视频有效播放率(is_video为true有效)
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EffectivePlayRateStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'effective_play_rate_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'string',
        'score' => 'string',
        'rankOverall' => 'string',
        'rankFirstCategory' => 'string',
        'rankSecondCategory' => 'string',
        'selfTrends' => '\TencentAds\Model\PointStruct[]',
        'benchmarkTrends' => '\TencentAds\Model\PointStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => null,
        'score' => null,
        'rankOverall' => null,
        'rankFirstCategory' => null,
        'rankSecondCategory' => null,
        'selfTrends' => null,
        'benchmarkTrends' => null
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
        'value' => 'value',
        'score' => 'score',
        'rankOverall' => 'rank_overall',
        'rankFirstCategory' => 'rank_first_category',
        'rankSecondCategory' => 'rank_second_category',
        'selfTrends' => 'self_trends',
        'benchmarkTrends' => 'benchmark_trends'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'score' => 'setScore',
        'rankOverall' => 'setRankOverall',
        'rankFirstCategory' => 'setRankFirstCategory',
        'rankSecondCategory' => 'setRankSecondCategory',
        'selfTrends' => 'setSelfTrends',
        'benchmarkTrends' => 'setBenchmarkTrends'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'score' => 'getScore',
        'rankOverall' => 'getRankOverall',
        'rankFirstCategory' => 'getRankFirstCategory',
        'rankSecondCategory' => 'getRankSecondCategory',
        'selfTrends' => 'getSelfTrends',
        'benchmarkTrends' => 'getBenchmarkTrends'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['rankOverall'] = isset($data['rankOverall']) ? $data['rankOverall'] : null;
        $this->container['rankFirstCategory'] = isset($data['rankFirstCategory']) ? $data['rankFirstCategory'] : null;
        $this->container['rankSecondCategory'] = isset($data['rankSecondCategory']) ? $data['rankSecondCategory'] : null;
        $this->container['selfTrends'] = isset($data['selfTrends']) ? $data['selfTrends'] : null;
        $this->container['benchmarkTrends'] = isset($data['benchmarkTrends']) ? $data['benchmarkTrends'] : null;
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets rankOverall
     *
     * @return string
     */
    public function getRankOverall()
    {
        return $this->container['rankOverall'];
    }

    /**
     * Sets rankOverall
     *
     * @param string $rankOverall rankOverall
     *
     * @return $this
     */
    public function setRankOverall($rankOverall)
    {
        $this->container['rankOverall'] = $rankOverall;

        return $this;
    }

    /**
     * Gets rankFirstCategory
     *
     * @return string
     */
    public function getRankFirstCategory()
    {
        return $this->container['rankFirstCategory'];
    }

    /**
     * Sets rankFirstCategory
     *
     * @param string $rankFirstCategory rankFirstCategory
     *
     * @return $this
     */
    public function setRankFirstCategory($rankFirstCategory)
    {
        $this->container['rankFirstCategory'] = $rankFirstCategory;

        return $this;
    }

    /**
     * Gets rankSecondCategory
     *
     * @return string
     */
    public function getRankSecondCategory()
    {
        return $this->container['rankSecondCategory'];
    }

    /**
     * Sets rankSecondCategory
     *
     * @param string $rankSecondCategory rankSecondCategory
     *
     * @return $this
     */
    public function setRankSecondCategory($rankSecondCategory)
    {
        $this->container['rankSecondCategory'] = $rankSecondCategory;

        return $this;
    }

    /**
     * Gets selfTrends
     *
     * @return \TencentAds\Model\PointStruct[]
     */
    public function getSelfTrends()
    {
        return $this->container['selfTrends'];
    }

    /**
     * Sets selfTrends
     *
     * @param \TencentAds\Model\PointStruct[] $selfTrends selfTrends
     *
     * @return $this
     */
    public function setSelfTrends($selfTrends)
    {
        $this->container['selfTrends'] = $selfTrends;

        return $this;
    }

    /**
     * Gets benchmarkTrends
     *
     * @return \TencentAds\Model\PointStruct[]
     */
    public function getBenchmarkTrends()
    {
        return $this->container['benchmarkTrends'];
    }

    /**
     * Sets benchmarkTrends
     *
     * @param \TencentAds\Model\PointStruct[] $benchmarkTrends benchmarkTrends
     *
     * @return $this
     */
    public function setBenchmarkTrends($benchmarkTrends)
    {
        $this->container['benchmarkTrends'] = $benchmarkTrends;

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


