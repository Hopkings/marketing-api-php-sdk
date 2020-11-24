<?php
/**
 * PageStruct
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
 * PageStruct Class Doc Comment
 *
 * @category Class
 * @description 获取落地页列表落地页数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'page_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'pageServiceId' => 'string',
        'pageName' => 'string',
        'pageType' => '\TencentAds\Model\PageType',
        'pagePublishStatus' => '\TencentAds\Model\PagePublishStatus',
        'pageStatus' => '\TencentAds\Model\PageAuditStatus',
        'pageLastModifyTime' => 'string',
        'pageAccountId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'pageServiceId' => null,
        'pageName' => null,
        'pageType' => null,
        'pagePublishStatus' => null,
        'pageStatus' => null,
        'pageLastModifyTime' => null,
        'pageAccountId' => 'int64'
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
        'pageId' => 'page_id',
        'pageServiceId' => 'page_service_id',
        'pageName' => 'page_name',
        'pageType' => 'page_type',
        'pagePublishStatus' => 'page_publish_status',
        'pageStatus' => 'page_status',
        'pageLastModifyTime' => 'page_last_modify_time',
        'pageAccountId' => 'page_account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'pageServiceId' => 'setPageServiceId',
        'pageName' => 'setPageName',
        'pageType' => 'setPageType',
        'pagePublishStatus' => 'setPagePublishStatus',
        'pageStatus' => 'setPageStatus',
        'pageLastModifyTime' => 'setPageLastModifyTime',
        'pageAccountId' => 'setPageAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'pageServiceId' => 'getPageServiceId',
        'pageName' => 'getPageName',
        'pageType' => 'getPageType',
        'pagePublishStatus' => 'getPagePublishStatus',
        'pageStatus' => 'getPageStatus',
        'pageLastModifyTime' => 'getPageLastModifyTime',
        'pageAccountId' => 'getPageAccountId'
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
        $this->container['pageId'] = isset($data['pageId']) ? $data['pageId'] : null;
        $this->container['pageServiceId'] = isset($data['pageServiceId']) ? $data['pageServiceId'] : null;
        $this->container['pageName'] = isset($data['pageName']) ? $data['pageName'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pagePublishStatus'] = isset($data['pagePublishStatus']) ? $data['pagePublishStatus'] : null;
        $this->container['pageStatus'] = isset($data['pageStatus']) ? $data['pageStatus'] : null;
        $this->container['pageLastModifyTime'] = isset($data['pageLastModifyTime']) ? $data['pageLastModifyTime'] : null;
        $this->container['pageAccountId'] = isset($data['pageAccountId']) ? $data['pageAccountId'] : null;
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
     * Gets pageId
     *
     * @return int
     */
    public function getPageId()
    {
        return $this->container['pageId'];
    }

    /**
     * Sets pageId
     *
     * @param int $pageId pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->container['pageId'] = $pageId;

        return $this;
    }

    /**
     * Gets pageServiceId
     *
     * @return string
     */
    public function getPageServiceId()
    {
        return $this->container['pageServiceId'];
    }

    /**
     * Sets pageServiceId
     *
     * @param string $pageServiceId pageServiceId
     *
     * @return $this
     */
    public function setPageServiceId($pageServiceId)
    {
        $this->container['pageServiceId'] = $pageServiceId;

        return $this;
    }

    /**
     * Gets pageName
     *
     * @return string
     */
    public function getPageName()
    {
        return $this->container['pageName'];
    }

    /**
     * Sets pageName
     *
     * @param string $pageName pageName
     *
     * @return $this
     */
    public function setPageName($pageName)
    {
        $this->container['pageName'] = $pageName;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\PageType
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\PageType $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pagePublishStatus
     *
     * @return \TencentAds\Model\PagePublishStatus
     */
    public function getPagePublishStatus()
    {
        return $this->container['pagePublishStatus'];
    }

    /**
     * Sets pagePublishStatus
     *
     * @param \TencentAds\Model\PagePublishStatus $pagePublishStatus pagePublishStatus
     *
     * @return $this
     */
    public function setPagePublishStatus($pagePublishStatus)
    {
        $this->container['pagePublishStatus'] = $pagePublishStatus;

        return $this;
    }

    /**
     * Gets pageStatus
     *
     * @return \TencentAds\Model\PageAuditStatus
     */
    public function getPageStatus()
    {
        return $this->container['pageStatus'];
    }

    /**
     * Sets pageStatus
     *
     * @param \TencentAds\Model\PageAuditStatus $pageStatus pageStatus
     *
     * @return $this
     */
    public function setPageStatus($pageStatus)
    {
        $this->container['pageStatus'] = $pageStatus;

        return $this;
    }

    /**
     * Gets pageLastModifyTime
     *
     * @return string
     */
    public function getPageLastModifyTime()
    {
        return $this->container['pageLastModifyTime'];
    }

    /**
     * Sets pageLastModifyTime
     *
     * @param string $pageLastModifyTime pageLastModifyTime
     *
     * @return $this
     */
    public function setPageLastModifyTime($pageLastModifyTime)
    {
        $this->container['pageLastModifyTime'] = $pageLastModifyTime;

        return $this;
    }

    /**
     * Gets pageAccountId
     *
     * @return int
     */
    public function getPageAccountId()
    {
        return $this->container['pageAccountId'];
    }

    /**
     * Sets pageAccountId
     *
     * @param int $pageAccountId pageAccountId
     *
     * @return $this
     */
    public function setPageAccountId($pageAccountId)
    {
        $this->container['pageAccountId'] = $pageAccountId;

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


