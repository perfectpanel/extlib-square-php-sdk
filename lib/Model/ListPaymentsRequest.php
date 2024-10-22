<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ListPaymentsRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ListPaymentsRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'begin_time' => 'string',
        'end_time' => 'string',
        'sort_order' => 'string',
        'cursor' => 'string',
        'location_id' => 'string',
        'total' => 'int',
        'last_4' => 'string',
        'card_brand' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'begin_time' => 'begin_time',
        'end_time' => 'end_time',
        'sort_order' => 'sort_order',
        'cursor' => 'cursor',
        'location_id' => 'location_id',
        'total' => 'total',
        'last_4' => 'last_4',
        'card_brand' => 'card_brand'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'begin_time' => 'setBeginTime',
        'end_time' => 'setEndTime',
        'sort_order' => 'setSortOrder',
        'cursor' => 'setCursor',
        'location_id' => 'setLocationId',
        'total' => 'setTotal',
        'last_4' => 'setLast4',
        'card_brand' => 'setCardBrand'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'begin_time' => 'getBeginTime',
        'end_time' => 'getEndTime',
        'sort_order' => 'getSortOrder',
        'cursor' => 'getCursor',
        'location_id' => 'getLocationId',
        'total' => 'getTotal',
        'last_4' => 'getLast4',
        'card_brand' => 'getCardBrand'
    );
  
    /**
      * $begin_time Timestamp for the beginning of the reporting period, in RFC 3339 format. Inclusive. Default: The current time minus one year.
      * @var string
      */
    protected $begin_time;
    /**
      * $end_time Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time.
      * @var string
      */
    protected $end_time;
    /**
      * $sort_order The order in which results are listed. - `ASC` - oldest to newest - `DESC` - newest to oldest (default).
      * @var string
      */
    protected $sort_order;
    /**
      * $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
      * @var string
      */
    protected $cursor;
    /**
      * $location_id Limit results to the location supplied. By default, results are returned for all locations associated with the merchant.
      * @var string
      */
    protected $location_id;
    /**
      * $total The exact amount in the total_money for a `Payment`.
      * @var int
      */
    protected $total;
    /**
      * $last_4 The last 4 digits of `Payment` card.
      * @var string
      */
    protected $last_4;
    /**
      * $card_brand The brand of `Payment` card. For example, `VISA`
      * @var string
      */
    protected $card_brand;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
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
            if (isset($data["sort_order"])) {
              $this->sort_order = $data["sort_order"];
            } else {
              $this->sort_order = null;
            }
            if (isset($data["cursor"])) {
              $this->cursor = $data["cursor"];
            } else {
              $this->cursor = null;
            }
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["total"])) {
              $this->total = $data["total"];
            } else {
              $this->total = null;
            }
            if (isset($data["last_4"])) {
              $this->last_4 = $data["last_4"];
            } else {
              $this->last_4 = null;
            }
            if (isset($data["card_brand"])) {
              $this->card_brand = $data["card_brand"];
            } else {
              $this->card_brand = null;
            }
        }
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
     * @param string $begin_time Timestamp for the beginning of the reporting period, in RFC 3339 format. Inclusive. Default: The current time minus one year.
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
     * @param string $end_time Timestamp for the end of the requested reporting period, in RFC 3339 format.  Default: The current time.
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
        return $this;
    }
    /**
     * Gets sort_order
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }
  
    /**
     * Sets sort_order
     * @param string $sort_order The order in which results are listed. - `ASC` - oldest to newest - `DESC` - newest to oldest (default).
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;
        return $this;
    }
    /**
     * Gets cursor
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }
  
    /**
     * Sets cursor
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for the original query.  See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id Limit results to the location supplied. By default, results are returned for all locations associated with the merchant.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
  
    /**
     * Sets total
     * @param int $total The exact amount in the total_money for a `Payment`.
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Gets last_4
     * @return string
     */
    public function getLast4()
    {
        return $this->last_4;
    }
  
    /**
     * Sets last_4
     * @param string $last_4 The last 4 digits of `Payment` card.
     * @return $this
     */
    public function setLast4($last_4)
    {
        $this->last_4 = $last_4;
        return $this;
    }
    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->card_brand;
    }
  
    /**
     * Sets card_brand
     * @param string $card_brand The brand of `Payment` card. For example, `VISA`
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->card_brand = $card_brand;
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
