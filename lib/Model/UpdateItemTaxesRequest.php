<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * UpdateItemTaxesRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class UpdateItemTaxesRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'item_ids' => 'string[]',
        'taxes_to_enable' => 'string[]',
        'taxes_to_disable' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'item_ids' => 'item_ids',
        'taxes_to_enable' => 'taxes_to_enable',
        'taxes_to_disable' => 'taxes_to_disable'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'item_ids' => 'setItemIds',
        'taxes_to_enable' => 'setTaxesToEnable',
        'taxes_to_disable' => 'setTaxesToDisable'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'item_ids' => 'getItemIds',
        'taxes_to_enable' => 'getTaxesToEnable',
        'taxes_to_disable' => 'getTaxesToDisable'
    );
  
    /**
      * $item_ids IDs for the CatalogItems associated with the CatalogTax objects being updated.
      * @var string[]
      */
    protected $item_ids;
    /**
      * $taxes_to_enable IDs of the CatalogTax objects to enable.
      * @var string[]
      */
    protected $taxes_to_enable;
    /**
      * $taxes_to_disable IDs of the CatalogTax objects to disable.
      * @var string[]
      */
    protected $taxes_to_disable;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["item_ids"])) {
              $this->item_ids = $data["item_ids"];
            } else {
              $this->item_ids = null;
            }
            if (isset($data["taxes_to_enable"])) {
              $this->taxes_to_enable = $data["taxes_to_enable"];
            } else {
              $this->taxes_to_enable = null;
            }
            if (isset($data["taxes_to_disable"])) {
              $this->taxes_to_disable = $data["taxes_to_disable"];
            } else {
              $this->taxes_to_disable = null;
            }
        }
    }
    /**
     * Gets item_ids
     * @return string[]
     */
    public function getItemIds()
    {
        return $this->item_ids;
    }
  
    /**
     * Sets item_ids
     * @param string[] $item_ids IDs for the CatalogItems associated with the CatalogTax objects being updated.
     * @return $this
     */
    public function setItemIds($item_ids)
    {
        $this->item_ids = $item_ids;
        return $this;
    }
    /**
     * Gets taxes_to_enable
     * @return string[]
     */
    public function getTaxesToEnable()
    {
        return $this->taxes_to_enable;
    }
  
    /**
     * Sets taxes_to_enable
     * @param string[] $taxes_to_enable IDs of the CatalogTax objects to enable.
     * @return $this
     */
    public function setTaxesToEnable($taxes_to_enable)
    {
        $this->taxes_to_enable = $taxes_to_enable;
        return $this;
    }
    /**
     * Gets taxes_to_disable
     * @return string[]
     */
    public function getTaxesToDisable()
    {
        return $this->taxes_to_disable;
    }
  
    /**
     * Sets taxes_to_disable
     * @param string[] $taxes_to_disable IDs of the CatalogTax objects to disable.
     * @return $this
     */
    public function setTaxesToDisable($taxes_to_disable)
    {
        $this->taxes_to_disable = $taxes_to_disable;
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
