<?php
/**
 * File for class OvhStructTelephonyBillingAccountStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountStruct originally named telephonyBillingAccountStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountStruct extends OvhWsdlClass
{
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The mobile
	 * @var string
	 */
	public $mobile;
	/**
	 * The mobileDestination
	 * @var string
	 */
	public $mobileDestination;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The trusted
	 * @var boolean
	 */
	public $trusted;
	/**
	 * The pendingAction
	 * @var OvhStructTelephonyPendingActionStruct
	 */
	public $pendingAction;
	/**
	 * The descriptionUser
	 * @var string
	 */
	public $descriptionUser;
	/**
	 * Constructor method for telephonyBillingAccountStruct
	 * @see parent::__construct()
	 * @param string $_description
	 * @param string $_mobile
	 * @param string $_mobileDestination
	 * @param string $_expirationDate
	 * @param string $_version
	 * @param boolean $_trusted
	 * @param OvhStructTelephonyPendingActionStruct $_pendingAction
	 * @param string $_descriptionUser
	 * @return OvhStructTelephonyBillingAccountStruct
	 */
	public function __construct($_description = NULL,$_mobile = NULL,$_mobileDestination = NULL,$_expirationDate = NULL,$_version = NULL,$_trusted = NULL,$_pendingAction = NULL,$_descriptionUser = NULL)
	{
		parent::__construct(array('description'=>$_description,'mobile'=>$_mobile,'mobileDestination'=>$_mobileDestination,'expirationDate'=>$_expirationDate,'version'=>$_version,'trusted'=>$_trusted,'pendingAction'=>$_pendingAction,'descriptionUser'=>$_descriptionUser));
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
	 * Get mobile value
	 * @return string|null
	 */
	public function getMobile()
	{
		return $this->mobile;
	}
	/**
	 * Set mobile value
	 * @param string $_mobile the mobile
	 * @return string
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Get mobileDestination value
	 * @return string|null
	 */
	public function getMobileDestination()
	{
		return $this->mobileDestination;
	}
	/**
	 * Set mobileDestination value
	 * @param string $_mobileDestination the mobileDestination
	 * @return string
	 */
	public function setMobileDestination($_mobileDestination)
	{
		return ($this->mobileDestination = $_mobileDestination);
	}
	/**
	 * Get expirationDate value
	 * @return string|null
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set expirationDate value
	 * @param string $_expirationDate the expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set version value
	 * @param string $_version the version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get trusted value
	 * @return boolean|null
	 */
	public function getTrusted()
	{
		return $this->trusted;
	}
	/**
	 * Set trusted value
	 * @param boolean $_trusted the trusted
	 * @return boolean
	 */
	public function setTrusted($_trusted)
	{
		return ($this->trusted = $_trusted);
	}
	/**
	 * Get pendingAction value
	 * @return OvhStructTelephonyPendingActionStruct|null
	 */
	public function getPendingAction()
	{
		return $this->pendingAction;
	}
	/**
	 * Set pendingAction value
	 * @param OvhStructTelephonyPendingActionStruct $_pendingAction the pendingAction
	 * @return OvhStructTelephonyPendingActionStruct
	 */
	public function setPendingAction($_pendingAction)
	{
		return ($this->pendingAction = $_pendingAction);
	}
	/**
	 * Get descriptionUser value
	 * @return string|null
	 */
	public function getDescriptionUser()
	{
		return $this->descriptionUser;
	}
	/**
	 * Set descriptionUser value
	 * @param string $_descriptionUser the descriptionUser
	 * @return string
	 */
	public function setDescriptionUser($_descriptionUser)
	{
		return ($this->descriptionUser = $_descriptionUser);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountStruct
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