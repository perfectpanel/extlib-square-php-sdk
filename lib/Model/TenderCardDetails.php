<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * TenderCardDetails Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class TenderCardDetails implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'status' => 'string',
        'card' => '\SquareConnect\Model\Card',
        'entry_method' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'status' => 'status',
        'card' => 'card',
        'entry_method' => 'entry_method'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'status' => 'setStatus',
        'card' => 'setCard',
        'entry_method' => 'setEntryMethod'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'status' => 'getStatus',
        'card' => 'getCard',
        'entry_method' => 'getEntryMethod'
    );
  
    /**
      * $status The credit card payment's current state (such as `AUTHORIZED` or `CAPTURED`). See `TenderCardDetailsStatus` for possible values. See [TenderCardDetailsStatus](#type-tendercarddetailsstatus) for possible values
      * @var string
      */
    protected $status;
    /**
      * $card The credit card's non-confidential details.
      * @var \SquareConnect\Model\Card
      */
    protected $card;
    /**
      * $entry_method The method used to enter the card's details for the transaction. See [TenderCardDetailsEntryMethod](#type-tendercarddetailsentrymethod) for possible values
      * @var string
      */
    protected $entry_method;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["card"])) {
              $this->card = $data["card"];
            } else {
              $this->card = null;
            }
            if (isset($data["entry_method"])) {
              $this->entry_method = $data["entry_method"];
            } else {
              $this->entry_method = null;
            }
        }
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
     * @param string $status The credit card payment's current state (such as `AUTHORIZED` or `CAPTURED`). See `TenderCardDetailsStatus` for possible values. See [TenderCardDetailsStatus](#type-tendercarddetailsstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets card
     * @return \SquareConnect\Model\Card
     */
    public function getCard()
    {
        return $this->card;
    }
  
    /**
     * Sets card
     * @param \SquareConnect\Model\Card $card The credit card's non-confidential details.
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }
    /**
     * Gets entry_method
     * @return string
     */
    public function getEntryMethod()
    {
        return $this->entry_method;
    }
  
    /**
     * Sets entry_method
     * @param string $entry_method The method used to enter the card's details for the transaction. See [TenderCardDetailsEntryMethod](#type-tendercarddetailsentrymethod) for possible values
     * @return $this
     */
    public function setEntryMethod($entry_method)
    {
        $this->entry_method = $entry_method;
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
