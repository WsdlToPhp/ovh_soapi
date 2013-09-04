<?php
/**
 * File for class OvhStructSupportCapabilitiesReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportCapabilitiesReturn originally named supportCapabilitiesReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The hasSupportPlus
	 * @var boolean
	 */
	public $hasSupportPlus;
	/**
	 * Constructor method for supportCapabilitiesReturn
	 * @see parent::__construct()
	 * @param boolean $_hasSupportPlus
	 * @return OvhStructSupportCapabilitiesReturn
	 */
	public function __construct($_hasSupportPlus = NULL)
	{
		parent::__construct(array('hasSupportPlus'=>$_hasSupportPlus));
	}
	/**
	 * Get hasSupportPlus value
	 * @return boolean|null
	 */
	public function getHasSupportPlus()
	{
		return $this->hasSupportPlus;
	}
	/**
	 * Set hasSupportPlus value
	 * @param boolean $_hasSupportPlus the hasSupportPlus
	 * @return boolean
	 */
	public function setHasSupportPlus($_hasSupportPlus)
	{
		return ($this->hasSupportPlus = $_hasSupportPlus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportCapabilitiesReturn
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