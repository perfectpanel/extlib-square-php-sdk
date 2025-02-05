<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1PaymentItemDetail Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1PaymentItemDetail implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'category_name' => 'string',
        'sku' => 'string',
        'item_id' => 'string',
        'item_variation_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'category_name' => 'category_name',
        'sku' => 'sku',
        'item_id' => 'item_id',
        'item_variation_id' => 'item_variation_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'category_name' => 'setCategoryName',
        'sku' => 'setSku',
        'item_id' => 'setItemId',
        'item_variation_id' => 'setItemVariationId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'category_name' => 'getCategoryName',
        'sku' => 'getSku',
        'item_id' => 'getItemId',
        'item_variation_id' => 'getItemVariationId'
    );
  
    /**
      * $category_name The name of the item's merchant-defined category, if any.
      * @var string
      */
    protected $category_name;
    /**
      * $sku The item's merchant-defined SKU, if any.
      * @var string
      */
    protected $sku;
    /**
      * $item_id The unique ID of the item purchased, if any.
      * @var string
      */
    protected $item_id;
    /**
      * $item_variation_id The unique ID of the item variation purchased, if any.
      * @var string
      */
    protected $item_variation_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["category_name"])) {
              $this->category_name = $data["category_name"];
            } else {
              $this->category_name = null;
            }
            if (isset($data["sku"])) {
              $this->sku = $data["sku"];
            } else {
              $this->sku = null;
            }
            if (isset($data["item_id"])) {
              $this->item_id = $data["item_id"];
            } else {
              $this->item_id = null;
            }
            if (isset($data["item_variation_id"])) {
              $this->item_variation_id = $data["item_variation_id"];
            } else {
              $this->item_variation_id = null;
            }
        }
    }
    /**
     * Gets category_name
     * @return string
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }
  
    /**
     * Sets category_name
     * @param string $category_name The name of the item's merchant-defined category, if any.
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
        return $this;
    }
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku The item's merchant-defined SKU, if any.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Gets item_id
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }
  
    /**
     * Sets item_id
     * @param string $item_id The unique ID of the item purchased, if any.
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
        return $this;
    }
    /**
     * Gets item_variation_id
     * @return string
     */
    public function getItemVariationId()
    {
        return $this->item_variation_id;
    }
  
    /**
     * Sets item_variation_id
     * @param string $item_variation_id The unique ID of the item variation purchased, if any.
     * @return $this
     */
    public function setItemVariationId($item_variation_id)
    {
        $this->item_variation_id = $item_variation_id;
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
