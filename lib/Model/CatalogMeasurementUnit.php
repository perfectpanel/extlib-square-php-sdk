<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogMeasurementUnit Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class CatalogMeasurementUnit implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'measurement_unit' => '\SquareConnect\Model\MeasurementUnit',
        'precision' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'measurement_unit' => 'measurement_unit',
        'precision' => 'precision'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'measurement_unit' => 'setMeasurementUnit',
        'precision' => 'setPrecision'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'measurement_unit' => 'getMeasurementUnit',
        'precision' => 'getPrecision'
    );
  
    /**
      * $measurement_unit Indicates the unit used to measure the quantity of a catalog item variation.
      * @var \SquareConnect\Model\MeasurementUnit
      */
    protected $measurement_unit;
    /**
      * $precision An integer between 0 and 5 that represents the maximum number of positions allowed after the decimal in quantities measured with this unit. For example:  - if the precision is 0, the quantity can be 1, 2, 3, etc. - if the precision is 1, the quantity can be 0.1, 0.2, etc. - if the precision is 2, the quantity can be 0.01, 0.12, etc.  Default: 3
      * @var int
      */
    protected $precision;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["measurement_unit"])) {
              $this->measurement_unit = $data["measurement_unit"];
            } else {
              $this->measurement_unit = null;
            }
            if (isset($data["precision"])) {
              $this->precision = $data["precision"];
            } else {
              $this->precision = null;
            }
        }
    }
    /**
     * Gets measurement_unit
     * @return \SquareConnect\Model\MeasurementUnit
     */
    public function getMeasurementUnit()
    {
        return $this->measurement_unit;
    }
  
    /**
     * Sets measurement_unit
     * @param \SquareConnect\Model\MeasurementUnit $measurement_unit Indicates the unit used to measure the quantity of a catalog item variation.
     * @return $this
     */
    public function setMeasurementUnit($measurement_unit)
    {
        $this->measurement_unit = $measurement_unit;
        return $this;
    }
    /**
     * Gets precision
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }
  
    /**
     * Sets precision
     * @param int $precision An integer between 0 and 5 that represents the maximum number of positions allowed after the decimal in quantities measured with this unit. For example:  - if the precision is 0, the quantity can be 1, 2, 3, etc. - if the precision is 1, the quantity can be 0.1, 0.2, etc. - if the precision is 2, the quantity can be 0.01, 0.12, etc.  Default: 3
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
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
