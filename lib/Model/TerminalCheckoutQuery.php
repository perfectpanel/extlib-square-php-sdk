<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * TerminalCheckoutQuery Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class TerminalCheckoutQuery implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'filter' => '\SquareConnect\Model\TerminalCheckoutQueryFilter',
        'sort' => '\SquareConnect\Model\TerminalCheckoutQuerySort'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'filter' => 'filter',
        'sort' => 'sort'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'filter' => 'setFilter',
        'sort' => 'setSort'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'filter' => 'getFilter',
        'sort' => 'getSort'
    );
  
    /**
      * $filter Options for filtering returned `TerminalCheckout`s
      * @var \SquareConnect\Model\TerminalCheckoutQueryFilter
      */
    protected $filter;
    /**
      * $sort Option for sorting returned `TerminalCheckout`s
      * @var \SquareConnect\Model\TerminalCheckoutQuerySort
      */
    protected $sort;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["filter"])) {
              $this->filter = $data["filter"];
            } else {
              $this->filter = null;
            }
            if (isset($data["sort"])) {
              $this->sort = $data["sort"];
            } else {
              $this->sort = null;
            }
        }
    }
    /**
     * Gets filter
     * @return \SquareConnect\Model\TerminalCheckoutQueryFilter
     */
    public function getFilter()
    {
        return $this->filter;
    }
  
    /**
     * Sets filter
     * @param \SquareConnect\Model\TerminalCheckoutQueryFilter $filter Options for filtering returned `TerminalCheckout`s
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * Gets sort
     * @return \SquareConnect\Model\TerminalCheckoutQuerySort
     */
    public function getSort()
    {
        return $this->sort;
    }
  
    /**
     * Sets sort
     * @param \SquareConnect\Model\TerminalCheckoutQuerySort $sort Option for sorting returned `TerminalCheckout`s
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
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
