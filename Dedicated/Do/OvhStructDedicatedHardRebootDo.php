<?php
/**
 * File for class OvhStructDedicatedHardRebootDo
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedHardRebootDo originally named dedicatedHardRebootDo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedHardRebootDo extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The reason
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reason;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The emailLanguage
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $emailLanguage;
	/**
	 * Constructor method for dedicatedHardRebootDo
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_reason
	 * @param string $_email
	 * @param string $_emailLanguage
	 * @return OvhStructDedicatedHardRebootDo
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_reason = NULL,$_email = NULL,$_emailLanguage = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'reason'=>$_reason,'email'=>$_email,'emailLanguage'=>$_emailLanguage));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get reason value
	 * @return string|null
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set reason value
	 * @param string $_reason the reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
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
	 * Get emailLanguage value
	 * @return string|null
	 */
	public function getEmailLanguage()
	{
		return $this->emailLanguage;
	}
	/**
	 * Set emailLanguage value
	 * @param string $_emailLanguage the emailLanguage
	 * @return string
	 */
	public function setEmailLanguage($_emailLanguage)
	{
		return ($this->emailLanguage = $_emailLanguage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedHardRebootDo
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