<?php
/**
 * AccountJobStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * AccountJobStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountJobStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'Created';
    const PENDING = 'Pending';
    const RUNNING = 'Running';
    const ROLLBACK = 'Rollback';
    const FAILED = 'Failed';
    const SUCCEEDED = 'Succeeded';
    const CANCELLING = 'Cancelling';
    const CANCELLED = 'Cancelled';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED
            self::PENDING
            self::RUNNING
            self::ROLLBACK
            self::FAILED
            self::SUCCEEDED
            self::CANCELLING
            self::CANCELLED
        ];
    }
}
