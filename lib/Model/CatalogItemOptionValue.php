<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogItemOptionValue Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class CatalogItemOptionValue implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'item_option_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'color' => 'string',
        'ordinal' => 'int',
        'item_variation_count' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'item_option_id' => 'item_option_id',
        'name' => 'name',
        'description' => 'description',
        'color' => 'color',
        'ordinal' => 'ordinal',
        'item_variation_count' => 'item_variation_count'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'item_option_id' => 'setItemOptionId',
        'name' => 'setName',
        'description' => 'setDescription',
        'color' => 'setColor',
        'ordinal' => 'setOrdinal',
        'item_variation_count' => 'setItemVariationCount'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'item_option_id' => 'getItemOptionId',
        'name' => 'getName',
        'description' => 'getDescription',
        'color' => 'getColor',
        'ordinal' => 'getOrdinal',
        'item_variation_count' => 'getItemVariationCount'
    );
  
    /**
      * $item_option_id Unique ID of the associated item option.
      * @var string
      */
    protected $item_option_id;
    /**
      * $name Name of this item option value. Searchable.
      * @var string
      */
    protected $name;
    /**
      * $description A human-readable description for the option value.
      * @var string
      */
    protected $description;
    /**
      * $color The HTML-supported hex color for the item option (e.g., \"#ff8d4e85\"). Only displayed if `show_colors` is enabled on the parent `ItemOption`. When left unset, `color` defaults to white (\"#ffffff\") when `show_colors` is enabled on the parent `ItemOption`.
      * @var string
      */
    protected $color;
    /**
      * $ordinal Determines where this option value appears in a list of option values.
      * @var int
      */
    protected $ordinal;
    /**
      * $item_variation_count The number of `CatalogItemVariation`s that currently make use of this Item Option value. Present only if `retrieve_counts` was specified on the request used to retrieve the parent Item Option of this value.  Maximum: 100 counts.
      * @var int
      */
    protected $item_variation_count;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["item_option_id"])) {
              $this->item_option_id = $data["item_option_id"];
            } else {
              $this->item_option_id = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["description"])) {
              $this->description = $data["description"];
            } else {
              $this->description = null;
            }
            if (isset($data["color"])) {
              $this->color = $data["color"];
            } else {
              $this->color = null;
            }
            if (isset($data["ordinal"])) {
              $this->ordinal = $data["ordinal"];
            } else {
              $this->ordinal = null;
            }
            if (isset($data["item_variation_count"])) {
              $this->item_variation_count = $data["item_variation_count"];
            } else {
              $this->item_variation_count = null;
            }
        }
    }
    /**
     * Gets item_option_id
     * @return string
     */
    public function getItemOptionId()
    {
        return $this->item_option_id;
    }
  
    /**
     * Sets item_option_id
     * @param string $item_option_id Unique ID of the associated item option.
     * @return $this
     */
    public function setItemOptionId($item_option_id)
    {
        $this->item_option_id = $item_option_id;
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
     * @param string $name Name of this item option value. Searchable.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @param string $description A human-readable description for the option value.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color The HTML-supported hex color for the item option (e.g., \"#ff8d4e85\"). Only displayed if `show_colors` is enabled on the parent `ItemOption`. When left unset, `color` defaults to white (\"#ffffff\") when `show_colors` is enabled on the parent `ItemOption`.
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    /**
     * Gets ordinal
     * @return int
     */
    public function getOrdinal()
    {
        return $this->ordinal;
    }
  
    /**
     * Sets ordinal
     * @param int $ordinal Determines where this option value appears in a list of option values.
     * @return $this
     */
    public function setOrdinal($ordinal)
    {
        $this->ordinal = $ordinal;
        return $this;
    }
    /**
     * Gets item_variation_count
     * @return int
     */
    public function getItemVariationCount()
    {
        return $this->item_variation_count;
    }
  
    /**
     * Sets item_variation_count
     * @param int $item_variation_count The number of `CatalogItemVariation`s that currently make use of this Item Option value. Present only if `retrieve_counts` was specified on the request used to retrieve the parent Item Option of this value.  Maximum: 100 counts.
     * @return $this
     */
    public function setItemVariationCount($item_variation_count)
    {
        $this->item_variation_count = $item_variation_count;
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
