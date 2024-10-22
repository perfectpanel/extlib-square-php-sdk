<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * FilterValue Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class FilterValue implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'all' => 'string[]',
        'any' => 'string[]',
        'none' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'all' => 'all',
        'any' => 'any',
        'none' => 'none'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'all' => 'setAll',
        'any' => 'setAny',
        'none' => 'setNone'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'all' => 'getAll',
        'any' => 'getAny',
        'none' => 'getNone'
    );
  
    /**
      * $all A list of terms that must be present on the field of the resource.
      * @var string[]
      */
    protected $all;
    /**
      * $any A list of terms where at least one of them must be present on the field of the resource.
      * @var string[]
      */
    protected $any;
    /**
      * $none A list of terms that must not be present on the field the resource
      * @var string[]
      */
    protected $none;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["all"])) {
              $this->all = $data["all"];
            } else {
              $this->all = null;
            }
            if (isset($data["any"])) {
              $this->any = $data["any"];
            } else {
              $this->any = null;
            }
            if (isset($data["none"])) {
              $this->none = $data["none"];
            } else {
              $this->none = null;
            }
        }
    }
    /**
     * Gets all
     * @return string[]
     */
    public function getAll()
    {
        return $this->all;
    }
  
    /**
     * Sets all
     * @param string[] $all A list of terms that must be present on the field of the resource.
     * @return $this
     */
    public function setAll($all)
    {
        $this->all = $all;
        return $this;
    }
    /**
     * Gets any
     * @return string[]
     */
    public function getAny()
    {
        return $this->any;
    }
  
    /**
     * Sets any
     * @param string[] $any A list of terms where at least one of them must be present on the field of the resource.
     * @return $this
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Gets none
     * @return string[]
     */
    public function getNone()
    {
        return $this->none;
    }
  
    /**
     * Sets none
     * @param string[] $none A list of terms that must not be present on the field the resource
     * @return $this
     */
    public function setNone($none)
    {
        $this->none = $none;
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
