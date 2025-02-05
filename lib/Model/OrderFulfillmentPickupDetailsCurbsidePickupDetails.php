<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderFulfillmentPickupDetailsCurbsidePickupDetails Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class OrderFulfillmentPickupDetailsCurbsidePickupDetails implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'curbside_details' => 'string',
        'buyer_arrived_at' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'curbside_details' => 'curbside_details',
        'buyer_arrived_at' => 'buyer_arrived_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'curbside_details' => 'setCurbsideDetails',
        'buyer_arrived_at' => 'setBuyerArrivedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'curbside_details' => 'getCurbsideDetails',
        'buyer_arrived_at' => 'getBuyerArrivedAt'
    );
  
    /**
      * $curbside_details Specific details for curbside pickup, such as parking number, vehicle model, etc.
      * @var string
      */
    protected $curbside_details;
    /**
      * $buyer_arrived_at The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\", indicating when the buyer arrived and is waiting for pickup.
      * @var string
      */
    protected $buyer_arrived_at;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["curbside_details"])) {
              $this->curbside_details = $data["curbside_details"];
            } else {
              $this->curbside_details = null;
            }
            if (isset($data["buyer_arrived_at"])) {
              $this->buyer_arrived_at = $data["buyer_arrived_at"];
            } else {
              $this->buyer_arrived_at = null;
            }
        }
    }
    /**
     * Gets curbside_details
     * @return string
     */
    public function getCurbsideDetails()
    {
        return $this->curbside_details;
    }
  
    /**
     * Sets curbside_details
     * @param string $curbside_details Specific details for curbside pickup, such as parking number, vehicle model, etc.
     * @return $this
     */
    public function setCurbsideDetails($curbside_details)
    {
        $this->curbside_details = $curbside_details;
        return $this;
    }
    /**
     * Gets buyer_arrived_at
     * @return string
     */
    public function getBuyerArrivedAt()
    {
        return $this->buyer_arrived_at;
    }
  
    /**
     * Sets buyer_arrived_at
     * @param string $buyer_arrived_at The [timestamp](#workingwithdates) in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\", indicating when the buyer arrived and is waiting for pickup.
     * @return $this
     */
    public function setBuyerArrivedAt($buyer_arrived_at)
    {
        $this->buyer_arrived_at = $buyer_arrived_at;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
