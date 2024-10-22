<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * LoyaltyProgramAccrualRule Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class LoyaltyProgramAccrualRule implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'accrual_type' => 'string',
        'points' => 'int',
        'visit_minimum_amount_money' => '\SquareConnect\Model\Money',
        'spend_amount_money' => '\SquareConnect\Model\Money',
        'catalog_object_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'accrual_type' => 'accrual_type',
        'points' => 'points',
        'visit_minimum_amount_money' => 'visit_minimum_amount_money',
        'spend_amount_money' => 'spend_amount_money',
        'catalog_object_id' => 'catalog_object_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'accrual_type' => 'setAccrualType',
        'points' => 'setPoints',
        'visit_minimum_amount_money' => 'setVisitMinimumAmountMoney',
        'spend_amount_money' => 'setSpendAmountMoney',
        'catalog_object_id' => 'setCatalogObjectId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'accrual_type' => 'getAccrualType',
        'points' => 'getPoints',
        'visit_minimum_amount_money' => 'getVisitMinimumAmountMoney',
        'spend_amount_money' => 'getSpendAmountMoney',
        'catalog_object_id' => 'getCatalogObjectId'
    );
  
    /**
      * $accrual_type The type of the accrual rule that defines how buyers can earn points. See [LoyaltyProgramAccrualRuleType](#type-loyaltyprogramaccrualruletype) for possible values
      * @var string
      */
    protected $accrual_type;
    /**
      * $points The number of points that  buyers earn based on the `accrual_type`.
      * @var int
      */
    protected $points;
    /**
      * $visit_minimum_amount_money When the accrual rule is visit-based (`accrual_type` is `VISIT`), this field indicates the minimum purchase required during the visit to  quality for the reward.
      * @var \SquareConnect\Model\Money
      */
    protected $visit_minimum_amount_money;
    /**
      * $spend_amount_money When the accrual rule is spend-based (`accrual_type` is `SPEND`), this field indicates the amount that a buyer must spend  to earn the points. For example, suppose the accrual rule is \"earn 1 point for every $10 you spend\".  Then, buyer earns a point for every $10 they spend. If  buyer spends $105, the buyer earns 10 points.
      * @var \SquareConnect\Model\Money
      */
    protected $spend_amount_money;
    /**
      * $catalog_object_id The ID of the `catalog object` to purchase to earn the number of points defined by the rule. This is either an item variation or a category, depending on the type. This is defined on `ITEM_VARIATION` rules and `CATEGORY` rules.
      * @var string
      */
    protected $catalog_object_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["accrual_type"])) {
              $this->accrual_type = $data["accrual_type"];
            } else {
              $this->accrual_type = null;
            }
            if (isset($data["points"])) {
              $this->points = $data["points"];
            } else {
              $this->points = null;
            }
            if (isset($data["visit_minimum_amount_money"])) {
              $this->visit_minimum_amount_money = $data["visit_minimum_amount_money"];
            } else {
              $this->visit_minimum_amount_money = null;
            }
            if (isset($data["spend_amount_money"])) {
              $this->spend_amount_money = $data["spend_amount_money"];
            } else {
              $this->spend_amount_money = null;
            }
            if (isset($data["catalog_object_id"])) {
              $this->catalog_object_id = $data["catalog_object_id"];
            } else {
              $this->catalog_object_id = null;
            }
        }
    }
    /**
     * Gets accrual_type
     * @return string
     */
    public function getAccrualType()
    {
        return $this->accrual_type;
    }
  
    /**
     * Sets accrual_type
     * @param string $accrual_type The type of the accrual rule that defines how buyers can earn points. See [LoyaltyProgramAccrualRuleType](#type-loyaltyprogramaccrualruletype) for possible values
     * @return $this
     */
    public function setAccrualType($accrual_type)
    {
        $this->accrual_type = $accrual_type;
        return $this;
    }
    /**
     * Gets points
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }
  
    /**
     * Sets points
     * @param int $points The number of points that  buyers earn based on the `accrual_type`.
     * @return $this
     */
    public function setPoints($points)
    {
        $this->points = $points;
        return $this;
    }
    /**
     * Gets visit_minimum_amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getVisitMinimumAmountMoney()
    {
        return $this->visit_minimum_amount_money;
    }
  
    /**
     * Sets visit_minimum_amount_money
     * @param \SquareConnect\Model\Money $visit_minimum_amount_money When the accrual rule is visit-based (`accrual_type` is `VISIT`), this field indicates the minimum purchase required during the visit to  quality for the reward.
     * @return $this
     */
    public function setVisitMinimumAmountMoney($visit_minimum_amount_money)
    {
        $this->visit_minimum_amount_money = $visit_minimum_amount_money;
        return $this;
    }
    /**
     * Gets spend_amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getSpendAmountMoney()
    {
        return $this->spend_amount_money;
    }
  
    /**
     * Sets spend_amount_money
     * @param \SquareConnect\Model\Money $spend_amount_money When the accrual rule is spend-based (`accrual_type` is `SPEND`), this field indicates the amount that a buyer must spend  to earn the points. For example, suppose the accrual rule is \"earn 1 point for every $10 you spend\".  Then, buyer earns a point for every $10 they spend. If  buyer spends $105, the buyer earns 10 points.
     * @return $this
     */
    public function setSpendAmountMoney($spend_amount_money)
    {
        $this->spend_amount_money = $spend_amount_money;
        return $this;
    }
    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }
  
    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The ID of the `catalog object` to purchase to earn the number of points defined by the rule. This is either an item variation or a category, depending on the type. This is defined on `ITEM_VARIATION` rules and `CATEGORY` rules.
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
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
