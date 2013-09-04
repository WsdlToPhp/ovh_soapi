<?php
/**
 * File for class OvhStructTicketCreate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTicketCreate originally named ticketCreate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTicketCreate extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The componentType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $componentType;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The phone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $phone;
	/**
	 * The subject
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subject;
	/**
	 * The incidentSummary
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $incidentSummary;
	/**
	 * The incidentDetails
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $incidentDetails;
	/**
	 * The incidentManip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $incidentManip;
	/**
	 * The level
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $level;
	/**
	 * Constructor method for ticketCreate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_componentType
	 * @param string $_domain
	 * @param string $_email
	 * @param string $_phone
	 * @param string $_subject
	 * @param string $_incidentSummary
	 * @param string $_incidentDetails
	 * @param string $_incidentManip
	 * @param string $_level
	 * @return OvhStructTicketCreate
	 */
	public function __construct($_session = NULL,$_componentType = NULL,$_domain = NULL,$_email = NULL,$_phone = NULL,$_subject = NULL,$_incidentSummary = NULL,$_incidentDetails = NULL,$_incidentManip = NULL,$_level = NULL)
	{
		parent::__construct(array('session'=>$_session,'componentType'=>$_componentType,'domain'=>$_domain,'email'=>$_email,'phone'=>$_phone,'subject'=>$_subject,'incidentSummary'=>$_incidentSummary,'incidentDetails'=>$_incidentDetails,'incidentManip'=>$_incidentManip,'level'=>$_level));
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
	 * Get componentType value
	 * @return string|null
	 */
	public function getComponentType()
	{
		return $this->componentType;
	}
	/**
	 * Set componentType value
	 * @param string $_componentType the componentType
	 * @return string
	 */
	public function setComponentType($_componentType)
	{
		return ($this->componentType = $_componentType);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
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
	 * Get phone value
	 * @return string|null
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set phone value
	 * @param string $_phone the phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set subject value
	 * @param string $_subject the subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get incidentSummary value
	 * @return string|null
	 */
	public function getIncidentSummary()
	{
		return $this->incidentSummary;
	}
	/**
	 * Set incidentSummary value
	 * @param string $_incidentSummary the incidentSummary
	 * @return string
	 */
	public function setIncidentSummary($_incidentSummary)
	{
		return ($this->incidentSummary = $_incidentSummary);
	}
	/**
	 * Get incidentDetails value
	 * @return string|null
	 */
	public function getIncidentDetails()
	{
		return $this->incidentDetails;
	}
	/**
	 * Set incidentDetails value
	 * @param string $_incidentDetails the incidentDetails
	 * @return string
	 */
	public function setIncidentDetails($_incidentDetails)
	{
		return ($this->incidentDetails = $_incidentDetails);
	}
	/**
	 * Get incidentManip value
	 * @return string|null
	 */
	public function getIncidentManip()
	{
		return $this->incidentManip;
	}
	/**
	 * Set incidentManip value
	 * @param string $_incidentManip the incidentManip
	 * @return string
	 */
	public function setIncidentManip($_incidentManip)
	{
		return ($this->incidentManip = $_incidentManip);
	}
	/**
	 * Get level value
	 * @return string|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param string $_level the level
	 * @return string
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTicketCreate
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