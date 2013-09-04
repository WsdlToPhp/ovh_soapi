<?php
/**
 * File for class OvhStructServiceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceStruct originally named serviceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * The componentSubType
	 * @var string
	 */
	public $componentSubType;
	/**
	 * The creation
	 * @var string
	 */
	public $creation;
	/**
	 * The modification
	 * @var string
	 */
	public $modification;
	/**
	 * The expiry
	 * @var string
	 */
	public $expiry;
	/**
	 * The nicowner
	 * @var string
	 */
	public $nicowner;
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
	 * The nicreseller
	 * @var string
	 */
	public $nicreseller;
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
	 * Constructor method for serviceStruct
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_component
	 * @param string $_componentSubType
	 * @param string $_creation
	 * @param string $_modification
	 * @param string $_expiry
	 * @param string $_nicowner
	 * @param string $_nicadmin
	 * @param string $_nictech
	 * @param string $_nicbilling
	 * @param string $_nicreseller
	 * @param string $_autorenew
	 * @param string $_reverse
	 * @return OvhStructServiceStruct
	 */
	public function __construct($_domain = NULL,$_component = NULL,$_componentSubType = NULL,$_creation = NULL,$_modification = NULL,$_expiry = NULL,$_nicowner = NULL,$_nicadmin = NULL,$_nictech = NULL,$_nicbilling = NULL,$_nicreseller = NULL,$_autorenew = NULL,$_reverse = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'component'=>$_component,'componentSubType'=>$_componentSubType,'creation'=>$_creation,'modification'=>$_modification,'expiry'=>$_expiry,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'nicreseller'=>$_nicreseller,'autorenew'=>$_autorenew,'reverse'=>$_reverse));
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
	 * Get component value
	 * @return string|null
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set component value
	 * @param string $_component the component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get componentSubType value
	 * @return string|null
	 */
	public function getComponentSubType()
	{
		return $this->componentSubType;
	}
	/**
	 * Set componentSubType value
	 * @param string $_componentSubType the componentSubType
	 * @return string
	 */
	public function setComponentSubType($_componentSubType)
	{
		return ($this->componentSubType = $_componentSubType);
	}
	/**
	 * Get creation value
	 * @return string|null
	 */
	public function getCreation()
	{
		return $this->creation;
	}
	/**
	 * Set creation value
	 * @param string $_creation the creation
	 * @return string
	 */
	public function setCreation($_creation)
	{
		return ($this->creation = $_creation);
	}
	/**
	 * Get modification value
	 * @return string|null
	 */
	public function getModification()
	{
		return $this->modification;
	}
	/**
	 * Set modification value
	 * @param string $_modification the modification
	 * @return string
	 */
	public function setModification($_modification)
	{
		return ($this->modification = $_modification);
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
	 * Get nicowner value
	 * @return string|null
	 */
	public function getNicowner()
	{
		return $this->nicowner;
	}
	/**
	 * Set nicowner value
	 * @param string $_nicowner the nicowner
	 * @return string
	 */
	public function setNicowner($_nicowner)
	{
		return ($this->nicowner = $_nicowner);
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
	 * Get nicreseller value
	 * @return string|null
	 */
	public function getNicreseller()
	{
		return $this->nicreseller;
	}
	/**
	 * Set nicreseller value
	 * @param string $_nicreseller the nicreseller
	 * @return string
	 */
	public function setNicreseller($_nicreseller)
	{
		return ($this->nicreseller = $_nicreseller);
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
	 * @return OvhStructServiceStruct
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