<?php
/**
 * File for class OvhStructTelephonyTonesOptionsListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyTonesOptionsListReturn originally named telephonyTonesOptionsListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyTonesOptionsListReturn extends OvhWsdlClass
{
	/**
	 * The toneRingback
	 * @var string
	 */
	public $toneRingback;
	/**
	 * The toneOnHold
	 * @var string
	 */
	public $toneOnHold;
	/**
	 * The toneOnClosure
	 * @var string
	 */
	public $toneOnClosure;
	/**
	 * The toneOnCallWaiting
	 * @var string
	 */
	public $toneOnCallWaiting;
	/**
	 * Constructor method for telephonyTonesOptionsListReturn
	 * @see parent::__construct()
	 * @param string $_toneRingback
	 * @param string $_toneOnHold
	 * @param string $_toneOnClosure
	 * @param string $_toneOnCallWaiting
	 * @return OvhStructTelephonyTonesOptionsListReturn
	 */
	public function __construct($_toneRingback = NULL,$_toneOnHold = NULL,$_toneOnClosure = NULL,$_toneOnCallWaiting = NULL)
	{
		parent::__construct(array('toneRingback'=>$_toneRingback,'toneOnHold'=>$_toneOnHold,'toneOnClosure'=>$_toneOnClosure,'toneOnCallWaiting'=>$_toneOnCallWaiting));
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
	 * @return OvhStructTelephonyTonesOptionsListReturn
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