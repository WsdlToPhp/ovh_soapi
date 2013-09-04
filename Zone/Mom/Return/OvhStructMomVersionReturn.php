<?php
/**
 * File for class OvhStructMomVersionReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMomVersionReturn originally named momVersionReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMomVersionReturn extends OvhWsdlClass
{
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The build
	 * @var string
	 */
	public $build;
	/**
	 * Constructor method for momVersionReturn
	 * @see parent::__construct()
	 * @param string $_version
	 * @param string $_build
	 * @return OvhStructMomVersionReturn
	 */
	public function __construct($_version = NULL,$_build = NULL)
	{
		parent::__construct(array('version'=>$_version,'build'=>$_build));
	}
	/**
	 * Get version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set version value
	 * @param string $_version the version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get build value
	 * @return string|null
	 */
	public function getBuild()
	{
		return $this->build;
	}
	/**
	 * Set build value
	 * @param string $_build the build
	 * @return string
	 */
	public function setBuild($_build)
	{
		return ($this->build = $_build);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMomVersionReturn
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