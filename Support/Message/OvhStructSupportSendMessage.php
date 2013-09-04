<?php
/**
 * File for class OvhStructSupportSendMessage
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportSendMessage originally named supportSendMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportSendMessage extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The messagePrevious
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $messagePrevious;
	/**
	 * The category
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $category;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The subject
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subject;
	/**
	 * The body
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $body;
	/**
	 * Constructor method for supportSendMessage
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_messagePrevious
	 * @param int $_category
	 * @param string $_domain
	 * @param string $_subject
	 * @param string $_body
	 * @return OvhStructSupportSendMessage
	 */
	public function __construct($_session = NULL,$_messagePrevious = NULL,$_category = NULL,$_domain = NULL,$_subject = NULL,$_body = NULL)
	{
		parent::__construct(array('session'=>$_session,'messagePrevious'=>$_messagePrevious,'category'=>$_category,'domain'=>$_domain,'subject'=>$_subject,'body'=>$_body));
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
	 * Get messagePrevious value
	 * @return int|null
	 */
	public function getMessagePrevious()
	{
		return $this->messagePrevious;
	}
	/**
	 * Set messagePrevious value
	 * @param int $_messagePrevious the messagePrevious
	 * @return int
	 */
	public function setMessagePrevious($_messagePrevious)
	{
		return ($this->messagePrevious = $_messagePrevious);
	}
	/**
	 * Get category value
	 * @return int|null
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set category value
	 * @param int $_category the category
	 * @return int
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
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
	 * Get subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set subject value
	 * @param string $_subject the subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get body value
	 * @return string|null
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set body value
	 * @param string $_body the body
	 * @return string
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportSendMessage
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