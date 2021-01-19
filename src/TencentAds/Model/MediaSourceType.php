<?php
/**
 * MediaSourceType
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
use \TencentAds\ObjectSerializer;

/**
 * MediaSourceType Class Doc Comment
 *
 * @category Class
 * @description 视频来源
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaSourceType
{
    /**
     * Possible values of this enum
     */
    const UNSUPPORTED = 'SOURCE_TYPE_UNSUPPORTED';
    const LOCAL = 'SOURCE_TYPE_LOCAL';
    const API = 'SOURCE_TYPE_API';
    const VIDEO_MAKER_XSJ = 'SOURCE_TYPE_VIDEO_MAKER_XSJ';
    const TCC = 'SOURCE_TYPE_TCC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSUPPORTED,
            self::LOCAL,
            self::API,
            self::VIDEO_MAKER_XSJ,
            self::TCC,
        ];
    }
}

