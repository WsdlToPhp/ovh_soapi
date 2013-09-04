<?php
/**
 * File for class OvhStructDomainCapabilitiesReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainCapabilitiesReturn originally named domainCapabilitiesReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The needAuthInfo
	 * @var boolean
	 */
	public $needAuthInfo;
	/**
	 * The needZoneCheck
	 * @var boolean
	 */
	public $needZoneCheck;
	/**
	 * The owo
	 * @var boolean
	 */
	public $owo;
	/**
	 * The hostIPv4
	 * @var boolean
	 */
	public $hostIPv4;
	/**
	 * The hostIPv6
	 * @var boolean
	 */
	public $hostIPv6;
	/**
	 * The hostmultiIp
	 * @var boolean
	 */
	public $hostmultiIp;
	/**
	 * The ownerUpdateAllowed
	 * @var boolean
	 */
	public $ownerUpdateAllowed;
	/**
	 * The ownerTradeAllowed
	 * @var boolean
	 */
	public $ownerTradeAllowed;
	/**
	 * Constructor method for domainCapabilitiesReturn
	 * @see parent::__construct()
	 * @param boolean $_needAuthInfo
	 * @param boolean $_needZoneCheck
	 * @param boolean $_owo
	 * @param boolean $_hostIPv4
	 * @param boolean $_hostIPv6
	 * @param boolean $_hostmultiIp
	 * @param boolean $_ownerUpdateAllowed
	 * @param boolean $_ownerTradeAllowed
	 * @return OvhStructDomainCapabilitiesReturn
	 */
	public function __construct($_needAuthInfo = NULL,$_needZoneCheck = NULL,$_owo = NULL,$_hostIPv4 = NULL,$_hostIPv6 = NULL,$_hostmultiIp = NULL,$_ownerUpdateAllowed = NULL,$_ownerTradeAllowed = NULL)
	{
		parent::__construct(array('needAuthInfo'=>$_needAuthInfo,'needZoneCheck'=>$_needZoneCheck,'owo'=>$_owo,'hostIPv4'=>$_hostIPv4,'hostIPv6'=>$_hostIPv6,'hostmultiIp'=>$_hostmultiIp,'ownerUpdateAllowed'=>$_ownerUpdateAllowed,'ownerTradeAllowed'=>$_ownerTradeAllowed));
	}
	/**
	 * Get needAuthInfo value
	 * @return boolean|null
	 */
	public function getNeedAuthInfo()
	{
		return $this->needAuthInfo;
	}
	/**
	 * Set needAuthInfo value
	 * @param boolean $_needAuthInfo the needAuthInfo
	 * @return boolean
	 */
	public function setNeedAuthInfo($_needAuthInfo)
	{
		return ($this->needAuthInfo = $_needAuthInfo);
	}
	/**
	 * Get needZoneCheck value
	 * @return boolean|null
	 */
	public function getNeedZoneCheck()
	{
		return $this->needZoneCheck;
	}
	/**
	 * Set needZoneCheck value
	 * @param boolean $_needZoneCheck the needZoneCheck
	 * @return boolean
	 */
	public function setNeedZoneCheck($_needZoneCheck)
	{
		return ($this->needZoneCheck = $_needZoneCheck);
	}
	/**
	 * Get owo value
	 * @return boolean|null
	 */
	public function getOwo()
	{
		return $this->owo;
	}
	/**
	 * Set owo value
	 * @param boolean $_owo the owo
	 * @return boolean
	 */
	public function setOwo($_owo)
	{
		return ($this->owo = $_owo);
	}
	/**
	 * Get hostIPv4 value
	 * @return boolean|null
	 */
	public function getHostIPv4()
	{
		return $this->hostIPv4;
	}
	/**
	 * Set hostIPv4 value
	 * @param boolean $_hostIPv4 the hostIPv4
	 * @return boolean
	 */
	public function setHostIPv4($_hostIPv4)
	{
		return ($this->hostIPv4 = $_hostIPv4);
	}
	/**
	 * Get hostIPv6 value
	 * @return boolean|null
	 */
	public function getHostIPv6()
	{
		return $this->hostIPv6;
	}
	/**
	 * Set hostIPv6 value
	 * @param boolean $_hostIPv6 the hostIPv6
	 * @return boolean
	 */
	public function setHostIPv6($_hostIPv6)
	{
		return ($this->hostIPv6 = $_hostIPv6);
	}
	/**
	 * Get hostmultiIp value
	 * @return boolean|null
	 */
	public function getHostmultiIp()
	{
		return $this->hostmultiIp;
	}
	/**
	 * Set hostmultiIp value
	 * @param boolean $_hostmultiIp the hostmultiIp
	 * @return boolean
	 */
	public function setHostmultiIp($_hostmultiIp)
	{
		return ($this->hostmultiIp = $_hostmultiIp);
	}
	/**
	 * Get ownerUpdateAllowed value
	 * @return boolean|null
	 */
	public function getOwnerUpdateAllowed()
	{
		return $this->ownerUpdateAllowed;
	}
	/**
	 * Set ownerUpdateAllowed value
	 * @param boolean $_ownerUpdateAllowed the ownerUpdateAllowed
	 * @return boolean
	 */
	public function setOwnerUpdateAllowed($_ownerUpdateAllowed)
	{
		return ($this->ownerUpdateAllowed = $_ownerUpdateAllowed);
	}
	/**
	 * Get ownerTradeAllowed value
	 * @return boolean|null
	 */
	public function getOwnerTradeAllowed()
	{
		return $this->ownerTradeAllowed;
	}
	/**
	 * Set ownerTradeAllowed value
	 * @param boolean $_ownerTradeAllowed the ownerTradeAllowed
	 * @return boolean
	 */
	public function setOwnerTradeAllowed($_ownerTradeAllowed)
	{
		return ($this->ownerTradeAllowed = $_ownerTradeAllowed);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainCapabilitiesReturn
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