<?php
/**
 * CampaignsGetListStruct
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
 * CampaignsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignId' => 'int',
        'campaignName' => 'string',
        'configuredStatus' => '\TencentAds\Model\AdStatus',
        'campaignType' => '\TencentAds\Model\CampaignType',
        'promotedObjectType' => '\TencentAds\Model\PromotedObject',
        'dailyBudget' => 'int',
        'budgetReachDate' => 'int',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'speedMode' => '\TencentAds\Model\SpeedMode',
        'isDeleted' => 'bool',
        'isAutoReplenish' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignId' => 'int64',
        'campaignName' => null,
        'configuredStatus' => null,
        'campaignType' => null,
        'promotedObjectType' => null,
        'dailyBudget' => 'int64',
        'budgetReachDate' => 'int64',
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'speedMode' => null,
        'isDeleted' => null,
        'isAutoReplenish' => 'int64'
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
        'campaignId' => 'campaign_id',
        'campaignName' => 'campaign_name',
        'configuredStatus' => 'configured_status',
        'campaignType' => 'campaign_type',
        'promotedObjectType' => 'promoted_object_type',
        'dailyBudget' => 'daily_budget',
        'budgetReachDate' => 'budget_reach_date',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'speedMode' => 'speed_mode',
        'isDeleted' => 'is_deleted',
        'isAutoReplenish' => 'is_auto_replenish'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'campaignName' => 'setCampaignName',
        'configuredStatus' => 'setConfiguredStatus',
        'campaignType' => 'setCampaignType',
        'promotedObjectType' => 'setPromotedObjectType',
        'dailyBudget' => 'setDailyBudget',
        'budgetReachDate' => 'setBudgetReachDate',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'speedMode' => 'setSpeedMode',
        'isDeleted' => 'setIsDeleted',
        'isAutoReplenish' => 'setIsAutoReplenish'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'campaignName' => 'getCampaignName',
        'configuredStatus' => 'getConfiguredStatus',
        'campaignType' => 'getCampaignType',
        'promotedObjectType' => 'getPromotedObjectType',
        'dailyBudget' => 'getDailyBudget',
        'budgetReachDate' => 'getBudgetReachDate',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'speedMode' => 'getSpeedMode',
        'isDeleted' => 'getIsDeleted',
        'isAutoReplenish' => 'getIsAutoReplenish'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['campaignType'] = isset($data['campaignType']) ? $data['campaignType'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['budgetReachDate'] = isset($data['budgetReachDate']) ? $data['budgetReachDate'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['speedMode'] = isset($data['speedMode']) ? $data['speedMode'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['isAutoReplenish'] = isset($data['isAutoReplenish']) ? $data['isAutoReplenish'] : null;
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
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string $campaignName campaignName
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\AdStatus
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\AdStatus $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return \TencentAds\Model\CampaignType
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param \TencentAds\Model\CampaignType $campaignType campaignType
     *
     * @return $this
     */
    public function setCampaignType($campaignType)
    {
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObject
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObject $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return int
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param int $dailyBudget dailyBudget
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets budgetReachDate
     *
     * @return int
     */
    public function getBudgetReachDate()
    {
        return $this->container['budgetReachDate'];
    }

    /**
     * Sets budgetReachDate
     *
     * @param int $budgetReachDate budgetReachDate
     *
     * @return $this
     */
    public function setBudgetReachDate($budgetReachDate)
    {
        $this->container['budgetReachDate'] = $budgetReachDate;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets speedMode
     *
     * @return \TencentAds\Model\SpeedMode
     */
    public function getSpeedMode()
    {
        return $this->container['speedMode'];
    }

    /**
     * Sets speedMode
     *
     * @param \TencentAds\Model\SpeedMode $speedMode speedMode
     *
     * @return $this
     */
    public function setSpeedMode($speedMode)
    {
        $this->container['speedMode'] = $speedMode;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets isAutoReplenish
     *
     * @return int
     */
    public function getIsAutoReplenish()
    {
        return $this->container['isAutoReplenish'];
    }

    /**
     * Sets isAutoReplenish
     *
     * @param int $isAutoReplenish isAutoReplenish
     *
     * @return $this
     */
    public function setIsAutoReplenish($isAutoReplenish)
    {
        $this->container['isAutoReplenish'] = $isAutoReplenish;

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


