<?php
/**
 * ShipmentResponseItems
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
 * ShipmentResponseItems Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\AusPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentResponseItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentResponseItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weight' => 'float',
        'authority_to_leave' => 'bool',
        'safe_drop_enabled' => 'bool',
        'allow_partial_delivery' => 'bool',
        'item_id' => 'string',
        'item_reference' => 'string',
        'tracking_details' => '\ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsTrackingDetails',
        'product_id' => 'string',
        'itemsummary' => '\ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsItemsummary',
        'item_contents' => 'string[]',
        'options' => 'object',
        'shipment_summary' => '\ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsShipmentSummary',
        'movement_type' => 'string',
        'charge_to_account' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weight' => null,
        'authority_to_leave' => null,
        'safe_drop_enabled' => null,
        'allow_partial_delivery' => null,
        'item_id' => null,
        'item_reference' => null,
        'tracking_details' => null,
        'product_id' => null,
        'itemsummary' => null,
        'item_contents' => null,
        'options' => null,
        'shipment_summary' => null,
        'movement_type' => null,
        'charge_to_account' => null
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
        'weight' => 'weight',
        'authority_to_leave' => 'authority_to_leave',
        'safe_drop_enabled' => 'safe_drop_enabled',
        'allow_partial_delivery' => 'allow_partial_delivery',
        'item_id' => 'item_id',
        'item_reference' => 'item_reference',
        'tracking_details' => 'tracking_details',
        'product_id' => 'product_id',
        'itemsummary' => 'item:summary',
        'item_contents' => 'item_contents',
        'options' => 'options',
        'shipment_summary' => 'shipment_summary',
        'movement_type' => 'movement_type',
        'charge_to_account' => 'charge_to_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weight' => 'setWeight',
        'authority_to_leave' => 'setAuthorityToLeave',
        'safe_drop_enabled' => 'setSafeDropEnabled',
        'allow_partial_delivery' => 'setAllowPartialDelivery',
        'item_id' => 'setItemId',
        'item_reference' => 'setItemReference',
        'tracking_details' => 'setTrackingDetails',
        'product_id' => 'setProductId',
        'itemsummary' => 'setItemsummary',
        'item_contents' => 'setItemContents',
        'options' => 'setOptions',
        'shipment_summary' => 'setShipmentSummary',
        'movement_type' => 'setMovementType',
        'charge_to_account' => 'setChargeToAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weight' => 'getWeight',
        'authority_to_leave' => 'getAuthorityToLeave',
        'safe_drop_enabled' => 'getSafeDropEnabled',
        'allow_partial_delivery' => 'getAllowPartialDelivery',
        'item_id' => 'getItemId',
        'item_reference' => 'getItemReference',
        'tracking_details' => 'getTrackingDetails',
        'product_id' => 'getProductId',
        'itemsummary' => 'getItemsummary',
        'item_contents' => 'getItemContents',
        'options' => 'getOptions',
        'shipment_summary' => 'getShipmentSummary',
        'movement_type' => 'getMovementType',
        'charge_to_account' => 'getChargeToAccount'
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
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['authority_to_leave'] = isset($data['authority_to_leave']) ? $data['authority_to_leave'] : null;
        $this->container['safe_drop_enabled'] = isset($data['safe_drop_enabled']) ? $data['safe_drop_enabled'] : null;
        $this->container['allow_partial_delivery'] = isset($data['allow_partial_delivery']) ? $data['allow_partial_delivery'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_reference'] = isset($data['item_reference']) ? $data['item_reference'] : null;
        $this->container['tracking_details'] = isset($data['tracking_details']) ? $data['tracking_details'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['itemsummary'] = isset($data['itemsummary']) ? $data['itemsummary'] : null;
        $this->container['item_contents'] = isset($data['item_contents']) ? $data['item_contents'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['shipment_summary'] = isset($data['shipment_summary']) ? $data['shipment_summary'] : null;
        $this->container['movement_type'] = isset($data['movement_type']) ? $data['movement_type'] : null;
        $this->container['charge_to_account'] = isset($data['charge_to_account']) ? $data['charge_to_account'] : null;
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
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets authority_to_leave
     *
     * @return bool
     */
    public function getAuthorityToLeave()
    {
        return $this->container['authority_to_leave'];
    }

    /**
     * Sets authority_to_leave
     *
     * @param bool $authority_to_leave authority_to_leave
     *
     * @return $this
     */
    public function setAuthorityToLeave($authority_to_leave)
    {
        $this->container['authority_to_leave'] = $authority_to_leave;

        return $this;
    }

    /**
     * Gets safe_drop_enabled
     *
     * @return bool
     */
    public function getSafeDropEnabled()
    {
        return $this->container['safe_drop_enabled'];
    }

    /**
     * Sets safe_drop_enabled
     *
     * @param bool $safe_drop_enabled safe_drop_enabled
     *
     * @return $this
     */
    public function setSafeDropEnabled($safe_drop_enabled)
    {
        $this->container['safe_drop_enabled'] = $safe_drop_enabled;

        return $this;
    }

    /**
     * Gets allow_partial_delivery
     *
     * @return bool
     */
    public function getAllowPartialDelivery()
    {
        return $this->container['allow_partial_delivery'];
    }

    /**
     * Sets allow_partial_delivery
     *
     * @param bool $allow_partial_delivery allow_partial_delivery
     *
     * @return $this
     */
    public function setAllowPartialDelivery($allow_partial_delivery)
    {
        $this->container['allow_partial_delivery'] = $allow_partial_delivery;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_reference
     *
     * @return string
     */
    public function getItemReference()
    {
        return $this->container['item_reference'];
    }

    /**
     * Sets item_reference
     *
     * @param string $item_reference item_reference
     *
     * @return $this
     */
    public function setItemReference($item_reference)
    {
        $this->container['item_reference'] = $item_reference;

        return $this;
    }

    /**
     * Gets tracking_details
     *
     * @return \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsTrackingDetails
     */
    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details
     *
     * @param \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsTrackingDetails $tracking_details tracking_details
     *
     * @return $this
     */
    public function setTrackingDetails($tracking_details)
    {
        $this->container['tracking_details'] = $tracking_details;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets itemsummary
     *
     * @return \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsItemsummary
     */
    public function getItemsummary()
    {
        return $this->container['itemsummary'];
    }

    /**
     * Sets itemsummary
     *
     * @param \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsItemsummary $itemsummary itemsummary
     *
     * @return $this
     */
    public function setItemsummary($itemsummary)
    {
        $this->container['itemsummary'] = $itemsummary;

        return $this;
    }

    /**
     * Gets item_contents
     *
     * @return string[]
     */
    public function getItemContents()
    {
        return $this->container['item_contents'];
    }

    /**
     * Sets item_contents
     *
     * @param string[] $item_contents item_contents
     *
     * @return $this
     */
    public function setItemContents($item_contents)
    {
        $this->container['item_contents'] = $item_contents;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets shipment_summary
     *
     * @return \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsShipmentSummary
     */
    public function getShipmentSummary()
    {
        return $this->container['shipment_summary'];
    }

    /**
     * Sets shipment_summary
     *
     * @param \ChrisHemmings\AusPost\Client\Model\ShipmentResponseItemsShipmentSummary $shipment_summary shipment_summary
     *
     * @return $this
     */
    public function setShipmentSummary($shipment_summary)
    {
        $this->container['shipment_summary'] = $shipment_summary;

        return $this;
    }

    /**
     * Gets movement_type
     *
     * @return string
     */
    public function getMovementType()
    {
        return $this->container['movement_type'];
    }

    /**
     * Sets movement_type
     *
     * @param string $movement_type movement_type
     *
     * @return $this
     */
    public function setMovementType($movement_type)
    {
        $this->container['movement_type'] = $movement_type;

        return $this;
    }

    /**
     * Gets charge_to_account
     *
     * @return string
     */
    public function getChargeToAccount()
    {
        return $this->container['charge_to_account'];
    }

    /**
     * Sets charge_to_account
     *
     * @param string $charge_to_account charge_to_account
     *
     * @return $this
     */
    public function setChargeToAccount($charge_to_account)
    {
        $this->container['charge_to_account'] = $charge_to_account;

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


