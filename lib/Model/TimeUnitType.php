<?php
/**
 * TimeUnitType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TimeUnitType Class Doc Comment
 *
 * @category Class
 * @description Единица измерения времени:  * &#x60;HOUR&#x60; — час; * &#x60;DAY&#x60; — сутки; * &#x60;WEEK&#x60; — неделя; * &#x60;MONTH&#x60; — месяц; * &#x60;YEAR&#x60; — год.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimeUnitType
{
    /**
     * Possible values of this enum
     */
    public const HOUR = 'HOUR';

    public const DAY = 'DAY';

    public const WEEK = 'WEEK';

    public const MONTH = 'MONTH';

    public const YEAR = 'YEAR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOUR,
            self::DAY,
            self::WEEK,
            self::MONTH,
            self::YEAR
        ];
    }
}


