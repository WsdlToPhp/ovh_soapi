<?php
/**
 * File for class OvhStructSecondaryDNSStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSecondaryDNSStruct originally named secondaryDNSStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSecondaryDNSStruct extends OvhWsdlClass
{
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The nameserver
	 * @var string
	 */
	public $nameserver;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The creation
	 * @var string
	 */
	public $creation;
	/**
	 * The deactivation
	 * @var string
	 */
	public $deactivation;
	/**
	 * Constructor method for secondaryDNSStruct
	 * @see parent::__construct()
	 * @param string $_zone
	 * @param string $_type
	 * @param string $_nameserver
	 * @param string $_state
	 * @param string $_creation
	 * @param string $_deactivation
	 * @return OvhStructSecondaryDNSStruct
	 */
	public function __construct($_zone = NULL,$_type = NULL,$_nameserver = NULL,$_state = NULL,$_creation = NULL,$_deactivation = NULL)
	{
		parent::__construct(array('zone'=>$_zone,'type'=>$_type,'nameserver'=>$_nameserver,'state'=>$_state,'creation'=>$_creation,'deactivation'=>$_deactivation));
	}
	/**
	 * Get zone value
	 * @return string|null
	 */
	public function getZone()
	{
		return $this->zone;
	}
	/**
	 * Set zone value
	 * @param string $_zone the zone
	 * @return string
	 */
	public function setZone($_zone)
	{
		return ($this->zone = $_zone);
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
	 * Get nameserver value
	 * @return string|null
	 */
	public function getNameserver()
	{
		return $this->nameserver;
	}
	/**
	 * Set nameserver value
	 * @param string $_nameserver the nameserver
	 * @return string
	 */
	public function setNameserver($_nameserver)
	{
		return ($this->nameserver = $_nameserver);
	}
	/**
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
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
	 * Get deactivation value
	 * @return string|null
	 */
	public function getDeactivation()
	{
		return $this->deactivation;
	}
	/**
	 * Set deactivation value
	 * @param string $_deactivation the deactivation
	 * @return string
	 */
	public function setDeactivation($_deactivation)
	{
		return ($this->deactivation = $_deactivation);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSecondaryDNSStruct
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