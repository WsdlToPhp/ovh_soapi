<?php
/**
 * File for class OvhStructTelephonyTonesOptionsModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyTonesOptionsModify originally named telephonyTonesOptionsModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyTonesOptionsModify extends OvhWsdlClass
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
	 * The toneRingback
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toneRingback;
	/**
	 * The toneOnHold
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toneOnHold;
	/**
	 * The toneOnClosure
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toneOnClosure;
	/**
	 * The toneOnCallWaiting
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $toneOnCallWaiting;
	/**
	 * Constructor method for telephonyTonesOptionsModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_toneRingback
	 * @param string $_toneOnHold
	 * @param string $_toneOnClosure
	 * @param string $_toneOnCallWaiting
	 * @return OvhStructTelephonyTonesOptionsModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_toneRingback = NULL,$_toneOnHold = NULL,$_toneOnClosure = NULL,$_toneOnCallWaiting = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'toneRingback'=>$_toneRingback,'toneOnHold'=>$_toneOnHold,'toneOnClosure'=>$_toneOnClosure,'toneOnCallWaiting'=>$_toneOnCallWaiting));
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
	 * Get toneRingback value
	 * @return string|null
	 */
	public function getToneRingback()
	{
		return $this->toneRingback;
	}
	/**
	 * Set toneRingback value
	 * @param string $_toneRingback the toneRingback
	 * @return string
	 */
	public function setToneRingback($_toneRingback)
	{
		return ($this->toneRingback = $_toneRingback);
	}
	/**
	 * Get toneOnHold value
	 * @return string|null
	 */
	public function getToneOnHold()
	{
		return $this->toneOnHold;
	}
	/**
	 * Set toneOnHold value
	 * @param string $_toneOnHold the toneOnHold
	 * @return string
	 */
	public function setToneOnHold($_toneOnHold)
	{
		return ($this->toneOnHold = $_toneOnHold);
	}
	/**
	 * Get toneOnClosure value
	 * @return string|null
	 */
	public function getToneOnClosure()
	{
		return $this->toneOnClosure;
	}
	/**
	 * Set toneOnClosure value
	 * @param string $_toneOnClosure the toneOnClosure
	 * @return string
	 */
	public function setToneOnClosure($_toneOnClosure)
	{
		return ($this->toneOnClosure = $_toneOnClosure);
	}
	/**
	 * Get toneOnCallWaiting value
	 * @return string|null
	 */
	public function getToneOnCallWaiting()
	{
		return $this->toneOnCallWaiting;
	}
	/**
	 * Set toneOnCallWaiting value
	 * @param string $_toneOnCallWaiting the toneOnCallWaiting
	 * @return string
	 */
	public function setToneOnCallWaiting($_toneOnCallWaiting)
	{
		return ($this->toneOnCallWaiting = $_toneOnCallWaiting);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyTonesOptionsModify
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