<?php
/**
 * PlatformDeliveryDataEmailAllOf
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
 * The version of the OpenAPI document: 1.3.0
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
 * PlatformDeliveryDataEmailAllOf Class Doc Comment
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PlatformDeliveryDataEmailAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlatformDeliveryData_email_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opened' => 'int',
        'unique_opens' => 'int',
        'clicks' => 'int',
        'unique_clicks' => 'int',
        'bounced' => 'int',
        'reported_spam' => 'int',
        'unsubscribed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opened' => null,
        'unique_opens' => null,
        'clicks' => null,
        'unique_clicks' => null,
        'bounced' => null,
        'reported_spam' => null,
        'unsubscribed' => null
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
        'opened' => 'opened',
        'unique_opens' => 'unique_opens',
        'clicks' => 'clicks',
        'unique_clicks' => 'unique_clicks',
        'bounced' => 'bounced',
        'reported_spam' => 'reported_spam',
        'unsubscribed' => 'unsubscribed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opened' => 'setOpened',
        'unique_opens' => 'setUniqueOpens',
        'clicks' => 'setClicks',
        'unique_clicks' => 'setUniqueClicks',
        'bounced' => 'setBounced',
        'reported_spam' => 'setReportedSpam',
        'unsubscribed' => 'setUnsubscribed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opened' => 'getOpened',
        'unique_opens' => 'getUniqueOpens',
        'clicks' => 'getClicks',
        'unique_clicks' => 'getUniqueClicks',
        'bounced' => 'getBounced',
        'reported_spam' => 'getReportedSpam',
        'unsubscribed' => 'getUnsubscribed'
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
        $this->container['opened'] = $data['opened'] ?? null;
        $this->container['unique_opens'] = $data['unique_opens'] ?? null;
        $this->container['clicks'] = $data['clicks'] ?? null;
        $this->container['unique_clicks'] = $data['unique_clicks'] ?? null;
        $this->container['bounced'] = $data['bounced'] ?? null;
        $this->container['reported_spam'] = $data['reported_spam'] ?? null;
        $this->container['unsubscribed'] = $data['unsubscribed'] ?? null;
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
     * Gets opened
     *
     * @return int|null
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     *
     * @param int|null $opened Number of times an email has been opened.
     *
     * @return self
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

        return $this;
    }

    /**
     * Gets unique_opens
     *
     * @return int|null
     */
    public function getUniqueOpens()
    {
        return $this->container['unique_opens'];
    }

    /**
     * Sets unique_opens
     *
     * @param int|null $unique_opens Number of unique recipients who have opened your email.
     *
     * @return self
     */
    public function setUniqueOpens($unique_opens)
    {
        $this->container['unique_opens'] = $unique_opens;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks Number of clicked links from your email. This can include the recipient clicking email links multiple times.
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets unique_clicks
     *
     * @return int|null
     */
    public function getUniqueClicks()
    {
        return $this->container['unique_clicks'];
    }

    /**
     * Sets unique_clicks
     *
     * @param int|null $unique_clicks Number of unique clicks that your recipients have made on links from your email.
     *
     * @return self
     */
    public function setUniqueClicks($unique_clicks)
    {
        $this->container['unique_clicks'] = $unique_clicks;

        return $this;
    }

    /**
     * Gets bounced
     *
     * @return int|null
     */
    public function getBounced()
    {
        return $this->container['bounced'];
    }

    /**
     * Sets bounced
     *
     * @param int|null $bounced Number of recipients who registered as a hard or soft bounce and didn't receive your email.
     *
     * @return self
     */
    public function setBounced($bounced)
    {
        $this->container['bounced'] = $bounced;

        return $this;
    }

    /**
     * Gets reported_spam
     *
     * @return int|null
     */
    public function getReportedSpam()
    {
        return $this->container['reported_spam'];
    }

    /**
     * Sets reported_spam
     *
     * @param int|null $reported_spam Number of recipients who reported this email as spam.
     *
     * @return self
     */
    public function setReportedSpam($reported_spam)
    {
        $this->container['reported_spam'] = $reported_spam;

        return $this;
    }

    /**
     * Gets unsubscribed
     *
     * @return int|null
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     *
     * @param int|null $unsubscribed Number of recipients who opted out of your emails using the unsubscribe link in this email.
     *
     * @return self
     */
    public function setUnsubscribed($unsubscribed)
    {
        $this->container['unsubscribed'] = $unsubscribed;

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


