<?php
/**
 * File for class OvhStructZoneStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructZoneStruct originally named zoneStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructZoneStruct extends OvhWsdlClass
{
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The fieldtype
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * Constructor method for zoneStruct
	 * @see parent::__construct()
	 * @param string $_subdomain
	 * @param string $_fieldtype
	 * @param string $_target
	 * @return OvhStructZoneStruct
	 */
	public function __construct($_subdomain = NULL,$_fieldtype = NULL,$_target = NULL)
	{
		parent::__construct(array('subdomain'=>$_subdomain,'fieldtype'=>$_fieldtype,'target'=>$_target));
	}
	/**
	 * Get subdomain value
	 * @return string|null
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set subdomain value
	 * @param string $_subdomain the subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get fieldtype value
	 * @return string|null
	 */
	public function getFieldtype()
	{
		return $this->fieldtype;
	}
	/**
	 * Set fieldtype value
	 * @param string $_fieldtype the fieldtype
	 * @return string
	 */
	public function setFieldtype($_fieldtype)
	{
		return ($this->fieldtype = $_fieldtype);
	}
	/**
	 * Get target value
	 * @return string|null
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set target value
	 * @param string $_target the target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructZoneStruct
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