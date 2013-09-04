<?php
/**
 * File for class OvhStructTelephonyDirectoryWayTypeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryWayTypeStruct originally named telephonyDirectoryWayTypeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryWayTypeStruct extends OvhWsdlClass
{
	/**
	 * The abbreviatedName
	 * @var string
	 */
	public $abbreviatedName;
	/**
	 * The wayName
	 * @var string
	 */
	public $wayName;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * Constructor method for telephonyDirectoryWayTypeStruct
	 * @see parent::__construct()
	 * @param string $_abbreviatedName
	 * @param string $_wayName
	 * @param string $_tag
	 * @return OvhStructTelephonyDirectoryWayTypeStruct
	 */
	public function __construct($_abbreviatedName = NULL,$_wayName = NULL,$_tag = NULL)
	{
		parent::__construct(array('abbreviatedName'=>$_abbreviatedName,'wayName'=>$_wayName,'tag'=>$_tag));
	}
	/**
	 * Get abbreviatedName value
	 * @return string|null
	 */
	public function getAbbreviatedName()
	{
		return $this->abbreviatedName;
	}
	/**
	 * Set abbreviatedName value
	 * @param string $_abbreviatedName the abbreviatedName
	 * @return string
	 */
	public function setAbbreviatedName($_abbreviatedName)
	{
		return ($this->abbreviatedName = $_abbreviatedName);
	}
	/**
	 * Get wayName value
	 * @return string|null
	 */
	public function getWayName()
	{
		return $this->wayName;
	}
	/**
	 * Set wayName value
	 * @param string $_wayName the wayName
	 * @return string
	 */
	public function setWayName($_wayName)
	{
		return ($this->wayName = $_wayName);
	}
	/**
	 * Get tag value
	 * @return string|null
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set tag value
	 * @param string $_tag the tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryWayTypeStruct
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