<?php
/**
 * OrderDeliveryDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderDeliveryDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о доставке.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDeliveryDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDeliveryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => '\OpenAPI\Client\Model\OrderDeliveryType',
        'service_name' => 'string',
        'price' => 'float',
        'delivery_partner_type' => '\OpenAPI\Client\Model\OrderDeliveryPartnerType',
        'courier' => '\OpenAPI\Client\Model\OrderCourierDTO',
        'dates' => '\OpenAPI\Client\Model\OrderDeliveryDatesDTO',
        'region' => '\OpenAPI\Client\Model\RegionDTO',
        'address' => '\OpenAPI\Client\Model\OrderDeliveryAddressDTO',
        'vat' => '\OpenAPI\Client\Model\OrderVatType',
        'delivery_service_id' => 'int',
        'lift_type' => '\OpenAPI\Client\Model\OrderLiftType',
        'lift_price' => 'float',
        'outlet_code' => 'string',
        'outlet_storage_limit_date' => 'string',
        'dispatch_type' => '\OpenAPI\Client\Model\OrderDeliveryDispatchType',
        'tracks' => '\OpenAPI\Client\Model\OrderTrackDTO[]',
        'shipments' => '\OpenAPI\Client\Model\OrderShipmentDTO[]',
        'estimated' => 'bool',
        'eac_type' => '\OpenAPI\Client\Model\OrderDeliveryEacType',
        'eac_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'service_name' => null,
        'price' => 'decimal',
        'delivery_partner_type' => null,
        'courier' => null,
        'dates' => null,
        'region' => null,
        'address' => null,
        'vat' => null,
        'delivery_service_id' => 'int64',
        'lift_type' => null,
        'lift_price' => 'decimal',
        'outlet_code' => null,
        'outlet_storage_limit_date' => 'date-dd-MM-yyyy',
        'dispatch_type' => null,
        'tracks' => null,
        'shipments' => null,
        'estimated' => null,
        'eac_type' => null,
        'eac_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'type' => false,
		'service_name' => false,
		'price' => false,
		'delivery_partner_type' => false,
		'courier' => false,
		'dates' => false,
		'region' => false,
		'address' => false,
		'vat' => false,
		'delivery_service_id' => false,
		'lift_type' => false,
		'lift_price' => false,
		'outlet_code' => false,
		'outlet_storage_limit_date' => false,
		'dispatch_type' => false,
		'tracks' => false,
		'shipments' => false,
		'estimated' => false,
		'eac_type' => false,
		'eac_code' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'service_name' => 'serviceName',
        'price' => 'price',
        'delivery_partner_type' => 'deliveryPartnerType',
        'courier' => 'courier',
        'dates' => 'dates',
        'region' => 'region',
        'address' => 'address',
        'vat' => 'vat',
        'delivery_service_id' => 'deliveryServiceId',
        'lift_type' => 'liftType',
        'lift_price' => 'liftPrice',
        'outlet_code' => 'outletCode',
        'outlet_storage_limit_date' => 'outletStorageLimitDate',
        'dispatch_type' => 'dispatchType',
        'tracks' => 'tracks',
        'shipments' => 'shipments',
        'estimated' => 'estimated',
        'eac_type' => 'eacType',
        'eac_code' => 'eacCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'service_name' => 'setServiceName',
        'price' => 'setPrice',
        'delivery_partner_type' => 'setDeliveryPartnerType',
        'courier' => 'setCourier',
        'dates' => 'setDates',
        'region' => 'setRegion',
        'address' => 'setAddress',
        'vat' => 'setVat',
        'delivery_service_id' => 'setDeliveryServiceId',
        'lift_type' => 'setLiftType',
        'lift_price' => 'setLiftPrice',
        'outlet_code' => 'setOutletCode',
        'outlet_storage_limit_date' => 'setOutletStorageLimitDate',
        'dispatch_type' => 'setDispatchType',
        'tracks' => 'setTracks',
        'shipments' => 'setShipments',
        'estimated' => 'setEstimated',
        'eac_type' => 'setEacType',
        'eac_code' => 'setEacCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'service_name' => 'getServiceName',
        'price' => 'getPrice',
        'delivery_partner_type' => 'getDeliveryPartnerType',
        'courier' => 'getCourier',
        'dates' => 'getDates',
        'region' => 'getRegion',
        'address' => 'getAddress',
        'vat' => 'getVat',
        'delivery_service_id' => 'getDeliveryServiceId',
        'lift_type' => 'getLiftType',
        'lift_price' => 'getLiftPrice',
        'outlet_code' => 'getOutletCode',
        'outlet_storage_limit_date' => 'getOutletStorageLimitDate',
        'dispatch_type' => 'getDispatchType',
        'tracks' => 'getTracks',
        'shipments' => 'getShipments',
        'estimated' => 'getEstimated',
        'eac_type' => 'getEacType',
        'eac_code' => 'getEacCode'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('service_name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('delivery_partner_type', $data ?? [], null);
        $this->setIfExists('courier', $data ?? [], null);
        $this->setIfExists('dates', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('delivery_service_id', $data ?? [], null);
        $this->setIfExists('lift_type', $data ?? [], null);
        $this->setIfExists('lift_price', $data ?? [], null);
        $this->setIfExists('outlet_code', $data ?? [], null);
        $this->setIfExists('outlet_storage_limit_date', $data ?? [], null);
        $this->setIfExists('dispatch_type', $data ?? [], null);
        $this->setIfExists('tracks', $data ?? [], null);
        $this->setIfExists('shipments', $data ?? [], null);
        $this->setIfExists('estimated', $data ?? [], null);
        $this->setIfExists('eac_type', $data ?? [], null);
        $this->setIfExists('eac_code', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Идентификатор доставки, присвоенный магазином.  Указывается, только если магазин передал данный идентификатор в ответе на запрос методом `POST /cart`.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string|null $service_name Наименование службы доставки.
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        if (is_null($service_name)) {
            throw new \InvalidArgumentException('non-nullable service_name cannot be null');
        }
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Стоимость доставки в валюте заказа.  Для отделения целой части от дробной используется точка.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets delivery_partner_type
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryPartnerType|null
     */
    public function getDeliveryPartnerType()
    {
        return $this->container['delivery_partner_type'];
    }

    /**
     * Sets delivery_partner_type
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryPartnerType|null $delivery_partner_type delivery_partner_type
     *
     * @return self
     */
    public function setDeliveryPartnerType($delivery_partner_type)
    {
        if (is_null($delivery_partner_type)) {
            throw new \InvalidArgumentException('non-nullable delivery_partner_type cannot be null');
        }
        $this->container['delivery_partner_type'] = $delivery_partner_type;

        return $this;
    }

    /**
     * Gets courier
     *
     * @return \OpenAPI\Client\Model\OrderCourierDTO|null
     */
    public function getCourier()
    {
        return $this->container['courier'];
    }

    /**
     * Sets courier
     *
     * @param \OpenAPI\Client\Model\OrderCourierDTO|null $courier courier
     *
     * @return self
     */
    public function setCourier($courier)
    {
        if (is_null($courier)) {
            throw new \InvalidArgumentException('non-nullable courier cannot be null');
        }
        $this->container['courier'] = $courier;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryDatesDTO|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryDatesDTO|null $dates dates
     *
     * @return self
     */
    public function setDates($dates)
    {
        if (is_null($dates)) {
            throw new \InvalidArgumentException('non-nullable dates cannot be null');
        }
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets region
     *
     * @return \OpenAPI\Client\Model\RegionDTO|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param \OpenAPI\Client\Model\RegionDTO|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryAddressDTO|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryAddressDTO|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \OpenAPI\Client\Model\OrderVatType|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \OpenAPI\Client\Model\OrderVatType|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets delivery_service_id
     *
     * @return int|null
     */
    public function getDeliveryServiceId()
    {
        return $this->container['delivery_service_id'];
    }

    /**
     * Sets delivery_service_id
     *
     * @param int|null $delivery_service_id Идентификатор службы доставки.
     *
     * @return self
     */
    public function setDeliveryServiceId($delivery_service_id)
    {
        if (is_null($delivery_service_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_service_id cannot be null');
        }
        $this->container['delivery_service_id'] = $delivery_service_id;

        return $this;
    }

    /**
     * Gets lift_type
     *
     * @return \OpenAPI\Client\Model\OrderLiftType|null
     */
    public function getLiftType()
    {
        return $this->container['lift_type'];
    }

    /**
     * Sets lift_type
     *
     * @param \OpenAPI\Client\Model\OrderLiftType|null $lift_type lift_type
     *
     * @return self
     */
    public function setLiftType($lift_type)
    {
        if (is_null($lift_type)) {
            throw new \InvalidArgumentException('non-nullable lift_type cannot be null');
        }
        $this->container['lift_type'] = $lift_type;

        return $this;
    }

    /**
     * Gets lift_price
     *
     * @return float|null
     */
    public function getLiftPrice()
    {
        return $this->container['lift_price'];
    }

    /**
     * Sets lift_price
     *
     * @param float|null $lift_price Стоимость подъема на этаж.
     *
     * @return self
     */
    public function setLiftPrice($lift_price)
    {
        if (is_null($lift_price)) {
            throw new \InvalidArgumentException('non-nullable lift_price cannot be null');
        }
        $this->container['lift_price'] = $lift_price;

        return $this;
    }

    /**
     * Gets outlet_code
     *
     * @return string|null
     */
    public function getOutletCode()
    {
        return $this->container['outlet_code'];
    }

    /**
     * Sets outlet_code
     *
     * @param string|null $outlet_code Идентификатор пункта самовывоза, выбранного покупателем для получения заказа.  Идентификатор указывается:  * в личном кабинете магазина при создании или редактировании точки продаж.  Параметр указывается, если `type=PICKUP`.
     *
     * @return self
     */
    public function setOutletCode($outlet_code)
    {
        if (is_null($outlet_code)) {
            throw new \InvalidArgumentException('non-nullable outlet_code cannot be null');
        }
        $this->container['outlet_code'] = $outlet_code;

        return $this;
    }

    /**
     * Gets outlet_storage_limit_date
     *
     * @return string|null
     */
    public function getOutletStorageLimitDate()
    {
        return $this->container['outlet_storage_limit_date'];
    }

    /**
     * Sets outlet_storage_limit_date
     *
     * @param string|null $outlet_storage_limit_date Формат даты: `ДД-ММ-ГГГГ`.
     *
     * @return self
     */
    public function setOutletStorageLimitDate($outlet_storage_limit_date)
    {
        if (is_null($outlet_storage_limit_date)) {
            throw new \InvalidArgumentException('non-nullable outlet_storage_limit_date cannot be null');
        }
        $this->container['outlet_storage_limit_date'] = $outlet_storage_limit_date;

        return $this;
    }

    /**
     * Gets dispatch_type
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryDispatchType|null
     */
    public function getDispatchType()
    {
        return $this->container['dispatch_type'];
    }

    /**
     * Sets dispatch_type
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryDispatchType|null $dispatch_type dispatch_type
     *
     * @return self
     */
    public function setDispatchType($dispatch_type)
    {
        if (is_null($dispatch_type)) {
            throw new \InvalidArgumentException('non-nullable dispatch_type cannot be null');
        }
        $this->container['dispatch_type'] = $dispatch_type;

        return $this;
    }

    /**
     * Gets tracks
     *
     * @return \OpenAPI\Client\Model\OrderTrackDTO[]|null
     */
    public function getTracks()
    {
        return $this->container['tracks'];
    }

    /**
     * Sets tracks
     *
     * @param \OpenAPI\Client\Model\OrderTrackDTO[]|null $tracks Информация для отслеживания перемещений посылки.
     *
     * @return self
     */
    public function setTracks($tracks)
    {
        if (is_null($tracks)) {
            throw new \InvalidArgumentException('non-nullable tracks cannot be null');
        }
        $this->container['tracks'] = $tracks;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \OpenAPI\Client\Model\OrderShipmentDTO[]|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \OpenAPI\Client\Model\OrderShipmentDTO[]|null $shipments Информация о посылках.
     *
     * @return self
     */
    public function setShipments($shipments)
    {
        if (is_null($shipments)) {
            throw new \InvalidArgumentException('non-nullable shipments cannot be null');
        }
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets estimated
     *
     * @return bool|null
     */
    public function getEstimated()
    {
        return $this->container['estimated'];
    }

    /**
     * Sets estimated
     *
     * @param bool|null $estimated Приблизительная ли дата доставки.
     *
     * @return self
     */
    public function setEstimated($estimated)
    {
        if (is_null($estimated)) {
            throw new \InvalidArgumentException('non-nullable estimated cannot be null');
        }
        $this->container['estimated'] = $estimated;

        return $this;
    }

    /**
     * Gets eac_type
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryEacType|null
     */
    public function getEacType()
    {
        return $this->container['eac_type'];
    }

    /**
     * Sets eac_type
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryEacType|null $eac_type eac_type
     *
     * @return self
     */
    public function setEacType($eac_type)
    {
        if (is_null($eac_type)) {
            throw new \InvalidArgumentException('non-nullable eac_type cannot be null');
        }
        $this->container['eac_type'] = $eac_type;

        return $this;
    }

    /**
     * Gets eac_code
     *
     * @return string|null
     */
    public function getEacCode()
    {
        return $this->container['eac_code'];
    }

    /**
     * Sets eac_code
     *
     * @param string|null $eac_code Код подтверждения ЭАПП (для типа MERCHANT_TO_COURIER).
     *
     * @return self
     */
    public function setEacCode($eac_code)
    {
        if (is_null($eac_code)) {
            throw new \InvalidArgumentException('non-nullable eac_code cannot be null');
        }
        $this->container['eac_code'] = $eac_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


