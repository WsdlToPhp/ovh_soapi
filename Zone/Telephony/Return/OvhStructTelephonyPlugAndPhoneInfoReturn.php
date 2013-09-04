<?php
/**
 * File for class OvhStructTelephonyPlugAndPhoneInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPlugAndPhoneInfoReturn originally named telephonyPlugAndPhoneInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPlugAndPhoneInfoReturn extends OvhWsdlClass
{
	/**
	 * The brand
	 * @var string
	 */
	public $brand;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The gfKeyCount
	 * @var int
	 */
	public $gfKeyCount;
	/**
	 * The skin
	 * @var string
	 */
	public $skin;
	/**
	 * Constructor method for telephonyPlugAndPhoneInfoReturn
	 * @see parent::__construct()
	 * @param string $_brand
	 * @param string $_protocol
	 * @param string $_mac
	 * @param int $_gfKeyCount
	 * @param string $_skin
	 * @return OvhStructTelephonyPlugAndPhoneInfoReturn
	 */
	public function __construct($_brand = NULL,$_protocol = NULL,$_mac = NULL,$_gfKeyCount = NULL,$_skin = NULL)
	{
		parent::__construct(array('brand'=>$_brand,'protocol'=>$_protocol,'mac'=>$_mac,'gfKeyCount'=>$_gfKeyCount,'skin'=>$_skin));
	}
	/**
	 * Get brand value
	 * @return string|null
	 */
	public function getBrand()
	{
		return $this->brand;
	}
	/**
	 * Set brand value
	 * @param string $_brand the brand
	 * @return string
	 */
	public function setBrand($_brand)
	{
		return ($this->brand = $_brand);
	}
	/**
	 * Get protocol value
	 * @return string|null
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set protocol value
	 * @param string $_protocol the protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get mac value
	 * @return string|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param string $_mac the mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get gfKeyCount value
	 * @return int|null
	 */
	public function getGfKeyCount()
	{
		return $this->gfKeyCount;
	}
	/**
	 * Set gfKeyCount value
	 * @param int $_gfKeyCount the gfKeyCount
	 * @return int
	 */
	public function setGfKeyCount($_gfKeyCount)
	{
		return ($this->gfKeyCount = $_gfKeyCount);
	}
	/**
	 * Get skin value
	 * @return string|null
	 */
	public function getSkin()
	{
		return $this->skin;
	}
	/**
	 * Set skin value
	 * @param string $_skin the skin
	 * @return string
	 */
	public function setSkin($_skin)
	{
		return ($this->skin = $_skin);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPlugAndPhoneInfoReturn
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