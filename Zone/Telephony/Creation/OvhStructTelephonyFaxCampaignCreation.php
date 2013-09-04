<?php
/**
 * File for class OvhStructTelephonyFaxCampaignCreation
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCampaignCreation originally named telephonyFaxCampaignCreation
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCampaignCreation extends OvhWsdlClass
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
	 * The campaignName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $campaignName;
	/**
	 * The pdfUrl
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pdfUrl;
	/**
	 * The pdfName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pdfName;
	/**
	 * The recipients
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $recipients;
	/**
	 * The faxQuality
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $faxQuality;
	/**
	 * The initialStatus
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $initialStatus;
	/**
	 * The launchDate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $launchDate;
	/**
	 * The remoteRecipients
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $remoteRecipients;
	/**
	 * Constructor method for telephonyFaxCampaignCreation
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_campaignName
	 * @param string $_pdfUrl
	 * @param string $_pdfName
	 * @param OvhStructMyArrayOfStringType $_recipients
	 * @param string $_faxQuality
	 * @param string $_initialStatus
	 * @param string $_launchDate
	 * @param boolean $_remoteRecipients
	 * @return OvhStructTelephonyFaxCampaignCreation
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_campaignName = NULL,$_pdfUrl = NULL,$_pdfName = NULL,$_recipients = NULL,$_faxQuality = NULL,$_initialStatus = NULL,$_launchDate = NULL,$_remoteRecipients = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'campaignName'=>$_campaignName,'pdfUrl'=>$_pdfUrl,'pdfName'=>$_pdfName,'recipients'=>($_recipients instanceof OvhStructMyArrayOfStringType)?$_recipients:new OvhStructMyArrayOfStringType($_recipients),'faxQuality'=>$_faxQuality,'initialStatus'=>$_initialStatus,'launchDate'=>$_launchDate,'remoteRecipients'=>$_remoteRecipients));
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
	 * Get campaignName value
	 * @return string|null
	 */
	public function getCampaignName()
	{
		return $this->campaignName;
	}
	/**
	 * Set campaignName value
	 * @param string $_campaignName the campaignName
	 * @return string
	 */
	public function setCampaignName($_campaignName)
	{
		return ($this->campaignName = $_campaignName);
	}
	/**
	 * Get pdfUrl value
	 * @return string|null
	 */
	public function getPdfUrl()
	{
		return $this->pdfUrl;
	}
	/**
	 * Set pdfUrl value
	 * @param string $_pdfUrl the pdfUrl
	 * @return string
	 */
	public function setPdfUrl($_pdfUrl)
	{
		return ($this->pdfUrl = $_pdfUrl);
	}
	/**
	 * Get pdfName value
	 * @return string|null
	 */
	public function getPdfName()
	{
		return $this->pdfName;
	}
	/**
	 * Set pdfName value
	 * @param string $_pdfName the pdfName
	 * @return string
	 */
	public function setPdfName($_pdfName)
	{
		return ($this->pdfName = $_pdfName);
	}
	/**
	 * Get recipients value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getRecipients()
	{
		return $this->recipients;
	}
	/**
	 * Set recipients value
	 * @param OvhStructMyArrayOfStringType $_recipients the recipients
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setRecipients($_recipients)
	{
		return ($this->recipients = $_recipients);
	}
	/**
	 * Get faxQuality value
	 * @return string|null
	 */
	public function getFaxQuality()
	{
		return $this->faxQuality;
	}
	/**
	 * Set faxQuality value
	 * @param string $_faxQuality the faxQuality
	 * @return string
	 */
	public function setFaxQuality($_faxQuality)
	{
		return ($this->faxQuality = $_faxQuality);
	}
	/**
	 * Get initialStatus value
	 * @return string|null
	 */
	public function getInitialStatus()
	{
		return $this->initialStatus;
	}
	/**
	 * Set initialStatus value
	 * @param string $_initialStatus the initialStatus
	 * @return string
	 */
	public function setInitialStatus($_initialStatus)
	{
		return ($this->initialStatus = $_initialStatus);
	}
	/**
	 * Get launchDate value
	 * @return string|null
	 */
	public function getLaunchDate()
	{
		return $this->launchDate;
	}
	/**
	 * Set launchDate value
	 * @param string $_launchDate the launchDate
	 * @return string
	 */
	public function setLaunchDate($_launchDate)
	{
		return ($this->launchDate = $_launchDate);
	}
	/**
	 * Get remoteRecipients value
	 * @return boolean|null
	 */
	public function getRemoteRecipients()
	{
		return $this->remoteRecipients;
	}
	/**
	 * Set remoteRecipients value
	 * @param boolean $_remoteRecipients the remoteRecipients
	 * @return boolean
	 */
	public function setRemoteRecipients($_remoteRecipients)
	{
		return ($this->remoteRecipients = $_remoteRecipients);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCampaignCreation
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