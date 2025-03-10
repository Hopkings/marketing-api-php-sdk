<?php
/**
 * AdgroupsUpdateRequest
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
 * AdgroupsUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupsUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdgroupsUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'adgroupName' => 'string',
        'beginDate' => 'string',
        'firstDayBeginTime' => 'string',
        'endDate' => 'string',
        'bidAmount' => 'int',
        'conversionId' => 'int',
        'optimizationGoal' => '\TencentAds\Model\OptimizationGoal',
        'timeSeries' => 'string',
        'dailyBudget' => 'int',
        'appAndroidChannelPackageId' => 'string',
        'targetingId' => 'int',
        'targeting' => '\TencentAds\Model\WriteTargetingSettingForAdgroup',
        'sceneSpec' => '\TencentAds\Model\SceneTargetingForWrite',
        'configuredStatus' => '\TencentAds\Model\AdStatus',
        'customizedCategory' => 'string',
        'additionalUserActionSets' => '\TencentAds\Model\UserActionSetStruct[]',
        'bidStrategy' => '\TencentAds\Model\BidStrategy',
        'coldStartAudience' => 'int[]',
        'autoAudience' => 'bool',
        'expandEnabled' => 'bool',
        'expandTargeting' => 'string[]',
        'deepConversionSpec' => '\TencentAds\Model\DeepConversionSpec',
        'poiList' => 'string[]',
        'deepConversionBehaviorBid' => 'int',
        'deepConversionWorthRate' => 'double',
        'bidMode' => '\TencentAds\Model\BidMode',
        'bidAdjustment' => '\TencentAds\Model\BidAdjustment',
        'autoAcquisitionEnabled' => 'bool',
        'autoAcquisitionBudget' => 'int',
        'autoDerivedCreativeEnabled' => 'bool',
        'userActionSets' => '\TencentAds\Model\UserActionSetStruct[]',
        'dynamicAdSpec' => '\TencentAds\Model\DynamicAdSpec',
        'accountId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'adgroupName' => null,
        'beginDate' => null,
        'firstDayBeginTime' => null,
        'endDate' => null,
        'bidAmount' => 'int64',
        'conversionId' => 'int64',
        'optimizationGoal' => null,
        'timeSeries' => null,
        'dailyBudget' => 'int64',
        'appAndroidChannelPackageId' => null,
        'targetingId' => 'int64',
        'targeting' => null,
        'sceneSpec' => null,
        'configuredStatus' => null,
        'customizedCategory' => null,
        'additionalUserActionSets' => null,
        'bidStrategy' => null,
        'coldStartAudience' => 'int64',
        'autoAudience' => null,
        'expandEnabled' => null,
        'expandTargeting' => null,
        'deepConversionSpec' => null,
        'poiList' => null,
        'deepConversionBehaviorBid' => 'int64',
        'deepConversionWorthRate' => 'double',
        'bidMode' => null,
        'bidAdjustment' => null,
        'autoAcquisitionEnabled' => null,
        'autoAcquisitionBudget' => 'int64',
        'autoDerivedCreativeEnabled' => null,
        'userActionSets' => null,
        'dynamicAdSpec' => null,
        'accountId' => 'int64'
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
        'adgroupId' => 'adgroup_id',
        'adgroupName' => 'adgroup_name',
        'beginDate' => 'begin_date',
        'firstDayBeginTime' => 'first_day_begin_time',
        'endDate' => 'end_date',
        'bidAmount' => 'bid_amount',
        'conversionId' => 'conversion_id',
        'optimizationGoal' => 'optimization_goal',
        'timeSeries' => 'time_series',
        'dailyBudget' => 'daily_budget',
        'appAndroidChannelPackageId' => 'app_android_channel_package_id',
        'targetingId' => 'targeting_id',
        'targeting' => 'targeting',
        'sceneSpec' => 'scene_spec',
        'configuredStatus' => 'configured_status',
        'customizedCategory' => 'customized_category',
        'additionalUserActionSets' => 'additional_user_action_sets',
        'bidStrategy' => 'bid_strategy',
        'coldStartAudience' => 'cold_start_audience',
        'autoAudience' => 'auto_audience',
        'expandEnabled' => 'expand_enabled',
        'expandTargeting' => 'expand_targeting',
        'deepConversionSpec' => 'deep_conversion_spec',
        'poiList' => 'poi_list',
        'deepConversionBehaviorBid' => 'deep_conversion_behavior_bid',
        'deepConversionWorthRate' => 'deep_conversion_worth_rate',
        'bidMode' => 'bid_mode',
        'bidAdjustment' => 'bid_adjustment',
        'autoAcquisitionEnabled' => 'auto_acquisition_enabled',
        'autoAcquisitionBudget' => 'auto_acquisition_budget',
        'autoDerivedCreativeEnabled' => 'auto_derived_creative_enabled',
        'userActionSets' => 'user_action_sets',
        'dynamicAdSpec' => 'dynamic_ad_spec',
        'accountId' => 'account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'adgroupName' => 'setAdgroupName',
        'beginDate' => 'setBeginDate',
        'firstDayBeginTime' => 'setFirstDayBeginTime',
        'endDate' => 'setEndDate',
        'bidAmount' => 'setBidAmount',
        'conversionId' => 'setConversionId',
        'optimizationGoal' => 'setOptimizationGoal',
        'timeSeries' => 'setTimeSeries',
        'dailyBudget' => 'setDailyBudget',
        'appAndroidChannelPackageId' => 'setAppAndroidChannelPackageId',
        'targetingId' => 'setTargetingId',
        'targeting' => 'setTargeting',
        'sceneSpec' => 'setSceneSpec',
        'configuredStatus' => 'setConfiguredStatus',
        'customizedCategory' => 'setCustomizedCategory',
        'additionalUserActionSets' => 'setAdditionalUserActionSets',
        'bidStrategy' => 'setBidStrategy',
        'coldStartAudience' => 'setColdStartAudience',
        'autoAudience' => 'setAutoAudience',
        'expandEnabled' => 'setExpandEnabled',
        'expandTargeting' => 'setExpandTargeting',
        'deepConversionSpec' => 'setDeepConversionSpec',
        'poiList' => 'setPoiList',
        'deepConversionBehaviorBid' => 'setDeepConversionBehaviorBid',
        'deepConversionWorthRate' => 'setDeepConversionWorthRate',
        'bidMode' => 'setBidMode',
        'bidAdjustment' => 'setBidAdjustment',
        'autoAcquisitionEnabled' => 'setAutoAcquisitionEnabled',
        'autoAcquisitionBudget' => 'setAutoAcquisitionBudget',
        'autoDerivedCreativeEnabled' => 'setAutoDerivedCreativeEnabled',
        'userActionSets' => 'setUserActionSets',
        'dynamicAdSpec' => 'setDynamicAdSpec',
        'accountId' => 'setAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'adgroupName' => 'getAdgroupName',
        'beginDate' => 'getBeginDate',
        'firstDayBeginTime' => 'getFirstDayBeginTime',
        'endDate' => 'getEndDate',
        'bidAmount' => 'getBidAmount',
        'conversionId' => 'getConversionId',
        'optimizationGoal' => 'getOptimizationGoal',
        'timeSeries' => 'getTimeSeries',
        'dailyBudget' => 'getDailyBudget',
        'appAndroidChannelPackageId' => 'getAppAndroidChannelPackageId',
        'targetingId' => 'getTargetingId',
        'targeting' => 'getTargeting',
        'sceneSpec' => 'getSceneSpec',
        'configuredStatus' => 'getConfiguredStatus',
        'customizedCategory' => 'getCustomizedCategory',
        'additionalUserActionSets' => 'getAdditionalUserActionSets',
        'bidStrategy' => 'getBidStrategy',
        'coldStartAudience' => 'getColdStartAudience',
        'autoAudience' => 'getAutoAudience',
        'expandEnabled' => 'getExpandEnabled',
        'expandTargeting' => 'getExpandTargeting',
        'deepConversionSpec' => 'getDeepConversionSpec',
        'poiList' => 'getPoiList',
        'deepConversionBehaviorBid' => 'getDeepConversionBehaviorBid',
        'deepConversionWorthRate' => 'getDeepConversionWorthRate',
        'bidMode' => 'getBidMode',
        'bidAdjustment' => 'getBidAdjustment',
        'autoAcquisitionEnabled' => 'getAutoAcquisitionEnabled',
        'autoAcquisitionBudget' => 'getAutoAcquisitionBudget',
        'autoDerivedCreativeEnabled' => 'getAutoDerivedCreativeEnabled',
        'userActionSets' => 'getUserActionSets',
        'dynamicAdSpec' => 'getDynamicAdSpec',
        'accountId' => 'getAccountId'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adgroupName'] = isset($data['adgroupName']) ? $data['adgroupName'] : null;
        $this->container['beginDate'] = isset($data['beginDate']) ? $data['beginDate'] : null;
        $this->container['firstDayBeginTime'] = isset($data['firstDayBeginTime']) ? $data['firstDayBeginTime'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['bidAmount'] = isset($data['bidAmount']) ? $data['bidAmount'] : null;
        $this->container['conversionId'] = isset($data['conversionId']) ? $data['conversionId'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['timeSeries'] = isset($data['timeSeries']) ? $data['timeSeries'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['appAndroidChannelPackageId'] = isset($data['appAndroidChannelPackageId']) ? $data['appAndroidChannelPackageId'] : null;
        $this->container['targetingId'] = isset($data['targetingId']) ? $data['targetingId'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['sceneSpec'] = isset($data['sceneSpec']) ? $data['sceneSpec'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['customizedCategory'] = isset($data['customizedCategory']) ? $data['customizedCategory'] : null;
        $this->container['additionalUserActionSets'] = isset($data['additionalUserActionSets']) ? $data['additionalUserActionSets'] : null;
        $this->container['bidStrategy'] = isset($data['bidStrategy']) ? $data['bidStrategy'] : null;
        $this->container['coldStartAudience'] = isset($data['coldStartAudience']) ? $data['coldStartAudience'] : null;
        $this->container['autoAudience'] = isset($data['autoAudience']) ? $data['autoAudience'] : null;
        $this->container['expandEnabled'] = isset($data['expandEnabled']) ? $data['expandEnabled'] : null;
        $this->container['expandTargeting'] = isset($data['expandTargeting']) ? $data['expandTargeting'] : null;
        $this->container['deepConversionSpec'] = isset($data['deepConversionSpec']) ? $data['deepConversionSpec'] : null;
        $this->container['poiList'] = isset($data['poiList']) ? $data['poiList'] : null;
        $this->container['deepConversionBehaviorBid'] = isset($data['deepConversionBehaviorBid']) ? $data['deepConversionBehaviorBid'] : null;
        $this->container['deepConversionWorthRate'] = isset($data['deepConversionWorthRate']) ? $data['deepConversionWorthRate'] : null;
        $this->container['bidMode'] = isset($data['bidMode']) ? $data['bidMode'] : null;
        $this->container['bidAdjustment'] = isset($data['bidAdjustment']) ? $data['bidAdjustment'] : null;
        $this->container['autoAcquisitionEnabled'] = isset($data['autoAcquisitionEnabled']) ? $data['autoAcquisitionEnabled'] : null;
        $this->container['autoAcquisitionBudget'] = isset($data['autoAcquisitionBudget']) ? $data['autoAcquisitionBudget'] : null;
        $this->container['autoDerivedCreativeEnabled'] = isset($data['autoDerivedCreativeEnabled']) ? $data['autoDerivedCreativeEnabled'] : null;
        $this->container['userActionSets'] = isset($data['userActionSets']) ? $data['userActionSets'] : null;
        $this->container['dynamicAdSpec'] = isset($data['dynamicAdSpec']) ? $data['dynamicAdSpec'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
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
     * Gets adgroupId
     *
     * @return int
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets adgroupName
     *
     * @return string
     */
    public function getAdgroupName()
    {
        return $this->container['adgroupName'];
    }

    /**
     * Sets adgroupName
     *
     * @param string $adgroupName adgroupName
     *
     * @return $this
     */
    public function setAdgroupName($adgroupName)
    {
        $this->container['adgroupName'] = $adgroupName;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return string
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param string $beginDate beginDate
     *
     * @return $this
     */
    public function setBeginDate($beginDate)
    {
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets firstDayBeginTime
     *
     * @return string
     */
    public function getFirstDayBeginTime()
    {
        return $this->container['firstDayBeginTime'];
    }

    /**
     * Sets firstDayBeginTime
     *
     * @param string $firstDayBeginTime firstDayBeginTime
     *
     * @return $this
     */
    public function setFirstDayBeginTime($firstDayBeginTime)
    {
        $this->container['firstDayBeginTime'] = $firstDayBeginTime;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets bidAmount
     *
     * @return int
     */
    public function getBidAmount()
    {
        return $this->container['bidAmount'];
    }

    /**
     * Sets bidAmount
     *
     * @param int $bidAmount bidAmount
     *
     * @return $this
     */
    public function setBidAmount($bidAmount)
    {
        $this->container['bidAmount'] = $bidAmount;

        return $this;
    }

    /**
     * Gets conversionId
     *
     * @return int
     */
    public function getConversionId()
    {
        return $this->container['conversionId'];
    }

    /**
     * Sets conversionId
     *
     * @param int $conversionId conversionId
     *
     * @return $this
     */
    public function setConversionId($conversionId)
    {
        $this->container['conversionId'] = $conversionId;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\OptimizationGoal
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\OptimizationGoal $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets timeSeries
     *
     * @return string
     */
    public function getTimeSeries()
    {
        return $this->container['timeSeries'];
    }

    /**
     * Sets timeSeries
     *
     * @param string $timeSeries timeSeries
     *
     * @return $this
     */
    public function setTimeSeries($timeSeries)
    {
        $this->container['timeSeries'] = $timeSeries;

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
     * Gets appAndroidChannelPackageId
     *
     * @return string
     */
    public function getAppAndroidChannelPackageId()
    {
        return $this->container['appAndroidChannelPackageId'];
    }

    /**
     * Sets appAndroidChannelPackageId
     *
     * @param string $appAndroidChannelPackageId appAndroidChannelPackageId
     *
     * @return $this
     */
    public function setAppAndroidChannelPackageId($appAndroidChannelPackageId)
    {
        $this->container['appAndroidChannelPackageId'] = $appAndroidChannelPackageId;

        return $this;
    }

    /**
     * Gets targetingId
     *
     * @return int
     */
    public function getTargetingId()
    {
        return $this->container['targetingId'];
    }

    /**
     * Sets targetingId
     *
     * @param int $targetingId targetingId
     *
     * @return $this
     */
    public function setTargetingId($targetingId)
    {
        $this->container['targetingId'] = $targetingId;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \TencentAds\Model\WriteTargetingSettingForAdgroup
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \TencentAds\Model\WriteTargetingSettingForAdgroup $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets sceneSpec
     *
     * @return \TencentAds\Model\SceneTargetingForWrite
     */
    public function getSceneSpec()
    {
        return $this->container['sceneSpec'];
    }

    /**
     * Sets sceneSpec
     *
     * @param \TencentAds\Model\SceneTargetingForWrite $sceneSpec sceneSpec
     *
     * @return $this
     */
    public function setSceneSpec($sceneSpec)
    {
        $this->container['sceneSpec'] = $sceneSpec;

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
     * Gets customizedCategory
     *
     * @return string
     */
    public function getCustomizedCategory()
    {
        return $this->container['customizedCategory'];
    }

    /**
     * Sets customizedCategory
     *
     * @param string $customizedCategory customizedCategory
     *
     * @return $this
     */
    public function setCustomizedCategory($customizedCategory)
    {
        $this->container['customizedCategory'] = $customizedCategory;

        return $this;
    }

    /**
     * Gets additionalUserActionSets
     *
     * @return \TencentAds\Model\UserActionSetStruct[]
     */
    public function getAdditionalUserActionSets()
    {
        return $this->container['additionalUserActionSets'];
    }

    /**
     * Sets additionalUserActionSets
     *
     * @param \TencentAds\Model\UserActionSetStruct[] $additionalUserActionSets additionalUserActionSets
     *
     * @return $this
     */
    public function setAdditionalUserActionSets($additionalUserActionSets)
    {
        $this->container['additionalUserActionSets'] = $additionalUserActionSets;

        return $this;
    }

    /**
     * Gets bidStrategy
     *
     * @return \TencentAds\Model\BidStrategy
     */
    public function getBidStrategy()
    {
        return $this->container['bidStrategy'];
    }

    /**
     * Sets bidStrategy
     *
     * @param \TencentAds\Model\BidStrategy $bidStrategy bidStrategy
     *
     * @return $this
     */
    public function setBidStrategy($bidStrategy)
    {
        $this->container['bidStrategy'] = $bidStrategy;

        return $this;
    }

    /**
     * Gets coldStartAudience
     *
     * @return int[]
     */
    public function getColdStartAudience()
    {
        return $this->container['coldStartAudience'];
    }

    /**
     * Sets coldStartAudience
     *
     * @param int[] $coldStartAudience coldStartAudience
     *
     * @return $this
     */
    public function setColdStartAudience($coldStartAudience)
    {
        $this->container['coldStartAudience'] = $coldStartAudience;

        return $this;
    }

    /**
     * Gets autoAudience
     *
     * @return bool
     */
    public function getAutoAudience()
    {
        return $this->container['autoAudience'];
    }

    /**
     * Sets autoAudience
     *
     * @param bool $autoAudience autoAudience
     *
     * @return $this
     */
    public function setAutoAudience($autoAudience)
    {
        $this->container['autoAudience'] = $autoAudience;

        return $this;
    }

    /**
     * Gets expandEnabled
     *
     * @return bool
     */
    public function getExpandEnabled()
    {
        return $this->container['expandEnabled'];
    }

    /**
     * Sets expandEnabled
     *
     * @param bool $expandEnabled expandEnabled
     *
     * @return $this
     */
    public function setExpandEnabled($expandEnabled)
    {
        $this->container['expandEnabled'] = $expandEnabled;

        return $this;
    }

    /**
     * Gets expandTargeting
     *
     * @return string[]
     */
    public function getExpandTargeting()
    {
        return $this->container['expandTargeting'];
    }

    /**
     * Sets expandTargeting
     *
     * @param string[] $expandTargeting expandTargeting
     *
     * @return $this
     */
    public function setExpandTargeting($expandTargeting)
    {
        $this->container['expandTargeting'] = $expandTargeting;

        return $this;
    }

    /**
     * Gets deepConversionSpec
     *
     * @return \TencentAds\Model\DeepConversionSpec
     */
    public function getDeepConversionSpec()
    {
        return $this->container['deepConversionSpec'];
    }

    /**
     * Sets deepConversionSpec
     *
     * @param \TencentAds\Model\DeepConversionSpec $deepConversionSpec deepConversionSpec
     *
     * @return $this
     */
    public function setDeepConversionSpec($deepConversionSpec)
    {
        $this->container['deepConversionSpec'] = $deepConversionSpec;

        return $this;
    }

    /**
     * Gets poiList
     *
     * @return string[]
     */
    public function getPoiList()
    {
        return $this->container['poiList'];
    }

    /**
     * Sets poiList
     *
     * @param string[] $poiList poiList
     *
     * @return $this
     */
    public function setPoiList($poiList)
    {
        $this->container['poiList'] = $poiList;

        return $this;
    }

    /**
     * Gets deepConversionBehaviorBid
     *
     * @return int
     */
    public function getDeepConversionBehaviorBid()
    {
        return $this->container['deepConversionBehaviorBid'];
    }

    /**
     * Sets deepConversionBehaviorBid
     *
     * @param int $deepConversionBehaviorBid deepConversionBehaviorBid
     *
     * @return $this
     */
    public function setDeepConversionBehaviorBid($deepConversionBehaviorBid)
    {
        $this->container['deepConversionBehaviorBid'] = $deepConversionBehaviorBid;

        return $this;
    }

    /**
     * Gets deepConversionWorthRate
     *
     * @return double
     */
    public function getDeepConversionWorthRate()
    {
        return $this->container['deepConversionWorthRate'];
    }

    /**
     * Sets deepConversionWorthRate
     *
     * @param double $deepConversionWorthRate deepConversionWorthRate
     *
     * @return $this
     */
    public function setDeepConversionWorthRate($deepConversionWorthRate)
    {
        $this->container['deepConversionWorthRate'] = $deepConversionWorthRate;

        return $this;
    }

    /**
     * Gets bidMode
     *
     * @return \TencentAds\Model\BidMode
     */
    public function getBidMode()
    {
        return $this->container['bidMode'];
    }

    /**
     * Sets bidMode
     *
     * @param \TencentAds\Model\BidMode $bidMode bidMode
     *
     * @return $this
     */
    public function setBidMode($bidMode)
    {
        $this->container['bidMode'] = $bidMode;

        return $this;
    }

    /**
     * Gets bidAdjustment
     *
     * @return \TencentAds\Model\BidAdjustment
     */
    public function getBidAdjustment()
    {
        return $this->container['bidAdjustment'];
    }

    /**
     * Sets bidAdjustment
     *
     * @param \TencentAds\Model\BidAdjustment $bidAdjustment bidAdjustment
     *
     * @return $this
     */
    public function setBidAdjustment($bidAdjustment)
    {
        $this->container['bidAdjustment'] = $bidAdjustment;

        return $this;
    }

    /**
     * Gets autoAcquisitionEnabled
     *
     * @return bool
     */
    public function getAutoAcquisitionEnabled()
    {
        return $this->container['autoAcquisitionEnabled'];
    }

    /**
     * Sets autoAcquisitionEnabled
     *
     * @param bool $autoAcquisitionEnabled autoAcquisitionEnabled
     *
     * @return $this
     */
    public function setAutoAcquisitionEnabled($autoAcquisitionEnabled)
    {
        $this->container['autoAcquisitionEnabled'] = $autoAcquisitionEnabled;

        return $this;
    }

    /**
     * Gets autoAcquisitionBudget
     *
     * @return int
     */
    public function getAutoAcquisitionBudget()
    {
        return $this->container['autoAcquisitionBudget'];
    }

    /**
     * Sets autoAcquisitionBudget
     *
     * @param int $autoAcquisitionBudget autoAcquisitionBudget
     *
     * @return $this
     */
    public function setAutoAcquisitionBudget($autoAcquisitionBudget)
    {
        $this->container['autoAcquisitionBudget'] = $autoAcquisitionBudget;

        return $this;
    }

    /**
     * Gets autoDerivedCreativeEnabled
     *
     * @return bool
     */
    public function getAutoDerivedCreativeEnabled()
    {
        return $this->container['autoDerivedCreativeEnabled'];
    }

    /**
     * Sets autoDerivedCreativeEnabled
     *
     * @param bool $autoDerivedCreativeEnabled autoDerivedCreativeEnabled
     *
     * @return $this
     */
    public function setAutoDerivedCreativeEnabled($autoDerivedCreativeEnabled)
    {
        $this->container['autoDerivedCreativeEnabled'] = $autoDerivedCreativeEnabled;

        return $this;
    }

    /**
     * Gets userActionSets
     *
     * @return \TencentAds\Model\UserActionSetStruct[]
     */
    public function getUserActionSets()
    {
        return $this->container['userActionSets'];
    }

    /**
     * Sets userActionSets
     *
     * @param \TencentAds\Model\UserActionSetStruct[] $userActionSets userActionSets
     *
     * @return $this
     */
    public function setUserActionSets($userActionSets)
    {
        $this->container['userActionSets'] = $userActionSets;

        return $this;
    }

    /**
     * Gets dynamicAdSpec
     *
     * @return \TencentAds\Model\DynamicAdSpec
     */
    public function getDynamicAdSpec()
    {
        return $this->container['dynamicAdSpec'];
    }

    /**
     * Sets dynamicAdSpec
     *
     * @param \TencentAds\Model\DynamicAdSpec $dynamicAdSpec dynamicAdSpec
     *
     * @return $this
     */
    public function setDynamicAdSpec($dynamicAdSpec)
    {
        $this->container['dynamicAdSpec'] = $dynamicAdSpec;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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


