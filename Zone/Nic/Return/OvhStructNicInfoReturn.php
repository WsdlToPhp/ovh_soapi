<?php
/**
 * File for class OvhStructNicInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicInfoReturn originally named nicInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicInfoReturn extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstname
	 * @var string
	 */
	public $firstname;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The spareEmail
	 * @var string
	 */
	public $spareEmail;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * @var string
	 */
	public $fax;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The area
	 * @var string
	 */
	public $area;
	/**
	 * The zip
	 * @var string
	 */
	public $zip;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The legalform
	 * @var string
	 */
	public $legalform;
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The legalName
	 * @var string
	 */
	public $legalName;
	/**
	 * The legalNumber
	 * @var string
	 */
	public $legalNumber;
	/**
	 * The vat
	 * @var string
	 */
	public $vat;
	/**
	 * The isOwner
	 * @var boolean
	 */
	public $isOwner;
	/**
	 * The billingCountry
	 * @var string
	 */
	public $billingCountry;
	/**
	 * Constructor method for nicInfoReturn
	 * @see parent::__construct()
	 * @param string $_nic
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_email
	 * @param string $_spareEmail
	 * @param string $_phone
	 * @param string $_fax
	 * @param string $_address
	 * @param string $_city
	 * @param string $_area
	 * @param string $_zip
	 * @param string $_country
	 * @param string $_language
	 * @param string $_legalform
	 * @param string $_organisation
	 * @param string $_legalName
	 * @param string $_legalNumber
	 * @param string $_vat
	 * @param boolean $_isOwner
	 * @param string $_billingCountry
	 * @return OvhStructNicInfoReturn
	 */
	public function __construct($_nic = NULL,$_name = NULL,$_firstname = NULL,$_email = NULL,$_spareEmail = NULL,$_phone = NULL,$_fax = NULL,$_address = NULL,$_city = NULL,$_area = NULL,$_zip = NULL,$_country = NULL,$_language = NULL,$_legalform = NULL,$_organisation = NULL,$_legalName = NULL,$_legalNumber = NULL,$_vat = NULL,$_isOwner = NULL,$_billingCountry = NULL)
	{
		parent::__construct(array('nic'=>$_nic,'name'=>$_name,'firstname'=>$_firstname,'email'=>$_email,'spareEmail'=>$_spareEmail,'phone'=>$_phone,'fax'=>$_fax,'address'=>$_address,'city'=>$_city,'area'=>$_area,'zip'=>$_zip,'country'=>$_country,'language'=>$_language,'legalform'=>$_legalform,'organisation'=>$_organisation,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'vat'=>$_vat,'isOwner'=>$_isOwner,'billingCountry'=>$_billingCountry));
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
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
	 * Get billingCountry value
	 * @return string|null
	 */
	public function getBillingCountry()
	{
		return $this->billingCountry;
	}
	/**
	 * Set billingCountry value
	 * @param string $_billingCountry the billingCountry
	 * @return string
	 */
	public function setBillingCountry($_billingCountry)
	{
		return ($this->billingCountry = $_billingCountry);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNicInfoReturn
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