<?php
/**
 * VideosGetListStruct
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
 * VideosGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideosGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideosGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'videoId' => 'int',
        'width' => 'int',
        'height' => 'int',
        'videoFrames' => 'int',
        'videoFps' => 'double',
        'videoCodec' => 'string',
        'videoBitRate' => 'int',
        'audioCodec' => 'string',
        'audioBitRate' => 'int',
        'fileSize' => 'int',
        'type' => '\TencentAds\Model\MediaType',
        'signature' => 'string',
        'systemStatus' => '\TencentAds\Model\MediaSystemStatus',
        'description' => 'string',
        'previewUrl' => 'string',
        'keyFrameImageUrl' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'videoProfileName' => 'string',
        'audioSampleRate' => 'int',
        'maxKeyframeInterval' => 'int',
        'minKeyframeInterval' => 'int',
        'sampleAspectRatio' => 'string',
        'audioProfileName' => 'string',
        'scanType' => 'string',
        'imageDurationMillisecond' => 'int',
        'audioDurationMillisecond' => 'int',
        'sourceType' => '\TencentAds\Model\MediaSourceType',
        'productCatalogId' => 'string',
        'productOuterId' => 'string',
        'sourceReferenceId' => 'string',
        'ownerAccountId' => 'string',
        'status' => '\TencentAds\Model\MediaStatusType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'videoId' => 'int64',
        'width' => 'int64',
        'height' => 'int64',
        'videoFrames' => 'int64',
        'videoFps' => 'double',
        'videoCodec' => null,
        'videoBitRate' => 'int64',
        'audioCodec' => null,
        'audioBitRate' => 'int64',
        'fileSize' => 'int64',
        'type' => null,
        'signature' => null,
        'systemStatus' => null,
        'description' => null,
        'previewUrl' => null,
        'keyFrameImageUrl' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'videoProfileName' => null,
        'audioSampleRate' => 'int64',
        'maxKeyframeInterval' => 'int64',
        'minKeyframeInterval' => 'int64',
        'sampleAspectRatio' => null,
        'audioProfileName' => null,
        'scanType' => null,
        'imageDurationMillisecond' => 'int64',
        'audioDurationMillisecond' => 'int64',
        'sourceType' => null,
        'productCatalogId' => null,
        'productOuterId' => null,
        'sourceReferenceId' => null,
        'ownerAccountId' => null,
        'status' => null
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
        'videoId' => 'video_id',
        'width' => 'width',
        'height' => 'height',
        'videoFrames' => 'video_frames',
        'videoFps' => 'video_fps',
        'videoCodec' => 'video_codec',
        'videoBitRate' => 'video_bit_rate',
        'audioCodec' => 'audio_codec',
        'audioBitRate' => 'audio_bit_rate',
        'fileSize' => 'file_size',
        'type' => 'type',
        'signature' => 'signature',
        'systemStatus' => 'system_status',
        'description' => 'description',
        'previewUrl' => 'preview_url',
        'keyFrameImageUrl' => 'key_frame_image_url',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'videoProfileName' => 'video_profile_name',
        'audioSampleRate' => 'audio_sample_rate',
        'maxKeyframeInterval' => 'max_keyframe_interval',
        'minKeyframeInterval' => 'min_keyframe_interval',
        'sampleAspectRatio' => 'sample_aspect_ratio',
        'audioProfileName' => 'audio_profile_name',
        'scanType' => 'scan_type',
        'imageDurationMillisecond' => 'image_duration_millisecond',
        'audioDurationMillisecond' => 'audio_duration_millisecond',
        'sourceType' => 'source_type',
        'productCatalogId' => 'product_catalog_id',
        'productOuterId' => 'product_outer_id',
        'sourceReferenceId' => 'source_reference_id',
        'ownerAccountId' => 'owner_account_id',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'videoId' => 'setVideoId',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'videoFrames' => 'setVideoFrames',
        'videoFps' => 'setVideoFps',
        'videoCodec' => 'setVideoCodec',
        'videoBitRate' => 'setVideoBitRate',
        'audioCodec' => 'setAudioCodec',
        'audioBitRate' => 'setAudioBitRate',
        'fileSize' => 'setFileSize',
        'type' => 'setType',
        'signature' => 'setSignature',
        'systemStatus' => 'setSystemStatus',
        'description' => 'setDescription',
        'previewUrl' => 'setPreviewUrl',
        'keyFrameImageUrl' => 'setKeyFrameImageUrl',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'videoProfileName' => 'setVideoProfileName',
        'audioSampleRate' => 'setAudioSampleRate',
        'maxKeyframeInterval' => 'setMaxKeyframeInterval',
        'minKeyframeInterval' => 'setMinKeyframeInterval',
        'sampleAspectRatio' => 'setSampleAspectRatio',
        'audioProfileName' => 'setAudioProfileName',
        'scanType' => 'setScanType',
        'imageDurationMillisecond' => 'setImageDurationMillisecond',
        'audioDurationMillisecond' => 'setAudioDurationMillisecond',
        'sourceType' => 'setSourceType',
        'productCatalogId' => 'setProductCatalogId',
        'productOuterId' => 'setProductOuterId',
        'sourceReferenceId' => 'setSourceReferenceId',
        'ownerAccountId' => 'setOwnerAccountId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'videoId' => 'getVideoId',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'videoFrames' => 'getVideoFrames',
        'videoFps' => 'getVideoFps',
        'videoCodec' => 'getVideoCodec',
        'videoBitRate' => 'getVideoBitRate',
        'audioCodec' => 'getAudioCodec',
        'audioBitRate' => 'getAudioBitRate',
        'fileSize' => 'getFileSize',
        'type' => 'getType',
        'signature' => 'getSignature',
        'systemStatus' => 'getSystemStatus',
        'description' => 'getDescription',
        'previewUrl' => 'getPreviewUrl',
        'keyFrameImageUrl' => 'getKeyFrameImageUrl',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'videoProfileName' => 'getVideoProfileName',
        'audioSampleRate' => 'getAudioSampleRate',
        'maxKeyframeInterval' => 'getMaxKeyframeInterval',
        'minKeyframeInterval' => 'getMinKeyframeInterval',
        'sampleAspectRatio' => 'getSampleAspectRatio',
        'audioProfileName' => 'getAudioProfileName',
        'scanType' => 'getScanType',
        'imageDurationMillisecond' => 'getImageDurationMillisecond',
        'audioDurationMillisecond' => 'getAudioDurationMillisecond',
        'sourceType' => 'getSourceType',
        'productCatalogId' => 'getProductCatalogId',
        'productOuterId' => 'getProductOuterId',
        'sourceReferenceId' => 'getSourceReferenceId',
        'ownerAccountId' => 'getOwnerAccountId',
        'status' => 'getStatus'
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
        $this->container['videoId'] = isset($data['videoId']) ? $data['videoId'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['videoFrames'] = isset($data['videoFrames']) ? $data['videoFrames'] : null;
        $this->container['videoFps'] = isset($data['videoFps']) ? $data['videoFps'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['videoBitRate'] = isset($data['videoBitRate']) ? $data['videoBitRate'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['audioBitRate'] = isset($data['audioBitRate']) ? $data['audioBitRate'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['previewUrl'] = isset($data['previewUrl']) ? $data['previewUrl'] : null;
        $this->container['keyFrameImageUrl'] = isset($data['keyFrameImageUrl']) ? $data['keyFrameImageUrl'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['videoProfileName'] = isset($data['videoProfileName']) ? $data['videoProfileName'] : null;
        $this->container['audioSampleRate'] = isset($data['audioSampleRate']) ? $data['audioSampleRate'] : null;
        $this->container['maxKeyframeInterval'] = isset($data['maxKeyframeInterval']) ? $data['maxKeyframeInterval'] : null;
        $this->container['minKeyframeInterval'] = isset($data['minKeyframeInterval']) ? $data['minKeyframeInterval'] : null;
        $this->container['sampleAspectRatio'] = isset($data['sampleAspectRatio']) ? $data['sampleAspectRatio'] : null;
        $this->container['audioProfileName'] = isset($data['audioProfileName']) ? $data['audioProfileName'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['imageDurationMillisecond'] = isset($data['imageDurationMillisecond']) ? $data['imageDurationMillisecond'] : null;
        $this->container['audioDurationMillisecond'] = isset($data['audioDurationMillisecond']) ? $data['audioDurationMillisecond'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['productOuterId'] = isset($data['productOuterId']) ? $data['productOuterId'] : null;
        $this->container['sourceReferenceId'] = isset($data['sourceReferenceId']) ? $data['sourceReferenceId'] : null;
        $this->container['ownerAccountId'] = isset($data['ownerAccountId']) ? $data['ownerAccountId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets videoId
     *
     * @return int
     */
    public function getVideoId()
    {
        return $this->container['videoId'];
    }

    /**
     * Sets videoId
     *
     * @param int $videoId videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        $this->container['videoId'] = $videoId;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets videoFrames
     *
     * @return int
     */
    public function getVideoFrames()
    {
        return $this->container['videoFrames'];
    }

    /**
     * Sets videoFrames
     *
     * @param int $videoFrames videoFrames
     *
     * @return $this
     */
    public function setVideoFrames($videoFrames)
    {
        $this->container['videoFrames'] = $videoFrames;

        return $this;
    }

    /**
     * Gets videoFps
     *
     * @return double
     */
    public function getVideoFps()
    {
        return $this->container['videoFps'];
    }

    /**
     * Sets videoFps
     *
     * @param double $videoFps videoFps
     *
     * @return $this
     */
    public function setVideoFps($videoFps)
    {
        $this->container['videoFps'] = $videoFps;

        return $this;
    }

    /**
     * Gets videoCodec
     *
     * @return string
     */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
     * Sets videoCodec
     *
     * @param string $videoCodec videoCodec
     *
     * @return $this
     */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;

        return $this;
    }

    /**
     * Gets videoBitRate
     *
     * @return int
     */
    public function getVideoBitRate()
    {
        return $this->container['videoBitRate'];
    }

    /**
     * Sets videoBitRate
     *
     * @param int $videoBitRate videoBitRate
     *
     * @return $this
     */
    public function setVideoBitRate($videoBitRate)
    {
        $this->container['videoBitRate'] = $videoBitRate;

        return $this;
    }

    /**
     * Gets audioCodec
     *
     * @return string
     */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
     * Sets audioCodec
     *
     * @param string $audioCodec audioCodec
     *
     * @return $this
     */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;

        return $this;
    }

    /**
     * Gets audioBitRate
     *
     * @return int
     */
    public function getAudioBitRate()
    {
        return $this->container['audioBitRate'];
    }

    /**
     * Sets audioBitRate
     *
     * @param int $audioBitRate audioBitRate
     *
     * @return $this
     */
    public function setAudioBitRate($audioBitRate)
    {
        $this->container['audioBitRate'] = $audioBitRate;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int $fileSize fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \TencentAds\Model\MediaType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TencentAds\Model\MediaType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\MediaSystemStatus
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\MediaSystemStatus $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets previewUrl
     *
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->container['previewUrl'];
    }

    /**
     * Sets previewUrl
     *
     * @param string $previewUrl previewUrl
     *
     * @return $this
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->container['previewUrl'] = $previewUrl;

        return $this;
    }

    /**
     * Gets keyFrameImageUrl
     *
     * @return string
     */
    public function getKeyFrameImageUrl()
    {
        return $this->container['keyFrameImageUrl'];
    }

    /**
     * Sets keyFrameImageUrl
     *
     * @param string $keyFrameImageUrl keyFrameImageUrl
     *
     * @return $this
     */
    public function setKeyFrameImageUrl($keyFrameImageUrl)
    {
        $this->container['keyFrameImageUrl'] = $keyFrameImageUrl;

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
     * Gets videoProfileName
     *
     * @return string
     */
    public function getVideoProfileName()
    {
        return $this->container['videoProfileName'];
    }

    /**
     * Sets videoProfileName
     *
     * @param string $videoProfileName videoProfileName
     *
     * @return $this
     */
    public function setVideoProfileName($videoProfileName)
    {
        $this->container['videoProfileName'] = $videoProfileName;

        return $this;
    }

    /**
     * Gets audioSampleRate
     *
     * @return int
     */
    public function getAudioSampleRate()
    {
        return $this->container['audioSampleRate'];
    }

    /**
     * Sets audioSampleRate
     *
     * @param int $audioSampleRate audioSampleRate
     *
     * @return $this
     */
    public function setAudioSampleRate($audioSampleRate)
    {
        $this->container['audioSampleRate'] = $audioSampleRate;

        return $this;
    }

    /**
     * Gets maxKeyframeInterval
     *
     * @return int
     */
    public function getMaxKeyframeInterval()
    {
        return $this->container['maxKeyframeInterval'];
    }

    /**
     * Sets maxKeyframeInterval
     *
     * @param int $maxKeyframeInterval maxKeyframeInterval
     *
     * @return $this
     */
    public function setMaxKeyframeInterval($maxKeyframeInterval)
    {
        $this->container['maxKeyframeInterval'] = $maxKeyframeInterval;

        return $this;
    }

    /**
     * Gets minKeyframeInterval
     *
     * @return int
     */
    public function getMinKeyframeInterval()
    {
        return $this->container['minKeyframeInterval'];
    }

    /**
     * Sets minKeyframeInterval
     *
     * @param int $minKeyframeInterval minKeyframeInterval
     *
     * @return $this
     */
    public function setMinKeyframeInterval($minKeyframeInterval)
    {
        $this->container['minKeyframeInterval'] = $minKeyframeInterval;

        return $this;
    }

    /**
     * Gets sampleAspectRatio
     *
     * @return string
     */
    public function getSampleAspectRatio()
    {
        return $this->container['sampleAspectRatio'];
    }

    /**
     * Sets sampleAspectRatio
     *
     * @param string $sampleAspectRatio sampleAspectRatio
     *
     * @return $this
     */
    public function setSampleAspectRatio($sampleAspectRatio)
    {
        $this->container['sampleAspectRatio'] = $sampleAspectRatio;

        return $this;
    }

    /**
     * Gets audioProfileName
     *
     * @return string
     */
    public function getAudioProfileName()
    {
        return $this->container['audioProfileName'];
    }

    /**
     * Sets audioProfileName
     *
     * @param string $audioProfileName audioProfileName
     *
     * @return $this
     */
    public function setAudioProfileName($audioProfileName)
    {
        $this->container['audioProfileName'] = $audioProfileName;

        return $this;
    }

    /**
     * Gets scanType
     *
     * @return string
     */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
     * Sets scanType
     *
     * @param string $scanType scanType
     *
     * @return $this
     */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;

        return $this;
    }

    /**
     * Gets imageDurationMillisecond
     *
     * @return int
     */
    public function getImageDurationMillisecond()
    {
        return $this->container['imageDurationMillisecond'];
    }

    /**
     * Sets imageDurationMillisecond
     *
     * @param int $imageDurationMillisecond imageDurationMillisecond
     *
     * @return $this
     */
    public function setImageDurationMillisecond($imageDurationMillisecond)
    {
        $this->container['imageDurationMillisecond'] = $imageDurationMillisecond;

        return $this;
    }

    /**
     * Gets audioDurationMillisecond
     *
     * @return int
     */
    public function getAudioDurationMillisecond()
    {
        return $this->container['audioDurationMillisecond'];
    }

    /**
     * Sets audioDurationMillisecond
     *
     * @param int $audioDurationMillisecond audioDurationMillisecond
     *
     * @return $this
     */
    public function setAudioDurationMillisecond($audioDurationMillisecond)
    {
        $this->container['audioDurationMillisecond'] = $audioDurationMillisecond;

        return $this;
    }

    /**
     * Gets sourceType
     *
     * @return \TencentAds\Model\MediaSourceType
     */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
     * Sets sourceType
     *
     * @param \TencentAds\Model\MediaSourceType $sourceType sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;

        return $this;
    }

    /**
     * Gets productCatalogId
     *
     * @return string
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param string $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
    }

    /**
     * Gets productOuterId
     *
     * @return string
     */
    public function getProductOuterId()
    {
        return $this->container['productOuterId'];
    }

    /**
     * Sets productOuterId
     *
     * @param string $productOuterId productOuterId
     *
     * @return $this
     */
    public function setProductOuterId($productOuterId)
    {
        $this->container['productOuterId'] = $productOuterId;

        return $this;
    }

    /**
     * Gets sourceReferenceId
     *
     * @return string
     */
    public function getSourceReferenceId()
    {
        return $this->container['sourceReferenceId'];
    }

    /**
     * Sets sourceReferenceId
     *
     * @param string $sourceReferenceId sourceReferenceId
     *
     * @return $this
     */
    public function setSourceReferenceId($sourceReferenceId)
    {
        $this->container['sourceReferenceId'] = $sourceReferenceId;

        return $this;
    }

    /**
     * Gets ownerAccountId
     *
     * @return string
     */
    public function getOwnerAccountId()
    {
        return $this->container['ownerAccountId'];
    }

    /**
     * Sets ownerAccountId
     *
     * @param string $ownerAccountId ownerAccountId
     *
     * @return $this
     */
    public function setOwnerAccountId($ownerAccountId)
    {
        $this->container['ownerAccountId'] = $ownerAccountId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TencentAds\Model\MediaStatusType
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TencentAds\Model\MediaStatusType $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


