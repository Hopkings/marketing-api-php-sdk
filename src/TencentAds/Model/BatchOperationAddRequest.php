<?php
/**
 * BatchOperationAddRequest
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
 * BatchOperationAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchOperationAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchOperationAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'resourceType' => '\TencentAds\Model\ResourceType',
        'operationType' => '\TencentAds\Model\BatchOperationType',
        'resourceIdList' => 'int[]',
        'operationSpec' => '\TencentAds\Model\OperationSpec',
        'accountId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'resourceType' => null,
        'operationType' => null,
        'resourceIdList' => 'int64',
        'operationSpec' => null,
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
        'resourceType' => 'resource_type',
        'operationType' => 'operation_type',
        'resourceIdList' => 'resource_id_list',
        'operationSpec' => 'operation_spec',
        'accountId' => 'account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resourceType' => 'setResourceType',
        'operationType' => 'setOperationType',
        'resourceIdList' => 'setResourceIdList',
        'operationSpec' => 'setOperationSpec',
        'accountId' => 'setAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resourceType' => 'getResourceType',
        'operationType' => 'getOperationType',
        'resourceIdList' => 'getResourceIdList',
        'operationSpec' => 'getOperationSpec',
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['operationSpec'] = isset($data['operationSpec']) ? $data['operationSpec'] : null;
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
     * Gets resourceType
     *
     * @return \TencentAds\Model\ResourceType
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     *
     * @param \TencentAds\Model\ResourceType $resourceType resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return \TencentAds\Model\BatchOperationType
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param \TencentAds\Model\BatchOperationType $operationType operationType
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets resourceIdList
     *
     * @return int[]
     */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
     * Sets resourceIdList
     *
     * @param int[] $resourceIdList resourceIdList
     *
     * @return $this
     */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;

        return $this;
    }

    /**
     * Gets operationSpec
     *
     * @return \TencentAds\Model\OperationSpec
     */
    public function getOperationSpec()
    {
        return $this->container['operationSpec'];
    }

    /**
     * Sets operationSpec
     *
     * @param \TencentAds\Model\OperationSpec $operationSpec operationSpec
     *
     * @return $this
     */
    public function setOperationSpec($operationSpec)
    {
        $this->container['operationSpec'] = $operationSpec;

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

