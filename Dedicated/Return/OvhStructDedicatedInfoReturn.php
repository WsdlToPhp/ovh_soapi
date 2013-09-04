<?php
/**
 * File for class OvhStructDedicatedInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInfoReturn originally named dedicatedInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInfoReturn extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The datacenter
	 * @var string
	 */
	public $datacenter;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * The isKimSufi
	 * @var boolean
	 */
	public $isKimSufi;
	/**
	 * The isRPS
	 * @var boolean
	 */
	public $isRPS;
	/**
	 * The isHG
	 * @var boolean
	 */
	public $isHG;
	/**
	 * The num
	 * @var int
	 */
	public $num;
	/**
	 * The rack
	 * @var string
	 */
	public $rack;
	/**
	 * The countryBilling
	 * @var string
	 */
	public $countryBilling;
	/**
	 * The network
	 * @var OvhStructDedicatedNetworkStruct
	 */
	public $network;
	/**
	 * The capability
	 * @var OvhStructDedicatedCapabilityStruct
	 */
	public $capability;
	/**
	 * The freeDom
	 * @var OvhStructDedicatedFreedomStruct
	 */
	public $freeDom;
	/**
	 * Constructor method for dedicatedInfoReturn
	 * @see parent::__construct()
	 * @param string $_hostname
	 * @param string $_datacenter
	 * @param string $_os
	 * @param boolean $_isKimSufi
	 * @param boolean $_isRPS
	 * @param boolean $_isHG
	 * @param int $_num
	 * @param string $_rack
	 * @param string $_countryBilling
	 * @param OvhStructDedicatedNetworkStruct $_network
	 * @param OvhStructDedicatedCapabilityStruct $_capability
	 * @param OvhStructDedicatedFreedomStruct $_freeDom
	 * @return OvhStructDedicatedInfoReturn
	 */
	public function __construct($_hostname = NULL,$_datacenter = NULL,$_os = NULL,$_isKimSufi = NULL,$_isRPS = NULL,$_isHG = NULL,$_num = NULL,$_rack = NULL,$_countryBilling = NULL,$_network = NULL,$_capability = NULL,$_freeDom = NULL)
	{
		parent::__construct(array('hostname'=>$_hostname,'datacenter'=>$_datacenter,'os'=>$_os,'isKimSufi'=>$_isKimSufi,'isRPS'=>$_isRPS,'isHG'=>$_isHG,'num'=>$_num,'rack'=>$_rack,'countryBilling'=>$_countryBilling,'network'=>$_network,'capability'=>$_capability,'freeDom'=>$_freeDom));
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
	 * Get datacenter value
	 * @return string|null
	 */
	public function getDatacenter()
	{
		return $this->datacenter;
	}
	/**
	 * Set datacenter value
	 * @param string $_datacenter the datacenter
	 * @return string
	 */
	public function setDatacenter($_datacenter)
	{
		return ($this->datacenter = $_datacenter);
	}
	/**
	 * Get os value
	 * @return string|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param string $_os the os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get isKimSufi value
	 * @return boolean|null
	 */
	public function getIsKimSufi()
	{
		return $this->isKimSufi;
	}
	/**
	 * Set isKimSufi value
	 * @param boolean $_isKimSufi the isKimSufi
	 * @return boolean
	 */
	public function setIsKimSufi($_isKimSufi)
	{
		return ($this->isKimSufi = $_isKimSufi);
	}
	/**
	 * Get isRPS value
	 * @return boolean|null
	 */
	public function getIsRPS()
	{
		return $this->isRPS;
	}
	/**
	 * Set isRPS value
	 * @param boolean $_isRPS the isRPS
	 * @return boolean
	 */
	public function setIsRPS($_isRPS)
	{
		return ($this->isRPS = $_isRPS);
	}
	/**
	 * Get isHG value
	 * @return boolean|null
	 */
	public function getIsHG()
	{
		return $this->isHG;
	}
	/**
	 * Set isHG value
	 * @param boolean $_isHG the isHG
	 * @return boolean
	 */
	public function setIsHG($_isHG)
	{
		return ($this->isHG = $_isHG);
	}
	/**
	 * Get num value
	 * @return int|null
	 */
	public function getNum()
	{
		return $this->num;
	}
	/**
	 * Set num value
	 * @param int $_num the num
	 * @return int
	 */
	public function setNum($_num)
	{
		return ($this->num = $_num);
	}
	/**
	 * Get rack value
	 * @return string|null
	 */
	public function getRack()
	{
		return $this->rack;
	}
	/**
	 * Set rack value
	 * @param string $_rack the rack
	 * @return string
	 */
	public function setRack($_rack)
	{
		return ($this->rack = $_rack);
	}
	/**
	 * Get countryBilling value
	 * @return string|null
	 */
	public function getCountryBilling()
	{
		return $this->countryBilling;
	}
	/**
	 * Set countryBilling value
	 * @param string $_countryBilling the countryBilling
	 * @return string
	 */
	public function setCountryBilling($_countryBilling)
	{
		return ($this->countryBilling = $_countryBilling);
	}
	/**
	 * Get network value
	 * @return OvhStructDedicatedNetworkStruct|null
	 */
	public function getNetwork()
	{
		return $this->network;
	}
	/**
	 * Set network value
	 * @param OvhStructDedicatedNetworkStruct $_network the network
	 * @return OvhStructDedicatedNetworkStruct
	 */
	public function setNetwork($_network)
	{
		return ($this->network = $_network);
	}
	/**
	 * Get capability value
	 * @return OvhStructDedicatedCapabilityStruct|null
	 */
	public function getCapability()
	{
		return $this->capability;
	}
	/**
	 * Set capability value
	 * @param OvhStructDedicatedCapabilityStruct $_capability the capability
	 * @return OvhStructDedicatedCapabilityStruct
	 */
	public function setCapability($_capability)
	{
		return ($this->capability = $_capability);
	}
	/**
	 * Get freeDom value
	 * @return OvhStructDedicatedFreedomStruct|null
	 */
	public function getFreeDom()
	{
		return $this->freeDom;
	}
	/**
	 * Set freeDom value
	 * @param OvhStructDedicatedFreedomStruct $_freeDom the freeDom
	 * @return OvhStructDedicatedFreedomStruct
	 */
	public function setFreeDom($_freeDom)
	{
		return ($this->freeDom = $_freeDom);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedInfoReturn
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