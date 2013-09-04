<?php
/**
 * File for class OvhStructTelephonyScreenListBlackWhiteChoiceModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyScreenListBlackWhiteChoiceModify originally named telephonyScreenListBlackWhiteChoiceModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyScreenListBlackWhiteChoiceModify extends OvhWsdlClass
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
	 * The screenList
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $screenList;
	/**
	 * The outgoingCodeUnlock
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $outgoingCodeUnlock;
	/**
	 * The incomingOoutgoing
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $incomingOoutgoing;
	/**
	 * Constructor method for telephonyScreenListBlackWhiteChoiceModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_screenList
	 * @param string $_outgoingCodeUnlock
	 * @param string $_incomingOoutgoing
	 * @return OvhStructTelephonyScreenListBlackWhiteChoiceModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_screenList = NULL,$_outgoingCodeUnlock = NULL,$_incomingOoutgoing = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'screenList'=>$_screenList,'outgoingCodeUnlock'=>$_outgoingCodeUnlock,'incomingOoutgoing'=>$_incomingOoutgoing));
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
	 * Get screenList value
	 * @return string|null
	 */
	public function getScreenList()
	{
		return $this->screenList;
	}
	/**
	 * Set screenList value
	 * @param string $_screenList the screenList
	 * @return string
	 */
	public function setScreenList($_screenList)
	{
		return ($this->screenList = $_screenList);
	}
	/**
	 * Get outgoingCodeUnlock value
	 * @return string|null
	 */
	public function getOutgoingCodeUnlock()
	{
		return $this->outgoingCodeUnlock;
	}
	/**
	 * Set outgoingCodeUnlock value
	 * @param string $_outgoingCodeUnlock the outgoingCodeUnlock
	 * @return string
	 */
	public function setOutgoingCodeUnlock($_outgoingCodeUnlock)
	{
		return ($this->outgoingCodeUnlock = $_outgoingCodeUnlock);
	}
	/**
	 * Get incomingOoutgoing value
	 * @return string|null
	 */
	public function getIncomingOoutgoing()
	{
		return $this->incomingOoutgoing;
	}
	/**
	 * Set incomingOoutgoing value
	 * @param string $_incomingOoutgoing the incomingOoutgoing
	 * @return string
	 */
	public function setIncomingOoutgoing($_incomingOoutgoing)
	{
		return ($this->incomingOoutgoing = $_incomingOoutgoing);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyScreenListBlackWhiteChoiceModify
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