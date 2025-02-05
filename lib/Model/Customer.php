<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Customer implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'cards' => '\SquareConnect\Model\Card[]',
        'given_name' => 'string',
        'family_name' => 'string',
        'nickname' => 'string',
        'company_name' => 'string',
        'email_address' => 'string',
        'address' => '\SquareConnect\Model\Address',
        'phone_number' => 'string',
        'birthday' => 'string',
        'reference_id' => 'string',
        'note' => 'string',
        'preferences' => '\SquareConnect\Model\CustomerPreferences',
        'groups' => '\SquareConnect\Model\CustomerGroupInfo[]',
        'creation_source' => 'string',
        'group_ids' => 'string[]',
        'segment_ids' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'cards' => 'cards',
        'given_name' => 'given_name',
        'family_name' => 'family_name',
        'nickname' => 'nickname',
        'company_name' => 'company_name',
        'email_address' => 'email_address',
        'address' => 'address',
        'phone_number' => 'phone_number',
        'birthday' => 'birthday',
        'reference_id' => 'reference_id',
        'note' => 'note',
        'preferences' => 'preferences',
        'groups' => 'groups',
        'creation_source' => 'creation_source',
        'group_ids' => 'group_ids',
        'segment_ids' => 'segment_ids'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'cards' => 'setCards',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'nickname' => 'setNickname',
        'company_name' => 'setCompanyName',
        'email_address' => 'setEmailAddress',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'birthday' => 'setBirthday',
        'reference_id' => 'setReferenceId',
        'note' => 'setNote',
        'preferences' => 'setPreferences',
        'groups' => 'setGroups',
        'creation_source' => 'setCreationSource',
        'group_ids' => 'setGroupIds',
        'segment_ids' => 'setSegmentIds'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'cards' => 'getCards',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'nickname' => 'getNickname',
        'company_name' => 'getCompanyName',
        'email_address' => 'getEmailAddress',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'birthday' => 'getBirthday',
        'reference_id' => 'getReferenceId',
        'note' => 'getNote',
        'preferences' => 'getPreferences',
        'groups' => 'getGroups',
        'creation_source' => 'getCreationSource',
        'group_ids' => 'getGroupIds',
        'segment_ids' => 'getSegmentIds'
    );
  
    /**
      * $id A unique Square-assigned ID for the customer profile.
      * @var string
      */
    protected $id;
    /**
      * $created_at The timestamp when the customer profile was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at The timestamp when the customer profile was last updated, in RFC 3339 format.
      * @var string
      */
    protected $updated_at;
    /**
      * $cards Payment details of cards stored on file for the customer profile.
      * @var \SquareConnect\Model\Card[]
      */
    protected $cards;
    /**
      * $given_name The given (i.e., first) name associated with the customer profile.
      * @var string
      */
    protected $given_name;
    /**
      * $family_name The family (i.e., last) name associated with the customer profile.
      * @var string
      */
    protected $family_name;
    /**
      * $nickname A nickname for the customer profile.
      * @var string
      */
    protected $nickname;
    /**
      * $company_name A business name associated with the customer profile.
      * @var string
      */
    protected $company_name;
    /**
      * $email_address The email address associated with the customer profile.
      * @var string
      */
    protected $email_address;
    /**
      * $address The physical address associated with the customer profile.
      * @var \SquareConnect\Model\Address
      */
    protected $address;
    /**
      * $phone_number The 11-digit phone number associated with the customer profile.
      * @var string
      */
    protected $phone_number;
    /**
      * $birthday The birthday associated with the customer profile, in RFC-3339 format. Year is optional, timezone and times are not allowed. For example: `0000-09-01T00:00:00-00:00` indicates a birthday on September 1st. `1998-09-01T00:00:00-00:00` indications a birthday on September 1st __1998__.
      * @var string
      */
    protected $birthday;
    /**
      * $reference_id An optional, second ID used to associate the customer profile with an entity in another system.
      * @var string
      */
    protected $reference_id;
    /**
      * $note A custom note associated with the customer profile.
      * @var string
      */
    protected $note;
    /**
      * $preferences Represents general customer preferences.
      * @var \SquareConnect\Model\CustomerPreferences
      */
    protected $preferences;
    /**
      * $groups The customer groups and segments the customer belongs to. This deprecated field has been replaced with  the dedicated `group_ids` for customer groups and the dedicated `segment_ids` field for customer segments. You can retrieve information about a given customer group and segment respectively using the Customer Groups API and Customer Segments API.
      * @var \SquareConnect\Model\CustomerGroupInfo[]
      */
    protected $groups;
    /**
      * $creation_source A creation source represents the method used to create the customer profile. See [CustomerCreationSource](#type-customercreationsource) for possible values
      * @var string
      */
    protected $creation_source;
    /**
      * $group_ids The IDs of customer groups the customer belongs to.
      * @var string[]
      */
    protected $group_ids;
    /**
      * $segment_ids The IDs of segments the customer belongs to.
      * @var string[]
      */
    protected $segment_ids;

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
            if (isset($data["cards"])) {
              $this->cards = $data["cards"];
            } else {
              $this->cards = null;
            }
            if (isset($data["given_name"])) {
              $this->given_name = $data["given_name"];
            } else {
              $this->given_name = null;
            }
            if (isset($data["family_name"])) {
              $this->family_name = $data["family_name"];
            } else {
              $this->family_name = null;
            }
            if (isset($data["nickname"])) {
              $this->nickname = $data["nickname"];
            } else {
              $this->nickname = null;
            }
            if (isset($data["company_name"])) {
              $this->company_name = $data["company_name"];
            } else {
              $this->company_name = null;
            }
            if (isset($data["email_address"])) {
              $this->email_address = $data["email_address"];
            } else {
              $this->email_address = null;
            }
            if (isset($data["address"])) {
              $this->address = $data["address"];
            } else {
              $this->address = null;
            }
            if (isset($data["phone_number"])) {
              $this->phone_number = $data["phone_number"];
            } else {
              $this->phone_number = null;
            }
            if (isset($data["birthday"])) {
              $this->birthday = $data["birthday"];
            } else {
              $this->birthday = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["preferences"])) {
              $this->preferences = $data["preferences"];
            } else {
              $this->preferences = null;
            }
            if (isset($data["groups"])) {
              $this->groups = $data["groups"];
            } else {
              $this->groups = null;
            }
            if (isset($data["creation_source"])) {
              $this->creation_source = $data["creation_source"];
            } else {
              $this->creation_source = null;
            }
            if (isset($data["group_ids"])) {
              $this->group_ids = $data["group_ids"];
            } else {
              $this->group_ids = null;
            }
            if (isset($data["segment_ids"])) {
              $this->segment_ids = $data["segment_ids"];
            } else {
              $this->segment_ids = null;
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
     * @param string $id A unique Square-assigned ID for the customer profile.
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
     * @param string $created_at The timestamp when the customer profile was created, in RFC 3339 format.
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
     * @param string $updated_at The timestamp when the customer profile was last updated, in RFC 3339 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets cards
     * @return \SquareConnect\Model\Card[]
     */
    public function getCards()
    {
        return $this->cards;
    }
  
    /**
     * Sets cards
     * @param \SquareConnect\Model\Card[] $cards Payment details of cards stored on file for the customer profile.
     * @return $this
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
        return $this;
    }
    /**
     * Gets given_name
     * @return string
     */
    public function getGivenName()
    {
        return $this->given_name;
    }
  
    /**
     * Sets given_name
     * @param string $given_name The given (i.e., first) name associated with the customer profile.
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->given_name = $given_name;
        return $this;
    }
    /**
     * Gets family_name
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }
  
    /**
     * Sets family_name
     * @param string $family_name The family (i.e., last) name associated with the customer profile.
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->family_name = $family_name;
        return $this;
    }
    /**
     * Gets nickname
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }
  
    /**
     * Sets nickname
     * @param string $nickname A nickname for the customer profile.
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }
  
    /**
     * Sets company_name
     * @param string $company_name A business name associated with the customer profile.
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }
  
    /**
     * Sets email_address
     * @param string $email_address The email address associated with the customer profile.
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
        return $this;
    }
    /**
     * Gets address
     * @return \SquareConnect\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param \SquareConnect\Model\Address $address The physical address associated with the customer profile.
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
  
    /**
     * Sets phone_number
     * @param string $phone_number The 11-digit phone number associated with the customer profile.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
        return $this;
    }
    /**
     * Gets birthday
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
  
    /**
     * Sets birthday
     * @param string $birthday The birthday associated with the customer profile, in RFC-3339 format. Year is optional, timezone and times are not allowed. For example: `0000-09-01T00:00:00-00:00` indicates a birthday on September 1st. `1998-09-01T00:00:00-00:00` indications a birthday on September 1st __1998__.
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
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
     * @param string $reference_id An optional, second ID used to associate the customer profile with an entity in another system.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
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
     * @param string $note A custom note associated with the customer profile.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets preferences
     * @return \SquareConnect\Model\CustomerPreferences
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
  
    /**
     * Sets preferences
     * @param \SquareConnect\Model\CustomerPreferences $preferences Represents general customer preferences.
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * Gets groups
     * @return \SquareConnect\Model\CustomerGroupInfo[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
  
    /**
     * Sets groups
     * @param \SquareConnect\Model\CustomerGroupInfo[] $groups The customer groups and segments the customer belongs to. This deprecated field has been replaced with  the dedicated `group_ids` for customer groups and the dedicated `segment_ids` field for customer segments. You can retrieve information about a given customer group and segment respectively using the Customer Groups API and Customer Segments API.
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * Gets creation_source
     * @return string
     */
    public function getCreationSource()
    {
        return $this->creation_source;
    }
  
    /**
     * Sets creation_source
     * @param string $creation_source A creation source represents the method used to create the customer profile. See [CustomerCreationSource](#type-customercreationsource) for possible values
     * @return $this
     */
    public function setCreationSource($creation_source)
    {
        $this->creation_source = $creation_source;
        return $this;
    }
    /**
     * Gets group_ids
     * @return string[]
     */
    public function getGroupIds()
    {
        return $this->group_ids;
    }
  
    /**
     * Sets group_ids
     * @param string[] $group_ids The IDs of customer groups the customer belongs to.
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->group_ids = $group_ids;
        return $this;
    }
    /**
     * Gets segment_ids
     * @return string[]
     */
    public function getSegmentIds()
    {
        return $this->segment_ids;
    }
  
    /**
     * Sets segment_ids
     * @param string[] $segment_ids The IDs of segments the customer belongs to.
     * @return $this
     */
    public function setSegmentIds($segment_ids)
    {
        $this->segment_ids = $segment_ids;
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
