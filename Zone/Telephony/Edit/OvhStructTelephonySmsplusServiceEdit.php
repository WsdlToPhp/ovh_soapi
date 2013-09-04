<?php
/**
 * File for class OvhStructTelephonySmsplusServiceEdit
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusServiceEdit originally named telephonySmsplusServiceEdit
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusServiceEdit extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $keyword;
	/**
	 * The description
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $description;
	/**
	 * The cgiActivation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $cgiActivation;
	/**
	 * The cgiUrl
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $cgiUrl;
	/**
	 * The text
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $text;
	/**
	 * The trackingMedias
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $trackingMedias;
	/**
	 * The trackingTargets
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $trackingTargets;
	/**
	 * The trackingDefaultSmsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $trackingDefaultSmsAccount;
	/**
	 * The trackingDefaultSmsSender
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $trackingDefaultSmsSender;
	/**
	 * The sendingDefaultSmsAccountMtBilling
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sendingDefaultSmsAccountMtBilling;
	/**
	 * The sendingNoSmsMt
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $sendingNoSmsMt;
	/**
	 * Constructor method for telephonySmsplusServiceEdit
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param string $_description
	 * @param boolean $_cgiActivation
	 * @param string $_cgiUrl
	 * @param string $_text
	 * @param OvhStructMyArrayOfStringType $_trackingMedias
	 * @param OvhStructMyArrayOfStringType $_trackingTargets
	 * @param string $_trackingDefaultSmsAccount
	 * @param string $_trackingDefaultSmsSender
	 * @param string $_sendingDefaultSmsAccountMtBilling
	 * @param boolean $_sendingNoSmsMt
	 * @return OvhStructTelephonySmsplusServiceEdit
	 */
	public function __construct($_session = NULL,$_shortCode = NULL,$_keyword = NULL,$_description = NULL,$_cgiActivation = NULL,$_cgiUrl = NULL,$_text = NULL,$_trackingMedias = NULL,$_trackingTargets = NULL,$_trackingDefaultSmsAccount = NULL,$_trackingDefaultSmsSender = NULL,$_sendingDefaultSmsAccountMtBilling = NULL,$_sendingNoSmsMt = NULL)
	{
		parent::__construct(array('session'=>$_session,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'description'=>$_description,'cgiActivation'=>$_cgiActivation,'cgiUrl'=>$_cgiUrl,'text'=>$_text,'trackingMedias'=>($_trackingMedias instanceof OvhStructMyArrayOfStringType)?$_trackingMedias:new OvhStructMyArrayOfStringType($_trackingMedias),'trackingTargets'=>($_trackingTargets instanceof OvhStructMyArrayOfStringType)?$_trackingTargets:new OvhStructMyArrayOfStringType($_trackingTargets),'trackingDefaultSmsAccount'=>$_trackingDefaultSmsAccount,'trackingDefaultSmsSender'=>$_trackingDefaultSmsSender,'sendingDefaultSmsAccountMtBilling'=>$_sendingDefaultSmsAccountMtBilling,'sendingNoSmsMt'=>$_sendingNoSmsMt));
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
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
	}
	/**
	 * Get keyword value
	 * @return string|null
	 */
	public function getKeyword()
	{
		return $this->keyword;
	}
	/**
	 * Set keyword value
	 * @param string $_keyword the keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
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
	 * Get cgiActivation value
	 * @return boolean|null
	 */
	public function getCgiActivation()
	{
		return $this->cgiActivation;
	}
	/**
	 * Set cgiActivation value
	 * @param boolean $_cgiActivation the cgiActivation
	 * @return boolean
	 */
	public function setCgiActivation($_cgiActivation)
	{
		return ($this->cgiActivation = $_cgiActivation);
	}
	/**
	 * Get cgiUrl value
	 * @return string|null
	 */
	public function getCgiUrl()
	{
		return $this->cgiUrl;
	}
	/**
	 * Set cgiUrl value
	 * @param string $_cgiUrl the cgiUrl
	 * @return string
	 */
	public function setCgiUrl($_cgiUrl)
	{
		return ($this->cgiUrl = $_cgiUrl);
	}
	/**
	 * Get text value
	 * @return string|null
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set text value
	 * @param string $_text the text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
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
	 * Get trackingDefaultSmsAccount value
	 * @return string|null
	 */
	public function getTrackingDefaultSmsAccount()
	{
		return $this->trackingDefaultSmsAccount;
	}
	/**
	 * Set trackingDefaultSmsAccount value
	 * @param string $_trackingDefaultSmsAccount the trackingDefaultSmsAccount
	 * @return string
	 */
	public function setTrackingDefaultSmsAccount($_trackingDefaultSmsAccount)
	{
		return ($this->trackingDefaultSmsAccount = $_trackingDefaultSmsAccount);
	}
	/**
	 * Get trackingDefaultSmsSender value
	 * @return string|null
	 */
	public function getTrackingDefaultSmsSender()
	{
		return $this->trackingDefaultSmsSender;
	}
	/**
	 * Set trackingDefaultSmsSender value
	 * @param string $_trackingDefaultSmsSender the trackingDefaultSmsSender
	 * @return string
	 */
	public function setTrackingDefaultSmsSender($_trackingDefaultSmsSender)
	{
		return ($this->trackingDefaultSmsSender = $_trackingDefaultSmsSender);
	}
	/**
	 * Get sendingDefaultSmsAccountMtBilling value
	 * @return string|null
	 */
	public function getSendingDefaultSmsAccountMtBilling()
	{
		return $this->sendingDefaultSmsAccountMtBilling;
	}
	/**
	 * Set sendingDefaultSmsAccountMtBilling value
	 * @param string $_sendingDefaultSmsAccountMtBilling the sendingDefaultSmsAccountMtBilling
	 * @return string
	 */
	public function setSendingDefaultSmsAccountMtBilling($_sendingDefaultSmsAccountMtBilling)
	{
		return ($this->sendingDefaultSmsAccountMtBilling = $_sendingDefaultSmsAccountMtBilling);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusServiceEdit
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