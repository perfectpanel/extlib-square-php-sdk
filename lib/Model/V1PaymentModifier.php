<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1PaymentModifier Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1PaymentModifier implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'applied_money' => '\SquareConnect\Model\V1Money',
        'modifier_option_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'applied_money' => 'applied_money',
        'modifier_option_id' => 'modifier_option_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'applied_money' => 'setAppliedMoney',
        'modifier_option_id' => 'setModifierOptionId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'applied_money' => 'getAppliedMoney',
        'modifier_option_id' => 'getModifierOptionId'
    );
  
    /**
      * $name The modifier option's name.
      * @var string
      */
    protected $name;
    /**
      * $applied_money The amount of money that this modifier option adds to the payment.
      * @var \SquareConnect\Model\V1Money
      */
    protected $applied_money;
    /**
      * $modifier_option_id TThe ID of the applied modifier option, if available. Modifier options applied in older versions of Square Register might not have an ID.
      * @var string
      */
    protected $modifier_option_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["applied_money"])) {
              $this->applied_money = $data["applied_money"];
            } else {
              $this->applied_money = null;
            }
            if (isset($data["modifier_option_id"])) {
              $this->modifier_option_id = $data["modifier_option_id"];
            } else {
              $this->modifier_option_id = null;
            }
        }
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The modifier option's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets applied_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getAppliedMoney()
    {
        return $this->applied_money;
    }
  
    /**
     * Sets applied_money
     * @param \SquareConnect\Model\V1Money $applied_money The amount of money that this modifier option adds to the payment.
     * @return $this
     */
    public function setAppliedMoney($applied_money)
    {
        $this->applied_money = $applied_money;
        return $this;
    }
    /**
     * Gets modifier_option_id
     * @return string
     */
    public function getModifierOptionId()
    {
        return $this->modifier_option_id;
    }
  
    /**
     * Sets modifier_option_id
     * @param string $modifier_option_id TThe ID of the applied modifier option, if available. Modifier options applied in older versions of Square Register might not have an ID.
     * @return $this
     */
    public function setModifierOptionId($modifier_option_id)
    {
        $this->modifier_option_id = $modifier_option_id;
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
