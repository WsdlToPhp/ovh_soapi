<?php
/**
 * File for class OvhStructMailingListAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMailingListAdd originally named mailingListAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMailingListAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The ml
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ml;
	/**
	 * The owner
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $owner;
	/**
	 * The lang
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $lang;
	/**
	 * The replyto
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $replyto;
	/**
	 * The message_moderation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $message_moderation;
	/**
	 * The users_post_only
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $users_post_only;
	/**
	 * The subscription_moderation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $subscription_moderation;
	/**
	 * Constructor method for mailingListAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_ml
	 * @param string $_owner
	 * @param string $_lang
	 * @param string $_replyto
	 * @param boolean $_message_moderation
	 * @param boolean $_users_post_only
	 * @param boolean $_subscription_moderation
	 * @return OvhStructMailingListAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_ml = NULL,$_owner = NULL,$_lang = NULL,$_replyto = NULL,$_message_moderation = NULL,$_users_post_only = NULL,$_subscription_moderation = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'ml'=>$_ml,'owner'=>$_owner,'lang'=>$_lang,'replyto'=>$_replyto,'message_moderation'=>$_message_moderation,'users_post_only'=>$_users_post_only,'subscription_moderation'=>$_subscription_moderation));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMailingListAdd
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