<?php
/**
 * ShipmentResponse
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
 * ShipmentResponse Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => 'string',
        'shipment_reference' => 'string',
        'shipment_creation_date' => '\DateTime',
        'customer_reference_1' => 'string',
        'customer_reference_2' => 'string',
        'sender_references' => 'string[]',
        'email_tracking_enabled' => 'bool',
        'items' => '\ChrisHemmings\AusPost\Client\Model\ShipmentResponseItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => null,
        'shipment_reference' => null,
        'shipment_creation_date' => 'date-time',
        'customer_reference_1' => null,
        'customer_reference_2' => null,
        'sender_references' => null,
        'email_tracking_enabled' => null,
        'items' => null
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
        'shipment_id' => 'shipment_id',
        'shipment_reference' => 'shipment_reference',
        'shipment_creation_date' => 'shipment_creation_date',
        'customer_reference_1' => 'customer_reference_1',
        'customer_reference_2' => 'customer_reference_2',
        'sender_references' => 'sender_references',
        'email_tracking_enabled' => 'email_tracking_enabled',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'shipment_reference' => 'setShipmentReference',
        'shipment_creation_date' => 'setShipmentCreationDate',
        'customer_reference_1' => 'setCustomerReference1',
        'customer_reference_2' => 'setCustomerReference2',
        'sender_references' => 'setSenderReferences',
        'email_tracking_enabled' => 'setEmailTrackingEnabled',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'shipment_reference' => 'getShipmentReference',
        'shipment_creation_date' => 'getShipmentCreationDate',
        'customer_reference_1' => 'getCustomerReference1',
        'customer_reference_2' => 'getCustomerReference2',
        'sender_references' => 'getSenderReferences',
        'email_tracking_enabled' => 'getEmailTrackingEnabled',
        'items' => 'getItems'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_reference'] = isset($data['shipment_reference']) ? $data['shipment_reference'] : null;
        $this->container['shipment_creation_date'] = isset($data['shipment_creation_date']) ? $data['shipment_creation_date'] : null;
        $this->container['customer_reference_1'] = isset($data['customer_reference_1']) ? $data['customer_reference_1'] : null;
        $this->container['customer_reference_2'] = isset($data['customer_reference_2']) ? $data['customer_reference_2'] : null;
        $this->container['sender_references'] = isset($data['sender_references']) ? $data['sender_references'] : null;
        $this->container['email_tracking_enabled'] = isset($data['email_tracking_enabled']) ? $data['email_tracking_enabled'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_reference
     *
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->container['shipment_reference'];
    }

    /**
     * Sets shipment_reference
     *
     * @param string $shipment_reference shipment_reference
     *
     * @return $this
     */
    public function setShipmentReference($shipment_reference)
    {
        $this->container['shipment_reference'] = $shipment_reference;

        return $this;
    }

    /**
     * Gets shipment_creation_date
     *
     * @return \DateTime
     */
    public function getShipmentCreationDate()
    {
        return $this->container['shipment_creation_date'];
    }

    /**
     * Sets shipment_creation_date
     *
     * @param \DateTime $shipment_creation_date shipment_creation_date
     *
     * @return $this
     */
    public function setShipmentCreationDate($shipment_creation_date)
    {
        $this->container['shipment_creation_date'] = $shipment_creation_date;

        return $this;
    }

    /**
     * Gets customer_reference_1
     *
     * @return string
     */
    public function getCustomerReference1()
    {
        return $this->container['customer_reference_1'];
    }

    /**
     * Sets customer_reference_1
     *
     * @param string $customer_reference_1 customer_reference_1
     *
     * @return $this
     */
    public function setCustomerReference1($customer_reference_1)
    {
        $this->container['customer_reference_1'] = $customer_reference_1;

        return $this;
    }

    /**
     * Gets customer_reference_2
     *
     * @return string
     */
    public function getCustomerReference2()
    {
        return $this->container['customer_reference_2'];
    }

    /**
     * Sets customer_reference_2
     *
     * @param string $customer_reference_2 customer_reference_2
     *
     * @return $this
     */
    public function setCustomerReference2($customer_reference_2)
    {
        $this->container['customer_reference_2'] = $customer_reference_2;

        return $this;
    }

    /**
     * Gets sender_references
     *
     * @return string[]
     */
    public function getSenderReferences()
    {
        return $this->container['sender_references'];
    }

    /**
     * Sets sender_references
     *
     * @param string[] $sender_references sender_references
     *
     * @return $this
     */
    public function setSenderReferences($sender_references)
    {
        $this->container['sender_references'] = $sender_references;

        return $this;
    }

    /**
     * Gets email_tracking_enabled
     *
     * @return bool
     */
    public function getEmailTrackingEnabled()
    {
        return $this->container['email_tracking_enabled'];
    }

    /**
     * Sets email_tracking_enabled
     *
     * @param bool $email_tracking_enabled email_tracking_enabled
     *
     * @return $this
     */
    public function setEmailTrackingEnabled($email_tracking_enabled)
    {
        $this->container['email_tracking_enabled'] = $email_tracking_enabled;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItems[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

