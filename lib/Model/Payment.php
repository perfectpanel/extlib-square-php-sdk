<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Payment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'tip_money' => '\SquareConnect\Model\Money',
        'total_money' => '\SquareConnect\Model\Money',
        'app_fee_money' => '\SquareConnect\Model\Money',
        'processing_fee' => '\SquareConnect\Model\ProcessingFee[]',
        'refunded_money' => '\SquareConnect\Model\Money',
        'status' => 'string',
        'delay_duration' => 'string',
        'delay_action' => 'string',
        'delayed_until' => 'string',
        'source_type' => 'string',
        'card_details' => '\SquareConnect\Model\CardPaymentDetails',
        'location_id' => 'string',
        'order_id' => 'string',
        'reference_id' => 'string',
        'customer_id' => 'string',
        'employee_id' => 'string',
        'refund_ids' => 'string[]',
        'buyer_email_address' => 'string',
        'billing_address' => '\SquareConnect\Model\Address',
        'shipping_address' => '\SquareConnect\Model\Address',
        'note' => 'string',
        'statement_description_identifier' => 'string',
        'receipt_number' => 'string',
        'receipt_url' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'amount_money' => 'amount_money',
        'tip_money' => 'tip_money',
        'total_money' => 'total_money',
        'app_fee_money' => 'app_fee_money',
        'processing_fee' => 'processing_fee',
        'refunded_money' => 'refunded_money',
        'status' => 'status',
        'delay_duration' => 'delay_duration',
        'delay_action' => 'delay_action',
        'delayed_until' => 'delayed_until',
        'source_type' => 'source_type',
        'card_details' => 'card_details',
        'location_id' => 'location_id',
        'order_id' => 'order_id',
        'reference_id' => 'reference_id',
        'customer_id' => 'customer_id',
        'employee_id' => 'employee_id',
        'refund_ids' => 'refund_ids',
        'buyer_email_address' => 'buyer_email_address',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'note' => 'note',
        'statement_description_identifier' => 'statement_description_identifier',
        'receipt_number' => 'receipt_number',
        'receipt_url' => 'receipt_url'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'amount_money' => 'setAmountMoney',
        'tip_money' => 'setTipMoney',
        'total_money' => 'setTotalMoney',
        'app_fee_money' => 'setAppFeeMoney',
        'processing_fee' => 'setProcessingFee',
        'refunded_money' => 'setRefundedMoney',
        'status' => 'setStatus',
        'delay_duration' => 'setDelayDuration',
        'delay_action' => 'setDelayAction',
        'delayed_until' => 'setDelayedUntil',
        'source_type' => 'setSourceType',
        'card_details' => 'setCardDetails',
        'location_id' => 'setLocationId',
        'order_id' => 'setOrderId',
        'reference_id' => 'setReferenceId',
        'customer_id' => 'setCustomerId',
        'employee_id' => 'setEmployeeId',
        'refund_ids' => 'setRefundIds',
        'buyer_email_address' => 'setBuyerEmailAddress',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'note' => 'setNote',
        'statement_description_identifier' => 'setStatementDescriptionIdentifier',
        'receipt_number' => 'setReceiptNumber',
        'receipt_url' => 'setReceiptUrl'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'amount_money' => 'getAmountMoney',
        'tip_money' => 'getTipMoney',
        'total_money' => 'getTotalMoney',
        'app_fee_money' => 'getAppFeeMoney',
        'processing_fee' => 'getProcessingFee',
        'refunded_money' => 'getRefundedMoney',
        'status' => 'getStatus',
        'delay_duration' => 'getDelayDuration',
        'delay_action' => 'getDelayAction',
        'delayed_until' => 'getDelayedUntil',
        'source_type' => 'getSourceType',
        'card_details' => 'getCardDetails',
        'location_id' => 'getLocationId',
        'order_id' => 'getOrderId',
        'reference_id' => 'getReferenceId',
        'customer_id' => 'getCustomerId',
        'employee_id' => 'getEmployeeId',
        'refund_ids' => 'getRefundIds',
        'buyer_email_address' => 'getBuyerEmailAddress',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'note' => 'getNote',
        'statement_description_identifier' => 'getStatementDescriptionIdentifier',
        'receipt_number' => 'getReceiptNumber',
        'receipt_url' => 'getReceiptUrl'
    );
  
    /**
      * $id Unique ID for the payment.
      * @var string
      */
    protected $id;
    /**
      * $created_at Timestamp of when the payment was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at Timestamp of when the payment was last updated, in RFC 3339 format.
      * @var string
      */
    protected $updated_at;
    /**
      * $amount_money The amount of money processed for this payment, not including `tip_money`. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. For more information, see [Working with monetary amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts).
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $tip_money The amount designated as a tip. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
      * @var \SquareConnect\Model\Money
      */
    protected $tip_money;
    /**
      * $total_money The total money for the payment, including `amount_money` and `tip_money`. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
      * @var \SquareConnect\Model\Money
      */
    protected $total_money;
    /**
      * $app_fee_money The amount of money the developer is taking as a fee for facilitating the payment on behalf of the seller. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.  For more information, see [Take Payments and Collect Fees](https://developer.squareup.com/docs/payments-api/take-payments-and-collect-fees).  Cannot be more than 90% of the `total_money` value.
      * @var \SquareConnect\Model\Money
      */
    protected $app_fee_money;
    /**
      * $processing_fee Processing fees and fee adjustments assessed by Square on this payment.
      * @var \SquareConnect\Model\ProcessingFee[]
      */
    protected $processing_fee;
    /**
      * $refunded_money Total amount of the payment refunded to-date. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
      * @var \SquareConnect\Model\Money
      */
    protected $refunded_money;
    /**
      * $status Indicates whether the payment is `APPROVED`, `COMPLETED`, `CANCELED`, or `FAILED`.
      * @var string
      */
    protected $status;
    /**
      * $delay_duration The duration of time after the payment's creation when Square automatically applies the `delay_action` to the payment. This automatic `delay_action` applies only to payments that don't reach a terminal state (COMPLETED, CANCELED, or FAILED) before the `delay_duration` time period.  This field is specified as a time duration, in RFC 3339 format.  Notes: This feature is only supported for card payments.  Default:  - Card Present payments: \"PT36H\" (36 hours) from the creation time. - Card Not Present payments: \"P7D\" (7 days) from the creation time.
      * @var string
      */
    protected $delay_duration;
    /**
      * $delay_action The action to be applied to the payment when the `delay_duration` has elapsed. This field is read only.  Current values include: `CANCEL`
      * @var string
      */
    protected $delay_action;
    /**
      * $delayed_until Read only timestamp of when the `delay_action` will automatically be applied, in RFC 3339 format.  Note that this field is calculated by summing the payment's `delay_duration` and `created_at` fields. The `created_at` field is generated by Square and may not exactly match the time on your local machine.
      * @var string
      */
    protected $delayed_until;
    /**
      * $source_type The source type for this payment  Current values include: `CARD`.
      * @var string
      */
    protected $source_type;
    /**
      * $card_details Non-confidential details about the source. Only populated if the `source_type` is `CARD`.
      * @var \SquareConnect\Model\CardPaymentDetails
      */
    protected $card_details;
    /**
      * $location_id ID of the location associated with the payment.
      * @var string
      */
    protected $location_id;
    /**
      * $order_id ID of the order associated with this payment.
      * @var string
      */
    protected $order_id;
    /**
      * $reference_id An optional ID that associates this payment with an entity in another system.
      * @var string
      */
    protected $reference_id;
    /**
      * $customer_id The `Customer` ID of the customer associated with the payment.
      * @var string
      */
    protected $customer_id;
    /**
      * $employee_id An optional ID of the employee associated with taking this payment.
      * @var string
      */
    protected $employee_id;
    /**
      * $refund_ids List of `refund_id`s identifying refunds for this payment.
      * @var string[]
      */
    protected $refund_ids;
    /**
      * $buyer_email_address The buyer's e-mail address
      * @var string
      */
    protected $buyer_email_address;
    /**
      * $billing_address The buyer's billing address
      * @var \SquareConnect\Model\Address
      */
    protected $billing_address;
    /**
      * $shipping_address The buyer's shipping address
      * @var \SquareConnect\Model\Address
      */
    protected $shipping_address;
    /**
      * $note An optional note to include when creating a payment
      * @var string
      */
    protected $note;
    /**
      * $statement_description_identifier Additional payment information that gets added on the customer's card statement as part of the statement description.  Note that the `statement_description_identifier` may get truncated on the statement description to fit the required information including the Square identifier (SQ *) and name of the merchant taking the payment.
      * @var string
      */
    protected $statement_description_identifier;
    /**
      * $receipt_number The payment's receipt number. The field will be missing if a payment is CANCELED
      * @var string
      */
    protected $receipt_number;
    /**
      * $receipt_url The URL for the payment's receipt. The field will only be populated for COMPLETED payments.
      * @var string
      */
    protected $receipt_url;

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
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["tip_money"])) {
              $this->tip_money = $data["tip_money"];
            } else {
              $this->tip_money = null;
            }
            if (isset($data["total_money"])) {
              $this->total_money = $data["total_money"];
            } else {
              $this->total_money = null;
            }
            if (isset($data["app_fee_money"])) {
              $this->app_fee_money = $data["app_fee_money"];
            } else {
              $this->app_fee_money = null;
            }
            if (isset($data["processing_fee"])) {
              $this->processing_fee = $data["processing_fee"];
            } else {
              $this->processing_fee = null;
            }
            if (isset($data["refunded_money"])) {
              $this->refunded_money = $data["refunded_money"];
            } else {
              $this->refunded_money = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["delay_duration"])) {
              $this->delay_duration = $data["delay_duration"];
            } else {
              $this->delay_duration = null;
            }
            if (isset($data["delay_action"])) {
              $this->delay_action = $data["delay_action"];
            } else {
              $this->delay_action = null;
            }
            if (isset($data["delayed_until"])) {
              $this->delayed_until = $data["delayed_until"];
            } else {
              $this->delayed_until = null;
            }
            if (isset($data["source_type"])) {
              $this->source_type = $data["source_type"];
            } else {
              $this->source_type = null;
            }
            if (isset($data["card_details"])) {
              $this->card_details = $data["card_details"];
            } else {
              $this->card_details = null;
            }
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["order_id"])) {
              $this->order_id = $data["order_id"];
            } else {
              $this->order_id = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["customer_id"])) {
              $this->customer_id = $data["customer_id"];
            } else {
              $this->customer_id = null;
            }
            if (isset($data["employee_id"])) {
              $this->employee_id = $data["employee_id"];
            } else {
              $this->employee_id = null;
            }
            if (isset($data["refund_ids"])) {
              $this->refund_ids = $data["refund_ids"];
            } else {
              $this->refund_ids = null;
            }
            if (isset($data["buyer_email_address"])) {
              $this->buyer_email_address = $data["buyer_email_address"];
            } else {
              $this->buyer_email_address = null;
            }
            if (isset($data["billing_address"])) {
              $this->billing_address = $data["billing_address"];
            } else {
              $this->billing_address = null;
            }
            if (isset($data["shipping_address"])) {
              $this->shipping_address = $data["shipping_address"];
            } else {
              $this->shipping_address = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["statement_description_identifier"])) {
              $this->statement_description_identifier = $data["statement_description_identifier"];
            } else {
              $this->statement_description_identifier = null;
            }
            if (isset($data["receipt_number"])) {
              $this->receipt_number = $data["receipt_number"];
            } else {
              $this->receipt_number = null;
            }
            if (isset($data["receipt_url"])) {
              $this->receipt_url = $data["receipt_url"];
            } else {
              $this->receipt_url = null;
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
     * @param string $id Unique ID for the payment.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param string $created_at Timestamp of when the payment was created, in RFC 3339 format.
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
     * @param string $updated_at Timestamp of when the payment was last updated, in RFC 3339 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of money processed for this payment, not including `tip_money`. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents. For more information, see [Working with monetary amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts).
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets tip_money
     * @return \SquareConnect\Model\Money
     */
    public function getTipMoney()
    {
        return $this->tip_money;
    }
  
    /**
     * Sets tip_money
     * @param \SquareConnect\Model\Money $tip_money The amount designated as a tip. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
     * @return $this
     */
    public function setTipMoney($tip_money)
    {
        $this->tip_money = $tip_money;
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
     * @param \SquareConnect\Model\Money $total_money The total money for the payment, including `amount_money` and `tip_money`. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets app_fee_money
     * @return \SquareConnect\Model\Money
     */
    public function getAppFeeMoney()
    {
        return $this->app_fee_money;
    }
  
    /**
     * Sets app_fee_money
     * @param \SquareConnect\Model\Money $app_fee_money The amount of money the developer is taking as a fee for facilitating the payment on behalf of the seller. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.  For more information, see [Take Payments and Collect Fees](https://developer.squareup.com/docs/payments-api/take-payments-and-collect-fees).  Cannot be more than 90% of the `total_money` value.
     * @return $this
     */
    public function setAppFeeMoney($app_fee_money)
    {
        $this->app_fee_money = $app_fee_money;
        return $this;
    }
    /**
     * Gets processing_fee
     * @return \SquareConnect\Model\ProcessingFee[]
     */
    public function getProcessingFee()
    {
        return $this->processing_fee;
    }
  
    /**
     * Sets processing_fee
     * @param \SquareConnect\Model\ProcessingFee[] $processing_fee Processing fees and fee adjustments assessed by Square on this payment.
     * @return $this
     */
    public function setProcessingFee($processing_fee)
    {
        $this->processing_fee = $processing_fee;
        return $this;
    }
    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\Money
     */
    public function getRefundedMoney()
    {
        return $this->refunded_money;
    }
  
    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\Money $refunded_money Total amount of the payment refunded to-date. Specified in the smallest denomination of the applicable currency. For example, US dollar amounts are specified in cents.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->refunded_money = $refunded_money;
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
     * @param string $status Indicates whether the payment is `APPROVED`, `COMPLETED`, `CANCELED`, or `FAILED`.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets delay_duration
     * @return string
     */
    public function getDelayDuration()
    {
        return $this->delay_duration;
    }
  
    /**
     * Sets delay_duration
     * @param string $delay_duration The duration of time after the payment's creation when Square automatically applies the `delay_action` to the payment. This automatic `delay_action` applies only to payments that don't reach a terminal state (COMPLETED, CANCELED, or FAILED) before the `delay_duration` time period.  This field is specified as a time duration, in RFC 3339 format.  Notes: This feature is only supported for card payments.  Default:  - Card Present payments: \"PT36H\" (36 hours) from the creation time. - Card Not Present payments: \"P7D\" (7 days) from the creation time.
     * @return $this
     */
    public function setDelayDuration($delay_duration)
    {
        $this->delay_duration = $delay_duration;
        return $this;
    }
    /**
     * Gets delay_action
     * @return string
     */
    public function getDelayAction()
    {
        return $this->delay_action;
    }
  
    /**
     * Sets delay_action
     * @param string $delay_action The action to be applied to the payment when the `delay_duration` has elapsed. This field is read only.  Current values include: `CANCEL`
     * @return $this
     */
    public function setDelayAction($delay_action)
    {
        $this->delay_action = $delay_action;
        return $this;
    }
    /**
     * Gets delayed_until
     * @return string
     */
    public function getDelayedUntil()
    {
        return $this->delayed_until;
    }
  
    /**
     * Sets delayed_until
     * @param string $delayed_until Read only timestamp of when the `delay_action` will automatically be applied, in RFC 3339 format.  Note that this field is calculated by summing the payment's `delay_duration` and `created_at` fields. The `created_at` field is generated by Square and may not exactly match the time on your local machine.
     * @return $this
     */
    public function setDelayedUntil($delayed_until)
    {
        $this->delayed_until = $delayed_until;
        return $this;
    }
    /**
     * Gets source_type
     * @return string
     */
    public function getSourceType()
    {
        return $this->source_type;
    }
  
    /**
     * Sets source_type
     * @param string $source_type The source type for this payment  Current values include: `CARD`.
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->source_type = $source_type;
        return $this;
    }
    /**
     * Gets card_details
     * @return \SquareConnect\Model\CardPaymentDetails
     */
    public function getCardDetails()
    {
        return $this->card_details;
    }
  
    /**
     * Sets card_details
     * @param \SquareConnect\Model\CardPaymentDetails $card_details Non-confidential details about the source. Only populated if the `source_type` is `CARD`.
     * @return $this
     */
    public function setCardDetails($card_details)
    {
        $this->card_details = $card_details;
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
     * @param string $location_id ID of the location associated with the payment.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id ID of the order associated with this payment.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
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
     * @param string $reference_id An optional ID that associates this payment with an entity in another system.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
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
     * @param string $customer_id The `Customer` ID of the customer associated with the payment.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
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
     * @param string $employee_id An optional ID of the employee associated with taking this payment.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }
    /**
     * Gets refund_ids
     * @return string[]
     */
    public function getRefundIds()
    {
        return $this->refund_ids;
    }
  
    /**
     * Sets refund_ids
     * @param string[] $refund_ids List of `refund_id`s identifying refunds for this payment.
     * @return $this
     */
    public function setRefundIds($refund_ids)
    {
        $this->refund_ids = $refund_ids;
        return $this;
    }
    /**
     * Gets buyer_email_address
     * @return string
     */
    public function getBuyerEmailAddress()
    {
        return $this->buyer_email_address;
    }
  
    /**
     * Sets buyer_email_address
     * @param string $buyer_email_address The buyer's e-mail address
     * @return $this
     */
    public function setBuyerEmailAddress($buyer_email_address)
    {
        $this->buyer_email_address = $buyer_email_address;
        return $this;
    }
    /**
     * Gets billing_address
     * @return \SquareConnect\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }
  
    /**
     * Sets billing_address
     * @param \SquareConnect\Model\Address $billing_address The buyer's billing address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;
        return $this;
    }
    /**
     * Gets shipping_address
     * @return \SquareConnect\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }
  
    /**
     * Sets shipping_address
     * @param \SquareConnect\Model\Address $shipping_address The buyer's shipping address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note An optional note to include when creating a payment
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets statement_description_identifier
     * @return string
     */
    public function getStatementDescriptionIdentifier()
    {
        return $this->statement_description_identifier;
    }
  
    /**
     * Sets statement_description_identifier
     * @param string $statement_description_identifier Additional payment information that gets added on the customer's card statement as part of the statement description.  Note that the `statement_description_identifier` may get truncated on the statement description to fit the required information including the Square identifier (SQ *) and name of the merchant taking the payment.
     * @return $this
     */
    public function setStatementDescriptionIdentifier($statement_description_identifier)
    {
        $this->statement_description_identifier = $statement_description_identifier;
        return $this;
    }
    /**
     * Gets receipt_number
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->receipt_number;
    }
  
    /**
     * Sets receipt_number
     * @param string $receipt_number The payment's receipt number. The field will be missing if a payment is CANCELED
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->receipt_number = $receipt_number;
        return $this;
    }
    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->receipt_url;
    }
  
    /**
     * Sets receipt_url
     * @param string $receipt_url The URL for the payment's receipt. The field will only be populated for COMPLETED payments.
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        $this->receipt_url = $receipt_url;
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
