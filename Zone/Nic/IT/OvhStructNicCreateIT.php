<?php
/**
 * File for class OvhStructNicCreateIT
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicCreateIT originally named nicCreateIT
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicCreateIT extends OvhWsdlClass
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
	 * The sex
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sex;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
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
	 * The fax
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fax;
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
	 * The area
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $area;
	/**
	 * The zip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $zip;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The isOwner
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $isOwner;
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
	 * The legalName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalName;
	/**
	 * The legalNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalNumber;
	/**
	 * The vat
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $vat;
	/**
	 * The birthDay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthDay;
	/**
	 * The birthCity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthCity;
	/**
	 * The nationalIdentificationNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nationalIdentificationNumber;
	/**
	 * The companyNationalIdentificationNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $companyNationalIdentificationNumber;
	/**
	 * The corporationType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $corporationType;
	/**
	 * Constructor method for nicCreateIT
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_sex
	 * @param string $_password
	 * @param string $_email
	 * @param string $_phone
	 * @param string $_fax
	 * @param string $_address
	 * @param string $_city
	 * @param string $_area
	 * @param string $_zip
	 * @param string $_country
	 * @param string $_language
	 * @param boolean $_isOwner
	 * @param string $_legalform
	 * @param string $_organisation
	 * @param string $_legalName
	 * @param string $_legalNumber
	 * @param string $_vat
	 * @param string $_birthDay
	 * @param string $_birthCity
	 * @param string $_nationalIdentificationNumber
	 * @param string $_companyNationalIdentificationNumber
	 * @param string $_corporationType
	 * @return OvhStructNicCreateIT
	 */
	public function __construct($_session = NULL,$_name = NULL,$_firstname = NULL,$_sex = NULL,$_password = NULL,$_email = NULL,$_phone = NULL,$_fax = NULL,$_address = NULL,$_city = NULL,$_area = NULL,$_zip = NULL,$_country = NULL,$_language = NULL,$_isOwner = NULL,$_legalform = NULL,$_organisation = NULL,$_legalName = NULL,$_legalNumber = NULL,$_vat = NULL,$_birthDay = NULL,$_birthCity = NULL,$_nationalIdentificationNumber = NULL,$_companyNationalIdentificationNumber = NULL,$_corporationType = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'firstname'=>$_firstname,'sex'=>$_sex,'password'=>$_password,'email'=>$_email,'phone'=>$_phone,'fax'=>$_fax,'address'=>$_address,'city'=>$_city,'area'=>$_area,'zip'=>$_zip,'country'=>$_country,'language'=>$_language,'isOwner'=>$_isOwner,'legalform'=>$_legalform,'organisation'=>$_organisation,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'vat'=>$_vat,'birthDay'=>$_birthDay,'birthCity'=>$_birthCity,'nationalIdentificationNumber'=>$_nationalIdentificationNumber,'companyNationalIdentificationNumber'=>$_companyNationalIdentificationNumber,'corporationType'=>$_corporationType));
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
	 * Get sex value
	 * @return string|null
	 */
	public function getSex()
	{
		return $this->sex;
	}
	/**
	 * Set sex value
	 * @param string $_sex the sex
	 * @return string
	 */
	public function setSex($_sex)
	{
		return ($this->sex = $_sex);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
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
	 * Get isOwner value
	 * @return boolean|null
	 */
	public function getIsOwner()
	{
		return $this->isOwner;
	}
	/**
	 * Set isOwner value
	 * @param boolean $_isOwner the isOwner
	 * @return boolean
	 */
	public function setIsOwner($_isOwner)
	{
		return ($this->isOwner = $_isOwner);
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
	 * Get legalName value
	 * @return string|null
	 */
	public function getLegalName()
	{
		return $this->legalName;
	}
	/**
	 * Set legalName value
	 * @param string $_legalName the legalName
	 * @return string
	 */
	public function setLegalName($_legalName)
	{
		return ($this->legalName = $_legalName);
	}
	/**
	 * Get legalNumber value
	 * @return string|null
	 */
	public function getLegalNumber()
	{
		return $this->legalNumber;
	}
	/**
	 * Set legalNumber value
	 * @param string $_legalNumber the legalNumber
	 * @return string
	 */
	public function setLegalNumber($_legalNumber)
	{
		return ($this->legalNumber = $_legalNumber);
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
	 * Get birthDay value
	 * @return string|null
	 */
	public function getBirthDay()
	{
		return $this->birthDay;
	}
	/**
	 * Set birthDay value
	 * @param string $_birthDay the birthDay
	 * @return string
	 */
	public function setBirthDay($_birthDay)
	{
		return ($this->birthDay = $_birthDay);
	}
	/**
	 * Get birthCity value
	 * @return string|null
	 */
	public function getBirthCity()
	{
		return $this->birthCity;
	}
	/**
	 * Set birthCity value
	 * @param string $_birthCity the birthCity
	 * @return string
	 */
	public function setBirthCity($_birthCity)
	{
		return ($this->birthCity = $_birthCity);
	}
	/**
	 * Get nationalIdentificationNumber value
	 * @return string|null
	 */
	public function getNationalIdentificationNumber()
	{
		return $this->nationalIdentificationNumber;
	}
	/**
	 * Set nationalIdentificationNumber value
	 * @param string $_nationalIdentificationNumber the nationalIdentificationNumber
	 * @return string
	 */
	public function setNationalIdentificationNumber($_nationalIdentificationNumber)
	{
		return ($this->nationalIdentificationNumber = $_nationalIdentificationNumber);
	}
	/**
	 * Get companyNationalIdentificationNumber value
	 * @return string|null
	 */
	public function getCompanyNationalIdentificationNumber()
	{
		return $this->companyNationalIdentificationNumber;
	}
	/**
	 * Set companyNationalIdentificationNumber value
	 * @param string $_companyNationalIdentificationNumber the companyNationalIdentificationNumber
	 * @return string
	 */
	public function setCompanyNationalIdentificationNumber($_companyNationalIdentificationNumber)
	{
		return ($this->companyNationalIdentificationNumber = $_companyNationalIdentificationNumber);
	}
	/**
	 * Get corporationType value
	 * @return string|null
	 */
	public function getCorporationType()
	{
		return $this->corporationType;
	}
	/**
	 * Set corporationType value
	 * @param string $_corporationType the corporationType
	 * @return string
	 */
	public function setCorporationType($_corporationType)
	{
		return ($this->corporationType = $_corporationType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNicCreateIT
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