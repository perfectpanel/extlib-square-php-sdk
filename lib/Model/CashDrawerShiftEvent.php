<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CashDrawerShiftEvent Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CashDrawerShiftEvent implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'employee_id' => 'string',
        'event_type' => 'string',
        'event_money' => '\SquareConnect\Model\Money',
        'created_at' => 'string',
        'description' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'employee_id' => 'employee_id',
        'event_type' => 'event_type',
        'event_money' => 'event_money',
        'created_at' => 'created_at',
        'description' => 'description'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'event_type' => 'setEventType',
        'event_money' => 'setEventMoney',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'event_type' => 'getEventType',
        'event_money' => 'getEventMoney',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription'
    );
  
    /**
      * $id The unique ID of the event.
      * @var string
      */
    protected $id;
    /**
      * $employee_id The ID of the employee that created the event.
      * @var string
      */
    protected $employee_id;
    /**
      * $event_type The type of cash drawer shift event. See [CashDrawerEventType](#type-cashdrawereventtype) for possible values
      * @var string
      */
    protected $event_type;
    /**
      * $event_money The amount of money that was added to or removed from the cash drawer in the event. The amount can be positive (for added money), negative (for removed money), or zero (for other tender type payments).
      * @var \SquareConnect\Model\Money
      */
    protected $event_money;
    /**
      * $created_at The event time in ISO 8601 format.
      * @var string
      */
    protected $created_at;
    /**
      * $description An optional description of the event, entered by the employee that created the event.
      * @var string
      */
    protected $description;

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
            if (isset($data["employee_id"])) {
              $this->employee_id = $data["employee_id"];
            } else {
              $this->employee_id = null;
            }
            if (isset($data["event_type"])) {
              $this->event_type = $data["event_type"];
            } else {
              $this->event_type = null;
            }
            if (isset($data["event_money"])) {
              $this->event_money = $data["event_money"];
            } else {
              $this->event_money = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["description"])) {
              $this->description = $data["description"];
            } else {
              $this->description = null;
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
     * @param string $id The unique ID of the event.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets employee_id
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }
  
    /**
     * Sets employee_id
     * @param string $employee_id The ID of the employee that created the event.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }
    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->event_type;
    }
  
    /**
     * Sets event_type
     * @param string $event_type The type of cash drawer shift event. See [CashDrawerEventType](#type-cashdrawereventtype) for possible values
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->event_type = $event_type;
        return $this;
    }
    /**
     * Gets event_money
     * @return \SquareConnect\Model\Money
     */
    public function getEventMoney()
    {
        return $this->event_money;
    }
  
    /**
     * Sets event_money
     * @param \SquareConnect\Model\Money $event_money The amount of money that was added to or removed from the cash drawer in the event. The amount can be positive (for added money), negative (for removed money), or zero (for other tender type payments).
     * @return $this
     */
    public function setEventMoney($event_money)
    {
        $this->event_money = $event_money;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The event time in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description An optional description of the event, entered by the employee that created the event.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
