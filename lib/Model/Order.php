<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Order implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'location_id' => 'string',
        'reference_id' => 'string',
        'source' => '\SquareConnect\Model\OrderSource',
        'customer_id' => 'string',
        'line_items' => '\SquareConnect\Model\OrderLineItem[]',
        'taxes' => '\SquareConnect\Model\OrderLineItemTax[]',
        'discounts' => '\SquareConnect\Model\OrderLineItemDiscount[]',
        'service_charges' => '\SquareConnect\Model\OrderServiceCharge[]',
        'fulfillments' => '\SquareConnect\Model\OrderFulfillment[]',
        'returns' => '\SquareConnect\Model\OrderReturn[]',
        'return_amounts' => '\SquareConnect\Model\OrderMoneyAmounts',
        'net_amounts' => '\SquareConnect\Model\OrderMoneyAmounts',
        'rounding_adjustment' => '\SquareConnect\Model\OrderRoundingAdjustment',
        'tenders' => '\SquareConnect\Model\Tender[]',
        'refunds' => '\SquareConnect\Model\Refund[]',
        'metadata' => 'map[string,string]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'closed_at' => 'string',
        'state' => 'string',
        'version' => 'int',
        'total_money' => '\SquareConnect\Model\Money',
        'total_tax_money' => '\SquareConnect\Model\Money',
        'total_discount_money' => '\SquareConnect\Model\Money',
        'total_service_charge_money' => '\SquareConnect\Model\Money',
        'rewards' => '\SquareConnect\Model\OrderReward[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location_id' => 'location_id',
        'reference_id' => 'reference_id',
        'source' => 'source',
        'customer_id' => 'customer_id',
        'line_items' => 'line_items',
        'taxes' => 'taxes',
        'discounts' => 'discounts',
        'service_charges' => 'service_charges',
        'fulfillments' => 'fulfillments',
        'returns' => 'returns',
        'return_amounts' => 'return_amounts',
        'net_amounts' => 'net_amounts',
        'rounding_adjustment' => 'rounding_adjustment',
        'tenders' => 'tenders',
        'refunds' => 'refunds',
        'metadata' => 'metadata',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'closed_at' => 'closed_at',
        'state' => 'state',
        'version' => 'version',
        'total_money' => 'total_money',
        'total_tax_money' => 'total_tax_money',
        'total_discount_money' => 'total_discount_money',
        'total_service_charge_money' => 'total_service_charge_money',
        'rewards' => 'rewards'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'reference_id' => 'setReferenceId',
        'source' => 'setSource',
        'customer_id' => 'setCustomerId',
        'line_items' => 'setLineItems',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts',
        'service_charges' => 'setServiceCharges',
        'fulfillments' => 'setFulfillments',
        'returns' => 'setReturns',
        'return_amounts' => 'setReturnAmounts',
        'net_amounts' => 'setNetAmounts',
        'rounding_adjustment' => 'setRoundingAdjustment',
        'tenders' => 'setTenders',
        'refunds' => 'setRefunds',
        'metadata' => 'setMetadata',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'closed_at' => 'setClosedAt',
        'state' => 'setState',
        'version' => 'setVersion',
        'total_money' => 'setTotalMoney',
        'total_tax_money' => 'setTotalTaxMoney',
        'total_discount_money' => 'setTotalDiscountMoney',
        'total_service_charge_money' => 'setTotalServiceChargeMoney',
        'rewards' => 'setRewards'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'reference_id' => 'getReferenceId',
        'source' => 'getSource',
        'customer_id' => 'getCustomerId',
        'line_items' => 'getLineItems',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts',
        'service_charges' => 'getServiceCharges',
        'fulfillments' => 'getFulfillments',
        'returns' => 'getReturns',
        'return_amounts' => 'getReturnAmounts',
        'net_amounts' => 'getNetAmounts',
        'rounding_adjustment' => 'getRoundingAdjustment',
        'tenders' => 'getTenders',
        'refunds' => 'getRefunds',
        'metadata' => 'getMetadata',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'closed_at' => 'getClosedAt',
        'state' => 'getState',
        'version' => 'getVersion',
        'total_money' => 'getTotalMoney',
        'total_tax_money' => 'getTotalTaxMoney',
        'total_discount_money' => 'getTotalDiscountMoney',
        'total_service_charge_money' => 'getTotalServiceChargeMoney',
        'rewards' => 'getRewards'
    );
  
    /**
      * $id The order's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $location_id The ID of the merchant location this order is associated with.
      * @var string
      */
    protected $location_id;
    /**
      * $reference_id A client specified identifier to associate an entity in another system with this order.
      * @var string
      */
    protected $reference_id;
    /**
      * $source The origination details of the order.
      * @var \SquareConnect\Model\OrderSource
      */
    protected $source;
    /**
      * $customer_id The `Customer` ID of the customer associated with the order.
      * @var string
      */
    protected $customer_id;
    /**
      * $line_items The line items included in the order.
      * @var \SquareConnect\Model\OrderLineItem[]
      */
    protected $line_items;
    /**
      * $taxes The list of all taxes associated with the order.  Taxes can be scoped to either `ORDER` or `LINE_ITEM`. For taxes with `LINE_ITEM` scope, an `OrderLineItemAppliedTax` must be added to each line item that the tax applies to. For taxes with `ORDER` scope, the server will generate an `OrderLineItemAppliedTax` for every line item.  On reads, each tax in the list will include the total amount of that tax applied to the order.  __IMPORTANT__: If `LINE_ITEM` scope is set on any taxes in this field, usage of the deprecated `line_items.taxes` field will result in an error. Please use `line_items.applied_taxes` instead.
      * @var \SquareConnect\Model\OrderLineItemTax[]
      */
    protected $taxes;
    /**
      * $discounts The list of all discounts associated with the order.  Discounts can be scoped to either `ORDER` or `LINE_ITEM`. For discounts scoped to `LINE_ITEM`, an `OrderLineItemAppliedDiscount` must be added to each line item that the discount applies to. For discounts with `ORDER` scope, the server will generate an `OrderLineItemAppliedDiscount` for every line item.  __IMPORTANT__: If `LINE_ITEM` scope is set on any discounts in this field, usage of the deprecated `line_items.discounts` field will result in an error. Please use `line_items.applied_discounts` instead.
      * @var \SquareConnect\Model\OrderLineItemDiscount[]
      */
    protected $discounts;
    /**
      * $service_charges A list of service charges applied to the order.
      * @var \SquareConnect\Model\OrderServiceCharge[]
      */
    protected $service_charges;
    /**
      * $fulfillments Details on order fulfillment.  Orders can only be created with at most one fulfillment. However, orders returned by the API may contain multiple fulfillments.
      * @var \SquareConnect\Model\OrderFulfillment[]
      */
    protected $fulfillments;
    /**
      * $returns Collection of items from sale Orders being returned in this one. Normally part of an Itemized Return or Exchange.  There will be exactly one `Return` object per sale Order being referenced.
      * @var \SquareConnect\Model\OrderReturn[]
      */
    protected $returns;
    /**
      * $return_amounts Rollup of returned money amounts.
      * @var \SquareConnect\Model\OrderMoneyAmounts
      */
    protected $return_amounts;
    /**
      * $net_amounts Net money amounts (sale money - return money).
      * @var \SquareConnect\Model\OrderMoneyAmounts
      */
    protected $net_amounts;
    /**
      * $rounding_adjustment A positive or negative rounding adjustment to the total of the order, commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency.
      * @var \SquareConnect\Model\OrderRoundingAdjustment
      */
    protected $rounding_adjustment;
    /**
      * $tenders The Tenders which were used to pay for the Order.
      * @var \SquareConnect\Model\Tender[]
      */
    protected $tenders;
    /**
      * $refunds The Refunds that are part of this Order.
      * @var \SquareConnect\Model\Refund[]
      */
    protected $refunds;
    /**
      * $metadata Application-defined data attached to this order. Metadata fields are intended to store descriptive references or associations with an entity in another system or store brief information about the object. Square does not process this field; it only stores and returns it in relevant API calls. Do not use metadata to store any sensitive information (personally identifiable information, card details, etc.).  Keys written by applications must be 60 characters or less and must be in the character set `[a-zA-Z0-9_-]`. Entries may also include metadata generated by Square. These keys are prefixed with a namespace, separated from the key with a ':' character.  Values have a max length of 255 characters.  An application may have up to 10 entries per metadata field.  Entries written by applications are private and can only be read or modified by the same application.  See [Metadata](https://developer.squareup.com/docs/build-basics/metadata) for more information.
      * @var map[string,string]
      */
    protected $metadata;
    /**
      * $created_at Timestamp for when the order was created. In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at Timestamp for when the order was last updated. In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $updated_at;
    /**
      * $closed_at Timestamp for when the order reached a terminal [state](#property-state). In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $closed_at;
    /**
      * $state The current state of the order. `OPEN`,`COMPLETED`,`CANCELED` See [OrderState](#type-orderstate) for possible values
      * @var string
      */
    protected $state;
    /**
      * $version Version number which is incremented each time an update is committed to the order. Orders that were not created through the API will not include a version and thus cannot be updated.  [Read more about working with versions](https://developer.squareup.com/docs/orders-api/manage-orders#update-orders).
      * @var int
      */
    protected $version;
    /**
      * $total_money The total amount of money to collect for the order.
      * @var \SquareConnect\Model\Money
      */
    protected $total_money;
    /**
      * $total_tax_money The total tax amount of money to collect for the order.
      * @var \SquareConnect\Model\Money
      */
    protected $total_tax_money;
    /**
      * $total_discount_money The total discount amount of money to collect for the order.
      * @var \SquareConnect\Model\Money
      */
    protected $total_discount_money;
    /**
      * $total_service_charge_money The total amount of money collected in service charges for the order.  Note: `total_service_charge_money` is the sum of `applied_money` fields for each individual service charge. Therefore, `total_service_charge_money` will only include inclusive tax amounts, not additive tax amounts.
      * @var \SquareConnect\Model\Money
      */
    protected $total_service_charge_money;
    /**
      * $rewards A set-like list of rewards that have been added to the order.
      * @var \SquareConnect\Model\OrderReward[]
      */
    protected $rewards;

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
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["source"])) {
              $this->source = $data["source"];
            } else {
              $this->source = null;
            }
            if (isset($data["customer_id"])) {
              $this->customer_id = $data["customer_id"];
            } else {
              $this->customer_id = null;
            }
            if (isset($data["line_items"])) {
              $this->line_items = $data["line_items"];
            } else {
              $this->line_items = null;
            }
            if (isset($data["taxes"])) {
              $this->taxes = $data["taxes"];
            } else {
              $this->taxes = null;
            }
            if (isset($data["discounts"])) {
              $this->discounts = $data["discounts"];
            } else {
              $this->discounts = null;
            }
            if (isset($data["service_charges"])) {
              $this->service_charges = $data["service_charges"];
            } else {
              $this->service_charges = null;
            }
            if (isset($data["fulfillments"])) {
              $this->fulfillments = $data["fulfillments"];
            } else {
              $this->fulfillments = null;
            }
            if (isset($data["returns"])) {
              $this->returns = $data["returns"];
            } else {
              $this->returns = null;
            }
            if (isset($data["return_amounts"])) {
              $this->return_amounts = $data["return_amounts"];
            } else {
              $this->return_amounts = null;
            }
            if (isset($data["net_amounts"])) {
              $this->net_amounts = $data["net_amounts"];
            } else {
              $this->net_amounts = null;
            }
            if (isset($data["rounding_adjustment"])) {
              $this->rounding_adjustment = $data["rounding_adjustment"];
            } else {
              $this->rounding_adjustment = null;
            }
            if (isset($data["tenders"])) {
              $this->tenders = $data["tenders"];
            } else {
              $this->tenders = null;
            }
            if (isset($data["refunds"])) {
              $this->refunds = $data["refunds"];
            } else {
              $this->refunds = null;
            }
            if (isset($data["metadata"])) {
              $this->metadata = $data["metadata"];
            } else {
              $this->metadata = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["closed_at"])) {
              $this->closed_at = $data["closed_at"];
            } else {
              $this->closed_at = null;
            }
            if (isset($data["state"])) {
              $this->state = $data["state"];
            } else {
              $this->state = null;
            }
            if (isset($data["version"])) {
              $this->version = $data["version"];
            } else {
              $this->version = null;
            }
            if (isset($data["total_money"])) {
              $this->total_money = $data["total_money"];
            } else {
              $this->total_money = null;
            }
            if (isset($data["total_tax_money"])) {
              $this->total_tax_money = $data["total_tax_money"];
            } else {
              $this->total_tax_money = null;
            }
            if (isset($data["total_discount_money"])) {
              $this->total_discount_money = $data["total_discount_money"];
            } else {
              $this->total_discount_money = null;
            }
            if (isset($data["total_service_charge_money"])) {
              $this->total_service_charge_money = $data["total_service_charge_money"];
            } else {
              $this->total_service_charge_money = null;
            }
            if (isset($data["rewards"])) {
              $this->rewards = $data["rewards"];
            } else {
              $this->rewards = null;
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
     * @param string $id The order's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param string $location_id The ID of the merchant location this order is associated with.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id A client specified identifier to associate an entity in another system with this order.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets source
     * @return \SquareConnect\Model\OrderSource
     */
    public function getSource()
    {
        return $this->source;
    }
  
    /**
     * Sets source
     * @param \SquareConnect\Model\OrderSource $source The origination details of the order.
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }
  
    /**
     * Sets customer_id
     * @param string $customer_id The `Customer` ID of the customer associated with the order.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }
    /**
     * Gets line_items
     * @return \SquareConnect\Model\OrderLineItem[]
     */
    public function getLineItems()
    {
        return $this->line_items;
    }
  
    /**
     * Sets line_items
     * @param \SquareConnect\Model\OrderLineItem[] $line_items The line items included in the order.
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->line_items = $line_items;
        return $this;
    }
    /**
     * Gets taxes
     * @return \SquareConnect\Model\OrderLineItemTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }
  
    /**
     * Sets taxes
     * @param \SquareConnect\Model\OrderLineItemTax[] $taxes The list of all taxes associated with the order.  Taxes can be scoped to either `ORDER` or `LINE_ITEM`. For taxes with `LINE_ITEM` scope, an `OrderLineItemAppliedTax` must be added to each line item that the tax applies to. For taxes with `ORDER` scope, the server will generate an `OrderLineItemAppliedTax` for every line item.  On reads, each tax in the list will include the total amount of that tax applied to the order.  __IMPORTANT__: If `LINE_ITEM` scope is set on any taxes in this field, usage of the deprecated `line_items.taxes` field will result in an error. Please use `line_items.applied_taxes` instead.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Gets discounts
     * @return \SquareConnect\Model\OrderLineItemDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }
  
    /**
     * Sets discounts
     * @param \SquareConnect\Model\OrderLineItemDiscount[] $discounts The list of all discounts associated with the order.  Discounts can be scoped to either `ORDER` or `LINE_ITEM`. For discounts scoped to `LINE_ITEM`, an `OrderLineItemAppliedDiscount` must be added to each line item that the discount applies to. For discounts with `ORDER` scope, the server will generate an `OrderLineItemAppliedDiscount` for every line item.  __IMPORTANT__: If `LINE_ITEM` scope is set on any discounts in this field, usage of the deprecated `line_items.discounts` field will result in an error. Please use `line_items.applied_discounts` instead.
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * Gets service_charges
     * @return \SquareConnect\Model\OrderServiceCharge[]
     */
    public function getServiceCharges()
    {
        return $this->service_charges;
    }
  
    /**
     * Sets service_charges
     * @param \SquareConnect\Model\OrderServiceCharge[] $service_charges A list of service charges applied to the order.
     * @return $this
     */
    public function setServiceCharges($service_charges)
    {
        $this->service_charges = $service_charges;
        return $this;
    }
    /**
     * Gets fulfillments
     * @return \SquareConnect\Model\OrderFulfillment[]
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }
  
    /**
     * Sets fulfillments
     * @param \SquareConnect\Model\OrderFulfillment[] $fulfillments Details on order fulfillment.  Orders can only be created with at most one fulfillment. However, orders returned by the API may contain multiple fulfillments.
     * @return $this
     */
    public function setFulfillments($fulfillments)
    {
        $this->fulfillments = $fulfillments;
        return $this;
    }
    /**
     * Gets returns
     * @return \SquareConnect\Model\OrderReturn[]
     */
    public function getReturns()
    {
        return $this->returns;
    }
  
    /**
     * Sets returns
     * @param \SquareConnect\Model\OrderReturn[] $returns Collection of items from sale Orders being returned in this one. Normally part of an Itemized Return or Exchange.  There will be exactly one `Return` object per sale Order being referenced.
     * @return $this
     */
    public function setReturns($returns)
    {
        $this->returns = $returns;
        return $this;
    }
    /**
     * Gets return_amounts
     * @return \SquareConnect\Model\OrderMoneyAmounts
     */
    public function getReturnAmounts()
    {
        return $this->return_amounts;
    }
  
    /**
     * Sets return_amounts
     * @param \SquareConnect\Model\OrderMoneyAmounts $return_amounts Rollup of returned money amounts.
     * @return $this
     */
    public function setReturnAmounts($return_amounts)
    {
        $this->return_amounts = $return_amounts;
        return $this;
    }
    /**
     * Gets net_amounts
     * @return \SquareConnect\Model\OrderMoneyAmounts
     */
    public function getNetAmounts()
    {
        return $this->net_amounts;
    }
  
    /**
     * Sets net_amounts
     * @param \SquareConnect\Model\OrderMoneyAmounts $net_amounts Net money amounts (sale money - return money).
     * @return $this
     */
    public function setNetAmounts($net_amounts)
    {
        $this->net_amounts = $net_amounts;
        return $this;
    }
    /**
     * Gets rounding_adjustment
     * @return \SquareConnect\Model\OrderRoundingAdjustment
     */
    public function getRoundingAdjustment()
    {
        return $this->rounding_adjustment;
    }
  
    /**
     * Sets rounding_adjustment
     * @param \SquareConnect\Model\OrderRoundingAdjustment $rounding_adjustment A positive or negative rounding adjustment to the total of the order, commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency.
     * @return $this
     */
    public function setRoundingAdjustment($rounding_adjustment)
    {
        $this->rounding_adjustment = $rounding_adjustment;
        return $this;
    }
    /**
     * Gets tenders
     * @return \SquareConnect\Model\Tender[]
     */
    public function getTenders()
    {
        return $this->tenders;
    }
  
    /**
     * Sets tenders
     * @param \SquareConnect\Model\Tender[] $tenders The Tenders which were used to pay for the Order.
     * @return $this
     */
    public function setTenders($tenders)
    {
        $this->tenders = $tenders;
        return $this;
    }
    /**
     * Gets refunds
     * @return \SquareConnect\Model\Refund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }
  
    /**
     * Sets refunds
     * @param \SquareConnect\Model\Refund[] $refunds The Refunds that are part of this Order.
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }
    /**
     * Gets metadata
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
  
    /**
     * Sets metadata
     * @param map[string,string] $metadata Application-defined data attached to this order. Metadata fields are intended to store descriptive references or associations with an entity in another system or store brief information about the object. Square does not process this field; it only stores and returns it in relevant API calls. Do not use metadata to store any sensitive information (personally identifiable information, card details, etc.).  Keys written by applications must be 60 characters or less and must be in the character set `[a-zA-Z0-9_-]`. Entries may also include metadata generated by Square. These keys are prefixed with a namespace, separated from the key with a ':' character.  Values have a max length of 255 characters.  An application may have up to 10 entries per metadata field.  Entries written by applications are private and can only be read or modified by the same application.  See [Metadata](https://developer.squareup.com/docs/build-basics/metadata) for more information.
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
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
     * @param string $created_at Timestamp for when the order was created. In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at Timestamp for when the order was last updated. In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets closed_at
     * @return string
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }
  
    /**
     * Sets closed_at
     * @param string $closed_at Timestamp for when the order reached a terminal [state](#property-state). In RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setClosedAt($closed_at)
    {
        $this->closed_at = $closed_at;
        return $this;
    }
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state The current state of the order. `OPEN`,`COMPLETED`,`CANCELED` See [OrderState](#type-orderstate) for possible values
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param int $version Version number which is incremented each time an update is committed to the order. Orders that were not created through the API will not include a version and thus cannot be updated.  [Read more about working with versions](https://developer.squareup.com/docs/orders-api/manage-orders#update-orders).
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets total_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }
  
    /**
     * Sets total_money
     * @param \SquareConnect\Model\Money $total_money The total amount of money to collect for the order.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets total_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalTaxMoney()
    {
        return $this->total_tax_money;
    }
  
    /**
     * Sets total_tax_money
     * @param \SquareConnect\Model\Money $total_tax_money The total tax amount of money to collect for the order.
     * @return $this
     */
    public function setTotalTaxMoney($total_tax_money)
    {
        $this->total_tax_money = $total_tax_money;
        return $this;
    }
    /**
     * Gets total_discount_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalDiscountMoney()
    {
        return $this->total_discount_money;
    }
  
    /**
     * Sets total_discount_money
     * @param \SquareConnect\Model\Money $total_discount_money The total discount amount of money to collect for the order.
     * @return $this
     */
    public function setTotalDiscountMoney($total_discount_money)
    {
        $this->total_discount_money = $total_discount_money;
        return $this;
    }
    /**
     * Gets total_service_charge_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalServiceChargeMoney()
    {
        return $this->total_service_charge_money;
    }
  
    /**
     * Sets total_service_charge_money
     * @param \SquareConnect\Model\Money $total_service_charge_money The total amount of money collected in service charges for the order.  Note: `total_service_charge_money` is the sum of `applied_money` fields for each individual service charge. Therefore, `total_service_charge_money` will only include inclusive tax amounts, not additive tax amounts.
     * @return $this
     */
    public function setTotalServiceChargeMoney($total_service_charge_money)
    {
        $this->total_service_charge_money = $total_service_charge_money;
        return $this;
    }
    /**
     * Gets rewards
     * @return \SquareConnect\Model\OrderReward[]
     */
    public function getRewards()
    {
        return $this->rewards;
    }
  
    /**
     * Sets rewards
     * @param \SquareConnect\Model\OrderReward[] $rewards A set-like list of rewards that have been added to the order.
     * @return $this
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
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
