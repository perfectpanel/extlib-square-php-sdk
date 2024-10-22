<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1PaymentSurcharge Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1PaymentSurcharge implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'applied_money' => '\SquareConnect\Model\V1Money',
        'rate' => 'string',
        'amount_money' => '\SquareConnect\Model\V1Money',
        'type' => 'string',
        'taxable' => 'bool',
        'taxes' => '\SquareConnect\Model\V1PaymentTax[]',
        'surcharge_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'applied_money' => 'applied_money',
        'rate' => 'rate',
        'amount_money' => 'amount_money',
        'type' => 'type',
        'taxable' => 'taxable',
        'taxes' => 'taxes',
        'surcharge_id' => 'surcharge_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'applied_money' => 'setAppliedMoney',
        'rate' => 'setRate',
        'amount_money' => 'setAmountMoney',
        'type' => 'setType',
        'taxable' => 'setTaxable',
        'taxes' => 'setTaxes',
        'surcharge_id' => 'setSurchargeId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'applied_money' => 'getAppliedMoney',
        'rate' => 'getRate',
        'amount_money' => 'getAmountMoney',
        'type' => 'getType',
        'taxable' => 'getTaxable',
        'taxes' => 'getTaxes',
        'surcharge_id' => 'getSurchargeId'
    );
  
    /**
      * $name The name of the surcharge.
      * @var string
      */
    protected $name;
    /**
      * $applied_money The amount of money applied to the order as a result of the surcharge.
      * @var \SquareConnect\Model\V1Money
      */
    protected $applied_money;
    /**
      * $rate The amount of the surcharge as a percentage. The percentage is provided as a string representing the decimal equivalent of the percentage. For example, \"0.7\" corresponds to a 7% surcharge. Exactly one of rate or amount_money should be set.
      * @var string
      */
    protected $rate;
    /**
      * $amount_money The amount of the surcharge as a Money object. Exactly one of rate or amount_money should be set.
      * @var \SquareConnect\Model\V1Money
      */
    protected $amount_money;
    /**
      * $type Indicates the source of the surcharge. For example, if it was applied as an automatic gratuity for a large group. See [V1PaymentSurchargeType](#type-v1paymentsurchargetype) for possible values
      * @var string
      */
    protected $type;
    /**
      * $taxable Indicates whether the surcharge is taxable.
      * @var bool
      */
    protected $taxable;
    /**
      * $taxes The list of taxes that should be applied to the surcharge.
      * @var \SquareConnect\Model\V1PaymentTax[]
      */
    protected $taxes;
    /**
      * $surcharge_id A Square-issued unique identifier associated with the surcharge.
      * @var string
      */
    protected $surcharge_id;

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
            if (isset($data["rate"])) {
              $this->rate = $data["rate"];
            } else {
              $this->rate = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["taxable"])) {
              $this->taxable = $data["taxable"];
            } else {
              $this->taxable = null;
            }
            if (isset($data["taxes"])) {
              $this->taxes = $data["taxes"];
            } else {
              $this->taxes = null;
            }
            if (isset($data["surcharge_id"])) {
              $this->surcharge_id = $data["surcharge_id"];
            } else {
              $this->surcharge_id = null;
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
     * @param string $name The name of the surcharge.
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
     * @param \SquareConnect\Model\V1Money $applied_money The amount of money applied to the order as a result of the surcharge.
     * @return $this
     */
    public function setAppliedMoney($applied_money)
    {
        $this->applied_money = $applied_money;
        return $this;
    }
    /**
     * Gets rate
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }
  
    /**
     * Sets rate
     * @param string $rate The amount of the surcharge as a percentage. The percentage is provided as a string representing the decimal equivalent of the percentage. For example, \"0.7\" corresponds to a 7% surcharge. Exactly one of rate or amount_money should be set.
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\V1Money $amount_money The amount of the surcharge as a Money object. Exactly one of rate or amount_money should be set.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Indicates the source of the surcharge. For example, if it was applied as an automatic gratuity for a large group. See [V1PaymentSurchargeType](#type-v1paymentsurchargetype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }
  
    /**
     * Sets taxable
     * @param bool $taxable Indicates whether the surcharge is taxable.
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
        return $this;
    }
    /**
     * Gets taxes
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }
  
    /**
     * Sets taxes
     * @param \SquareConnect\Model\V1PaymentTax[] $taxes The list of taxes that should be applied to the surcharge.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Gets surcharge_id
     * @return string
     */
    public function getSurchargeId()
    {
        return $this->surcharge_id;
    }
  
    /**
     * Sets surcharge_id
     * @param string $surcharge_id A Square-issued unique identifier associated with the surcharge.
     * @return $this
     */
    public function setSurchargeId($surcharge_id)
    {
        $this->surcharge_id = $surcharge_id;
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
