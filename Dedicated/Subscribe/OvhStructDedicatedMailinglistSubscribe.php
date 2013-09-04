<?php
/**
 * File for class OvhStructDedicatedMailinglistSubscribe
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMailinglistSubscribe originally named dedicatedMailinglistSubscribe
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMailinglistSubscribe extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The mailingList
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mailingList;
	/**
	 * Constructor method for dedicatedMailinglistSubscribe
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_email
	 * @param string $_mailingList
	 * @return OvhStructDedicatedMailinglistSubscribe
	 */
	public function __construct($_session = NULL,$_email = NULL,$_mailingList = NULL)
	{
		parent::__construct(array('session'=>$_session,'email'=>$_email,'mailingList'=>$_mailingList));
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
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get mailingList value
	 * @return string|null
	 */
	public function getMailingList()
	{
		return $this->mailingList;
	}
	/**
	 * Set mailingList value
	 * @param string $_mailingList the mailingList
	 * @return string
	 */
	public function setMailingList($_mailingList)
	{
		return ($this->mailingList = $_mailingList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMailinglistSubscribe
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