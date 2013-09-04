<?php
/**
 * File for class OvhStructRipeReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeReturn originally named ripeReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeReturn extends OvhWsdlClass
{
	/**
	 * The inetnum
	 * @var OvhStructRipeInetnumStruct
	 */
	public $inetnum;
	/**
	 * The organisation
	 * @var OvhStructRipeOrganisationStruct
	 */
	public $organisation;
	/**
	 * Constructor method for ripeReturn
	 * @see parent::__construct()
	 * @param OvhStructRipeInetnumStruct $_inetnum
	 * @param OvhStructRipeOrganisationStruct $_organisation
	 * @return OvhStructRipeReturn
	 */
	public function __construct($_inetnum = NULL,$_organisation = NULL)
	{
		parent::__construct(array('inetnum'=>$_inetnum,'organisation'=>$_organisation));
	}
	/**
	 * Get inetnum value
	 * @return OvhStructRipeInetnumStruct|null
	 */
	public function getInetnum()
	{
		return $this->inetnum;
	}
	/**
	 * Set inetnum value
	 * @param OvhStructRipeInetnumStruct $_inetnum the inetnum
	 * @return OvhStructRipeInetnumStruct
	 */
	public function setInetnum($_inetnum)
	{
		return ($this->inetnum = $_inetnum);
	}
	/**
	 * Get organisation value
	 * @return OvhStructRipeOrganisationStruct|null
	 */
	public function getOrganisation()
	{
		return $this->organisation;
	}
	/**
	 * Set organisation value
	 * @param OvhStructRipeOrganisationStruct $_organisation the organisation
	 * @return OvhStructRipeOrganisationStruct
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeReturn
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