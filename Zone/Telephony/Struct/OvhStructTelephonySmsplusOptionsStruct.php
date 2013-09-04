<?php
/**
 * File for class OvhStructTelephonySmsplusOptionsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusOptionsStruct originally named telephonySmsplusOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusOptionsStruct extends OvhWsdlClass
{
	/**
	 * The sendingNoSmsMt
	 * @var boolean
	 */
	public $sendingNoSmsMt;
	/**
	 * The defaultSmsAccount
	 * @var string
	 */
	public $defaultSmsAccount;
	/**
	 * The defaultSmsSender
	 * @var string
	 */
	public $defaultSmsSender;
	/**
	 * The defaultSmsAccountMtBilling
	 * @var string
	 */
	public $defaultSmsAccountMtBilling;
	/**
	 * The trackingMedias
	 * @var OvhStructMyArrayOfStringType
	 */
	public $trackingMedias;
	/**
	 * The trackingTargets
	 * @var OvhStructMyArrayOfStringType
	 */
	public $trackingTargets;
	/**
	 * Constructor method for telephonySmsplusOptionsStruct
	 * @see parent::__construct()
	 * @param boolean $_sendingNoSmsMt
	 * @param string $_defaultSmsAccount
	 * @param string $_defaultSmsSender
	 * @param string $_defaultSmsAccountMtBilling
	 * @param OvhStructMyArrayOfStringType $_trackingMedias
	 * @param OvhStructMyArrayOfStringType $_trackingTargets
	 * @return OvhStructTelephonySmsplusOptionsStruct
	 */
	public function __construct($_sendingNoSmsMt = NULL,$_defaultSmsAccount = NULL,$_defaultSmsSender = NULL,$_defaultSmsAccountMtBilling = NULL,$_trackingMedias = NULL,$_trackingTargets = NULL)
	{
		parent::__construct(array('sendingNoSmsMt'=>$_sendingNoSmsMt,'defaultSmsAccount'=>$_defaultSmsAccount,'defaultSmsSender'=>$_defaultSmsSender,'defaultSmsAccountMtBilling'=>$_defaultSmsAccountMtBilling,'trackingMedias'=>($_trackingMedias instanceof OvhStructMyArrayOfStringType)?$_trackingMedias:new OvhStructMyArrayOfStringType($_trackingMedias),'trackingTargets'=>($_trackingTargets instanceof OvhStructMyArrayOfStringType)?$_trackingTargets:new OvhStructMyArrayOfStringType($_trackingTargets)));
	}
	/**
	 * Get sendingNoSmsMt value
	 * @return boolean|null
	 */
	public function getSendingNoSmsMt()
	{
		return $this->sendingNoSmsMt;
	}
	/**
	 * Set sendingNoSmsMt value
	 * @param boolean $_sendingNoSmsMt the sendingNoSmsMt
	 * @return boolean
	 */
	public function setSendingNoSmsMt($_sendingNoSmsMt)
	{
		return ($this->sendingNoSmsMt = $_sendingNoSmsMt);
	}
	/**
	 * Get defaultSmsAccount value
	 * @return string|null
	 */
	public function getDefaultSmsAccount()
	{
		return $this->defaultSmsAccount;
	}
	/**
	 * Set defaultSmsAccount value
	 * @param string $_defaultSmsAccount the defaultSmsAccount
	 * @return string
	 */
	public function setDefaultSmsAccount($_defaultSmsAccount)
	{
		return ($this->defaultSmsAccount = $_defaultSmsAccount);
	}
	/**
	 * Get defaultSmsSender value
	 * @return string|null
	 */
	public function getDefaultSmsSender()
	{
		return $this->defaultSmsSender;
	}
	/**
	 * Set defaultSmsSender value
	 * @param string $_defaultSmsSender the defaultSmsSender
	 * @return string
	 */
	public function setDefaultSmsSender($_defaultSmsSender)
	{
		return ($this->defaultSmsSender = $_defaultSmsSender);
	}
	/**
	 * Get defaultSmsAccountMtBilling value
	 * @return string|null
	 */
	public function getDefaultSmsAccountMtBilling()
	{
		return $this->defaultSmsAccountMtBilling;
	}
	/**
	 * Set defaultSmsAccountMtBilling value
	 * @param string $_defaultSmsAccountMtBilling the defaultSmsAccountMtBilling
	 * @return string
	 */
	public function setDefaultSmsAccountMtBilling($_defaultSmsAccountMtBilling)
	{
		return ($this->defaultSmsAccountMtBilling = $_defaultSmsAccountMtBilling);
	}
	/**
	 * Get trackingMedias value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getTrackingMedias()
	{
		return $this->trackingMedias;
	}
	/**
	 * Set trackingMedias value
	 * @param OvhStructMyArrayOfStringType $_trackingMedias the trackingMedias
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setTrackingMedias($_trackingMedias)
	{
		return ($this->trackingMedias = $_trackingMedias);
	}
	/**
	 * Get trackingTargets value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getTrackingTargets()
	{
		return $this->trackingTargets;
	}
	/**
	 * Set trackingTargets value
	 * @param OvhStructMyArrayOfStringType $_trackingTargets the trackingTargets
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setTrackingTargets($_trackingTargets)
	{
		return ($this->trackingTargets = $_trackingTargets);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusOptionsStruct
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