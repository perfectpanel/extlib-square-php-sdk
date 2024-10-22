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
 * V1BankAccount Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1BankAccount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'merchant_id' => 'string',
        'bank_name' => 'string',
        'name' => 'string',
        'routing_number' => 'string',
        'account_number_suffix' => 'string',
        'currency_code' => 'string',
        'type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'merchant_id' => 'merchant_id',
        'bank_name' => 'bank_name',
        'name' => 'name',
        'routing_number' => 'routing_number',
        'account_number_suffix' => 'account_number_suffix',
        'currency_code' => 'currency_code',
        'type' => 'type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'bank_name' => 'setBankName',
        'name' => 'setName',
        'routing_number' => 'setRoutingNumber',
        'account_number_suffix' => 'setAccountNumberSuffix',
        'currency_code' => 'setCurrencyCode',
        'type' => 'setType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'bank_name' => 'getBankName',
        'name' => 'getName',
        'routing_number' => 'getRoutingNumber',
        'account_number_suffix' => 'getAccountNumberSuffix',
        'currency_code' => 'getCurrencyCode',
        'type' => 'getType'
    );
  
    /**
      * $id The bank account's Square-issued ID.
      * @var string
      */
    protected $id;
    /**
      * $merchant_id The Square-issued ID of the merchant associated with the bank account.
      * @var string
      */
    protected $merchant_id;
    /**
      * $bank_name The name of the bank that manages the account.
      * @var string
      */
    protected $bank_name;
    /**
      * $name The name associated with the bank account.
      * @var string
      */
    protected $name;
    /**
      * $routing_number The bank account's routing number.
      * @var string
      */
    protected $routing_number;
    /**
      * $account_number_suffix The last few digits of the bank account number.
      * @var string
      */
    protected $account_number_suffix;
    /**
      * $currency_code The currency code of the currency associated with the bank account, in ISO 4217 format. For example, the currency code for US dollars is USD.
      * @var string
      */
    protected $currency_code;
    /**
      * $type The bank account's type (for example, savings or checking). See [V1BankAccountType](#type-v1bankaccounttype) for possible values
      * @var string
      */
    protected $type;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
            if (isset($data["bank_name"])) {
              $this->bank_name = $data["bank_name"];
            } else {
              $this->bank_name = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["routing_number"])) {
              $this->routing_number = $data["routing_number"];
            } else {
              $this->routing_number = null;
            }
            if (isset($data["account_number_suffix"])) {
              $this->account_number_suffix = $data["account_number_suffix"];
            } else {
              $this->account_number_suffix = null;
            }
            if (isset($data["currency_code"])) {
              $this->currency_code = $data["currency_code"];
            } else {
              $this->currency_code = null;
            }
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The bank account's Square-issued ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id The Square-issued ID of the merchant associated with the bank account.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Gets bank_name
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }
  
    /**
     * Sets bank_name
     * @param string $bank_name The name of the bank that manages the account.
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
        return $this;
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
     * @param string $name The name associated with the bank account.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets routing_number
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routing_number;
    }
  
    /**
     * Sets routing_number
     * @param string $routing_number The bank account's routing number.
     * @return $this
     */
    public function setRoutingNumber($routing_number)
    {
        $this->routing_number = $routing_number;
        return $this;
    }
    /**
     * Gets account_number_suffix
     * @return string
     */
    public function getAccountNumberSuffix()
    {
        return $this->account_number_suffix;
    }
  
    /**
     * Sets account_number_suffix
     * @param string $account_number_suffix The last few digits of the bank account number.
     * @return $this
     */
    public function setAccountNumberSuffix($account_number_suffix)
    {
        $this->account_number_suffix = $account_number_suffix;
        return $this;
    }
    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }
  
    /**
     * Sets currency_code
     * @param string $currency_code The currency code of the currency associated with the bank account, in ISO 4217 format. For example, the currency code for US dollars is USD.
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
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
     * @param string $type The bank account's type (for example, savings or checking). See [V1BankAccountType](#type-v1bankaccounttype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
