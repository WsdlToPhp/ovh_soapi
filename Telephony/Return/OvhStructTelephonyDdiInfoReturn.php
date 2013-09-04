<?php
/**
 * File for class OvhStructTelephonyDdiInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDdiInfoReturn originally named telephonyDdiInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDdiInfoReturn extends OvhWsdlClass
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
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * The logged
	 * @var boolean
	 */
	public $logged;
	/**
	 * Constructor method for telephonyDdiInfoReturn
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_country
	 * @param int $_noReplyTimer
	 * @param boolean $_logged
	 * @return OvhStructTelephonyDdiInfoReturn
	 */
	public function __construct($_number = NULL,$_country = NULL,$_noReplyTimer = NULL,$_logged = NULL)
	{
		parent::__construct(array('number'=>$_number,'country'=>$_country,'noReplyTimer'=>$_noReplyTimer,'logged'=>$_logged));
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
	 * Get noReplyTimer value
	 * @return int|null
	 */
	public function getNoReplyTimer()
	{
		return $this->noReplyTimer;
	}
	/**
	 * Set noReplyTimer value
	 * @param int $_noReplyTimer the noReplyTimer
	 * @return int
	 */
	public function setNoReplyTimer($_noReplyTimer)
	{
		return ($this->noReplyTimer = $_noReplyTimer);
	}
	/**
	 * Get logged value
	 * @return boolean|null
	 */
	public function getLogged()
	{
		return $this->logged;
	}
	/**
	 * Set logged value
	 * @param boolean $_logged the logged
	 * @return boolean
	 */
	public function setLogged($_logged)
	{
		return ($this->logged = $_logged);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDdiInfoReturn
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