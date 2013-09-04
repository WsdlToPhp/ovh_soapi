<?php
/**
 * File for class OvhStructTelephonyConferenceAnnouncesStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceAnnouncesStatusReturn originally named telephonyConferenceAnnouncesStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceAnnouncesStatusReturn extends OvhWsdlClass
{
	/**
	 * The custom
	 * @var boolean
	 */
	public $custom;
	/**
	 * Constructor method for telephonyConferenceAnnouncesStatusReturn
	 * @see parent::__construct()
	 * @param boolean $_custom
	 * @return OvhStructTelephonyConferenceAnnouncesStatusReturn
	 */
	public function __construct($_custom = NULL)
	{
		parent::__construct(array('custom'=>$_custom));
	}
	/**
	 * Get custom value
	 * @return boolean|null
	 */
	public function getCustom()
	{
		return $this->custom;
	}
	/**
	 * Set custom value
	 * @param boolean $_custom the custom
	 * @return boolean
	 */
	public function setCustom($_custom)
	{
		return ($this->custom = $_custom);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceAnnouncesStatusReturn
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