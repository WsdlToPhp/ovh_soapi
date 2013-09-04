<?php
/**
 * File for class OvhStructNicModifyInfos
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicModifyInfos originally named nicModifyInfos
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicModifyInfos extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
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
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $address;
	/**
	 * The zip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $zip;
	/**
	 * The city
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $city;
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
	 * The spareEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $spareEmail;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The vat
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $vat;
	/**
	 * The area
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $area;
	/**
	 * Constructor method for nicModifyInfos
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_legalform
	 * @param string $_organisation
	 * @param string $_address
	 * @param string $_zip
	 * @param string $_city
	 * @param string $_country
	 * @param string $_phone
	 * @param string $_fax
	 * @param string $_email
	 * @param string $_spareEmail
	 * @param string $_language
	 * @param string $_vat
	 * @param string $_area
	 * @return OvhStructNicModifyInfos
	 */
	public function __construct($_session = NULL,$_name = NULL,$_firstname = NULL,$_legalform = NULL,$_organisation = NULL,$_address = NULL,$_zip = NULL,$_city = NULL,$_country = NULL,$_phone = NULL,$_fax = NULL,$_email = NULL,$_spareEmail = NULL,$_language = NULL,$_vat = NULL,$_area = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'firstname'=>$_firstname,'legalform'=>$_legalform,'organisation'=>$_organisation,'address'=>$_address,'zip'=>$_zip,'city'=>$_city,'country'=>$_country,'phone'=>$_phone,'fax'=>$_fax,'email'=>$_email,'spareEmail'=>$_spareEmail,'language'=>$_language,'vat'=>$_vat,'area'=>$_area));
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
	 * Get spareEmail value
	 * @return string|null
	 */
	public function getSpareEmail()
	{
		return $this->spareEmail;
	}
	/**
	 * Set spareEmail value
	 * @param string $_spareEmail the spareEmail
	 * @return string
	 */
	public function setSpareEmail($_spareEmail)
	{
		return ($this->spareEmail = $_spareEmail);
	}
	/**
	 * Get language value
	 * @return string|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param string $_language the language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get vat value
	 * @return string|null
	 */
	public function getVat()
	{
		return $this->vat;
	}
	/**
	 * Set vat value
	 * @param string $_vat the vat
	 * @return string
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNicModifyInfos
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