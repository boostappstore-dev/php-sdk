<?php
/**
 * CampaignCreateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Boost App Store API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@boostapp.store
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Boostapp\Model;

use \ArrayAccess;
use \Boostapp\ObjectSerializer;

/**
 * CampaignCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Campaign request model,
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'package_name' => 'string',
        'country_id' => '\Boostapp\Model\Country',
        'days' => 'map[string,\Boostapp\Model\CampaignDay]',
        'five_star' => 'int',
        'four_star' => 'int',
        'three_star' => 'int',
        'two_star' => 'int',
        'one_star' => 'int',
        'delivery_type' => '\Boostapp\Model\DeliveryType',
        'reviews' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'package_name' => null,
        'country_id' => null,
        'days' => null,
        'five_star' => 'int32',
        'four_star' => 'int32',
        'three_star' => 'int32',
        'two_star' => 'int32',
        'one_star' => 'int32',
        'delivery_type' => null,
        'reviews' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifier' => 'identifier',
        'package_name' => 'packageName',
        'country_id' => 'countryId',
        'days' => 'days',
        'five_star' => 'fiveStar',
        'four_star' => 'fourStar',
        'three_star' => 'threeStar',
        'two_star' => 'twoStar',
        'one_star' => 'oneStar',
        'delivery_type' => 'deliveryType',
        'reviews' => 'reviews'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'package_name' => 'setPackageName',
        'country_id' => 'setCountryId',
        'days' => 'setDays',
        'five_star' => 'setFiveStar',
        'four_star' => 'setFourStar',
        'three_star' => 'setThreeStar',
        'two_star' => 'setTwoStar',
        'one_star' => 'setOneStar',
        'delivery_type' => 'setDeliveryType',
        'reviews' => 'setReviews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'package_name' => 'getPackageName',
        'country_id' => 'getCountryId',
        'days' => 'getDays',
        'five_star' => 'getFiveStar',
        'four_star' => 'getFourStar',
        'three_star' => 'getThreeStar',
        'two_star' => 'getTwoStar',
        'one_star' => 'getOneStar',
        'delivery_type' => 'getDeliveryType',
        'reviews' => 'getReviews'
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
        return self::$swaggerModelName;
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['package_name'] = isset($data['package_name']) ? $data['package_name'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['five_star'] = isset($data['five_star']) ? $data['five_star'] : null;
        $this->container['four_star'] = isset($data['four_star']) ? $data['four_star'] : null;
        $this->container['three_star'] = isset($data['three_star']) ? $data['three_star'] : null;
        $this->container['two_star'] = isset($data['two_star']) ? $data['two_star'] : null;
        $this->container['one_star'] = isset($data['one_star']) ? $data['one_star'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['reviews'] = isset($data['reviews']) ? $data['reviews'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['package_name'] === null) {
            $invalidProperties[] = "'package_name' can't be null";
        }
        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['days'] === null) {
            $invalidProperties[] = "'days' can't be null";
        }
        if ($this->container['five_star'] === null) {
            $invalidProperties[] = "'five_star' can't be null";
        }
        if ($this->container['four_star'] === null) {
            $invalidProperties[] = "'four_star' can't be null";
        }
        if ($this->container['three_star'] === null) {
            $invalidProperties[] = "'three_star' can't be null";
        }
        if ($this->container['two_star'] === null) {
            $invalidProperties[] = "'two_star' can't be null";
        }
        if ($this->container['one_star'] === null) {
            $invalidProperties[] = "'one_star' can't be null";
        }
        if ($this->container['delivery_type'] === null) {
            $invalidProperties[] = "'delivery_type' can't be null";
        }
        if ($this->container['reviews'] === null) {
            $invalidProperties[] = "'reviews' can't be null";
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Customer identity, leave empty for adding to your dealer account (Cannot be NULL)
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets package_name
     *
     * @return string
     */
    public function getPackageName()
    {
        return $this->container['package_name'];
    }

    /**
     * Sets package_name
     *
     * @param string $package_name The package name of the application
     *
     * @return $this
     */
    public function setPackageName($package_name)
    {
        $this->container['package_name'] = $package_name;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return \Boostapp\Model\Country
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param \Boostapp\Model\Country $country_id country_id
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets days
     *
     * @return map[string,\Boostapp\Model\CampaignDay]
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param map[string,\Boostapp\Model\CampaignDay] $days It is a dictionary type model where operations are separated day by day. The format is {'The day number'=>'content'}.<br>**Important: The value 0 is today, the value 1 is tomorrow. It can take a value between 0 and 6 (inclusive). If we assume today as the 1st day, the value 6 must be defined for the 7th day.<br>There should be no space between days. <br>0, 3, 4 [WRONG]<br>0, 1, 2, 3, 4 [TRUE]**
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets five_star
     *
     * @return int
     */
    public function getFiveStar()
    {
        return $this->container['five_star'];
    }

    /**
     * Sets five_star
     *
     * @param int $five_star Five star rating of reviews.<br>Min.: 0 Max.: 100
     *
     * @return $this
     */
    public function setFiveStar($five_star)
    {
        $this->container['five_star'] = $five_star;

        return $this;
    }

    /**
     * Gets four_star
     *
     * @return int
     */
    public function getFourStar()
    {
        return $this->container['four_star'];
    }

    /**
     * Sets four_star
     *
     * @param int $four_star Four star rating of reviews.<br>Min.: 0 Max.: 100
     *
     * @return $this
     */
    public function setFourStar($four_star)
    {
        $this->container['four_star'] = $four_star;

        return $this;
    }

    /**
     * Gets three_star
     *
     * @return int
     */
    public function getThreeStar()
    {
        return $this->container['three_star'];
    }

    /**
     * Sets three_star
     *
     * @param int $three_star Three star rating of reviews.<br>Min.: 0 Max.: 100
     *
     * @return $this
     */
    public function setThreeStar($three_star)
    {
        $this->container['three_star'] = $three_star;

        return $this;
    }

    /**
     * Gets two_star
     *
     * @return int
     */
    public function getTwoStar()
    {
        return $this->container['two_star'];
    }

    /**
     * Sets two_star
     *
     * @param int $two_star Two star rating of reviews.<br>Min.: 0 Max.: 100
     *
     * @return $this
     */
    public function setTwoStar($two_star)
    {
        $this->container['two_star'] = $two_star;

        return $this;
    }

    /**
     * Gets one_star
     *
     * @return int
     */
    public function getOneStar()
    {
        return $this->container['one_star'];
    }

    /**
     * Sets one_star
     *
     * @param int $one_star One star rating of reviews.<br>Min.: 0 Max.: 100
     *
     * @return $this
     */
    public function setOneStar($one_star)
    {
        $this->container['one_star'] = $one_star;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return \Boostapp\Model\DeliveryType
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param \Boostapp\Model\DeliveryType $delivery_type delivery_type
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets reviews
     *
     * @return string[]
     */
    public function getReviews()
    {
        return $this->container['reviews'];
    }

    /**
     * Sets reviews
     *
     * @param string[] $reviews Array variable where comments are defined. Each item expresses a comment. In the situation of a missing number of reviews, all defined comments are used, and the remaining reviews are sent without comments. If more than one item is entered, it uses as much as it needs. This variable does not increase or decrease the number of reviews to be made.
     *
     * @return $this
     */
    public function setReviews($reviews)
    {
        $this->container['reviews'] = $reviews;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

