<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * @deprecated
 * V1AdjustInventoryRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1AdjustInventoryRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'quantity_delta' => 'float',
        'adjustment_type' => 'string',
        'memo' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'quantity_delta' => 'quantity_delta',
        'adjustment_type' => 'adjustment_type',
        'memo' => 'memo'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'quantity_delta' => 'setQuantityDelta',
        'adjustment_type' => 'setAdjustmentType',
        'memo' => 'setMemo'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'quantity_delta' => 'getQuantityDelta',
        'adjustment_type' => 'getAdjustmentType',
        'memo' => 'getMemo'
    );
  
    /**
      * $quantity_delta The number to adjust the variation's quantity by.
      * @var float
      */
    protected $quantity_delta;
    /**
      * $adjustment_type The reason for the inventory adjustment. See [V1AdjustInventoryRequestAdjustmentType](#type-v1adjustinventoryrequestadjustmenttype) for possible values
      * @var string
      */
    protected $adjustment_type;
    /**
      * $memo A note about the inventory adjustment.
      * @var string
      */
    protected $memo;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["quantity_delta"])) {
              $this->quantity_delta = $data["quantity_delta"];
            } else {
              $this->quantity_delta = null;
            }
            if (isset($data["adjustment_type"])) {
              $this->adjustment_type = $data["adjustment_type"];
            } else {
              $this->adjustment_type = null;
            }
            if (isset($data["memo"])) {
              $this->memo = $data["memo"];
            } else {
              $this->memo = null;
            }
        }
    }
    /**
     * Gets quantity_delta
     * @return float
     */
    public function getQuantityDelta()
    {
        return $this->quantity_delta;
    }
  
    /**
     * Sets quantity_delta
     * @param float $quantity_delta The number to adjust the variation's quantity by.
     * @return $this
     */
    public function setQuantityDelta($quantity_delta)
    {
        $this->quantity_delta = $quantity_delta;
        return $this;
    }
    /**
     * Gets adjustment_type
     * @return string
     */
    public function getAdjustmentType()
    {
        return $this->adjustment_type;
    }
  
    /**
     * Sets adjustment_type
     * @param string $adjustment_type The reason for the inventory adjustment. See [V1AdjustInventoryRequestAdjustmentType](#type-v1adjustinventoryrequestadjustmenttype) for possible values
     * @return $this
     */
    public function setAdjustmentType($adjustment_type)
    {
        $this->adjustment_type = $adjustment_type;
        return $this;
    }
    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }
  
    /**
     * Sets memo
     * @param string $memo A note about the inventory adjustment.
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
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
