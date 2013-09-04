<?php
/**
 * File for class OvhStructTelephonyHuntingGenericScreenSet
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingGenericScreenSet originally named telephonyHuntingGenericScreenSet
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingGenericScreenSet extends OvhWsdlClass
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
	 * The timesStart
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $timesStart;
	/**
	 * The timesEnd
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $timesEnd;
	/**
	 * The daysType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $daysType;
	/**
	 * The forwardPolicyIndex
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $forwardPolicyIndex;
	/**
	 * Constructor method for telephonyHuntingGenericScreenSet
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param OvhStructMyArrayOfStringType $_timesStart
	 * @param OvhStructMyArrayOfStringType $_timesEnd
	 * @param OvhStructMyArrayOfStringType $_daysType
	 * @param OvhStructMyArrayOfStringType $_forwardPolicyIndex
	 * @return OvhStructTelephonyHuntingGenericScreenSet
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_timesStart = NULL,$_timesEnd = NULL,$_daysType = NULL,$_forwardPolicyIndex = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'timesStart'=>($_timesStart instanceof OvhStructMyArrayOfStringType)?$_timesStart:new OvhStructMyArrayOfStringType($_timesStart),'timesEnd'=>($_timesEnd instanceof OvhStructMyArrayOfStringType)?$_timesEnd:new OvhStructMyArrayOfStringType($_timesEnd),'daysType'=>($_daysType instanceof OvhStructMyArrayOfStringType)?$_daysType:new OvhStructMyArrayOfStringType($_daysType),'forwardPolicyIndex'=>($_forwardPolicyIndex instanceof OvhStructMyArrayOfStringType)?$_forwardPolicyIndex:new OvhStructMyArrayOfStringType($_forwardPolicyIndex)));
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
	 * Get timesStart value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getTimesStart()
	{
		return $this->timesStart;
	}
	/**
	 * Set timesStart value
	 * @param OvhStructMyArrayOfStringType $_timesStart the timesStart
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setTimesStart($_timesStart)
	{
		return ($this->timesStart = $_timesStart);
	}
	/**
	 * Get timesEnd value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getTimesEnd()
	{
		return $this->timesEnd;
	}
	/**
	 * Set timesEnd value
	 * @param OvhStructMyArrayOfStringType $_timesEnd the timesEnd
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setTimesEnd($_timesEnd)
	{
		return ($this->timesEnd = $_timesEnd);
	}
	/**
	 * Get daysType value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getDaysType()
	{
		return $this->daysType;
	}
	/**
	 * Set daysType value
	 * @param OvhStructMyArrayOfStringType $_daysType the daysType
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setDaysType($_daysType)
	{
		return ($this->daysType = $_daysType);
	}
	/**
	 * Get forwardPolicyIndex value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getForwardPolicyIndex()
	{
		return $this->forwardPolicyIndex;
	}
	/**
	 * Set forwardPolicyIndex value
	 * @param OvhStructMyArrayOfStringType $_forwardPolicyIndex the forwardPolicyIndex
	 * @return OvhStructMyArrayOfStringType
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
	 * @return OvhStructTelephonyHuntingGenericScreenSet
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