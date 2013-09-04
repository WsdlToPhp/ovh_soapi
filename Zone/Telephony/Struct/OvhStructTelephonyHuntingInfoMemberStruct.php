<?php
/**
 * File for class OvhStructTelephonyHuntingInfoMemberStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingInfoMemberStruct originally named telephonyHuntingInfoMemberStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingInfoMemberStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The numberInternational
	 * @var string
	 */
	public $numberInternational;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The logged
	 * @var boolean
	 */
	public $logged;
	/**
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * Constructor method for telephonyHuntingInfoMemberStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_numberInternational
	 * @param string $_status
	 * @param boolean $_logged
	 * @param int $_noReplyTimer
	 * @return OvhStructTelephonyHuntingInfoMemberStruct
	 */
	public function __construct($_number = NULL,$_numberInternational = NULL,$_status = NULL,$_logged = NULL,$_noReplyTimer = NULL)
	{
		parent::__construct(array('number'=>$_number,'numberInternational'=>$_numberInternational,'status'=>$_status,'logged'=>$_logged,'noReplyTimer'=>$_noReplyTimer));
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
	 * Get numberInternational value
	 * @return string|null
	 */
	public function getNumberInternational()
	{
		return $this->numberInternational;
	}
	/**
	 * Set numberInternational value
	 * @param string $_numberInternational the numberInternational
	 * @return string
	 */
	public function setNumberInternational($_numberInternational)
	{
		return ($this->numberInternational = $_numberInternational);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingInfoMemberStruct
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