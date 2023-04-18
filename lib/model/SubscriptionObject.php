<?php
/**
 * SubscriptionObject
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneSignal
 *
 * A powerful way to send personalized messages at scale and build effective customer engagement strategies. Learn more at onesignal.com
 *
 * The version of the OpenAPI document: 1.2.1
 * Contact: devrel@onesignal.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace onesignal\client\model;

use \ArrayAccess;
use \onesignal\client\ObjectSerializer;

/**
 * SubscriptionObject Class Doc Comment
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubscriptionObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'token' => 'string',
        'enabled' => 'bool',
        'notification_types' => 'float',
        'session_time' => 'float',
        'session_count' => 'float',
        'sdk' => 'string',
        'device_model' => 'string',
        'device_os' => 'string',
        'rooted' => 'bool',
        'test_type' => 'float',
        'app_version' => 'string',
        'net_type' => 'float',
        'carrier' => 'string',
        'web_auth' => 'string',
        'web_p256' => 'string'
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
        'token' => null,
        'enabled' => null,
        'notification_types' => null,
        'session_time' => null,
        'session_count' => null,
        'sdk' => null,
        'device_model' => null,
        'device_os' => null,
        'rooted' => null,
        'test_type' => null,
        'app_version' => null,
        'net_type' => null,
        'carrier' => null,
        'web_auth' => null,
        'web_p256' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'token' => 'token',
        'enabled' => 'enabled',
        'notification_types' => 'notification_types',
        'session_time' => 'session_time',
        'session_count' => 'session_count',
        'sdk' => 'sdk',
        'device_model' => 'device_model',
        'device_os' => 'device_os',
        'rooted' => 'rooted',
        'test_type' => 'test_type',
        'app_version' => 'app_version',
        'net_type' => 'net_type',
        'carrier' => 'carrier',
        'web_auth' => 'web_auth',
        'web_p256' => 'web_p256'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'token' => 'setToken',
        'enabled' => 'setEnabled',
        'notification_types' => 'setNotificationTypes',
        'session_time' => 'setSessionTime',
        'session_count' => 'setSessionCount',
        'sdk' => 'setSdk',
        'device_model' => 'setDeviceModel',
        'device_os' => 'setDeviceOs',
        'rooted' => 'setRooted',
        'test_type' => 'setTestType',
        'app_version' => 'setAppVersion',
        'net_type' => 'setNetType',
        'carrier' => 'setCarrier',
        'web_auth' => 'setWebAuth',
        'web_p256' => 'setWebP256'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'token' => 'getToken',
        'enabled' => 'getEnabled',
        'notification_types' => 'getNotificationTypes',
        'session_time' => 'getSessionTime',
        'session_count' => 'getSessionCount',
        'sdk' => 'getSdk',
        'device_model' => 'getDeviceModel',
        'device_os' => 'getDeviceOs',
        'rooted' => 'getRooted',
        'test_type' => 'getTestType',
        'app_version' => 'getAppVersion',
        'net_type' => 'getNetType',
        'carrier' => 'getCarrier',
        'web_auth' => 'getWebAuth',
        'web_p256' => 'getWebP256'
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

    public const TYPE_I_OS_PUSH = 'iOSPush';
    public const TYPE_ANDROID_PUSH = 'AndroidPush';
    public const TYPE_FIRE_OS_PUSH = 'FireOSPush';
    public const TYPE_CHROME_EXTENSION_PUSH = 'ChromeExtensionPush';
    public const TYPE_CHROME_PUSH = 'ChromePush';
    public const TYPE_WINDOWS_PUSH = 'WindowsPush';
    public const TYPE_SAFARI_LEGACY_PUSH = 'SafariLegacyPush';
    public const TYPE_FIREFOX_PUSH = 'FirefoxPush';
    public const TYPE_MAC_OS_PUSH = 'macOSPush';
    public const TYPE_HUAWEI_PUSH = 'HuaweiPush';
    public const TYPE_SAFARI_PUSH = 'SafariPush';
    public const TYPE_EMAIL = 'Email';
    public const TYPE_SMS = 'SMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_I_OS_PUSH,
            self::TYPE_ANDROID_PUSH,
            self::TYPE_FIRE_OS_PUSH,
            self::TYPE_CHROME_EXTENSION_PUSH,
            self::TYPE_CHROME_PUSH,
            self::TYPE_WINDOWS_PUSH,
            self::TYPE_SAFARI_LEGACY_PUSH,
            self::TYPE_FIREFOX_PUSH,
            self::TYPE_MAC_OS_PUSH,
            self::TYPE_HUAWEI_PUSH,
            self::TYPE_SAFARI_PUSH,
            self::TYPE_EMAIL,
            self::TYPE_SMS,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['notification_types'] = $data['notification_types'] ?? null;
        $this->container['session_time'] = $data['session_time'] ?? null;
        $this->container['session_count'] = $data['session_count'] ?? null;
        $this->container['sdk'] = $data['sdk'] ?? null;
        $this->container['device_model'] = $data['device_model'] ?? null;
        $this->container['device_os'] = $data['device_os'] ?? null;
        $this->container['rooted'] = $data['rooted'] ?? null;
        $this->container['test_type'] = $data['test_type'] ?? null;
        $this->container['app_version'] = $data['app_version'] ?? null;
        $this->container['net_type'] = $data['net_type'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['web_auth'] = $data['web_auth'] ?? null;
        $this->container['web_p256'] = $data['web_p256'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets notification_types
     *
     * @return float|null
     */
    public function getNotificationTypes()
    {
        return $this->container['notification_types'];
    }

    /**
     * Sets notification_types
     *
     * @param float|null $notification_types notification_types
     *
     * @return self
     */
    public function setNotificationTypes($notification_types)
    {
        $this->container['notification_types'] = $notification_types;

        return $this;
    }

    /**
     * Gets session_time
     *
     * @return float|null
     */
    public function getSessionTime()
    {
        return $this->container['session_time'];
    }

    /**
     * Sets session_time
     *
     * @param float|null $session_time session_time
     *
     * @return self
     */
    public function setSessionTime($session_time)
    {
        $this->container['session_time'] = $session_time;

        return $this;
    }

    /**
     * Gets session_count
     *
     * @return float|null
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     *
     * @param float|null $session_count session_count
     *
     * @return self
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets sdk
     *
     * @return string|null
     */
    public function getSdk()
    {
        return $this->container['sdk'];
    }

    /**
     * Sets sdk
     *
     * @param string|null $sdk sdk
     *
     * @return self
     */
    public function setSdk($sdk)
    {
        $this->container['sdk'] = $sdk;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string|null
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string|null $device_model device_model
     *
     * @return self
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets device_os
     *
     * @return string|null
     */
    public function getDeviceOs()
    {
        return $this->container['device_os'];
    }

    /**
     * Sets device_os
     *
     * @param string|null $device_os device_os
     *
     * @return self
     */
    public function setDeviceOs($device_os)
    {
        $this->container['device_os'] = $device_os;

        return $this;
    }

    /**
     * Gets rooted
     *
     * @return bool|null
     */
    public function getRooted()
    {
        return $this->container['rooted'];
    }

    /**
     * Sets rooted
     *
     * @param bool|null $rooted rooted
     *
     * @return self
     */
    public function setRooted($rooted)
    {
        $this->container['rooted'] = $rooted;

        return $this;
    }

    /**
     * Gets test_type
     *
     * @return float|null
     */
    public function getTestType()
    {
        return $this->container['test_type'];
    }

    /**
     * Sets test_type
     *
     * @param float|null $test_type test_type
     *
     * @return self
     */
    public function setTestType($test_type)
    {
        $this->container['test_type'] = $test_type;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string|null $app_version app_version
     *
     * @return self
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets net_type
     *
     * @return float|null
     */
    public function getNetType()
    {
        return $this->container['net_type'];
    }

    /**
     * Sets net_type
     *
     * @param float|null $net_type net_type
     *
     * @return self
     */
    public function setNetType($net_type)
    {
        $this->container['net_type'] = $net_type;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets web_auth
     *
     * @return string|null
     */
    public function getWebAuth()
    {
        return $this->container['web_auth'];
    }

    /**
     * Sets web_auth
     *
     * @param string|null $web_auth web_auth
     *
     * @return self
     */
    public function setWebAuth($web_auth)
    {
        $this->container['web_auth'] = $web_auth;

        return $this;
    }

    /**
     * Gets web_p256
     *
     * @return string|null
     */
    public function getWebP256()
    {
        return $this->container['web_p256'];
    }

    /**
     * Sets web_p256
     *
     * @param string|null $web_p256 web_p256
     *
     * @return self
     */
    public function setWebP256($web_p256)
    {
        $this->container['web_p256'] = $web_p256;

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


