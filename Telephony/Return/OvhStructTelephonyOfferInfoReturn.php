<?php
/**
 * File for class OvhStructTelephonyOfferInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyOfferInfoReturn originally named telephonyOfferInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyOfferInfoReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The nextBillingDate
	 * @var string
	 */
	public $nextBillingDate;
	/**
	 * The simultaneousLines
	 * @var int
	 */
	public $simultaneousLines;
	/**
	 * The hardware
	 * @var OvhStructTelephonyOfferInfoHardwareStruct
	 */
	public $hardware;
	/**
	 * The sipAccount
	 * @var OvhStructTelephonyOfferInfoSipAccountStruct
	 */
	public $sipAccount;
	/**
	 * Constructor method for telephonyOfferInfoReturn
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_description
	 * @param string $_offer
	 * @param string $_countryCode
	 * @param string $_nextBillingDate
	 * @param int $_simultaneousLines
	 * @param OvhStructTelephonyOfferInfoHardwareStruct $_hardware
	 * @param OvhStructTelephonyOfferInfoSipAccountStruct $_sipAccount
	 * @return OvhStructTelephonyOfferInfoReturn
	 */
	public function __construct($_number = NULL,$_description = NULL,$_offer = NULL,$_countryCode = NULL,$_nextBillingDate = NULL,$_simultaneousLines = NULL,$_hardware = NULL,$_sipAccount = NULL)
	{
		parent::__construct(array('number'=>$_number,'description'=>$_description,'offer'=>$_offer,'countryCode'=>$_countryCode,'nextBillingDate'=>$_nextBillingDate,'simultaneousLines'=>$_simultaneousLines,'hardware'=>$_hardware,'sipAccount'=>$_sipAccount));
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
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get countryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param string $_countryCode the countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get nextBillingDate value
	 * @return string|null
	 */
	public function getNextBillingDate()
	{
		return $this->nextBillingDate;
	}
	/**
	 * Set nextBillingDate value
	 * @param string $_nextBillingDate the nextBillingDate
	 * @return string
	 */
	public function setNextBillingDate($_nextBillingDate)
	{
		return ($this->nextBillingDate = $_nextBillingDate);
	}
	/**
	 * Get simultaneousLines value
	 * @return int|null
	 */
	public function getSimultaneousLines()
	{
		return $this->simultaneousLines;
	}
	/**
	 * Set simultaneousLines value
	 * @param int $_simultaneousLines the simultaneousLines
	 * @return int
	 */
	public function setSimultaneousLines($_simultaneousLines)
	{
		return ($this->simultaneousLines = $_simultaneousLines);
	}
	/**
	 * Get hardware value
	 * @return OvhStructTelephonyOfferInfoHardwareStruct|null
	 */
	public function getHardware()
	{
		return $this->hardware;
	}
	/**
	 * Set hardware value
	 * @param OvhStructTelephonyOfferInfoHardwareStruct $_hardware the hardware
	 * @return OvhStructTelephonyOfferInfoHardwareStruct
	 */
	public function setHardware($_hardware)
	{
		return ($this->hardware = $_hardware);
	}
	/**
	 * Get sipAccount value
	 * @return OvhStructTelephonyOfferInfoSipAccountStruct|null
	 */
	public function getSipAccount()
	{
		return $this->sipAccount;
	}
	/**
	 * Set sipAccount value
	 * @param OvhStructTelephonyOfferInfoSipAccountStruct $_sipAccount the sipAccount
	 * @return OvhStructTelephonyOfferInfoSipAccountStruct
	 */
	public function setSipAccount($_sipAccount)
	{
		return ($this->sipAccount = $_sipAccount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyOfferInfoReturn
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