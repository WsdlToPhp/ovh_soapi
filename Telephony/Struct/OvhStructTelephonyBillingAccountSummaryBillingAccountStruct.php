<?php
/**
 * File for class OvhStructTelephonyBillingAccountSummaryBillingAccountStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountSummaryBillingAccountStruct originally named telephonyBillingAccountSummaryBillingAccountStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountSummaryBillingAccountStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The betaGammaOffer
	 * @var boolean
	 */
	public $betaGammaOffer;
	/**
	 * The mobile
	 * @var OvhStructTelephonyCallsSummaryStruct
	 */
	public $mobile;
	/**
	 * Constructor method for telephonyBillingAccountSummaryBillingAccountStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_description
	 * @param boolean $_betaGammaOffer
	 * @param OvhStructTelephonyCallsSummaryStruct $_mobile
	 * @return OvhStructTelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public function __construct($_name = NULL,$_description = NULL,$_betaGammaOffer = NULL,$_mobile = NULL)
	{
		parent::__construct(array('name'=>$_name,'description'=>$_description,'betaGammaOffer'=>$_betaGammaOffer,'mobile'=>$_mobile));
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
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
	 * Get betaGammaOffer value
	 * @return boolean|null
	 */
	public function getBetaGammaOffer()
	{
		return $this->betaGammaOffer;
	}
	/**
	 * Set betaGammaOffer value
	 * @param boolean $_betaGammaOffer the betaGammaOffer
	 * @return boolean
	 */
	public function setBetaGammaOffer($_betaGammaOffer)
	{
		return ($this->betaGammaOffer = $_betaGammaOffer);
	}
	/**
	 * Get mobile value
	 * @return OvhStructTelephonyCallsSummaryStruct|null
	 */
	public function getMobile()
	{
		return $this->mobile;
	}
	/**
	 * Set mobile value
	 * @param OvhStructTelephonyCallsSummaryStruct $_mobile the mobile
	 * @return OvhStructTelephonyCallsSummaryStruct
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountSummaryBillingAccountStruct
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