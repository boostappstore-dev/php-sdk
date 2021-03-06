<?php
/**
 * CampaignDetails
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
 * CampaignDetails Class Doc Comment
 *
 * @category Class
 * @package  Boostapp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => '\Boostapp\Model\CampaignStatus',
        'country_id' => '\Boostapp\Model\Country',
        'remaining_package_installs' => 'int',
        'remaining_keyword_installs' => 'int',
        'remaining_reviews' => 'int',
        'success_package_installs' => 'int',
        'success_keyword_installs' => 'int',
        'success_reviews' => 'int',
        'fail_package_installs' => 'int',
        'fail_keyword_installs' => 'int',
        'fail_reviews' => 'int',
        'created' => '\DateTime',
        'days' => 'map[string,\Boostapp\Model\CampaignDetailsRow[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'status' => null,
        'country_id' => null,
        'remaining_package_installs' => 'int64',
        'remaining_keyword_installs' => 'int64',
        'remaining_reviews' => 'int64',
        'success_package_installs' => 'int64',
        'success_keyword_installs' => 'int64',
        'success_reviews' => 'int64',
        'fail_package_installs' => 'int64',
        'fail_keyword_installs' => 'int64',
        'fail_reviews' => 'int64',
        'created' => 'date-time',
        'days' => null
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
        'id' => 'id',
        'status' => 'status',
        'country_id' => 'countryId',
        'remaining_package_installs' => 'remainingPackageInstalls',
        'remaining_keyword_installs' => 'remainingKeywordInstalls',
        'remaining_reviews' => 'remainingReviews',
        'success_package_installs' => 'successPackageInstalls',
        'success_keyword_installs' => 'successKeywordInstalls',
        'success_reviews' => 'successReviews',
        'fail_package_installs' => 'failPackageInstalls',
        'fail_keyword_installs' => 'failKeywordInstalls',
        'fail_reviews' => 'failReviews',
        'created' => 'created',
        'days' => 'days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'country_id' => 'setCountryId',
        'remaining_package_installs' => 'setRemainingPackageInstalls',
        'remaining_keyword_installs' => 'setRemainingKeywordInstalls',
        'remaining_reviews' => 'setRemainingReviews',
        'success_package_installs' => 'setSuccessPackageInstalls',
        'success_keyword_installs' => 'setSuccessKeywordInstalls',
        'success_reviews' => 'setSuccessReviews',
        'fail_package_installs' => 'setFailPackageInstalls',
        'fail_keyword_installs' => 'setFailKeywordInstalls',
        'fail_reviews' => 'setFailReviews',
        'created' => 'setCreated',
        'days' => 'setDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'country_id' => 'getCountryId',
        'remaining_package_installs' => 'getRemainingPackageInstalls',
        'remaining_keyword_installs' => 'getRemainingKeywordInstalls',
        'remaining_reviews' => 'getRemainingReviews',
        'success_package_installs' => 'getSuccessPackageInstalls',
        'success_keyword_installs' => 'getSuccessKeywordInstalls',
        'success_reviews' => 'getSuccessReviews',
        'fail_package_installs' => 'getFailPackageInstalls',
        'fail_keyword_installs' => 'getFailKeywordInstalls',
        'fail_reviews' => 'getFailReviews',
        'created' => 'getCreated',
        'days' => 'getDays'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['remaining_package_installs'] = isset($data['remaining_package_installs']) ? $data['remaining_package_installs'] : null;
        $this->container['remaining_keyword_installs'] = isset($data['remaining_keyword_installs']) ? $data['remaining_keyword_installs'] : null;
        $this->container['remaining_reviews'] = isset($data['remaining_reviews']) ? $data['remaining_reviews'] : null;
        $this->container['success_package_installs'] = isset($data['success_package_installs']) ? $data['success_package_installs'] : null;
        $this->container['success_keyword_installs'] = isset($data['success_keyword_installs']) ? $data['success_keyword_installs'] : null;
        $this->container['success_reviews'] = isset($data['success_reviews']) ? $data['success_reviews'] : null;
        $this->container['fail_package_installs'] = isset($data['fail_package_installs']) ? $data['fail_package_installs'] : null;
        $this->container['fail_keyword_installs'] = isset($data['fail_keyword_installs']) ? $data['fail_keyword_installs'] : null;
        $this->container['fail_reviews'] = isset($data['fail_reviews']) ? $data['fail_reviews'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['remaining_package_installs'] === null) {
            $invalidProperties[] = "'remaining_package_installs' can't be null";
        }
        if ($this->container['remaining_keyword_installs'] === null) {
            $invalidProperties[] = "'remaining_keyword_installs' can't be null";
        }
        if ($this->container['remaining_reviews'] === null) {
            $invalidProperties[] = "'remaining_reviews' can't be null";
        }
        if ($this->container['success_package_installs'] === null) {
            $invalidProperties[] = "'success_package_installs' can't be null";
        }
        if ($this->container['success_keyword_installs'] === null) {
            $invalidProperties[] = "'success_keyword_installs' can't be null";
        }
        if ($this->container['success_reviews'] === null) {
            $invalidProperties[] = "'success_reviews' can't be null";
        }
        if ($this->container['fail_package_installs'] === null) {
            $invalidProperties[] = "'fail_package_installs' can't be null";
        }
        if ($this->container['fail_keyword_installs'] === null) {
            $invalidProperties[] = "'fail_keyword_installs' can't be null";
        }
        if ($this->container['fail_reviews'] === null) {
            $invalidProperties[] = "'fail_reviews' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Boostapp\Model\CampaignStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Boostapp\Model\CampaignStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets remaining_package_installs
     *
     * @return int
     */
    public function getRemainingPackageInstalls()
    {
        return $this->container['remaining_package_installs'];
    }

    /**
     * Sets remaining_package_installs
     *
     * @param int $remaining_package_installs remaining_package_installs
     *
     * @return $this
     */
    public function setRemainingPackageInstalls($remaining_package_installs)
    {
        $this->container['remaining_package_installs'] = $remaining_package_installs;

        return $this;
    }

    /**
     * Gets remaining_keyword_installs
     *
     * @return int
     */
    public function getRemainingKeywordInstalls()
    {
        return $this->container['remaining_keyword_installs'];
    }

    /**
     * Sets remaining_keyword_installs
     *
     * @param int $remaining_keyword_installs remaining_keyword_installs
     *
     * @return $this
     */
    public function setRemainingKeywordInstalls($remaining_keyword_installs)
    {
        $this->container['remaining_keyword_installs'] = $remaining_keyword_installs;

        return $this;
    }

    /**
     * Gets remaining_reviews
     *
     * @return int
     */
    public function getRemainingReviews()
    {
        return $this->container['remaining_reviews'];
    }

    /**
     * Sets remaining_reviews
     *
     * @param int $remaining_reviews remaining_reviews
     *
     * @return $this
     */
    public function setRemainingReviews($remaining_reviews)
    {
        $this->container['remaining_reviews'] = $remaining_reviews;

        return $this;
    }

    /**
     * Gets success_package_installs
     *
     * @return int
     */
    public function getSuccessPackageInstalls()
    {
        return $this->container['success_package_installs'];
    }

    /**
     * Sets success_package_installs
     *
     * @param int $success_package_installs success_package_installs
     *
     * @return $this
     */
    public function setSuccessPackageInstalls($success_package_installs)
    {
        $this->container['success_package_installs'] = $success_package_installs;

        return $this;
    }

    /**
     * Gets success_keyword_installs
     *
     * @return int
     */
    public function getSuccessKeywordInstalls()
    {
        return $this->container['success_keyword_installs'];
    }

    /**
     * Sets success_keyword_installs
     *
     * @param int $success_keyword_installs success_keyword_installs
     *
     * @return $this
     */
    public function setSuccessKeywordInstalls($success_keyword_installs)
    {
        $this->container['success_keyword_installs'] = $success_keyword_installs;

        return $this;
    }

    /**
     * Gets success_reviews
     *
     * @return int
     */
    public function getSuccessReviews()
    {
        return $this->container['success_reviews'];
    }

    /**
     * Sets success_reviews
     *
     * @param int $success_reviews success_reviews
     *
     * @return $this
     */
    public function setSuccessReviews($success_reviews)
    {
        $this->container['success_reviews'] = $success_reviews;

        return $this;
    }

    /**
     * Gets fail_package_installs
     *
     * @return int
     */
    public function getFailPackageInstalls()
    {
        return $this->container['fail_package_installs'];
    }

    /**
     * Sets fail_package_installs
     *
     * @param int $fail_package_installs fail_package_installs
     *
     * @return $this
     */
    public function setFailPackageInstalls($fail_package_installs)
    {
        $this->container['fail_package_installs'] = $fail_package_installs;

        return $this;
    }

    /**
     * Gets fail_keyword_installs
     *
     * @return int
     */
    public function getFailKeywordInstalls()
    {
        return $this->container['fail_keyword_installs'];
    }

    /**
     * Sets fail_keyword_installs
     *
     * @param int $fail_keyword_installs fail_keyword_installs
     *
     * @return $this
     */
    public function setFailKeywordInstalls($fail_keyword_installs)
    {
        $this->container['fail_keyword_installs'] = $fail_keyword_installs;

        return $this;
    }

    /**
     * Gets fail_reviews
     *
     * @return int
     */
    public function getFailReviews()
    {
        return $this->container['fail_reviews'];
    }

    /**
     * Sets fail_reviews
     *
     * @param int $fail_reviews fail_reviews
     *
     * @return $this
     */
    public function setFailReviews($fail_reviews)
    {
        $this->container['fail_reviews'] = $fail_reviews;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets days
     *
     * @return map[string,\Boostapp\Model\CampaignDetailsRow[]]
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param map[string,\Boostapp\Model\CampaignDetailsRow[]] $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

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


