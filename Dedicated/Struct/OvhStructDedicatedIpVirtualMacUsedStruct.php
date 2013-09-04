<?php
/**
 * File for class OvhStructDedicatedIpVirtualMacUsedStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedIpVirtualMacUsedStruct originally named dedicatedIpVirtualMacUsedStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedIpVirtualMacUsedStruct extends OvhWsdlClass
{
	/**
	 * The virtualMachineName
	 * @var string
	 */
	public $virtualMachineName;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The ipAddress
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * Constructor method for dedicatedIpVirtualMacUsedStruct
	 * @see parent::__construct()
	 * @param string $_virtualMachineName
	 * @param string $_status
	 * @param string $_ipAddress
	 * @param string $_type
	 * @param string $_mac
	 * @return OvhStructDedicatedIpVirtualMacUsedStruct
	 */
	public function __construct($_virtualMachineName = NULL,$_status = NULL,$_ipAddress = NULL,$_type = NULL,$_mac = NULL)
	{
		parent::__construct(array('virtualMachineName'=>$_virtualMachineName,'status'=>$_status,'ipAddress'=>$_ipAddress,'type'=>$_type,'mac'=>$_mac));
	}
	/**
	 * Get virtualMachineName value
	 * @return string|null
	 */
	public function getVirtualMachineName()
	{
		return $this->virtualMachineName;
	}
	/**
	 * Set virtualMachineName value
	 * @param string $_virtualMachineName the virtualMachineName
	 * @return string
	 */
	public function setVirtualMachineName($_virtualMachineName)
	{
		return ($this->virtualMachineName = $_virtualMachineName);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get ipAddress value
	 * @return string|null
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set ipAddress value
	 * @param string $_ipAddress the ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get mac value
	 * @return string|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param string $_mac the mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedIpVirtualMacUsedStruct
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