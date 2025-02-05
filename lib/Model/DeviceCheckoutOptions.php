<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * DeviceCheckoutOptions Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class DeviceCheckoutOptions implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'device_id' => 'string',
        'skip_receipt_screen' => 'bool',
        'tip_settings' => '\SquareConnect\Model\TipSettings'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'device_id' => 'device_id',
        'skip_receipt_screen' => 'skip_receipt_screen',
        'tip_settings' => 'tip_settings'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'device_id' => 'setDeviceId',
        'skip_receipt_screen' => 'setSkipReceiptScreen',
        'tip_settings' => 'setTipSettings'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'device_id' => 'getDeviceId',
        'skip_receipt_screen' => 'getSkipReceiptScreen',
        'tip_settings' => 'getTipSettings'
    );
  
    /**
      * $device_id The unique Id of the device intended for this `TerminalCheckout`. The Id can be retrieved from /v2/devices api.
      * @var string
      */
    protected $device_id;
    /**
      * $skip_receipt_screen Instruct the device to skip the receipt screen. Defaults to false.
      * @var bool
      */
    protected $skip_receipt_screen;
    /**
      * $tip_settings Tip specific settings
      * @var \SquareConnect\Model\TipSettings
      */
    protected $tip_settings;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["device_id"])) {
              $this->device_id = $data["device_id"];
            } else {
              $this->device_id = null;
            }
            if (isset($data["skip_receipt_screen"])) {
              $this->skip_receipt_screen = $data["skip_receipt_screen"];
            } else {
              $this->skip_receipt_screen = null;
            }
            if (isset($data["tip_settings"])) {
              $this->tip_settings = $data["tip_settings"];
            } else {
              $this->tip_settings = null;
            }
        }
    }
    /**
     * Gets device_id
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }
  
    /**
     * Sets device_id
     * @param string $device_id The unique Id of the device intended for this `TerminalCheckout`. The Id can be retrieved from /v2/devices api.
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->device_id = $device_id;
        return $this;
    }
    /**
     * Gets skip_receipt_screen
     * @return bool
     */
    public function getSkipReceiptScreen()
    {
        return $this->skip_receipt_screen;
    }
  
    /**
     * Sets skip_receipt_screen
     * @param bool $skip_receipt_screen Instruct the device to skip the receipt screen. Defaults to false.
     * @return $this
     */
    public function setSkipReceiptScreen($skip_receipt_screen)
    {
        $this->skip_receipt_screen = $skip_receipt_screen;
        return $this;
    }
    /**
     * Gets tip_settings
     * @return \SquareConnect\Model\TipSettings
     */
    public function getTipSettings()
    {
        return $this->tip_settings;
    }
  
    /**
     * Sets tip_settings
     * @param \SquareConnect\Model\TipSettings $tip_settings Tip specific settings
     * @return $this
     */
    public function setTipSettings($tip_settings)
    {
        $this->tip_settings = $tip_settings;
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
