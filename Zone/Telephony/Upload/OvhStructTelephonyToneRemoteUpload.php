<?php
/**
 * File for class OvhStructTelephonyToneRemoteUpload
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyToneRemoteUpload originally named telephonyToneRemoteUpload
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyToneRemoteUpload extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The toneType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toneType;
	/**
	 * The filename
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filename;
	/**
	 * The url
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $url;
	/**
	 * Constructor method for telephonyToneRemoteUpload
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_toneType
	 * @param string $_filename
	 * @param string $_url
	 * @return OvhStructTelephonyToneRemoteUpload
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_toneType = NULL,$_filename = NULL,$_url = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'toneType'=>$_toneType,'filename'=>$_filename,'url'=>$_url));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
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
	 * Get toneType value
	 * @return string|null
	 */
	public function getToneType()
	{
		return $this->toneType;
	}
	/**
	 * Set toneType value
	 * @param string $_toneType the toneType
	 * @return string
	 */
	public function setToneType($_toneType)
	{
		return ($this->toneType = $_toneType);
	}
	/**
	 * Get filename value
	 * @return string|null
	 */
	public function getFilename()
	{
		return $this->filename;
	}
	/**
	 * Set filename value
	 * @param string $_filename the filename
	 * @return string
	 */
	public function setFilename($_filename)
	{
		return ($this->filename = $_filename);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyToneRemoteUpload
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