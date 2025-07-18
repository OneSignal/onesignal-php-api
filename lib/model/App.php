<?php
/**
 * App
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
 * The version of the OpenAPI document: 5.2.0
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
 * App Class Doc Comment
 *
 * @category Class
 * @package  onesignal\client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class App implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'App';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'players' => 'int',
        'messageable_players' => 'int',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'android_gcm_sender_id' => 'string',
        'gcm_key' => 'string',
        'chrome_web_origin' => 'string',
        'chrome_key' => 'string',
        'chrome_web_default_notification_icon' => 'string',
        'chrome_web_sub_domain' => 'string',
        'apns_env' => 'string',
        'apns_p12' => 'string',
        'apns_p12_password' => 'string',
        'apns_certificates' => 'string',
        'safari_apns_certificates' => 'string',
        'safari_apns_p12' => 'string',
        'safari_apns_p12_password' => 'string',
        'apns_key_id' => 'string',
        'apns_team_id' => 'string',
        'apns_bundle_id' => 'string',
        'apns_p8' => 'string',
        'safari_site_origin' => 'string',
        'safari_push_id' => 'string',
        'safari_icon_16_16' => 'string',
        'safari_icon_32_32' => 'string',
        'safari_icon_64_64' => 'string',
        'safari_icon_128_128' => 'string',
        'safari_icon_256_256' => 'string',
        'site_name' => 'string',
        'basic_auth_key' => 'string',
        'organization_id' => 'string',
        'additional_data_is_root_payload' => 'bool'
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
        'name' => null,
        'players' => null,
        'messageable_players' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'android_gcm_sender_id' => null,
        'gcm_key' => null,
        'chrome_web_origin' => null,
        'chrome_key' => null,
        'chrome_web_default_notification_icon' => null,
        'chrome_web_sub_domain' => null,
        'apns_env' => null,
        'apns_p12' => null,
        'apns_p12_password' => null,
        'apns_certificates' => null,
        'safari_apns_certificates' => null,
        'safari_apns_p12' => null,
        'safari_apns_p12_password' => null,
        'apns_key_id' => null,
        'apns_team_id' => null,
        'apns_bundle_id' => null,
        'apns_p8' => null,
        'safari_site_origin' => null,
        'safari_push_id' => null,
        'safari_icon_16_16' => null,
        'safari_icon_32_32' => null,
        'safari_icon_64_64' => null,
        'safari_icon_128_128' => null,
        'safari_icon_256_256' => null,
        'site_name' => null,
        'basic_auth_key' => null,
        'organization_id' => null,
        'additional_data_is_root_payload' => null
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
        'name' => 'name',
        'players' => 'players',
        'messageable_players' => 'messageable_players',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'android_gcm_sender_id' => 'android_gcm_sender_id',
        'gcm_key' => 'gcm_key',
        'chrome_web_origin' => 'chrome_web_origin',
        'chrome_key' => 'chrome_key',
        'chrome_web_default_notification_icon' => 'chrome_web_default_notification_icon',
        'chrome_web_sub_domain' => 'chrome_web_sub_domain',
        'apns_env' => 'apns_env',
        'apns_p12' => 'apns_p12',
        'apns_p12_password' => 'apns_p12_password',
        'apns_certificates' => 'apns_certificates',
        'safari_apns_certificates' => 'safari_apns_certificates',
        'safari_apns_p12' => 'safari_apns_p12',
        'safari_apns_p12_password' => 'safari_apns_p12_password',
        'apns_key_id' => 'apns_key_id',
        'apns_team_id' => 'apns_team_id',
        'apns_bundle_id' => 'apns_bundle_id',
        'apns_p8' => 'apns_p8',
        'safari_site_origin' => 'safari_site_origin',
        'safari_push_id' => 'safari_push_id',
        'safari_icon_16_16' => 'safari_icon_16_16',
        'safari_icon_32_32' => 'safari_icon_32_32',
        'safari_icon_64_64' => 'safari_icon_64_64',
        'safari_icon_128_128' => 'safari_icon_128_128',
        'safari_icon_256_256' => 'safari_icon_256_256',
        'site_name' => 'site_name',
        'basic_auth_key' => 'basic_auth_key',
        'organization_id' => 'organization_id',
        'additional_data_is_root_payload' => 'additional_data_is_root_payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'players' => 'setPlayers',
        'messageable_players' => 'setMessageablePlayers',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'android_gcm_sender_id' => 'setAndroidGcmSenderId',
        'gcm_key' => 'setGcmKey',
        'chrome_web_origin' => 'setChromeWebOrigin',
        'chrome_key' => 'setChromeKey',
        'chrome_web_default_notification_icon' => 'setChromeWebDefaultNotificationIcon',
        'chrome_web_sub_domain' => 'setChromeWebSubDomain',
        'apns_env' => 'setApnsEnv',
        'apns_p12' => 'setApnsP12',
        'apns_p12_password' => 'setApnsP12Password',
        'apns_certificates' => 'setApnsCertificates',
        'safari_apns_certificates' => 'setSafariApnsCertificates',
        'safari_apns_p12' => 'setSafariApnsP12',
        'safari_apns_p12_password' => 'setSafariApnsP12Password',
        'apns_key_id' => 'setApnsKeyId',
        'apns_team_id' => 'setApnsTeamId',
        'apns_bundle_id' => 'setApnsBundleId',
        'apns_p8' => 'setApnsP8',
        'safari_site_origin' => 'setSafariSiteOrigin',
        'safari_push_id' => 'setSafariPushId',
        'safari_icon_16_16' => 'setSafariIcon1616',
        'safari_icon_32_32' => 'setSafariIcon3232',
        'safari_icon_64_64' => 'setSafariIcon6464',
        'safari_icon_128_128' => 'setSafariIcon128128',
        'safari_icon_256_256' => 'setSafariIcon256256',
        'site_name' => 'setSiteName',
        'basic_auth_key' => 'setBasicAuthKey',
        'organization_id' => 'setOrganizationId',
        'additional_data_is_root_payload' => 'setAdditionalDataIsRootPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'players' => 'getPlayers',
        'messageable_players' => 'getMessageablePlayers',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'android_gcm_sender_id' => 'getAndroidGcmSenderId',
        'gcm_key' => 'getGcmKey',
        'chrome_web_origin' => 'getChromeWebOrigin',
        'chrome_key' => 'getChromeKey',
        'chrome_web_default_notification_icon' => 'getChromeWebDefaultNotificationIcon',
        'chrome_web_sub_domain' => 'getChromeWebSubDomain',
        'apns_env' => 'getApnsEnv',
        'apns_p12' => 'getApnsP12',
        'apns_p12_password' => 'getApnsP12Password',
        'apns_certificates' => 'getApnsCertificates',
        'safari_apns_certificates' => 'getSafariApnsCertificates',
        'safari_apns_p12' => 'getSafariApnsP12',
        'safari_apns_p12_password' => 'getSafariApnsP12Password',
        'apns_key_id' => 'getApnsKeyId',
        'apns_team_id' => 'getApnsTeamId',
        'apns_bundle_id' => 'getApnsBundleId',
        'apns_p8' => 'getApnsP8',
        'safari_site_origin' => 'getSafariSiteOrigin',
        'safari_push_id' => 'getSafariPushId',
        'safari_icon_16_16' => 'getSafariIcon1616',
        'safari_icon_32_32' => 'getSafariIcon3232',
        'safari_icon_64_64' => 'getSafariIcon6464',
        'safari_icon_128_128' => 'getSafariIcon128128',
        'safari_icon_256_256' => 'getSafariIcon256256',
        'site_name' => 'getSiteName',
        'basic_auth_key' => 'getBasicAuthKey',
        'organization_id' => 'getOrganizationId',
        'additional_data_is_root_payload' => 'getAdditionalDataIsRootPayload'
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

    public const APNS_ENV_SANDBOX = 'sandbox';
    public const APNS_ENV_PRODUCTION = 'production';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApnsEnvAllowableValues()
    {
        return [
            self::APNS_ENV_SANDBOX,
            self::APNS_ENV_PRODUCTION,
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
    public function __construct(?array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['players'] = $data['players'] ?? null;
        $this->container['messageable_players'] = $data['messageable_players'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['android_gcm_sender_id'] = $data['android_gcm_sender_id'] ?? null;
        $this->container['gcm_key'] = $data['gcm_key'] ?? null;
        $this->container['chrome_web_origin'] = $data['chrome_web_origin'] ?? null;
        $this->container['chrome_key'] = $data['chrome_key'] ?? null;
        $this->container['chrome_web_default_notification_icon'] = $data['chrome_web_default_notification_icon'] ?? null;
        $this->container['chrome_web_sub_domain'] = $data['chrome_web_sub_domain'] ?? null;
        $this->container['apns_env'] = $data['apns_env'] ?? null;
        $this->container['apns_p12'] = $data['apns_p12'] ?? null;
        $this->container['apns_p12_password'] = $data['apns_p12_password'] ?? null;
        $this->container['apns_certificates'] = $data['apns_certificates'] ?? null;
        $this->container['safari_apns_certificates'] = $data['safari_apns_certificates'] ?? null;
        $this->container['safari_apns_p12'] = $data['safari_apns_p12'] ?? null;
        $this->container['safari_apns_p12_password'] = $data['safari_apns_p12_password'] ?? null;
        $this->container['apns_key_id'] = $data['apns_key_id'] ?? null;
        $this->container['apns_team_id'] = $data['apns_team_id'] ?? null;
        $this->container['apns_bundle_id'] = $data['apns_bundle_id'] ?? null;
        $this->container['apns_p8'] = $data['apns_p8'] ?? null;
        $this->container['safari_site_origin'] = $data['safari_site_origin'] ?? null;
        $this->container['safari_push_id'] = $data['safari_push_id'] ?? null;
        $this->container['safari_icon_16_16'] = $data['safari_icon_16_16'] ?? null;
        $this->container['safari_icon_32_32'] = $data['safari_icon_32_32'] ?? null;
        $this->container['safari_icon_64_64'] = $data['safari_icon_64_64'] ?? null;
        $this->container['safari_icon_128_128'] = $data['safari_icon_128_128'] ?? null;
        $this->container['safari_icon_256_256'] = $data['safari_icon_256_256'] ?? null;
        $this->container['site_name'] = $data['site_name'] ?? null;
        $this->container['basic_auth_key'] = $data['basic_auth_key'] ?? null;
        $this->container['organization_id'] = $data['organization_id'] ?? null;
        $this->container['additional_data_is_root_payload'] = $data['additional_data_is_root_payload'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApnsEnvAllowableValues();
        if (!is_null($this->container['apns_env']) && !in_array($this->container['apns_env'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'apns_env', must be one of '%s'",
                $this->container['apns_env'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of your app, as displayed on your apps list on the dashboard.  This can be renamed.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets players
     *
     * @return int|null
     */
    public function getPlayers()
    {
        return $this->container['players'];
    }

    /**
     * Sets players
     *
     * @param int|null $players players
     *
     * @return self
     */
    public function setPlayers($players)
    {
        $this->container['players'] = $players;

        return $this;
    }

    /**
     * Gets messageable_players
     *
     * @return int|null
     */
    public function getMessageablePlayers()
    {
        return $this->container['messageable_players'];
    }

    /**
     * Sets messageable_players
     *
     * @param int|null $messageable_players messageable_players
     *
     * @return self
     */
    public function setMessageablePlayers($messageable_players)
    {
        $this->container['messageable_players'] = $messageable_players;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets android_gcm_sender_id
     *
     * @return string|null
     */
    public function getAndroidGcmSenderId()
    {
        return $this->container['android_gcm_sender_id'];
    }

    /**
     * Sets android_gcm_sender_id
     *
     * @param string|null $android_gcm_sender_id Android: Your Google Project number.  Also known as Sender ID.
     *
     * @return self
     */
    public function setAndroidGcmSenderId($android_gcm_sender_id)
    {
        $this->container['android_gcm_sender_id'] = $android_gcm_sender_id;

        return $this;
    }

    /**
     * Gets gcm_key
     *
     * @return string|null
     */
    public function getGcmKey()
    {
        return $this->container['gcm_key'];
    }

    /**
     * Sets gcm_key
     *
     * @param string|null $gcm_key Android: Your Google Push Messaging Auth Key
     *
     * @return self
     */
    public function setGcmKey($gcm_key)
    {
        $this->container['gcm_key'] = $gcm_key;

        return $this;
    }

    /**
     * Gets chrome_web_origin
     *
     * @return string|null
     */
    public function getChromeWebOrigin()
    {
        return $this->container['chrome_web_origin'];
    }

    /**
     * Sets chrome_web_origin
     *
     * @param string|null $chrome_web_origin Chrome (All Browsers except Safari) (Recommended): The URL to your website.  This field is required if you wish to enable web push and specify other web push parameters.
     *
     * @return self
     */
    public function setChromeWebOrigin($chrome_web_origin)
    {
        $this->container['chrome_web_origin'] = $chrome_web_origin;

        return $this;
    }

    /**
     * Gets chrome_key
     *
     * @return string|null
     */
    public function getChromeKey()
    {
        return $this->container['chrome_key'];
    }

    /**
     * Sets chrome_key
     *
     * @param string|null $chrome_key Not for web push.  Your Google Push Messaging Auth Key if you use Chrome Apps / Extensions.
     *
     * @return self
     */
    public function setChromeKey($chrome_key)
    {
        $this->container['chrome_key'] = $chrome_key;

        return $this;
    }

    /**
     * Gets chrome_web_default_notification_icon
     *
     * @return string|null
     */
    public function getChromeWebDefaultNotificationIcon()
    {
        return $this->container['chrome_web_default_notification_icon'];
    }

    /**
     * Sets chrome_web_default_notification_icon
     *
     * @param string|null $chrome_web_default_notification_icon Chrome (All Browsers except Safari): Your default notification icon. Should be 256x256 pixels, min 80x80.
     *
     * @return self
     */
    public function setChromeWebDefaultNotificationIcon($chrome_web_default_notification_icon)
    {
        $this->container['chrome_web_default_notification_icon'] = $chrome_web_default_notification_icon;

        return $this;
    }

    /**
     * Gets chrome_web_sub_domain
     *
     * @return string|null
     */
    public function getChromeWebSubDomain()
    {
        return $this->container['chrome_web_sub_domain'];
    }

    /**
     * Sets chrome_web_sub_domain
     *
     * @param string|null $chrome_web_sub_domain Chrome (All Browsers except Safari): A subdomain of your choice in order to support Web Push on non-HTTPS websites. This field must be set in order for the chrome_web_gcm_sender_id property to be processed.
     *
     * @return self
     */
    public function setChromeWebSubDomain($chrome_web_sub_domain)
    {
        $this->container['chrome_web_sub_domain'] = $chrome_web_sub_domain;

        return $this;
    }

    /**
     * Gets apns_env
     *
     * @return string|null
     */
    public function getApnsEnv()
    {
        return $this->container['apns_env'];
    }

    /**
     * Sets apns_env
     *
     * @param string|null $apns_env iOS: Either sandbox or production
     *
     * @return self
     */
    public function setApnsEnv($apns_env)
    {
        $allowedValues = $this->getApnsEnvAllowableValues();
        if (!is_null($apns_env) && !in_array($apns_env, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'apns_env', must be one of '%s'",
                    $apns_env,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apns_env'] = $apns_env;

        return $this;
    }

    /**
     * Gets apns_p12
     *
     * @return string|null
     */
    public function getApnsP12()
    {
        return $this->container['apns_p12'];
    }

    /**
     * Sets apns_p12
     *
     * @param string|null $apns_p12 iOS: Your apple push notification p12 certificate file, converted to a string and Base64 encoded.
     *
     * @return self
     */
    public function setApnsP12($apns_p12)
    {
        $this->container['apns_p12'] = $apns_p12;

        return $this;
    }

    /**
     * Gets apns_p12_password
     *
     * @return string|null
     */
    public function getApnsP12Password()
    {
        return $this->container['apns_p12_password'];
    }

    /**
     * Sets apns_p12_password
     *
     * @param string|null $apns_p12_password iOS: Required if using p12 certificate.  Password for the apns_p12 file.
     *
     * @return self
     */
    public function setApnsP12Password($apns_p12_password)
    {
        $this->container['apns_p12_password'] = $apns_p12_password;

        return $this;
    }

    /**
     * Gets apns_certificates
     *
     * @return string|null
     */
    public function getApnsCertificates()
    {
        return $this->container['apns_certificates'];
    }

    /**
     * Sets apns_certificates
     *
     * @param string|null $apns_certificates apns_certificates
     *
     * @return self
     */
    public function setApnsCertificates($apns_certificates)
    {
        $this->container['apns_certificates'] = $apns_certificates;

        return $this;
    }

    /**
     * Gets safari_apns_certificates
     *
     * @return string|null
     */
    public function getSafariApnsCertificates()
    {
        return $this->container['safari_apns_certificates'];
    }

    /**
     * Sets safari_apns_certificates
     *
     * @param string|null $safari_apns_certificates safari_apns_certificates
     *
     * @return self
     */
    public function setSafariApnsCertificates($safari_apns_certificates)
    {
        $this->container['safari_apns_certificates'] = $safari_apns_certificates;

        return $this;
    }

    /**
     * Gets safari_apns_p12
     *
     * @return string|null
     */
    public function getSafariApnsP12()
    {
        return $this->container['safari_apns_p12'];
    }

    /**
     * Sets safari_apns_p12
     *
     * @param string|null $safari_apns_p12 Safari: Your apple push notification p12 certificate file for Safari Push Notifications, converted to a string and Base64 encoded.
     *
     * @return self
     */
    public function setSafariApnsP12($safari_apns_p12)
    {
        $this->container['safari_apns_p12'] = $safari_apns_p12;

        return $this;
    }

    /**
     * Gets safari_apns_p12_password
     *
     * @return string|null
     */
    public function getSafariApnsP12Password()
    {
        return $this->container['safari_apns_p12_password'];
    }

    /**
     * Sets safari_apns_p12_password
     *
     * @param string|null $safari_apns_p12_password Safari: Password for safari_apns_p12 file
     *
     * @return self
     */
    public function setSafariApnsP12Password($safari_apns_p12_password)
    {
        $this->container['safari_apns_p12_password'] = $safari_apns_p12_password;

        return $this;
    }

    /**
     * Gets apns_key_id
     *
     * @return string|null
     */
    public function getApnsKeyId()
    {
        return $this->container['apns_key_id'];
    }

    /**
     * Sets apns_key_id
     *
     * @param string|null $apns_key_id iOS: Required if using p8. Unique identifier for the p8 authentication key.
     *
     * @return self
     */
    public function setApnsKeyId($apns_key_id)
    {
        $this->container['apns_key_id'] = $apns_key_id;

        return $this;
    }

    /**
     * Gets apns_team_id
     *
     * @return string|null
     */
    public function getApnsTeamId()
    {
        return $this->container['apns_team_id'];
    }

    /**
     * Sets apns_team_id
     *
     * @param string|null $apns_team_id iOS: Required if using p8. Team ID generated by Apple for your developer account.
     *
     * @return self
     */
    public function setApnsTeamId($apns_team_id)
    {
        $this->container['apns_team_id'] = $apns_team_id;

        return $this;
    }

    /**
     * Gets apns_bundle_id
     *
     * @return string|null
     */
    public function getApnsBundleId()
    {
        return $this->container['apns_bundle_id'];
    }

    /**
     * Sets apns_bundle_id
     *
     * @param string|null $apns_bundle_id iOS: Required if using p8. Bundle ID for your app in the Apple ecosystem.
     *
     * @return self
     */
    public function setApnsBundleId($apns_bundle_id)
    {
        $this->container['apns_bundle_id'] = $apns_bundle_id;

        return $this;
    }

    /**
     * Gets apns_p8
     *
     * @return string|null
     */
    public function getApnsP8()
    {
        return $this->container['apns_p8'];
    }

    /**
     * Sets apns_p8
     *
     * @param string|null $apns_p8 iOS: Required if using p8. Base64 encoded p8 key
     *
     * @return self
     */
    public function setApnsP8($apns_p8)
    {
        $this->container['apns_p8'] = $apns_p8;

        return $this;
    }

    /**
     * Gets safari_site_origin
     *
     * @return string|null
     */
    public function getSafariSiteOrigin()
    {
        return $this->container['safari_site_origin'];
    }

    /**
     * Sets safari_site_origin
     *
     * @param string|null $safari_site_origin Safari (Recommended): The hostname to your website including http(s)://
     *
     * @return self
     */
    public function setSafariSiteOrigin($safari_site_origin)
    {
        $this->container['safari_site_origin'] = $safari_site_origin;

        return $this;
    }

    /**
     * Gets safari_push_id
     *
     * @return string|null
     */
    public function getSafariPushId()
    {
        return $this->container['safari_push_id'];
    }

    /**
     * Sets safari_push_id
     *
     * @param string|null $safari_push_id safari_push_id
     *
     * @return self
     */
    public function setSafariPushId($safari_push_id)
    {
        $this->container['safari_push_id'] = $safari_push_id;

        return $this;
    }

    /**
     * Gets safari_icon_16_16
     *
     * @return string|null
     */
    public function getSafariIcon1616()
    {
        return $this->container['safari_icon_16_16'];
    }

    /**
     * Sets safari_icon_16_16
     *
     * @param string|null $safari_icon_16_16 safari_icon_16_16
     *
     * @return self
     */
    public function setSafariIcon1616($safari_icon_16_16)
    {
        $this->container['safari_icon_16_16'] = $safari_icon_16_16;

        return $this;
    }

    /**
     * Gets safari_icon_32_32
     *
     * @return string|null
     */
    public function getSafariIcon3232()
    {
        return $this->container['safari_icon_32_32'];
    }

    /**
     * Sets safari_icon_32_32
     *
     * @param string|null $safari_icon_32_32 safari_icon_32_32
     *
     * @return self
     */
    public function setSafariIcon3232($safari_icon_32_32)
    {
        $this->container['safari_icon_32_32'] = $safari_icon_32_32;

        return $this;
    }

    /**
     * Gets safari_icon_64_64
     *
     * @return string|null
     */
    public function getSafariIcon6464()
    {
        return $this->container['safari_icon_64_64'];
    }

    /**
     * Sets safari_icon_64_64
     *
     * @param string|null $safari_icon_64_64 safari_icon_64_64
     *
     * @return self
     */
    public function setSafariIcon6464($safari_icon_64_64)
    {
        $this->container['safari_icon_64_64'] = $safari_icon_64_64;

        return $this;
    }

    /**
     * Gets safari_icon_128_128
     *
     * @return string|null
     */
    public function getSafariIcon128128()
    {
        return $this->container['safari_icon_128_128'];
    }

    /**
     * Sets safari_icon_128_128
     *
     * @param string|null $safari_icon_128_128 safari_icon_128_128
     *
     * @return self
     */
    public function setSafariIcon128128($safari_icon_128_128)
    {
        $this->container['safari_icon_128_128'] = $safari_icon_128_128;

        return $this;
    }

    /**
     * Gets safari_icon_256_256
     *
     * @return string|null
     */
    public function getSafariIcon256256()
    {
        return $this->container['safari_icon_256_256'];
    }

    /**
     * Sets safari_icon_256_256
     *
     * @param string|null $safari_icon_256_256 Safari: A url for a 256x256 png notification icon. This is the only Safari icon URL you need to provide.
     *
     * @return self
     */
    public function setSafariIcon256256($safari_icon_256_256)
    {
        $this->container['safari_icon_256_256'] = $safari_icon_256_256;

        return $this;
    }

    /**
     * Gets site_name
     *
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->container['site_name'];
    }

    /**
     * Sets site_name
     *
     * @param string|null $site_name All Browsers (Recommended): The Site Name. Requires both chrome_web_origin and safari_site_origin to be set to add or update it.
     *
     * @return self
     */
    public function setSiteName($site_name)
    {
        $this->container['site_name'] = $site_name;

        return $this;
    }

    /**
     * Gets basic_auth_key
     *
     * @return string|null
     */
    public function getBasicAuthKey()
    {
        return $this->container['basic_auth_key'];
    }

    /**
     * Sets basic_auth_key
     *
     * @param string|null $basic_auth_key basic_auth_key
     *
     * @return self
     */
    public function setBasicAuthKey($basic_auth_key)
    {
        $this->container['basic_auth_key'] = $basic_auth_key;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id The Id of the Organization you would like to add this app to.
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets additional_data_is_root_payload
     *
     * @return bool|null
     */
    public function getAdditionalDataIsRootPayload()
    {
        return $this->container['additional_data_is_root_payload'];
    }

    /**
     * Sets additional_data_is_root_payload
     *
     * @param bool|null $additional_data_is_root_payload iOS: Notification data (additional data) values will be added to the root of the apns payload when sent to the device.  Ignore if you're not using any other plugins, or not using OneSignal SDK methods to read the payload.
     *
     * @return self
     */
    public function setAdditionalDataIsRootPayload($additional_data_is_root_payload)
    {
        $this->container['additional_data_is_root_payload'] = $additional_data_is_root_payload;

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


