<?php
/**
 * LinkPageType
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
 * LinkPageType Class Doc Comment
 *
 * @category Class
 * @description 文字链跳转类型类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkPageType
{
    /**
     * Possible values of this enum
     */
    const NOT_USED = 'LINK_PAGE_TYPE_NOT_USED';
    const _DEFAULT = 'LINK_PAGE_TYPE_DEFAULT';
    const CANVAS_WECHAT = 'LINK_PAGE_TYPE_CANVAS_WECHAT';
    const ARTICAL_WECHAT = 'LINK_PAGE_TYPE_ARTICAL_WECHAT';
    const MINI_PROGRAM_WECHAT = 'LINK_PAGE_TYPE_MINI_PROGRAM_WECHAT';
    const MINI_GAME_WECHAT = 'LINK_PAGE_TYPE_MINI_GAME_WECHAT';
    const FENGYE_ECOMMERCE = 'LINK_PAGE_TYPE_FENGYE_ECOMMERCE';
    const WECHAT_MOMENTS_SIMPLE_NATIVE = 'LINK_PAGE_TYPE_WECHAT_MOMENTS_SIMPLE_NATIVE';
    const CHANNELS_WATCH_LIVE = 'LINK_PAGE_TYPE_CHANNELS_WATCH_LIVE';
    const CHANNELS_RESERVE_LIVE = 'LINK_PAGE_TYPE_CHANNELS_RESERVE_LIVE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_USED,
            self::_DEFAULT,
            self::CANVAS_WECHAT,
            self::ARTICAL_WECHAT,
            self::MINI_PROGRAM_WECHAT,
            self::MINI_GAME_WECHAT,
            self::FENGYE_ECOMMERCE,
            self::WECHAT_MOMENTS_SIMPLE_NATIVE,
            self::CHANNELS_WATCH_LIVE,
            self::CHANNELS_RESERVE_LIVE,
        ];
    }
}

