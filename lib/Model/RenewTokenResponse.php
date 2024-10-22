<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * @deprecated
 * RenewTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class RenewTokenResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'access_token' => 'string',
        'token_type' => 'string',
        'expires_at' => 'string',
        'merchant_id' => 'string',
        'subscription_id' => 'string',
        'plan_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'access_token' => 'access_token',
        'token_type' => 'token_type',
        'expires_at' => 'expires_at',
        'merchant_id' => 'merchant_id',
        'subscription_id' => 'subscription_id',
        'plan_id' => 'plan_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'access_token' => 'setAccessToken',
        'token_type' => 'setTokenType',
        'expires_at' => 'setExpiresAt',
        'merchant_id' => 'setMerchantId',
        'subscription_id' => 'setSubscriptionId',
        'plan_id' => 'setPlanId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'access_token' => 'getAccessToken',
        'token_type' => 'getTokenType',
        'expires_at' => 'getExpiresAt',
        'merchant_id' => 'getMerchantId',
        'subscription_id' => 'getSubscriptionId',
        'plan_id' => 'getPlanId'
    );
  
    /**
      * $access_token The renewed access token. This value might be different from the `access_token` you provided in your request. You provide this token in a header with every request to Connect API endpoints. See [Request and response headers](https://developer.squareup.com/docs/api/connect/v2/#requestandresponseheaders) for the format of this header.
      * @var string
      */
    protected $access_token;
    /**
      * $token_type This value is always _bearer_.
      * @var string
      */
    protected $token_type;
    /**
      * $expires_at The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format.
      * @var string
      */
    protected $expires_at;
    /**
      * $merchant_id The ID of the authorizing merchant's business.
      * @var string
      */
    protected $merchant_id;
    /**
      * $subscription_id __LEGACY FIELD__. The ID of the merchant subscription associated with the authorization. Only present if the merchant signed up for a subscription during authorization..
      * @var string
      */
    protected $subscription_id;
    /**
      * $plan_id __LEGACY FIELD__. The ID of the subscription plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
      * @var string
      */
    protected $plan_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["access_token"])) {
              $this->access_token = $data["access_token"];
            } else {
              $this->access_token = null;
            }
            if (isset($data["token_type"])) {
              $this->token_type = $data["token_type"];
            } else {
              $this->token_type = null;
            }
            if (isset($data["expires_at"])) {
              $this->expires_at = $data["expires_at"];
            } else {
              $this->expires_at = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
            if (isset($data["subscription_id"])) {
              $this->subscription_id = $data["subscription_id"];
            } else {
              $this->subscription_id = null;
            }
            if (isset($data["plan_id"])) {
              $this->plan_id = $data["plan_id"];
            } else {
              $this->plan_id = null;
            }
        }
    }
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token The renewed access token. This value might be different from the `access_token` you provided in your request. You provide this token in a header with every request to Connect API endpoints. See [Request and response headers](https://developer.squareup.com/docs/api/connect/v2/#requestandresponseheaders) for the format of this header.
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }
    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }
  
    /**
     * Sets token_type
     * @param string $token_type This value is always _bearer_.
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->token_type = $token_type;
        return $this;
    }
    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }
  
    /**
     * Sets expires_at
     * @param string $expires_at The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format.
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->expires_at = $expires_at;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id The ID of the authorizing merchant's business.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Gets subscription_id
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }
  
    /**
     * Sets subscription_id
     * @param string $subscription_id __LEGACY FIELD__. The ID of the merchant subscription associated with the authorization. Only present if the merchant signed up for a subscription during authorization..
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->subscription_id = $subscription_id;
        return $this;
    }
    /**
     * Gets plan_id
     * @return string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }
  
    /**
     * Sets plan_id
     * @param string $plan_id __LEGACY FIELD__. The ID of the subscription plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->plan_id = $plan_id;
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
