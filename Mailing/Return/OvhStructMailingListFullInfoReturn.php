<?php
/**
 * File for class OvhStructMailingListFullInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMailingListFullInfoReturn originally named mailingListFullInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMailingListFullInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The ml
	 * @var string
	 */
	public $ml;
	/**
	 * The owner
	 * @var string
	 */
	public $owner;
	/**
	 * The nbSubscribers
	 * @var int
	 */
	public $nbSubscribers;
	/**
	 * The message_moderation
	 * @var boolean
	 */
	public $message_moderation;
	/**
	 * The users_post_only
	 * @var boolean
	 */
	public $users_post_only;
	/**
	 * The subscription_moderation
	 * @var boolean
	 */
	public $subscription_moderation;
	/**
	 * The replyto
	 * @var string
	 */
	public $replyto;
	/**
	 * The lang
	 * @var string
	 */
	public $lang;
	/**
	 * The moderators
	 * @var OvhStructMyArrayOfStringType
	 */
	public $moderators;
	/**
	 * The subscribers
	 * @var OvhStructMyArrayOfStringType
	 */
	public $subscribers;
	/**
	 * Constructor method for mailingListFullInfoReturn
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_ml
	 * @param string $_owner
	 * @param int $_nbSubscribers
	 * @param boolean $_message_moderation
	 * @param boolean $_users_post_only
	 * @param boolean $_subscription_moderation
	 * @param string $_replyto
	 * @param string $_lang
	 * @param OvhStructMyArrayOfStringType $_moderators
	 * @param OvhStructMyArrayOfStringType $_subscribers
	 * @return OvhStructMailingListFullInfoReturn
	 */
	public function __construct($_domain = NULL,$_ml = NULL,$_owner = NULL,$_nbSubscribers = NULL,$_message_moderation = NULL,$_users_post_only = NULL,$_subscription_moderation = NULL,$_replyto = NULL,$_lang = NULL,$_moderators = NULL,$_subscribers = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'ml'=>$_ml,'owner'=>$_owner,'nbSubscribers'=>$_nbSubscribers,'message_moderation'=>$_message_moderation,'users_post_only'=>$_users_post_only,'subscription_moderation'=>$_subscription_moderation,'replyto'=>$_replyto,'lang'=>$_lang,'moderators'=>($_moderators instanceof OvhStructMyArrayOfStringType)?$_moderators:new OvhStructMyArrayOfStringType($_moderators),'subscribers'=>($_subscribers instanceof OvhStructMyArrayOfStringType)?$_subscribers:new OvhStructMyArrayOfStringType($_subscribers)));
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get ml value
	 * @return string|null
	 */
	public function getMl()
	{
		return $this->ml;
	}
	/**
	 * Set ml value
	 * @param string $_ml the ml
	 * @return string
	 */
	public function setMl($_ml)
	{
		return ($this->ml = $_ml);
	}
	/**
	 * Get owner value
	 * @return string|null
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set owner value
	 * @param string $_owner the owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get nbSubscribers value
	 * @return int|null
	 */
	public function getNbSubscribers()
	{
		return $this->nbSubscribers;
	}
	/**
	 * Set nbSubscribers value
	 * @param int $_nbSubscribers the nbSubscribers
	 * @return int
	 */
	public function setNbSubscribers($_nbSubscribers)
	{
		return ($this->nbSubscribers = $_nbSubscribers);
	}
	/**
	 * Get message_moderation value
	 * @return boolean|null
	 */
	public function getMessage_moderation()
	{
		return $this->message_moderation;
	}
	/**
	 * Set message_moderation value
	 * @param boolean $_message_moderation the message_moderation
	 * @return boolean
	 */
	public function setMessage_moderation($_message_moderation)
	{
		return ($this->message_moderation = $_message_moderation);
	}
	/**
	 * Get users_post_only value
	 * @return boolean|null
	 */
	public function getUsers_post_only()
	{
		return $this->users_post_only;
	}
	/**
	 * Set users_post_only value
	 * @param boolean $_users_post_only the users_post_only
	 * @return boolean
	 */
	public function setUsers_post_only($_users_post_only)
	{
		return ($this->users_post_only = $_users_post_only);
	}
	/**
	 * Get subscription_moderation value
	 * @return boolean|null
	 */
	public function getSubscription_moderation()
	{
		return $this->subscription_moderation;
	}
	/**
	 * Set subscription_moderation value
	 * @param boolean $_subscription_moderation the subscription_moderation
	 * @return boolean
	 */
	public function setSubscription_moderation($_subscription_moderation)
	{
		return ($this->subscription_moderation = $_subscription_moderation);
	}
	/**
	 * Get replyto value
	 * @return string|null
	 */
	public function getReplyto()
	{
		return $this->replyto;
	}
	/**
	 * Set replyto value
	 * @param string $_replyto the replyto
	 * @return string
	 */
	public function setReplyto($_replyto)
	{
		return ($this->replyto = $_replyto);
	}
	/**
	 * Get lang value
	 * @return string|null
	 */
	public function getLang()
	{
		return $this->lang;
	}
	/**
	 * Set lang value
	 * @param string $_lang the lang
	 * @return string
	 */
	public function setLang($_lang)
	{
		return ($this->lang = $_lang);
	}
	/**
	 * Get moderators value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getModerators()
	{
		return $this->moderators;
	}
	/**
	 * Set moderators value
	 * @param OvhStructMyArrayOfStringType $_moderators the moderators
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setModerators($_moderators)
	{
		return ($this->moderators = $_moderators);
	}
	/**
	 * Get subscribers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getSubscribers()
	{
		return $this->subscribers;
	}
	/**
	 * Set subscribers value
	 * @param OvhStructMyArrayOfStringType $_subscribers the subscribers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setSubscribers($_subscribers)
	{
		return ($this->subscribers = $_subscribers);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMailingListFullInfoReturn
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>