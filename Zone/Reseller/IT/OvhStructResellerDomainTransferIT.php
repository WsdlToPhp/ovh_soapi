<?php
/**
 * File for class OvhStructResellerDomainTransferIT
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResellerDomainTransferIT originally named resellerDomainTransferIT
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResellerDomainTransferIT extends OvhWsdlClass
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
	 * The authinfo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $authinfo;
	/**
	 * The hosting
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hosting;
	/**
	 * The offer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $offer;
	/**
	 * The profile
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $profile;
	/**
	 * The owo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $owo;
	/**
	 * The owner
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $owner;
	/**
	 * The admin
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $admin;
	/**
	 * The tech
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $tech;
	/**
	 * The billing
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billing;
	/**
	 * The dns1
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns1;
	/**
	 * The dns2
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns2;
	/**
	 * The dns3
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns3;
	/**
	 * The dns4
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns4;
	/**
	 * The dns5
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns5;
	/**
	 * The legalRepresentantFirstName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalRepresentantFirstName;
	/**
	 * The legalRepresentantLastName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalRepresentantLastName;
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
	 * The birthDate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthDate;
	/**
	 * The birthCity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthCity;
	/**
	 * The birthDepartement
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthDepartement;
	/**
	 * The birthCountry
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $birthCountry;
	/**
	 * The nationality
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nationality;
	/**
	 * The dryRun
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor method for resellerDomainTransferIT
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_authinfo
	 * @param string $_hosting
	 * @param string $_offer
	 * @param string $_profile
	 * @param string $_owo
	 * @param string $_owner
	 * @param string $_admin
	 * @param string $_tech
	 * @param string $_billing
	 * @param string $_dns1
	 * @param string $_dns2
	 * @param string $_dns3
	 * @param string $_dns4
	 * @param string $_dns5
	 * @param string $_legalRepresentantFirstName
	 * @param string $_legalRepresentantLastName
	 * @param string $_legalNumber
	 * @param string $_vat
	 * @param string $_birthDate
	 * @param string $_birthCity
	 * @param string $_birthDepartement
	 * @param string $_birthCountry
	 * @param string $_nationality
	 * @param boolean $_dryRun
	 * @return OvhStructResellerDomainTransferIT
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_authinfo = NULL,$_hosting = NULL,$_offer = NULL,$_profile = NULL,$_owo = NULL,$_owner = NULL,$_admin = NULL,$_tech = NULL,$_billing = NULL,$_dns1 = NULL,$_dns2 = NULL,$_dns3 = NULL,$_dns4 = NULL,$_dns5 = NULL,$_legalRepresentantFirstName = NULL,$_legalRepresentantLastName = NULL,$_legalNumber = NULL,$_vat = NULL,$_birthDate = NULL,$_birthCity = NULL,$_birthDepartement = NULL,$_birthCountry = NULL,$_nationality = NULL,$_dryRun = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'authinfo'=>$_authinfo,'hosting'=>$_hosting,'offer'=>$_offer,'profile'=>$_profile,'owo'=>$_owo,'owner'=>$_owner,'admin'=>$_admin,'tech'=>$_tech,'billing'=>$_billing,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'legalRepresentantFirstName'=>$_legalRepresentantFirstName,'legalRepresentantLastName'=>$_legalRepresentantLastName,'legalNumber'=>$_legalNumber,'vat'=>$_vat,'birthDate'=>$_birthDate,'birthCity'=>$_birthCity,'birthDepartement'=>$_birthDepartement,'birthCountry'=>$_birthCountry,'nationality'=>$_nationality,'dryRun'=>$_dryRun));
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
	 * Get authinfo value
	 * @return string|null
	 */
	public function getAuthinfo()
	{
		return $this->authinfo;
	}
	/**
	 * Set authinfo value
	 * @param string $_authinfo the authinfo
	 * @return string
	 */
	public function setAuthinfo($_authinfo)
	{
		return ($this->authinfo = $_authinfo);
	}
	/**
	 * Get hosting value
	 * @return string|null
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set hosting value
	 * @param string $_hosting the hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get profile value
	 * @return string|null
	 */
	public function getProfile()
	{
		return $this->profile;
	}
	/**
	 * Set profile value
	 * @param string $_profile the profile
	 * @return string
	 */
	public function setProfile($_profile)
	{
		return ($this->profile = $_profile);
	}
	/**
	 * Get owo value
	 * @return string|null
	 */
	public function getOwo()
	{
		return $this->owo;
	}
	/**
	 * Set owo value
	 * @param string $_owo the owo
	 * @return string
	 */
	public function setOwo($_owo)
	{
		return ($this->owo = $_owo);
	}
	/**
	 * Get owner value
	 * @return string|null
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set owner value
	 * @param string $_owner the owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get admin value
	 * @return string|null
	 */
	public function getAdmin()
	{
		return $this->admin;
	}
	/**
	 * Set admin value
	 * @param string $_admin the admin
	 * @return string
	 */
	public function setAdmin($_admin)
	{
		return ($this->admin = $_admin);
	}
	/**
	 * Get tech value
	 * @return string|null
	 */
	public function getTech()
	{
		return $this->tech;
	}
	/**
	 * Set tech value
	 * @param string $_tech the tech
	 * @return string
	 */
	public function setTech($_tech)
	{
		return ($this->tech = $_tech);
	}
	/**
	 * Get billing value
	 * @return string|null
	 */
	public function getBilling()
	{
		return $this->billing;
	}
	/**
	 * Set billing value
	 * @param string $_billing the billing
	 * @return string
	 */
	public function setBilling($_billing)
	{
		return ($this->billing = $_billing);
	}
	/**
	 * Get dns1 value
	 * @return string|null
	 */
	public function getDns1()
	{
		return $this->dns1;
	}
	/**
	 * Set dns1 value
	 * @param string $_dns1 the dns1
	 * @return string
	 */
	public function setDns1($_dns1)
	{
		return ($this->dns1 = $_dns1);
	}
	/**
	 * Get dns2 value
	 * @return string|null
	 */
	public function getDns2()
	{
		return $this->dns2;
	}
	/**
	 * Set dns2 value
	 * @param string $_dns2 the dns2
	 * @return string
	 */
	public function setDns2($_dns2)
	{
		return ($this->dns2 = $_dns2);
	}
	/**
	 * Get dns3 value
	 * @return string|null
	 */
	public function getDns3()
	{
		return $this->dns3;
	}
	/**
	 * Set dns3 value
	 * @param string $_dns3 the dns3
	 * @return string
	 */
	public function setDns3($_dns3)
	{
		return ($this->dns3 = $_dns3);
	}
	/**
	 * Get dns4 value
	 * @return string|null
	 */
	public function getDns4()
	{
		return $this->dns4;
	}
	/**
	 * Set dns4 value
	 * @param string $_dns4 the dns4
	 * @return string
	 */
	public function setDns4($_dns4)
	{
		return ($this->dns4 = $_dns4);
	}
	/**
	 * Get dns5 value
	 * @return string|null
	 */
	public function getDns5()
	{
		return $this->dns5;
	}
	/**
	 * Set dns5 value
	 * @param string $_dns5 the dns5
	 * @return string
	 */
	public function setDns5($_dns5)
	{
		return ($this->dns5 = $_dns5);
	}
	/**
	 * Get legalRepresentantFirstName value
	 * @return string|null
	 */
	public function getLegalRepresentantFirstName()
	{
		return $this->legalRepresentantFirstName;
	}
	/**
	 * Set legalRepresentantFirstName value
	 * @param string $_legalRepresentantFirstName the legalRepresentantFirstName
	 * @return string
	 */
	public function setLegalRepresentantFirstName($_legalRepresentantFirstName)
	{
		return ($this->legalRepresentantFirstName = $_legalRepresentantFirstName);
	}
	/**
	 * Get legalRepresentantLastName value
	 * @return string|null
	 */
	public function getLegalRepresentantLastName()
	{
		return $this->legalRepresentantLastName;
	}
	/**
	 * Set legalRepresentantLastName value
	 * @param string $_legalRepresentantLastName the legalRepresentantLastName
	 * @return string
	 */
	public function setLegalRepresentantLastName($_legalRepresentantLastName)
	{
		return ($this->legalRepresentantLastName = $_legalRepresentantLastName);
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
	 * Get birthDate value
	 * @return string|null
	 */
	public function getBirthDate()
	{
		return $this->birthDate;
	}
	/**
	 * Set birthDate value
	 * @param string $_birthDate the birthDate
	 * @return string
	 */
	public function setBirthDate($_birthDate)
	{
		return ($this->birthDate = $_birthDate);
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
	 * Get birthDepartement value
	 * @return string|null
	 */
	public function getBirthDepartement()
	{
		return $this->birthDepartement;
	}
	/**
	 * Set birthDepartement value
	 * @param string $_birthDepartement the birthDepartement
	 * @return string
	 */
	public function setBirthDepartement($_birthDepartement)
	{
		return ($this->birthDepartement = $_birthDepartement);
	}
	/**
	 * Get birthCountry value
	 * @return string|null
	 */
	public function getBirthCountry()
	{
		return $this->birthCountry;
	}
	/**
	 * Set birthCountry value
	 * @param string $_birthCountry the birthCountry
	 * @return string
	 */
	public function setBirthCountry($_birthCountry)
	{
		return ($this->birthCountry = $_birthCountry);
	}
	/**
	 * Get nationality value
	 * @return string|null
	 */
	public function getNationality()
	{
		return $this->nationality;
	}
	/**
	 * Set nationality value
	 * @param string $_nationality the nationality
	 * @return string
	 */
	public function setNationality($_nationality)
	{
		return ($this->nationality = $_nationality);
	}
	/**
	 * Get dryRun value
	 * @return boolean|null
	 */
	public function getDryRun()
	{
		return $this->dryRun;
	}
	/**
	 * Set dryRun value
	 * @param boolean $_dryRun the dryRun
	 * @return boolean
	 */
	public function setDryRun($_dryRun)
	{
		return ($this->dryRun = $_dryRun);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructResellerDomainTransferIT
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