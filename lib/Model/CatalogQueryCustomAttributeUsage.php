<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogQueryCustomAttributeUsage Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CatalogQueryCustomAttributeUsage implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'custom_attribute_definition_ids' => 'string[]',
        'has_value' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'custom_attribute_definition_ids' => 'custom_attribute_definition_ids',
        'has_value' => 'has_value'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'custom_attribute_definition_ids' => 'setCustomAttributeDefinitionIds',
        'has_value' => 'setHasValue'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'custom_attribute_definition_ids' => 'getCustomAttributeDefinitionIds',
        'has_value' => 'getHasValue'
    );
  
    /**
      * $custom_attribute_definition_ids 
      * @var string[]
      */
    protected $custom_attribute_definition_ids;
    /**
      * $has_value 
      * @var bool
      */
    protected $has_value;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["custom_attribute_definition_ids"])) {
              $this->custom_attribute_definition_ids = $data["custom_attribute_definition_ids"];
            } else {
              $this->custom_attribute_definition_ids = null;
            }
            if (isset($data["has_value"])) {
              $this->has_value = $data["has_value"];
            } else {
              $this->has_value = null;
            }
        }
    }
    /**
     * Gets custom_attribute_definition_ids
     * @return string[]
     */
    public function getCustomAttributeDefinitionIds()
    {
        return $this->custom_attribute_definition_ids;
    }
  
    /**
     * Sets custom_attribute_definition_ids
     * @param string[] $custom_attribute_definition_ids 
     * @return $this
     */
    public function setCustomAttributeDefinitionIds($custom_attribute_definition_ids)
    {
        $this->custom_attribute_definition_ids = $custom_attribute_definition_ids;
        return $this;
    }
    /**
     * Gets has_value
     * @return bool
     */
    public function getHasValue()
    {
        return $this->has_value;
    }
  
    /**
     * Sets has_value
     * @param bool $has_value 
     * @return $this
     */
    public function setHasValue($has_value)
    {
        $this->has_value = $has_value;
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
