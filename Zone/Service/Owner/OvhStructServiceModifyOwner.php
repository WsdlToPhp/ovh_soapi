<?php
/**
 * File for class OvhStructServiceModifyOwner
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceModifyOwner originally named serviceModifyOwner
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceModifyOwner extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $component;
	/**
	 * The legalform
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalform;
	/**
	 * The organisation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $organisation;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The firstname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $firstname;
	/**
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $address;
	/**
	 * The city
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $city;
	/**
	 * The zip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $zip;
	/**
	 * The area
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $area;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The phone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fax;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The identityConfirmation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $identityConfirmation;
	/**
	 * The acceptanceConfirmation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $acceptanceConfirmation;
	/**
	 * Constructor method for serviceModifyOwner
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_component
	 * @param string $_legalform
	 * @param string $_organisation
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_address
	 * @param string $_city
	 * @param string $_zip
	 * @param string $_area
	 * @param string $_country
	 * @param string $_phone
	 * @param string $_fax
	 * @param string $_email
	 * @param boolean $_identityConfirmation
	 * @param boolean $_acceptanceConfirmation
	 * @return OvhStructServiceModifyOwner
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_component = NULL,$_legalform = NULL,$_organisation = NULL,$_name = NULL,$_firstname = NULL,$_address = NULL,$_city = NULL,$_zip = NULL,$_area = NULL,$_country = NULL,$_phone = NULL,$_fax = NULL,$_email = NULL,$_identityConfirmation = NULL,$_acceptanceConfirmation = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'component'=>$_component,'legalform'=>$_legalform,'organisation'=>$_organisation,'name'=>$_name,'firstname'=>$_firstname,'address'=>$_address,'city'=>$_city,'zip'=>$_zip,'area'=>$_area,'country'=>$_country,'phone'=>$_phone,'fax'=>$_fax,'email'=>$_email,'identityConfirmation'=>$_identityConfirmation,'acceptanceConfirmation'=>$_acceptanceConfirmation));
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
	 * Get component value
	 * @return string|null
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set component value
	 * @param string $_component the component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get legalform value
	 * @return string|null
	 */
	public function getLegalform()
	{
		return $this->legalform;
	}
	/**
	 * Set legalform value
	 * @param string $_legalform the legalform
	 * @return string
	 */
	public function setLegalform($_legalform)
	{
		return ($this->legalform = $_legalform);
	}
	/**
	 * Get organisation value
	 * @return string|null
	 */
	public function getOrganisation()
	{
		return $this->organisation;
	}
	/**
	 * Set organisation value
	 * @param string $_organisation the organisation
	 * @return string
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
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
	 * Get firstname value
	 * @return string|null
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set firstname value
	 * @param string $_firstname the firstname
	 * @return string
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get address value
	 * @return string|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param string $_address the address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get city value
	 * @return string|null
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set city value
	 * @param string $_city the city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get zip value
	 * @return string|null
	 */
	public function getZip()
	{
		return $this->zip;
	}
	/**
	 * Set zip value
	 * @param string $_zip the zip
	 * @return string
	 */
	public function setZip($_zip)
	{
		return ($this->zip = $_zip);
	}
	/**
	 * Get area value
	 * @return string|null
	 */
	public function getArea()
	{
		return $this->area;
	}
	/**
	 * Set area value
	 * @param string $_area the area
	 * @return string
	 */
	public function setArea($_area)
	{
		return ($this->area = $_area);
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
	 * Get fax value
	 * @return string|null
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set fax value
	 * @param string $_fax the fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
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
	 * Get identityConfirmation value
	 * @return boolean|null
	 */
	public function getIdentityConfirmation()
	{
		return $this->identityConfirmation;
	}
	/**
	 * Set identityConfirmation value
	 * @param boolean $_identityConfirmation the identityConfirmation
	 * @return boolean
	 */
	public function setIdentityConfirmation($_identityConfirmation)
	{
		return ($this->identityConfirmation = $_identityConfirmation);
	}
	/**
	 * Get acceptanceConfirmation value
	 * @return boolean|null
	 */
	public function getAcceptanceConfirmation()
	{
		return $this->acceptanceConfirmation;
	}
	/**
	 * Set acceptanceConfirmation value
	 * @param boolean $_acceptanceConfirmation the acceptanceConfirmation
	 * @return boolean
	 */
	public function setAcceptanceConfirmation($_acceptanceConfirmation)
	{
		return ($this->acceptanceConfirmation = $_acceptanceConfirmation);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceModifyOwner
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