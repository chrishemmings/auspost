<?php
/**
 * LabelGroups
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia Post Shipping & Tracking API
 *
 * Integrating your systems with Australia Post and StarTrack using the Shipping and Tracking APIs enables you to lodge the information we need when sending parcels through our delivery networks.  You can currently use the Shipping and Tracking APIs for...  - Lodgement of parcels – creates an order, including all the shipments and items, and lodges the parcels with Australia Post and StarTrack  - Label printing - prints our most up-to-date labels to improve your operational efficiency  - Getting your contract details - gives all your current account information, including products, contract expiry dates & product features  - Getting your contract pricing - provides an indicative price at checkout to enable the best service to be selected, giving you confidence of cost of lodgement  - Tracking your parcels - allows you to easily surface tracking information on your website for your staff or customers
 *
 * OpenAPI spec version: 1.0.0
 * Contact: cwhemmings@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\AusPost\Client\Model;

use \ArrayAccess;
use \ChrisHemmings\AusPost\ObjectSerializer;

/**
 * LabelGroups Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelGroups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group' => 'string',
        'layout' => 'string',
        'branded' => 'bool',
        'left_offset' => 'int',
        'top_offset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group' => null,
        'layout' => null,
        'branded' => null,
        'left_offset' => null,
        'top_offset' => null
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
        'group' => 'group',
        'layout' => 'layout',
        'branded' => 'branded',
        'left_offset' => 'left_offset',
        'top_offset' => 'top_offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group' => 'setGroup',
        'layout' => 'setLayout',
        'branded' => 'setBranded',
        'left_offset' => 'setLeftOffset',
        'top_offset' => 'setTopOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group' => 'getGroup',
        'layout' => 'getLayout',
        'branded' => 'getBranded',
        'left_offset' => 'getLeftOffset',
        'top_offset' => 'getTopOffset'
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['branded'] = isset($data['branded']) ? $data['branded'] : null;
        $this->container['left_offset'] = isset($data['left_offset']) ? $data['left_offset'] : null;
        $this->container['top_offset'] = isset($data['top_offset']) ? $data['top_offset'] : null;
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
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string $layout layout
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets branded
     *
     * @return bool
     */
    public function getBranded()
    {
        return $this->container['branded'];
    }

    /**
     * Sets branded
     *
     * @param bool $branded branded
     *
     * @return $this
     */
    public function setBranded($branded)
    {
        $this->container['branded'] = $branded;

        return $this;
    }

    /**
     * Gets left_offset
     *
     * @return int
     */
    public function getLeftOffset()
    {
        return $this->container['left_offset'];
    }

    /**
     * Sets left_offset
     *
     * @param int $left_offset left_offset
     *
     * @return $this
     */
    public function setLeftOffset($left_offset)
    {
        $this->container['left_offset'] = $left_offset;

        return $this;
    }

    /**
     * Gets top_offset
     *
     * @return int
     */
    public function getTopOffset()
    {
        return $this->container['top_offset'];
    }

    /**
     * Sets top_offset
     *
     * @param int $top_offset top_offset
     *
     * @return $this
     */
    public function setTopOffset($top_offset)
    {
        $this->container['top_offset'] = $top_offset;

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

