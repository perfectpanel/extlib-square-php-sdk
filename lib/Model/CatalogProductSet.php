<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogProductSet Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class CatalogProductSet implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'product_ids_any' => 'string[]',
        'product_ids_all' => 'string[]',
        'quantity_exact' => 'int',
        'quantity_min' => 'int',
        'quantity_max' => 'int',
        'all_products' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'product_ids_any' => 'product_ids_any',
        'product_ids_all' => 'product_ids_all',
        'quantity_exact' => 'quantity_exact',
        'quantity_min' => 'quantity_min',
        'quantity_max' => 'quantity_max',
        'all_products' => 'all_products'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'product_ids_any' => 'setProductIdsAny',
        'product_ids_all' => 'setProductIdsAll',
        'quantity_exact' => 'setQuantityExact',
        'quantity_min' => 'setQuantityMin',
        'quantity_max' => 'setQuantityMax',
        'all_products' => 'setAllProducts'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'product_ids_any' => 'getProductIdsAny',
        'product_ids_all' => 'getProductIdsAll',
        'quantity_exact' => 'getQuantityExact',
        'quantity_min' => 'getQuantityMin',
        'quantity_max' => 'getQuantityMax',
        'all_products' => 'getAllProducts'
    );
  
    /**
      * $name User-defined name for the product set. For example, \"Clearance Items\" or \"Winter Sale Items\".
      * @var string
      */
    protected $name;
    /**
      * $product_ids_any Unique IDs for any `CatalogObject` included in this product set. Any number of these catalog objects can be in an order for a pricing rule to apply.  This can be used with `product_ids_all` in a parent `CatalogProductSet` to match groups of products for a bulk discount, such as a discount for an entree and side combo.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.  Max: 500 catalog object IDs.
      * @var string[]
      */
    protected $product_ids_any;
    /**
      * $product_ids_all Unique IDs for any `CatalogObject` included in this product set. All objects in this set must be included in an order for a pricing rule to apply.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.  Max: 500 catalog object IDs.
      * @var string[]
      */
    protected $product_ids_all;
    /**
      * $quantity_exact If set, there must be exactly this many items from `products_any` or `products_all` in the cart for the discount to apply.  Cannot be combined with either `quantity_min` or `quantity_max`.
      * @var int
      */
    protected $quantity_exact;
    /**
      * $quantity_min If set, there must be at least this many items from `products_any` or `products_all` in a cart for the discount to apply. See `quantity_exact`. Defaults to 0 if `quantity_exact`, `quantity_min` and `quantity_max` are all unspecified.
      * @var int
      */
    protected $quantity_min;
    /**
      * $quantity_max If set, the pricing rule will apply to a maximum of this many items from `products_any` or `products_all`.
      * @var int
      */
    protected $quantity_max;
    /**
      * $all_products If set to `true`, the product set will include every item in the catalog.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.
      * @var bool
      */
    protected $all_products;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["product_ids_any"])) {
              $this->product_ids_any = $data["product_ids_any"];
            } else {
              $this->product_ids_any = null;
            }
            if (isset($data["product_ids_all"])) {
              $this->product_ids_all = $data["product_ids_all"];
            } else {
              $this->product_ids_all = null;
            }
            if (isset($data["quantity_exact"])) {
              $this->quantity_exact = $data["quantity_exact"];
            } else {
              $this->quantity_exact = null;
            }
            if (isset($data["quantity_min"])) {
              $this->quantity_min = $data["quantity_min"];
            } else {
              $this->quantity_min = null;
            }
            if (isset($data["quantity_max"])) {
              $this->quantity_max = $data["quantity_max"];
            } else {
              $this->quantity_max = null;
            }
            if (isset($data["all_products"])) {
              $this->all_products = $data["all_products"];
            } else {
              $this->all_products = null;
            }
        }
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
     * @param string $name User-defined name for the product set. For example, \"Clearance Items\" or \"Winter Sale Items\".
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets product_ids_any
     * @return string[]
     */
    public function getProductIdsAny()
    {
        return $this->product_ids_any;
    }
  
    /**
     * Sets product_ids_any
     * @param string[] $product_ids_any Unique IDs for any `CatalogObject` included in this product set. Any number of these catalog objects can be in an order for a pricing rule to apply.  This can be used with `product_ids_all` in a parent `CatalogProductSet` to match groups of products for a bulk discount, such as a discount for an entree and side combo.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.  Max: 500 catalog object IDs.
     * @return $this
     */
    public function setProductIdsAny($product_ids_any)
    {
        $this->product_ids_any = $product_ids_any;
        return $this;
    }
    /**
     * Gets product_ids_all
     * @return string[]
     */
    public function getProductIdsAll()
    {
        return $this->product_ids_all;
    }
  
    /**
     * Sets product_ids_all
     * @param string[] $product_ids_all Unique IDs for any `CatalogObject` included in this product set. All objects in this set must be included in an order for a pricing rule to apply.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.  Max: 500 catalog object IDs.
     * @return $this
     */
    public function setProductIdsAll($product_ids_all)
    {
        $this->product_ids_all = $product_ids_all;
        return $this;
    }
    /**
     * Gets quantity_exact
     * @return int
     */
    public function getQuantityExact()
    {
        return $this->quantity_exact;
    }
  
    /**
     * Sets quantity_exact
     * @param int $quantity_exact If set, there must be exactly this many items from `products_any` or `products_all` in the cart for the discount to apply.  Cannot be combined with either `quantity_min` or `quantity_max`.
     * @return $this
     */
    public function setQuantityExact($quantity_exact)
    {
        $this->quantity_exact = $quantity_exact;
        return $this;
    }
    /**
     * Gets quantity_min
     * @return int
     */
    public function getQuantityMin()
    {
        return $this->quantity_min;
    }
  
    /**
     * Sets quantity_min
     * @param int $quantity_min If set, there must be at least this many items from `products_any` or `products_all` in a cart for the discount to apply. See `quantity_exact`. Defaults to 0 if `quantity_exact`, `quantity_min` and `quantity_max` are all unspecified.
     * @return $this
     */
    public function setQuantityMin($quantity_min)
    {
        $this->quantity_min = $quantity_min;
        return $this;
    }
    /**
     * Gets quantity_max
     * @return int
     */
    public function getQuantityMax()
    {
        return $this->quantity_max;
    }
  
    /**
     * Sets quantity_max
     * @param int $quantity_max If set, the pricing rule will apply to a maximum of this many items from `products_any` or `products_all`.
     * @return $this
     */
    public function setQuantityMax($quantity_max)
    {
        $this->quantity_max = $quantity_max;
        return $this;
    }
    /**
     * Gets all_products
     * @return bool
     */
    public function getAllProducts()
    {
        return $this->all_products;
    }
  
    /**
     * Sets all_products
     * @param bool $all_products If set to `true`, the product set will include every item in the catalog.  Only one of `product_ids_all`, `product_ids_any`, or `all_products` can be set.
     * @return $this
     */
    public function setAllProducts($all_products)
    {
        $this->all_products = $all_products;
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
