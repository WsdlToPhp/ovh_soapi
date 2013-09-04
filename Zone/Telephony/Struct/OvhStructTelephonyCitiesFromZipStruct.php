<?php
/**
 * File for class OvhStructTelephonyCitiesFromZipStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyCitiesFromZipStruct originally named telephonyCitiesFromZipStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyCitiesFromZipStruct extends OvhWsdlClass
{
	/**
	 * The insee
	 * @var string
	 */
	public $insee;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The zip
	 * @var string
	 */
	public $zip;
	/**
	 * The zne
	 * @var string
	 */
	public $zne;
	/**
	 * Constructor method for telephonyCitiesFromZipStruct
	 * @see parent::__construct()
	 * @param string $_insee
	 * @param string $_city
	 * @param string $_zip
	 * @param string $_zne
	 * @return OvhStructTelephonyCitiesFromZipStruct
	 */
	public function __construct($_insee = NULL,$_city = NULL,$_zip = NULL,$_zne = NULL)
	{
		parent::__construct(array('insee'=>$_insee,'city'=>$_city,'zip'=>$_zip,'zne'=>$_zne));
	}
	/**
	 * Get insee value
	 * @return string|null
	 */
	public function getInsee()
	{
		return $this->insee;
	}
	/**
	 * Set insee value
	 * @param string $_insee the insee
	 * @return string
	 */
	public function setInsee($_insee)
	{
		return ($this->insee = $_insee);
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
	 * Get zip value
	 * @return string|null
	 */
	public function getZip()
	{
		return $this->zip;
	}
	/**
	 * Set zip value
	 * @param string $_zip the zip
	 * @return string
	 */
	public function setZip($_zip)
	{
		return ($this->zip = $_zip);
	}
	/**
	 * Get zne value
	 * @return string|null
	 */
	public function getZne()
	{
		return $this->zne;
	}
	/**
	 * Set zne value
	 * @param string $_zne the zne
	 * @return string
	 */
	public function setZne($_zne)
	{
		return ($this->zne = $_zne);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyCitiesFromZipStruct
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