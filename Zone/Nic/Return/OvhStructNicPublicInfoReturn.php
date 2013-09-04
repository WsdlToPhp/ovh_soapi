<?php
/**
 * File for class OvhStructNicPublicInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicPublicInfoReturn originally named nicPublicInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicPublicInfoReturn extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstname
	 * @var string
	 */
	public $firstname;
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * Constructor method for nicPublicInfoReturn
	 * @see parent::__construct()
	 * @param string $_nic
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_organisation
	 * @param string $_city
	 * @return OvhStructNicPublicInfoReturn
	 */
	public function __construct($_nic = NULL,$_name = NULL,$_firstname = NULL,$_organisation = NULL,$_city = NULL)
	{
		parent::__construct(array('nic'=>$_nic,'name'=>$_name,'firstname'=>$_firstname,'organisation'=>$_organisation,'city'=>$_city));
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get firstname value
	 * @return string|null
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set firstname value
	 * @param string $_firstname the firstname
	 * @return string
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get organisation value
	 * @return string|null
	 */
	public function getOrganisation()
	{
		return $this->organisation;
	}
	/**
	 * Set organisation value
	 * @param string $_organisation the organisation
	 * @return string
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Get city value
	 * @return string|null
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set city value
	 * @param string $_city the city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNicPublicInfoReturn
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