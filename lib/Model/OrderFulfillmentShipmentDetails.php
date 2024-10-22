<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderFulfillmentShipmentDetails Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class OrderFulfillmentShipmentDetails implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'recipient' => '\SquareConnect\Model\OrderFulfillmentRecipient',
        'carrier' => 'string',
        'shipping_note' => 'string',
        'shipping_type' => 'string',
        'tracking_number' => 'string',
        'tracking_url' => 'string',
        'placed_at' => 'string',
        'in_progress_at' => 'string',
        'packaged_at' => 'string',
        'expected_shipped_at' => 'string',
        'shipped_at' => 'string',
        'canceled_at' => 'string',
        'cancel_reason' => 'string',
        'failed_at' => 'string',
        'failure_reason' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'recipient' => 'recipient',
        'carrier' => 'carrier',
        'shipping_note' => 'shipping_note',
        'shipping_type' => 'shipping_type',
        'tracking_number' => 'tracking_number',
        'tracking_url' => 'tracking_url',
        'placed_at' => 'placed_at',
        'in_progress_at' => 'in_progress_at',
        'packaged_at' => 'packaged_at',
        'expected_shipped_at' => 'expected_shipped_at',
        'shipped_at' => 'shipped_at',
        'canceled_at' => 'canceled_at',
        'cancel_reason' => 'cancel_reason',
        'failed_at' => 'failed_at',
        'failure_reason' => 'failure_reason'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'recipient' => 'setRecipient',
        'carrier' => 'setCarrier',
        'shipping_note' => 'setShippingNote',
        'shipping_type' => 'setShippingType',
        'tracking_number' => 'setTrackingNumber',
        'tracking_url' => 'setTrackingUrl',
        'placed_at' => 'setPlacedAt',
        'in_progress_at' => 'setInProgressAt',
        'packaged_at' => 'setPackagedAt',
        'expected_shipped_at' => 'setExpectedShippedAt',
        'shipped_at' => 'setShippedAt',
        'canceled_at' => 'setCanceledAt',
        'cancel_reason' => 'setCancelReason',
        'failed_at' => 'setFailedAt',
        'failure_reason' => 'setFailureReason'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'recipient' => 'getRecipient',
        'carrier' => 'getCarrier',
        'shipping_note' => 'getShippingNote',
        'shipping_type' => 'getShippingType',
        'tracking_number' => 'getTrackingNumber',
        'tracking_url' => 'getTrackingUrl',
        'placed_at' => 'getPlacedAt',
        'in_progress_at' => 'getInProgressAt',
        'packaged_at' => 'getPackagedAt',
        'expected_shipped_at' => 'getExpectedShippedAt',
        'shipped_at' => 'getShippedAt',
        'canceled_at' => 'getCanceledAt',
        'cancel_reason' => 'getCancelReason',
        'failed_at' => 'getFailedAt',
        'failure_reason' => 'getFailureReason'
    );
  
    /**
      * $recipient Information on the person meant to receive this shipment fulfillment.
      * @var \SquareConnect\Model\OrderFulfillmentRecipient
      */
    protected $recipient;
    /**
      * $carrier The shipping carrier being used to ship this fulfillment e.g. UPS, FedEx, USPS, etc.
      * @var string
      */
    protected $carrier;
    /**
      * $shipping_note A note with additional information for the shipping carrier.
      * @var string
      */
    protected $shipping_note;
    /**
      * $shipping_type A description of the type of shipping product purchased from the carrier. e.g. First Class, Priority, Express
      * @var string
      */
    protected $shipping_type;
    /**
      * $tracking_number The reference number provided by the carrier to track the shipment's progress.
      * @var string
      */
    protected $tracking_number;
    /**
      * $tracking_url A link to the tracking webpage on the carrier's website.
      * @var string
      */
    protected $tracking_url;
    /**
      * $placed_at The [timestamp](#workingwithdates) indicating when the shipment was requested. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $placed_at;
    /**
      * $in_progress_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `RESERVED` state. Indicates that preparation of this shipment has begun. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $in_progress_at;
    /**
      * $packaged_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `PREPARED` state. Indicates that the fulfillment is packaged. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $packaged_at;
    /**
      * $expected_shipped_at The [timestamp](#workingwithdates) indicating when the shipment is expected to be delivered to the shipping carrier. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $expected_shipped_at;
    /**
      * $shipped_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `COMPLETED`state. Indicates that the fulfillment has been given to the shipping carrier. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $shipped_at;
    /**
      * $canceled_at The [timestamp](#workingwithdates) indicating the shipment was canceled. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $canceled_at;
    /**
      * $cancel_reason A description of why the shipment was canceled.
      * @var string
      */
    protected $cancel_reason;
    /**
      * $failed_at The [timestamp](#workingwithdates) indicating when the shipment failed to be completed. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $failed_at;
    /**
      * $failure_reason A description of why the shipment failed to be completed.
      * @var string
      */
    protected $failure_reason;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["recipient"])) {
              $this->recipient = $data["recipient"];
            } else {
              $this->recipient = null;
            }
            if (isset($data["carrier"])) {
              $this->carrier = $data["carrier"];
            } else {
              $this->carrier = null;
            }
            if (isset($data["shipping_note"])) {
              $this->shipping_note = $data["shipping_note"];
            } else {
              $this->shipping_note = null;
            }
            if (isset($data["shipping_type"])) {
              $this->shipping_type = $data["shipping_type"];
            } else {
              $this->shipping_type = null;
            }
            if (isset($data["tracking_number"])) {
              $this->tracking_number = $data["tracking_number"];
            } else {
              $this->tracking_number = null;
            }
            if (isset($data["tracking_url"])) {
              $this->tracking_url = $data["tracking_url"];
            } else {
              $this->tracking_url = null;
            }
            if (isset($data["placed_at"])) {
              $this->placed_at = $data["placed_at"];
            } else {
              $this->placed_at = null;
            }
            if (isset($data["in_progress_at"])) {
              $this->in_progress_at = $data["in_progress_at"];
            } else {
              $this->in_progress_at = null;
            }
            if (isset($data["packaged_at"])) {
              $this->packaged_at = $data["packaged_at"];
            } else {
              $this->packaged_at = null;
            }
            if (isset($data["expected_shipped_at"])) {
              $this->expected_shipped_at = $data["expected_shipped_at"];
            } else {
              $this->expected_shipped_at = null;
            }
            if (isset($data["shipped_at"])) {
              $this->shipped_at = $data["shipped_at"];
            } else {
              $this->shipped_at = null;
            }
            if (isset($data["canceled_at"])) {
              $this->canceled_at = $data["canceled_at"];
            } else {
              $this->canceled_at = null;
            }
            if (isset($data["cancel_reason"])) {
              $this->cancel_reason = $data["cancel_reason"];
            } else {
              $this->cancel_reason = null;
            }
            if (isset($data["failed_at"])) {
              $this->failed_at = $data["failed_at"];
            } else {
              $this->failed_at = null;
            }
            if (isset($data["failure_reason"])) {
              $this->failure_reason = $data["failure_reason"];
            } else {
              $this->failure_reason = null;
            }
        }
    }
    /**
     * Gets recipient
     * @return \SquareConnect\Model\OrderFulfillmentRecipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
  
    /**
     * Sets recipient
     * @param \SquareConnect\Model\OrderFulfillmentRecipient $recipient Information on the person meant to receive this shipment fulfillment.
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Gets carrier
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
  
    /**
     * Sets carrier
     * @param string $carrier The shipping carrier being used to ship this fulfillment e.g. UPS, FedEx, USPS, etc.
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }
    /**
     * Gets shipping_note
     * @return string
     */
    public function getShippingNote()
    {
        return $this->shipping_note;
    }
  
    /**
     * Sets shipping_note
     * @param string $shipping_note A note with additional information for the shipping carrier.
     * @return $this
     */
    public function setShippingNote($shipping_note)
    {
        $this->shipping_note = $shipping_note;
        return $this;
    }
    /**
     * Gets shipping_type
     * @return string
     */
    public function getShippingType()
    {
        return $this->shipping_type;
    }
  
    /**
     * Sets shipping_type
     * @param string $shipping_type A description of the type of shipping product purchased from the carrier. e.g. First Class, Priority, Express
     * @return $this
     */
    public function setShippingType($shipping_type)
    {
        $this->shipping_type = $shipping_type;
        return $this;
    }
    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }
  
    /**
     * Sets tracking_number
     * @param string $tracking_number The reference number provided by the carrier to track the shipment's progress.
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;
        return $this;
    }
    /**
     * Gets tracking_url
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }
  
    /**
     * Sets tracking_url
     * @param string $tracking_url A link to the tracking webpage on the carrier's website.
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->tracking_url = $tracking_url;
        return $this;
    }
    /**
     * Gets placed_at
     * @return string
     */
    public function getPlacedAt()
    {
        return $this->placed_at;
    }
  
    /**
     * Sets placed_at
     * @param string $placed_at The [timestamp](#workingwithdates) indicating when the shipment was requested. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setPlacedAt($placed_at)
    {
        $this->placed_at = $placed_at;
        return $this;
    }
    /**
     * Gets in_progress_at
     * @return string
     */
    public function getInProgressAt()
    {
        return $this->in_progress_at;
    }
  
    /**
     * Sets in_progress_at
     * @param string $in_progress_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `RESERVED` state. Indicates that preparation of this shipment has begun. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setInProgressAt($in_progress_at)
    {
        $this->in_progress_at = $in_progress_at;
        return $this;
    }
    /**
     * Gets packaged_at
     * @return string
     */
    public function getPackagedAt()
    {
        return $this->packaged_at;
    }
  
    /**
     * Sets packaged_at
     * @param string $packaged_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `PREPARED` state. Indicates that the fulfillment is packaged. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setPackagedAt($packaged_at)
    {
        $this->packaged_at = $packaged_at;
        return $this;
    }
    /**
     * Gets expected_shipped_at
     * @return string
     */
    public function getExpectedShippedAt()
    {
        return $this->expected_shipped_at;
    }
  
    /**
     * Sets expected_shipped_at
     * @param string $expected_shipped_at The [timestamp](#workingwithdates) indicating when the shipment is expected to be delivered to the shipping carrier. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setExpectedShippedAt($expected_shipped_at)
    {
        $this->expected_shipped_at = $expected_shipped_at;
        return $this;
    }
    /**
     * Gets shipped_at
     * @return string
     */
    public function getShippedAt()
    {
        return $this->shipped_at;
    }
  
    /**
     * Sets shipped_at
     * @param string $shipped_at The [timestamp](#workingwithdates) indicating when this fulfillment was moved to the `COMPLETED`state. Indicates that the fulfillment has been given to the shipping carrier. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setShippedAt($shipped_at)
    {
        $this->shipped_at = $shipped_at;
        return $this;
    }
    /**
     * Gets canceled_at
     * @return string
     */
    public function getCanceledAt()
    {
        return $this->canceled_at;
    }
  
    /**
     * Sets canceled_at
     * @param string $canceled_at The [timestamp](#workingwithdates) indicating the shipment was canceled. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->canceled_at = $canceled_at;
        return $this;
    }
    /**
     * Gets cancel_reason
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }
  
    /**
     * Sets cancel_reason
     * @param string $cancel_reason A description of why the shipment was canceled.
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;
        return $this;
    }
    /**
     * Gets failed_at
     * @return string
     */
    public function getFailedAt()
    {
        return $this->failed_at;
    }
  
    /**
     * Sets failed_at
     * @param string $failed_at The [timestamp](#workingwithdates) indicating when the shipment failed to be completed. Must be in RFC3339 timestamp format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setFailedAt($failed_at)
    {
        $this->failed_at = $failed_at;
        return $this;
    }
    /**
     * Gets failure_reason
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }
  
    /**
     * Sets failure_reason
     * @param string $failure_reason A description of why the shipment failed to be completed.
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->failure_reason = $failure_reason;
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
