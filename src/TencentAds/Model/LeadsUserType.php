<?php
/**
 * LeadsUserType
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
 * LeadsUserType Class Doc Comment
 *
 * @category Class
 * @description 线索用户类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsUserType
{
    /**
     * Possible values of this enum
     */
    const QQ = 'USER_TYPE_QQ';
    const QQ_MD5 = 'USER_TYPE_QQ_MD5';
    const TEL = 'USER_TYPE_TEL';
    const TEL_MD5 = 'USER_TYPE_TEL_MD5';
    const IDFA = 'USER_TYPE_IDFA';
    const IDFA_MD5 = 'USER_TYPE_IDFA_MD5';
    const IMEI = 'USER_TYPE_IMEI';
    const IMEI_MD5 = 'USER_TYPE_IMEI_MD5';
    const GDT_OPENID = 'USER_TYPE_GDT_OPENID';
    const MAC_ADDRESS = 'USER_TYPE_MAC_ADDRESS';
    const MAC_ADDRESS_MD5 = 'USER_TYPE_MAC_ADDRESS_MD5';
    const OAID = 'USER_TYPE_OAID';
    const OAID_MD5 = 'USER_TYPE_OAID_MD5';
    const WX_OPENID = 'USER_TYPE_WX_OPENID';
    const WX_UNIONID = 'USER_TYPE_WX_UNIONID';
    const OTHERS = 'USER_TYPE_OTHERS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QQ,
            self::QQ_MD5,
            self::TEL,
            self::TEL_MD5,
            self::IDFA,
            self::IDFA_MD5,
            self::IMEI,
            self::IMEI_MD5,
            self::GDT_OPENID,
            self::MAC_ADDRESS,
            self::MAC_ADDRESS_MD5,
            self::OAID,
            self::OAID_MD5,
            self::WX_OPENID,
            self::WX_UNIONID,
            self::OTHERS,
        ];
    }
}

