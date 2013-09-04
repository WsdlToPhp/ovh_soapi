<?php
/**
 * File for class OvhStructDedicatedFilterIrcClientRuleAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFilterIrcClientRuleAdd originally named dedicatedFilterIrcClientRuleAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFilterIrcClientRuleAdd extends OvhWsdlClass
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
	 * The fromIp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fromIp;
	/**
	 * The toIp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toIp;
	/**
	 * Constructor method for dedicatedFilterIrcClientRuleAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_fromIp
	 * @param string $_toIp
	 * @return OvhStructDedicatedFilterIrcClientRuleAdd
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_fromIp = NULL,$_toIp = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'fromIp'=>$_fromIp,'toIp'=>$_toIp));
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
	 * Get fromIp value
	 * @return string|null
	 */
	public function getFromIp()
	{
		return $this->fromIp;
	}
	/**
	 * Set fromIp value
	 * @param string $_fromIp the fromIp
	 * @return string
	 */
	public function setFromIp($_fromIp)
	{
		return ($this->fromIp = $_fromIp);
	}
	/**
	 * Get toIp value
	 * @return string|null
	 */
	public function getToIp()
	{
		return $this->toIp;
	}
	/**
	 * Set toIp value
	 * @param string $_toIp the toIp
	 * @return string
	 */
	public function setToIp($_toIp)
	{
		return ($this->toIp = $_toIp);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFilterIrcClientRuleAdd
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