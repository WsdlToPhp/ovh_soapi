<?php
/**
 * File for class OvhStructTelephonyVoicemailMessagesStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyVoicemailMessagesStatusReturn originally named telephonyVoicemailMessagesStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyVoicemailMessagesStatusReturn extends OvhWsdlClass
{
	/**
	 * The unavailable
	 * @var boolean
	 */
	public $unavailable;
	/**
	 * The busy
	 * @var boolean
	 */
	public $busy;
	/**
	 * The temp
	 * @var boolean
	 */
	public $temp;
	/**
	 * The greet
	 * @var boolean
	 */
	public $greet;
	/**
	 * Constructor method for telephonyVoicemailMessagesStatusReturn
	 * @see parent::__construct()
	 * @param boolean $_unavailable
	 * @param boolean $_busy
	 * @param boolean $_temp
	 * @param boolean $_greet
	 * @return OvhStructTelephonyVoicemailMessagesStatusReturn
	 */
	public function __construct($_unavailable = NULL,$_busy = NULL,$_temp = NULL,$_greet = NULL)
	{
		parent::__construct(array('unavailable'=>$_unavailable,'busy'=>$_busy,'temp'=>$_temp,'greet'=>$_greet));
	}
	/**
	 * Get unavailable value
	 * @return boolean|null
	 */
	public function getUnavailable()
	{
		return $this->unavailable;
	}
	/**
	 * Set unavailable value
	 * @param boolean $_unavailable the unavailable
	 * @return boolean
	 */
	public function setUnavailable($_unavailable)
	{
		return ($this->unavailable = $_unavailable);
	}
	/**
	 * Get busy value
	 * @return boolean|null
	 */
	public function getBusy()
	{
		return $this->busy;
	}
	/**
	 * Set busy value
	 * @param boolean $_busy the busy
	 * @return boolean
	 */
	public function setBusy($_busy)
	{
		return ($this->busy = $_busy);
	}
	/**
	 * Get temp value
	 * @return boolean|null
	 */
	public function getTemp()
	{
		return $this->temp;
	}
	/**
	 * Set temp value
	 * @param boolean $_temp the temp
	 * @return boolean
	 */
	public function setTemp($_temp)
	{
		return ($this->temp = $_temp);
	}
	/**
	 * Get greet value
	 * @return boolean|null
	 */
	public function getGreet()
	{
		return $this->greet;
	}
	/**
	 * Set greet value
	 * @param boolean $_greet the greet
	 * @return boolean
	 */
	public function setGreet($_greet)
	{
		return ($this->greet = $_greet);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyVoicemailMessagesStatusReturn
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