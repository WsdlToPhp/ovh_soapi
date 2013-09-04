<?php
/**
 * File for class OvhStructDedicatedFailoverRipeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverRipeStruct originally named dedicatedFailoverRipeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverRipeStruct extends OvhWsdlClass
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
	 * The routingStatus
	 * @var string
	 */
	public $routingStatus;
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
	 * The isExclude
	 * @var boolean
	 */
	public $isExclude;
	/**
	 * Constructor method for dedicatedFailoverRipeStruct
	 * @see parent::__construct()
	 * @param string $_country
	 * @param string $_netname
	 * @param string $_routedTo
	 * @param string $_routingStatus
	 * @param string $_status
	 * @param int $_addressesNumber
	 * @param string $_networkIp
	 * @param boolean $_isExclude
	 * @return OvhStructDedicatedFailoverRipeStruct
	 */
	public function __construct($_country = NULL,$_netname = NULL,$_routedTo = NULL,$_routingStatus = NULL,$_status = NULL,$_addressesNumber = NULL,$_networkIp = NULL,$_isExclude = NULL)
	{
		parent::__construct(array('country'=>$_country,'netname'=>$_netname,'routedTo'=>$_routedTo,'routingStatus'=>$_routingStatus,'status'=>$_status,'addressesNumber'=>$_addressesNumber,'networkIp'=>$_networkIp,'isExclude'=>$_isExclude));
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
	 * Get routingStatus value
	 * @return string|null
	 */
	public function getRoutingStatus()
	{
		return $this->routingStatus;
	}
	/**
	 * Set routingStatus value
	 * @param string $_routingStatus the routingStatus
	 * @return string
	 */
	public function setRoutingStatus($_routingStatus)
	{
		return ($this->routingStatus = $_routingStatus);
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
	 * Get isExclude value
	 * @return boolean|null
	 */
	public function getIsExclude()
	{
		return $this->isExclude;
	}
	/**
	 * Set isExclude value
	 * @param boolean $_isExclude the isExclude
	 * @return boolean
	 */
	public function setIsExclude($_isExclude)
	{
		return ($this->isExclude = $_isExclude);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFailoverRipeStruct
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