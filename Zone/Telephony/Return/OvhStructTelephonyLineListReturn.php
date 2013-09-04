<?php
/**
 * File for class OvhStructTelephonyLineListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineListReturn originally named telephonyLineListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineListReturn extends OvhWsdlClass
{
	/**
	 * The link
	 * @var OvhStructMyArrayOfTelephonyLineStructType
	 */
	public $link;
	/**
	 * The alias
	 * @var OvhStructMyArrayOfTelephonyLineStructType
	 */
	public $alias;
	/**
	 * Constructor method for telephonyLineListReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfTelephonyLineStructType $_link
	 * @param OvhStructMyArrayOfTelephonyLineStructType $_alias
	 * @return OvhStructTelephonyLineListReturn
	 */
	public function __construct($_link = NULL,$_alias = NULL)
	{
		parent::__construct(array('link'=>($_link instanceof OvhStructMyArrayOfTelephonyLineStructType)?$_link:new OvhStructMyArrayOfTelephonyLineStructType($_link),'alias'=>($_alias instanceof OvhStructMyArrayOfTelephonyLineStructType)?$_alias:new OvhStructMyArrayOfTelephonyLineStructType($_alias)));
	}
	/**
	 * Get link value
	 * @return OvhStructMyArrayOfTelephonyLineStructType|null
	 */
	public function getLink()
	{
		return $this->link;
	}
	/**
	 * Set link value
	 * @param OvhStructMyArrayOfTelephonyLineStructType $_link the link
	 * @return OvhStructMyArrayOfTelephonyLineStructType
	 */
	public function setLink($_link)
	{
		return ($this->link = $_link);
	}
	/**
	 * Get alias value
	 * @return OvhStructMyArrayOfTelephonyLineStructType|null
	 */
	public function getAlias()
	{
		return $this->alias;
	}
	/**
	 * Set alias value
	 * @param OvhStructMyArrayOfTelephonyLineStructType $_alias the alias
	 * @return OvhStructMyArrayOfTelephonyLineStructType
	 */
	public function setAlias($_alias)
	{
		return ($this->alias = $_alias);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineListReturn
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