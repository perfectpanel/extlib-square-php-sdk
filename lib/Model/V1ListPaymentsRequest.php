<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1ListPaymentsRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1ListPaymentsRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'order' => 'string',
        'begin_time' => 'string',
        'end_time' => 'string',
        'limit' => 'int',
        'batch_token' => 'string',
        'include_partial' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'order' => 'order',
        'begin_time' => 'begin_time',
        'end_time' => 'end_time',
        'limit' => 'limit',
        'batch_token' => 'batch_token',
        'include_partial' => 'include_partial'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'order' => 'setOrder',
        'begin_time' => 'setBeginTime',
        'end_time' => 'setEndTime',
        'limit' => 'setLimit',
        'batch_token' => 'setBatchToken',
        'include_partial' => 'setIncludePartial'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'order' => 'getOrder',
        'begin_time' => 'getBeginTime',
        'end_time' => 'getEndTime',
        'limit' => 'getLimit',
        'batch_token' => 'getBatchToken',
        'include_partial' => 'getIncludePartial'
    );
  
    /**
      * $order The order in which payments are listed in the response. See [SortOrder](#type-sortorder) for possible values
      * @var string
      */
    protected $order;
    /**
      * $begin_time The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
      * @var string
      */
    protected $begin_time;
    /**
      * $end_time The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
      * @var string
      */
    protected $end_time;
    /**
      * $limit The maximum number of payments to return in a single response. This value cannot exceed 200.
      * @var int
      */
    protected $limit;
    /**
      * $batch_token A pagination cursor to retrieve the next set of results for your original query to the endpoint.
      * @var string
      */
    protected $batch_token;
    /**
      * $include_partial Indicates whether or not to include partial payments in the response. Partial payments will have the tenders collected so far, but the itemizations will be empty until the payment is completed.
      * @var bool
      */
    protected $include_partial;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["order"])) {
              $this->order = $data["order"];
            } else {
              $this->order = null;
            }
            if (isset($data["begin_time"])) {
              $this->begin_time = $data["begin_time"];
            } else {
              $this->begin_time = null;
            }
            if (isset($data["end_time"])) {
              $this->end_time = $data["end_time"];
            } else {
              $this->end_time = null;
            }
            if (isset($data["limit"])) {
              $this->limit = $data["limit"];
            } else {
              $this->limit = null;
            }
            if (isset($data["batch_token"])) {
              $this->batch_token = $data["batch_token"];
            } else {
              $this->batch_token = null;
            }
            if (isset($data["include_partial"])) {
              $this->include_partial = $data["include_partial"];
            } else {
              $this->include_partial = null;
            }
        }
    }
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order The order in which payments are listed in the response. See [SortOrder](#type-sortorder) for possible values
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
    /**
     * Gets begin_time
     * @return string
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }
  
    /**
     * Sets begin_time
     * @param string $begin_time The beginning of the requested reporting period, in ISO 8601 format. If this value is before January 1, 2013 (2013-01-01T00:00:00Z), this endpoint returns an error. Default value: The current time minus one year.
     * @return $this
     */
    public function setBeginTime($begin_time)
    {
        $this->begin_time = $begin_time;
        return $this;
    }
    /**
     * Gets end_time
     * @return string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }
  
    /**
     * Sets end_time
     * @param string $end_time The end of the requested reporting period, in ISO 8601 format. If this value is more than one year greater than begin_time, this endpoint returns an error. Default value: The current time.
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
        return $this;
    }
    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
  
    /**
     * Sets limit
     * @param int $limit The maximum number of payments to return in a single response. This value cannot exceed 200.
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Gets batch_token
     * @return string
     */
    public function getBatchToken()
    {
        return $this->batch_token;
    }
  
    /**
     * Sets batch_token
     * @param string $batch_token A pagination cursor to retrieve the next set of results for your original query to the endpoint.
     * @return $this
     */
    public function setBatchToken($batch_token)
    {
        $this->batch_token = $batch_token;
        return $this;
    }
    /**
     * Gets include_partial
     * @return bool
     */
    public function getIncludePartial()
    {
        return $this->include_partial;
    }
  
    /**
     * Sets include_partial
     * @param bool $include_partial Indicates whether or not to include partial payments in the response. Partial payments will have the tenders collected so far, but the itemizations will be empty until the payment is completed.
     * @return $this
     */
    public function setIncludePartial($include_partial)
    {
        $this->include_partial = $include_partial;
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
