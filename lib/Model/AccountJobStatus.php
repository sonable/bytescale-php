<?php
/**
 * AccountJobStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bytescale\Model;
use \Bytescale\ObjectSerializer;

/**
 * AccountJobStatus Class Doc Comment
 *
 * @category Class
 * @package  Bytescale
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountJobStatus
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'Created';

    public const PENDING = 'Pending';

    public const RUNNING = 'Running';

    public const ROLLBACK = 'Rollback';

    public const FAILED = 'Failed';

    public const SUCCEEDED = 'Succeeded';

    public const CANCELLING = 'Cancelling';

    public const CANCELLED = 'Cancelled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::PENDING,
            self::RUNNING,
            self::ROLLBACK,
            self::FAILED,
            self::SUCCEEDED,
            self::CANCELLING,
            self::CANCELLED
        ];
    }
}


