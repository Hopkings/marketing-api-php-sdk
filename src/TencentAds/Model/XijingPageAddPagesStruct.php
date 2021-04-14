<?php
/**
 * XijingPageAddPagesStruct
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
 * XijingPageAddPagesStruct Class Doc Comment
 *
 * @category Class
 * @description 落地页配置结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XijingPageAddPagesStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XijingPageAddPagesStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageType' => '\TencentAds\Model\TemplatesPageType',
        'pageName' => 'string',
        'pageTitle' => 'string',
        'clipboard' => 'string',
        'mobileAppId' => 'string',
        'pageTemplateId' => 'string',
        'componentSpecList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageType' => null,
        'pageName' => null,
        'pageTitle' => null,
        'clipboard' => null,
        'mobileAppId' => null,
        'pageTemplateId' => null,
        'componentSpecList' => null
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
        'pageType' => 'page_type',
        'pageName' => 'page_name',
        'pageTitle' => 'page_title',
        'clipboard' => 'clipboard',
        'mobileAppId' => 'mobile_app_id',
        'pageTemplateId' => 'page_template_id',
        'componentSpecList' => 'component_spec_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageType' => 'setPageType',
        'pageName' => 'setPageName',
        'pageTitle' => 'setPageTitle',
        'clipboard' => 'setClipboard',
        'mobileAppId' => 'setMobileAppId',
        'pageTemplateId' => 'setPageTemplateId',
        'componentSpecList' => 'setComponentSpecList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageType' => 'getPageType',
        'pageName' => 'getPageName',
        'pageTitle' => 'getPageTitle',
        'clipboard' => 'getClipboard',
        'mobileAppId' => 'getMobileAppId',
        'pageTemplateId' => 'getPageTemplateId',
        'componentSpecList' => 'getComponentSpecList'
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
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageName'] = isset($data['pageName']) ? $data['pageName'] : null;
        $this->container['pageTitle'] = isset($data['pageTitle']) ? $data['pageTitle'] : null;
        $this->container['clipboard'] = isset($data['clipboard']) ? $data['clipboard'] : null;
        $this->container['mobileAppId'] = isset($data['mobileAppId']) ? $data['mobileAppId'] : null;
        $this->container['pageTemplateId'] = isset($data['pageTemplateId']) ? $data['pageTemplateId'] : null;
        $this->container['componentSpecList'] = isset($data['componentSpecList']) ? $data['componentSpecList'] : null;
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
     * Gets pageType
     *
     * @return \TencentAds\Model\TemplatesPageType
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\TemplatesPageType $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

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
     * Gets pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['pageTitle'];
    }

    /**
     * Sets pageTitle
     *
     * @param string $pageTitle pageTitle
     *
     * @return $this
     */
    public function setPageTitle($pageTitle)
    {
        $this->container['pageTitle'] = $pageTitle;

        return $this;
    }

    /**
     * Gets clipboard
     *
     * @return string
     */
    public function getClipboard()
    {
        return $this->container['clipboard'];
    }

    /**
     * Sets clipboard
     *
     * @param string $clipboard clipboard
     *
     * @return $this
     */
    public function setClipboard($clipboard)
    {
        $this->container['clipboard'] = $clipboard;

        return $this;
    }

    /**
     * Gets mobileAppId
     *
     * @return string
     */
    public function getMobileAppId()
    {
        return $this->container['mobileAppId'];
    }

    /**
     * Sets mobileAppId
     *
     * @param string $mobileAppId mobileAppId
     *
     * @return $this
     */
    public function setMobileAppId($mobileAppId)
    {
        $this->container['mobileAppId'] = $mobileAppId;

        return $this;
    }

    /**
     * Gets pageTemplateId
     *
     * @return string
     */
    public function getPageTemplateId()
    {
        return $this->container['pageTemplateId'];
    }

    /**
     * Sets pageTemplateId
     *
     * @param string $pageTemplateId pageTemplateId
     *
     * @return $this
     */
    public function setPageTemplateId($pageTemplateId)
    {
        $this->container['pageTemplateId'] = $pageTemplateId;

        return $this;
    }

    /**
     * Gets componentSpecList
     *
     * @return string[]
     */
    public function getComponentSpecList()
    {
        return $this->container['componentSpecList'];
    }

    /**
     * Sets componentSpecList
     *
     * @param string[] $componentSpecList componentSpecList
     *
     * @return $this
     */
    public function setComponentSpecList($componentSpecList)
    {
        $this->container['componentSpecList'] = $componentSpecList;

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


