<?php
/**
 * File for class OvhStructTelephonyHuntingGenericScreenStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingGenericScreenStruct originally named telephonyHuntingGenericScreenStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingGenericScreenStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The timeEnd
	 * @var string
	 */
	public $timeEnd;
	/**
	 * The timeStart
	 * @var string
	 */
	public $timeStart;
	/**
	 * The dayType
	 * @var string
	 */
	public $dayType;
	/**
	 * The forwardPolicyIndex
	 * @var string
	 */
	public $forwardPolicyIndex;
	/**
	 * Constructor method for telephonyHuntingGenericScreenStruct
	 * @see parent::__construct()
	 * @param string $_status
	 * @param string $_timeEnd
	 * @param string $_timeStart
	 * @param string $_dayType
	 * @param string $_forwardPolicyIndex
	 * @return OvhStructTelephonyHuntingGenericScreenStruct
	 */
	public function __construct($_status = NULL,$_timeEnd = NULL,$_timeStart = NULL,$_dayType = NULL,$_forwardPolicyIndex = NULL)
	{
		parent::__construct(array('status'=>$_status,'timeEnd'=>$_timeEnd,'timeStart'=>$_timeStart,'dayType'=>$_dayType,'forwardPolicyIndex'=>$_forwardPolicyIndex));
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
	 * Get timeEnd value
	 * @return string|null
	 */
	public function getTimeEnd()
	{
		return $this->timeEnd;
	}
	/**
	 * Set timeEnd value
	 * @param string $_timeEnd the timeEnd
	 * @return string
	 */
	public function setTimeEnd($_timeEnd)
	{
		return ($this->timeEnd = $_timeEnd);
	}
	/**
	 * Get timeStart value
	 * @return string|null
	 */
	public function getTimeStart()
	{
		return $this->timeStart;
	}
	/**
	 * Set timeStart value
	 * @param string $_timeStart the timeStart
	 * @return string
	 */
	public function setTimeStart($_timeStart)
	{
		return ($this->timeStart = $_timeStart);
	}
	/**
	 * Get dayType value
	 * @return string|null
	 */
	public function getDayType()
	{
		return $this->dayType;
	}
	/**
	 * Set dayType value
	 * @param string $_dayType the dayType
	 * @return string
	 */
	public function setDayType($_dayType)
	{
		return ($this->dayType = $_dayType);
	}
	/**
	 * Get forwardPolicyIndex value
	 * @return string|null
	 */
	public function getForwardPolicyIndex()
	{
		return $this->forwardPolicyIndex;
	}
	/**
	 * Set forwardPolicyIndex value
	 * @param string $_forwardPolicyIndex the forwardPolicyIndex
	 * @return string
	 */
	public function setForwardPolicyIndex($_forwardPolicyIndex)
	{
		return ($this->forwardPolicyIndex = $_forwardPolicyIndex);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingGenericScreenStruct
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