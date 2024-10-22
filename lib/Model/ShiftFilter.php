<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ShiftFilter Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ShiftFilter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'location_ids' => 'string[]',
        'employee_ids' => 'string[]',
        'status' => 'string',
        'start' => '\SquareConnect\Model\TimeRange',
        'end' => '\SquareConnect\Model\TimeRange',
        'workday' => '\SquareConnect\Model\ShiftWorkday'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'location_ids' => 'location_ids',
        'employee_ids' => 'employee_ids',
        'status' => 'status',
        'start' => 'start',
        'end' => 'end',
        'workday' => 'workday'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'location_ids' => 'setLocationIds',
        'employee_ids' => 'setEmployeeIds',
        'status' => 'setStatus',
        'start' => 'setStart',
        'end' => 'setEnd',
        'workday' => 'setWorkday'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'location_ids' => 'getLocationIds',
        'employee_ids' => 'getEmployeeIds',
        'status' => 'getStatus',
        'start' => 'getStart',
        'end' => 'getEnd',
        'workday' => 'getWorkday'
    );
  
    /**
      * $location_ids Fetch shifts for the specified location.
      * @var string[]
      */
    protected $location_ids;
    /**
      * $employee_ids Fetch shifts for the specified employee.
      * @var string[]
      */
    protected $employee_ids;
    /**
      * $status Fetch a `Shift` instance by `Shift.status`. See [ShiftFilterStatus](#type-shiftfilterstatus) for possible values
      * @var string
      */
    protected $status;
    /**
      * $start Fetch `Shift`s that start in the time range - Inclusive.
      * @var \SquareConnect\Model\TimeRange
      */
    protected $start;
    /**
      * $end Fetch the `Shift`s that end in the time range - Inclusive.
      * @var \SquareConnect\Model\TimeRange
      */
    protected $end;
    /**
      * $workday Fetch the `Shift`s based on workday date range.
      * @var \SquareConnect\Model\ShiftWorkday
      */
    protected $workday;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["location_ids"])) {
              $this->location_ids = $data["location_ids"];
            } else {
              $this->location_ids = null;
            }
            if (isset($data["employee_ids"])) {
              $this->employee_ids = $data["employee_ids"];
            } else {
              $this->employee_ids = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["start"])) {
              $this->start = $data["start"];
            } else {
              $this->start = null;
            }
            if (isset($data["end"])) {
              $this->end = $data["end"];
            } else {
              $this->end = null;
            }
            if (isset($data["workday"])) {
              $this->workday = $data["workday"];
            } else {
              $this->workday = null;
            }
        }
    }
    /**
     * Gets location_ids
     * @return string[]
     */
    public function getLocationIds()
    {
        return $this->location_ids;
    }
  
    /**
     * Sets location_ids
     * @param string[] $location_ids Fetch shifts for the specified location.
     * @return $this
     */
    public function setLocationIds($location_ids)
    {
        $this->location_ids = $location_ids;
        return $this;
    }
    /**
     * Gets employee_ids
     * @return string[]
     */
    public function getEmployeeIds()
    {
        return $this->employee_ids;
    }
  
    /**
     * Sets employee_ids
     * @param string[] $employee_ids Fetch shifts for the specified employee.
     * @return $this
     */
    public function setEmployeeIds($employee_ids)
    {
        $this->employee_ids = $employee_ids;
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
     * @param string $status Fetch a `Shift` instance by `Shift.status`. See [ShiftFilterStatus](#type-shiftfilterstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets start
     * @return \SquareConnect\Model\TimeRange
     */
    public function getStart()
    {
        return $this->start;
    }
  
    /**
     * Sets start
     * @param \SquareConnect\Model\TimeRange $start Fetch `Shift`s that start in the time range - Inclusive.
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Gets end
     * @return \SquareConnect\Model\TimeRange
     */
    public function getEnd()
    {
        return $this->end;
    }
  
    /**
     * Sets end
     * @param \SquareConnect\Model\TimeRange $end Fetch the `Shift`s that end in the time range - Inclusive.
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }
    /**
     * Gets workday
     * @return \SquareConnect\Model\ShiftWorkday
     */
    public function getWorkday()
    {
        return $this->workday;
    }
  
    /**
     * Sets workday
     * @param \SquareConnect\Model\ShiftWorkday $workday Fetch the `Shift`s based on workday date range.
     * @return $this
     */
    public function setWorkday($workday)
    {
        $this->workday = $workday;
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
