<?php
/**
 * File for class OvhStructServiceLightStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceLightStruct originally named serviceLightStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceLightStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The expiry
	 * @var string
	 */
	public $expiry;
	/**
	 * The nicadmin
	 * @var string
	 */
	public $nicadmin;
	/**
	 * The nictech
	 * @var string
	 */
	public $nictech;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The autorenew
	 * @var string
	 */
	public $autorenew;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * Constructor method for serviceLightStruct
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_expiry
	 * @param string $_nicadmin
	 * @param string $_nictech
	 * @param string $_nicbilling
	 * @param string $_autorenew
	 * @param string $_reverse
	 * @return OvhStructServiceLightStruct
	 */
	public function __construct($_domain = NULL,$_expiry = NULL,$_nicadmin = NULL,$_nictech = NULL,$_nicbilling = NULL,$_autorenew = NULL,$_reverse = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'expiry'=>$_expiry,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'autorenew'=>$_autorenew,'reverse'=>$_reverse));
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get expiry value
	 * @return string|null
	 */
	public function getExpiry()
	{
		return $this->expiry;
	}
	/**
	 * Set expiry value
	 * @param string $_expiry the expiry
	 * @return string
	 */
	public function setExpiry($_expiry)
	{
		return ($this->expiry = $_expiry);
	}
	/**
	 * Get nicadmin value
	 * @return string|null
	 */
	public function getNicadmin()
	{
		return $this->nicadmin;
	}
	/**
	 * Set nicadmin value
	 * @param string $_nicadmin the nicadmin
	 * @return string
	 */
	public function setNicadmin($_nicadmin)
	{
		return ($this->nicadmin = $_nicadmin);
	}
	/**
	 * Get nictech value
	 * @return string|null
	 */
	public function getNictech()
	{
		return $this->nictech;
	}
	/**
	 * Set nictech value
	 * @param string $_nictech the nictech
	 * @return string
	 */
	public function setNictech($_nictech)
	{
		return ($this->nictech = $_nictech);
	}
	/**
	 * Get nicbilling value
	 * @return string|null
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set nicbilling value
	 * @param string $_nicbilling the nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
	}
	/**
	 * Get autorenew value
	 * @return string|null
	 */
	public function getAutorenew()
	{
		return $this->autorenew;
	}
	/**
	 * Set autorenew value
	 * @param string $_autorenew the autorenew
	 * @return string
	 */
	public function setAutorenew($_autorenew)
	{
		return ($this->autorenew = $_autorenew);
	}
	/**
	 * Get reverse value
	 * @return string|null
	 */
	public function getReverse()
	{
		return $this->reverse;
	}
	/**
	 * Set reverse value
	 * @param string $_reverse the reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceLightStruct
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