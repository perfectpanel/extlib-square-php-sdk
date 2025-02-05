<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Merchant Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Merchant implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'business_name' => 'string',
        'country' => 'string',
        'language_code' => 'string',
        'currency' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'business_name' => 'business_name',
        'country' => 'country',
        'language_code' => 'language_code',
        'currency' => 'currency',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'business_name' => 'setBusinessName',
        'country' => 'setCountry',
        'language_code' => 'setLanguageCode',
        'currency' => 'setCurrency',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'business_name' => 'getBusinessName',
        'country' => 'getCountry',
        'language_code' => 'getLanguageCode',
        'currency' => 'getCurrency',
        'status' => 'getStatus'
    );
  
    /**
      * $id The Square-issued ID of the merchant.
      * @var string
      */
    protected $id;
    /**
      * $business_name The business name of the merchant.
      * @var string
      */
    protected $business_name;
    /**
      * $country The country code associated with the merchant account, in ISO 3166-1-alpha-2 format. See [Country](#type-country) for possible values
      * @var string
      */
    protected $country;
    /**
      * $language_code The language code associated with the merchant account, in BCP 47 format.
      * @var string
      */
    protected $language_code;
    /**
      * $currency The currency associated with the merchant account, in ISO 4217 format. See [Currency](#type-currency) for possible values
      * @var string
      */
    protected $currency;
    /**
      * $status The merchant status, active or inactive. See [MerchantStatus](#type-merchantstatus) for possible values
      * @var string
      */
    protected $status;

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
            if (isset($data["business_name"])) {
              $this->business_name = $data["business_name"];
            } else {
              $this->business_name = null;
            }
            if (isset($data["country"])) {
              $this->country = $data["country"];
            } else {
              $this->country = null;
            }
            if (isset($data["language_code"])) {
              $this->language_code = $data["language_code"];
            } else {
              $this->language_code = null;
            }
            if (isset($data["currency"])) {
              $this->currency = $data["currency"];
            } else {
              $this->currency = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
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
     * @param string $id The Square-issued ID of the merchant.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets business_name
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }
  
    /**
     * Sets business_name
     * @param string $business_name The business name of the merchant.
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->business_name = $business_name;
        return $this;
    }
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country The country code associated with the merchant account, in ISO 3166-1-alpha-2 format. See [Country](#type-country) for possible values
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Gets language_code
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }
  
    /**
     * Sets language_code
     * @param string $language_code The language code associated with the merchant account, in BCP 47 format.
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->language_code = $language_code;
        return $this;
    }
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency The currency associated with the merchant account, in ISO 4217 format. See [Currency](#type-currency) for possible values
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status The merchant status, active or inactive. See [MerchantStatus](#type-merchantstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
