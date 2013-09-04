<?php
/**
 * File for class OvhStructTelephonyFaxSend
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxSend originally named telephonyFaxSend
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxSend extends OvhWsdlClass
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
	 * The pdfUrl
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pdfUrl;
	/**
	 * The recipients
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $recipients;
	/**
	 * The quality
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $quality;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The referer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $referer;
	/**
	 * Constructor method for telephonyFaxSend
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_pdfUrl
	 * @param OvhStructMyArrayOfStringType $_recipients
	 * @param string $_quality
	 * @param string $_email
	 * @param string $_referer
	 * @return OvhStructTelephonyFaxSend
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_pdfUrl = NULL,$_recipients = NULL,$_quality = NULL,$_email = NULL,$_referer = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'pdfUrl'=>$_pdfUrl,'recipients'=>($_recipients instanceof OvhStructMyArrayOfStringType)?$_recipients:new OvhStructMyArrayOfStringType($_recipients),'quality'=>$_quality,'email'=>$_email,'referer'=>$_referer));
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
	 * Get quality value
	 * @return string|null
	 */
	public function getQuality()
	{
		return $this->quality;
	}
	/**
	 * Set quality value
	 * @param string $_quality the quality
	 * @return string
	 */
	public function setQuality($_quality)
	{
		return ($this->quality = $_quality);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get referer value
	 * @return string|null
	 */
	public function getReferer()
	{
		return $this->referer;
	}
	/**
	 * Set referer value
	 * @param string $_referer the referer
	 * @return string
	 */
	public function setReferer($_referer)
	{
		return ($this->referer = $_referer);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxSend
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