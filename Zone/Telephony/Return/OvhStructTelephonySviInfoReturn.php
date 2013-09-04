<?php
/**
 * File for class OvhStructTelephonySviInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySviInfoReturn originally named telephonySviInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySviInfoReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The recordinfo
	 * @var string
	 */
	public $recordinfo;
	/**
	 * Constructor method for telephonySviInfoReturn
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_country
	 * @param string $_url
	 * @param string $_recordinfo
	 * @return OvhStructTelephonySviInfoReturn
	 */
	public function __construct($_number = NULL,$_country = NULL,$_url = NULL,$_recordinfo = NULL)
	{
		parent::__construct(array('number'=>$_number,'country'=>$_country,'url'=>$_url,'recordinfo'=>$_recordinfo));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get recordinfo value
	 * @return string|null
	 */
	public function getRecordinfo()
	{
		return $this->recordinfo;
	}
	/**
	 * Set recordinfo value
	 * @param string $_recordinfo the recordinfo
	 * @return string
	 */
	public function setRecordinfo($_recordinfo)
	{
		return ($this->recordinfo = $_recordinfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySviInfoReturn
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