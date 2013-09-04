<?php
/**
 * File for class OvhStructDedicatedNetworkStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetworkStruct originally named dedicatedNetworkStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetworkStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The priority
	 * @var string
	 */
	public $priority;
	/**
	 * The connexion
	 * @var string
	 */
	public $connexion;
	/**
	 * The bandwidth
	 * @var int
	 */
	public $bandwidth;
	/**
	 * The bandwidthOvhToOvh
	 * @var int
	 */
	public $bandwidthOvhToOvh;
	/**
	 * The bandwidthOvhToInternet
	 * @var int
	 */
	public $bandwidthOvhToInternet;
	/**
	 * The bandwidthInternetToOvh
	 * @var int
	 */
	public $bandwidthInternetToOvh;
	/**
	 * The over
	 * @var boolean
	 */
	public $over;
	/**
	 * The interfaces
	 * @var OvhStructMyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public $interfaces;
	/**
	 * The traffic
	 * @var OvhStructDedicatedNetworkTrafficStruct
	 */
	public $traffic;
	/**
	 * Constructor method for dedicatedNetworkStruct
	 * @see parent::__construct()
	 * @param string $_type
	 * @param string $_priority
	 * @param string $_connexion
	 * @param int $_bandwidth
	 * @param int $_bandwidthOvhToOvh
	 * @param int $_bandwidthOvhToInternet
	 * @param int $_bandwidthInternetToOvh
	 * @param boolean $_over
	 * @param OvhStructMyArrayOfDedicatedNetworkInterfaceStructType $_interfaces
	 * @param OvhStructDedicatedNetworkTrafficStruct $_traffic
	 * @return OvhStructDedicatedNetworkStruct
	 */
	public function __construct($_type = NULL,$_priority = NULL,$_connexion = NULL,$_bandwidth = NULL,$_bandwidthOvhToOvh = NULL,$_bandwidthOvhToInternet = NULL,$_bandwidthInternetToOvh = NULL,$_over = NULL,$_interfaces = NULL,$_traffic = NULL)
	{
		parent::__construct(array('type'=>$_type,'priority'=>$_priority,'connexion'=>$_connexion,'bandwidth'=>$_bandwidth,'bandwidthOvhToOvh'=>$_bandwidthOvhToOvh,'bandwidthOvhToInternet'=>$_bandwidthOvhToInternet,'bandwidthInternetToOvh'=>$_bandwidthInternetToOvh,'over'=>$_over,'interfaces'=>($_interfaces instanceof OvhStructMyArrayOfDedicatedNetworkInterfaceStructType)?$_interfaces:new OvhStructMyArrayOfDedicatedNetworkInterfaceStructType($_interfaces),'traffic'=>$_traffic));
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
	 * Get priority value
	 * @return string|null
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set priority value
	 * @param string $_priority the priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
	}
	/**
	 * Get connexion value
	 * @return string|null
	 */
	public function getConnexion()
	{
		return $this->connexion;
	}
	/**
	 * Set connexion value
	 * @param string $_connexion the connexion
	 * @return string
	 */
	public function setConnexion($_connexion)
	{
		return ($this->connexion = $_connexion);
	}
	/**
	 * Get bandwidth value
	 * @return int|null
	 */
	public function getBandwidth()
	{
		return $this->bandwidth;
	}
	/**
	 * Set bandwidth value
	 * @param int $_bandwidth the bandwidth
	 * @return int
	 */
	public function setBandwidth($_bandwidth)
	{
		return ($this->bandwidth = $_bandwidth);
	}
	/**
	 * Get bandwidthOvhToOvh value
	 * @return int|null
	 */
	public function getBandwidthOvhToOvh()
	{
		return $this->bandwidthOvhToOvh;
	}
	/**
	 * Set bandwidthOvhToOvh value
	 * @param int $_bandwidthOvhToOvh the bandwidthOvhToOvh
	 * @return int
	 */
	public function setBandwidthOvhToOvh($_bandwidthOvhToOvh)
	{
		return ($this->bandwidthOvhToOvh = $_bandwidthOvhToOvh);
	}
	/**
	 * Get bandwidthOvhToInternet value
	 * @return int|null
	 */
	public function getBandwidthOvhToInternet()
	{
		return $this->bandwidthOvhToInternet;
	}
	/**
	 * Set bandwidthOvhToInternet value
	 * @param int $_bandwidthOvhToInternet the bandwidthOvhToInternet
	 * @return int
	 */
	public function setBandwidthOvhToInternet($_bandwidthOvhToInternet)
	{
		return ($this->bandwidthOvhToInternet = $_bandwidthOvhToInternet);
	}
	/**
	 * Get bandwidthInternetToOvh value
	 * @return int|null
	 */
	public function getBandwidthInternetToOvh()
	{
		return $this->bandwidthInternetToOvh;
	}
	/**
	 * Set bandwidthInternetToOvh value
	 * @param int $_bandwidthInternetToOvh the bandwidthInternetToOvh
	 * @return int
	 */
	public function setBandwidthInternetToOvh($_bandwidthInternetToOvh)
	{
		return ($this->bandwidthInternetToOvh = $_bandwidthInternetToOvh);
	}
	/**
	 * Get over value
	 * @return boolean|null
	 */
	public function getOver()
	{
		return $this->over;
	}
	/**
	 * Set over value
	 * @param boolean $_over the over
	 * @return boolean
	 */
	public function setOver($_over)
	{
		return ($this->over = $_over);
	}
	/**
	 * Get interfaces value
	 * @return OvhStructMyArrayOfDedicatedNetworkInterfaceStructType|null
	 */
	public function getInterfaces()
	{
		return $this->interfaces;
	}
	/**
	 * Set interfaces value
	 * @param OvhStructMyArrayOfDedicatedNetworkInterfaceStructType $_interfaces the interfaces
	 * @return OvhStructMyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public function setInterfaces($_interfaces)
	{
		return ($this->interfaces = $_interfaces);
	}
	/**
	 * Get traffic value
	 * @return OvhStructDedicatedNetworkTrafficStruct|null
	 */
	public function getTraffic()
	{
		return $this->traffic;
	}
	/**
	 * Set traffic value
	 * @param OvhStructDedicatedNetworkTrafficStruct $_traffic the traffic
	 * @return OvhStructDedicatedNetworkTrafficStruct
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedNetworkStruct
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