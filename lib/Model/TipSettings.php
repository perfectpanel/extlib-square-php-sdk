<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * TipSettings Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class TipSettings implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'allow_tipping' => 'bool',
        'separate_tip_screen' => 'bool',
        'custom_tip_field' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'allow_tipping' => 'allow_tipping',
        'separate_tip_screen' => 'separate_tip_screen',
        'custom_tip_field' => 'custom_tip_field'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'allow_tipping' => 'setAllowTipping',
        'separate_tip_screen' => 'setSeparateTipScreen',
        'custom_tip_field' => 'setCustomTipField'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'allow_tipping' => 'getAllowTipping',
        'separate_tip_screen' => 'getSeparateTipScreen',
        'custom_tip_field' => 'getCustomTipField'
    );
  
    /**
      * $allow_tipping Indicates whether tipping is enabled for this checkout. Defaults to false.
      * @var bool
      */
    protected $allow_tipping;
    /**
      * $separate_tip_screen Indicates whether tip options should be presented on their own screen before presenting the signature screen during card payment. Defaults to false.
      * @var bool
      */
    protected $separate_tip_screen;
    /**
      * $custom_tip_field Indicates whether custom tip amounts are allowed during the checkout flow. Defaults to false.
      * @var bool
      */
    protected $custom_tip_field;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["allow_tipping"])) {
              $this->allow_tipping = $data["allow_tipping"];
            } else {
              $this->allow_tipping = null;
            }
            if (isset($data["separate_tip_screen"])) {
              $this->separate_tip_screen = $data["separate_tip_screen"];
            } else {
              $this->separate_tip_screen = null;
            }
            if (isset($data["custom_tip_field"])) {
              $this->custom_tip_field = $data["custom_tip_field"];
            } else {
              $this->custom_tip_field = null;
            }
        }
    }
    /**
     * Gets allow_tipping
     * @return bool
     */
    public function getAllowTipping()
    {
        return $this->allow_tipping;
    }
  
    /**
     * Sets allow_tipping
     * @param bool $allow_tipping Indicates whether tipping is enabled for this checkout. Defaults to false.
     * @return $this
     */
    public function setAllowTipping($allow_tipping)
    {
        $this->allow_tipping = $allow_tipping;
        return $this;
    }
    /**
     * Gets separate_tip_screen
     * @return bool
     */
    public function getSeparateTipScreen()
    {
        return $this->separate_tip_screen;
    }
  
    /**
     * Sets separate_tip_screen
     * @param bool $separate_tip_screen Indicates whether tip options should be presented on their own screen before presenting the signature screen during card payment. Defaults to false.
     * @return $this
     */
    public function setSeparateTipScreen($separate_tip_screen)
    {
        $this->separate_tip_screen = $separate_tip_screen;
        return $this;
    }
    /**
     * Gets custom_tip_field
     * @return bool
     */
    public function getCustomTipField()
    {
        return $this->custom_tip_field;
    }
  
    /**
     * Sets custom_tip_field
     * @param bool $custom_tip_field Indicates whether custom tip amounts are allowed during the checkout flow. Defaults to false.
     * @return $this
     */
    public function setCustomTipField($custom_tip_field)
    {
        $this->custom_tip_field = $custom_tip_field;
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
