<?php
/**
 * File for class OvhStructTelephonyHuntingGenericScreenOptionsModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingGenericScreenOptionsModify originally named telephonyHuntingGenericScreenOptionsModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingGenericScreenOptionsModify extends OvhWsdlClass
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
	 * The forwardUnconditionalNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $forwardUnconditionalNumber;
	/**
	 * The mainVoicemail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mainVoicemail;
	/**
	 * The forwardPolicyIndex
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $forwardPolicyIndex;
	/**
	 * The timeout
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $timeout;
	/**
	 * Constructor method for telephonyHuntingGenericScreenOptionsModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_forwardUnconditionalNumber
	 * @param string $_mainVoicemail
	 * @param string $_forwardPolicyIndex
	 * @param int $_timeout
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_forwardUnconditionalNumber = NULL,$_mainVoicemail = NULL,$_forwardPolicyIndex = NULL,$_timeout = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'forwardUnconditionalNumber'=>$_forwardUnconditionalNumber,'mainVoicemail'=>$_mainVoicemail,'forwardPolicyIndex'=>$_forwardPolicyIndex,'timeout'=>$_timeout));
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
	 * Get forwardUnconditionalNumber value
	 * @return string|null
	 */
	public function getForwardUnconditionalNumber()
	{
		return $this->forwardUnconditionalNumber;
	}
	/**
	 * Set forwardUnconditionalNumber value
	 * @param string $_forwardUnconditionalNumber the forwardUnconditionalNumber
	 * @return string
	 */
	public function setForwardUnconditionalNumber($_forwardUnconditionalNumber)
	{
		return ($this->forwardUnconditionalNumber = $_forwardUnconditionalNumber);
	}
	/**
	 * Get mainVoicemail value
	 * @return string|null
	 */
	public function getMainVoicemail()
	{
		return $this->mainVoicemail;
	}
	/**
	 * Set mainVoicemail value
	 * @param string $_mainVoicemail the mainVoicemail
	 * @return string
	 */
	public function setMainVoicemail($_mainVoicemail)
	{
		return ($this->mainVoicemail = $_mainVoicemail);
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
	 * Get timeout value
	 * @return int|null
	 */
	public function getTimeout()
	{
		return $this->timeout;
	}
	/**
	 * Set timeout value
	 * @param int $_timeout the timeout
	 * @return int
	 */
	public function setTimeout($_timeout)
	{
		return ($this->timeout = $_timeout);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsModify
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