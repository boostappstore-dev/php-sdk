<?php
/**
 * CampaignRow
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
 * CampaignRow Class Doc Comment
 *
 * @category Class
 * @description The model used to make multiple operations on the same day.
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'frequency' => '\Boostapp\Model\InstallFrequency',
        'install_count' => 'int',
        'search_by' => 'int',
        'review_count' => 'int',
        'review_delay' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'frequency' => null,
        'install_count' => 'int32',
        'search_by' => 'int64',
        'review_count' => 'int32',
        'review_delay' => 'int32'
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
        'frequency' => 'frequency',
        'install_count' => 'installCount',
        'search_by' => 'searchBy',
        'review_count' => 'reviewCount',
        'review_delay' => 'reviewDelay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency' => 'setFrequency',
        'install_count' => 'setInstallCount',
        'search_by' => 'setSearchBy',
        'review_count' => 'setReviewCount',
        'review_delay' => 'setReviewDelay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency' => 'getFrequency',
        'install_count' => 'getInstallCount',
        'search_by' => 'getSearchBy',
        'review_count' => 'getReviewCount',
        'review_delay' => 'getReviewDelay'
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
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['install_count'] = isset($data['install_count']) ? $data['install_count'] : null;
        $this->container['search_by'] = isset($data['search_by']) ? $data['search_by'] : null;
        $this->container['review_count'] = isset($data['review_count']) ? $data['review_count'] : null;
        $this->container['review_delay'] = isset($data['review_delay']) ? $data['review_delay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['install_count'] === null) {
            $invalidProperties[] = "'install_count' can't be null";
        }
        if ($this->container['search_by'] === null) {
            $invalidProperties[] = "'search_by' can't be null";
        }
        if ($this->container['review_count'] === null) {
            $invalidProperties[] = "'review_count' can't be null";
        }
        if ($this->container['review_delay'] === null) {
            $invalidProperties[] = "'review_delay' can't be null";
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
     * Gets frequency
     *
     * @return \Boostapp\Model\InstallFrequency
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \Boostapp\Model\InstallFrequency $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets install_count
     *
     * @return int
     */
    public function getInstallCount()
    {
        return $this->container['install_count'];
    }

    /**
     * Sets install_count
     *
     * @param int $install_count The number of downloads
     *
     * @return $this
     */
    public function setInstallCount($install_count)
    {
        $this->container['install_count'] = $install_count;

        return $this;
    }

    /**
     * Gets search_by
     *
     * @return int
     */
    public function getSearchBy()
    {
        return $this->container['search_by'];
    }

    /**
     * Sets search_by
     *
     * @param int $search_by Keyword ID (e.x.: keyword/list)
     *
     * @return $this
     */
    public function setSearchBy($search_by)
    {
        $this->container['search_by'] = $search_by;

        return $this;
    }

    /**
     * Gets review_count
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->container['review_count'];
    }

    /**
     * Sets review_count
     *
     * @param int $review_count The number of reviews
     *
     * @return $this
     */
    public function setReviewCount($review_count)
    {
        $this->container['review_count'] = $review_count;

        return $this;
    }

    /**
     * Gets review_delay
     *
     * @return int
     */
    public function getReviewDelay()
    {
        return $this->container['review_delay'];
    }

    /**
     * Sets review_delay
     *
     * @param int $review_delay The delay of reviews
     *
     * @return $this
     */
    public function setReviewDelay($review_delay)
    {
        $this->container['review_delay'] = $review_delay;

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


