<?php
/**
 * File for class OvhStructInfrastructureIpStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructInfrastructureIpStruct originally named InfrastructureIpStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructInfrastructureIpStruct extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The addressesNumber
	 * @var int
	 */
	public $addressesNumber;
	/**
	 * The networkIp
	 * @var string
	 */
	public $networkIp;
	/**
	 * The ipAddressFromBlock
	 * @var OvhStructMyArrayOfStringType
	 */
	public $ipAddressFromBlock;
	/**
	 * Constructor method for InfrastructureIpStruct
	 * @see parent::__construct()
	 * @param string $_country
	 * @param string $_netname
	 * @param string $_routedTo
	 * @param string $_status
	 * @param int $_addressesNumber
	 * @param string $_networkIp
	 * @param OvhStructMyArrayOfStringType $_ipAddressFromBlock
	 * @return OvhStructInfrastructureIpStruct
	 */
	public function __construct($_country = NULL,$_netname = NULL,$_routedTo = NULL,$_status = NULL,$_addressesNumber = NULL,$_networkIp = NULL,$_ipAddressFromBlock = NULL)
	{
		parent::__construct(array('country'=>$_country,'netname'=>$_netname,'routedTo'=>$_routedTo,'status'=>$_status,'addressesNumber'=>$_addressesNumber,'networkIp'=>$_networkIp,'ipAddressFromBlock'=>($_ipAddressFromBlock instanceof OvhStructMyArrayOfStringType)?$_ipAddressFromBlock:new OvhStructMyArrayOfStringType($_ipAddressFromBlock)));
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get netname value
	 * @return string|null
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set netname value
	 * @param string $_netname the netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get routedTo value
	 * @return string|null
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set routedTo value
	 * @param string $_routedTo the routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
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
	 * Get addressesNumber value
	 * @return int|null
	 */
	public function getAddressesNumber()
	{
		return $this->addressesNumber;
	}
	/**
	 * Set addressesNumber value
	 * @param int $_addressesNumber the addressesNumber
	 * @return int
	 */
	public function setAddressesNumber($_addressesNumber)
	{
		return ($this->addressesNumber = $_addressesNumber);
	}
	/**
	 * Get networkIp value
	 * @return string|null
	 */
	public function getNetworkIp()
	{
		return $this->networkIp;
	}
	/**
	 * Set networkIp value
	 * @param string $_networkIp the networkIp
	 * @return string
	 */
	public function setNetworkIp($_networkIp)
	{
		return ($this->networkIp = $_networkIp);
	}
	/**
	 * Get ipAddressFromBlock value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getIpAddressFromBlock()
	{
		return $this->ipAddressFromBlock;
	}
	/**
	 * Set ipAddressFromBlock value
	 * @param OvhStructMyArrayOfStringType $_ipAddressFromBlock the ipAddressFromBlock
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setIpAddressFromBlock($_ipAddressFromBlock)
	{
		return ($this->ipAddressFromBlock = $_ipAddressFromBlock);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructInfrastructureIpStruct
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