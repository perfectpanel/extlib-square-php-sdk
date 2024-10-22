<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * EmployeeWage Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class EmployeeWage implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'employee_id' => 'string',
        'title' => 'string',
        'hourly_rate' => '\SquareConnect\Model\Money'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'employee_id' => 'employee_id',
        'title' => 'title',
        'hourly_rate' => 'hourly_rate'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'title' => 'setTitle',
        'hourly_rate' => 'setHourlyRate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'title' => 'getTitle',
        'hourly_rate' => 'getHourlyRate'
    );
  
    /**
      * $id UUID for this object.
      * @var string
      */
    protected $id;
    /**
      * $employee_id The `Employee` that this wage is assigned to.
      * @var string
      */
    protected $employee_id;
    /**
      * $title The job title that this wage relates to.
      * @var string
      */
    protected $title;
    /**
      * $hourly_rate Can be a custom-set hourly wage or the calculated effective hourly wage based on annual wage and hours worked per week.
      * @var \SquareConnect\Model\Money
      */
    protected $hourly_rate;

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
            if (isset($data["title"])) {
              $this->title = $data["title"];
            } else {
              $this->title = null;
            }
            if (isset($data["hourly_rate"])) {
              $this->hourly_rate = $data["hourly_rate"];
            } else {
              $this->hourly_rate = null;
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
     * @param string $id UUID for this object.
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
     * @param string $employee_id The `Employee` that this wage is assigned to.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title The job title that this wage relates to.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Gets hourly_rate
     * @return \SquareConnect\Model\Money
     */
    public function getHourlyRate()
    {
        return $this->hourly_rate;
    }
  
    /**
     * Sets hourly_rate
     * @param \SquareConnect\Model\Money $hourly_rate Can be a custom-set hourly wage or the calculated effective hourly wage based on annual wage and hours worked per week.
     * @return $this
     */
    public function setHourlyRate($hourly_rate)
    {
        $this->hourly_rate = $hourly_rate;
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
