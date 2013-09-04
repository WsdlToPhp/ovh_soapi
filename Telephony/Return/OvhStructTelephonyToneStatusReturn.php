<?php
/**
 * File for class OvhStructTelephonyToneStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyToneStatusReturn originally named telephonyToneStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyToneStatusReturn extends OvhWsdlClass
{
	/**
	 * The ringback
	 * @var boolean
	 */
	public $ringback;
	/**
	 * The onhold
	 * @var boolean
	 */
	public $onhold;
	/**
	 * The onclosure
	 * @var boolean
	 */
	public $onclosure;
	/**
	 * The callwaiting
	 * @var boolean
	 */
	public $callwaiting;
	/**
	 * Constructor method for telephonyToneStatusReturn
	 * @see parent::__construct()
	 * @param boolean $_ringback
	 * @param boolean $_onhold
	 * @param boolean $_onclosure
	 * @param boolean $_callwaiting
	 * @return OvhStructTelephonyToneStatusReturn
	 */
	public function __construct($_ringback = NULL,$_onhold = NULL,$_onclosure = NULL,$_callwaiting = NULL)
	{
		parent::__construct(array('ringback'=>$_ringback,'onhold'=>$_onhold,'onclosure'=>$_onclosure,'callwaiting'=>$_callwaiting));
	}
	/**
	 * Get ringback value
	 * @return boolean|null
	 */
	public function getRingback()
	{
		return $this->ringback;
	}
	/**
	 * Set ringback value
	 * @param boolean $_ringback the ringback
	 * @return boolean
	 */
	public function setRingback($_ringback)
	{
		return ($this->ringback = $_ringback);
	}
	/**
	 * Get onhold value
	 * @return boolean|null
	 */
	public function getOnhold()
	{
		return $this->onhold;
	}
	/**
	 * Set onhold value
	 * @param boolean $_onhold the onhold
	 * @return boolean
	 */
	public function setOnhold($_onhold)
	{
		return ($this->onhold = $_onhold);
	}
	/**
	 * Get onclosure value
	 * @return boolean|null
	 */
	public function getOnclosure()
	{
		return $this->onclosure;
	}
	/**
	 * Set onclosure value
	 * @param boolean $_onclosure the onclosure
	 * @return boolean
	 */
	public function setOnclosure($_onclosure)
	{
		return ($this->onclosure = $_onclosure);
	}
	/**
	 * Get callwaiting value
	 * @return boolean|null
	 */
	public function getCallwaiting()
	{
		return $this->callwaiting;
	}
	/**
	 * Set callwaiting value
	 * @param boolean $_callwaiting the callwaiting
	 * @return boolean
	 */
	public function setCallwaiting($_callwaiting)
	{
		return ($this->callwaiting = $_callwaiting);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyToneStatusReturn
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