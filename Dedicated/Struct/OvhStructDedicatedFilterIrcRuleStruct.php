<?php
/**
 * File for class OvhStructDedicatedFilterIrcRuleStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFilterIrcRuleStruct originally named dedicatedFilterIrcRuleStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFilterIrcRuleStruct extends OvhWsdlClass
{
	/**
	 * The fromIp
	 * @var string
	 */
	public $fromIp;
	/**
	 * The fromPort
	 * @var string
	 */
	public $fromPort;
	/**
	 * The toIp
	 * @var string
	 */
	public $toIp;
	/**
	 * The toPort
	 * @var string
	 */
	public $toPort;
	/**
	 * Constructor method for dedicatedFilterIrcRuleStruct
	 * @see parent::__construct()
	 * @param string $_fromIp
	 * @param string $_fromPort
	 * @param string $_toIp
	 * @param string $_toPort
	 * @return OvhStructDedicatedFilterIrcRuleStruct
	 */
	public function __construct($_fromIp = NULL,$_fromPort = NULL,$_toIp = NULL,$_toPort = NULL)
	{
		parent::__construct(array('fromIp'=>$_fromIp,'fromPort'=>$_fromPort,'toIp'=>$_toIp,'toPort'=>$_toPort));
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
	 * Get fromPort value
	 * @return string|null
	 */
	public function getFromPort()
	{
		return $this->fromPort;
	}
	/**
	 * Set fromPort value
	 * @param string $_fromPort the fromPort
	 * @return string
	 */
	public function setFromPort($_fromPort)
	{
		return ($this->fromPort = $_fromPort);
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
	 * Get toPort value
	 * @return string|null
	 */
	public function getToPort()
	{
		return $this->toPort;
	}
	/**
	 * Set toPort value
	 * @param string $_toPort the toPort
	 * @return string
	 */
	public function setToPort($_toPort)
	{
		return ($this->toPort = $_toPort);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFilterIrcRuleStruct
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