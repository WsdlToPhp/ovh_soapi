<?php
/**
 * File for class OvhStructResellerDomainCreate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResellerDomainCreate originally named resellerDomainCreate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResellerDomainCreate extends OvhWsdlClass
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
	 * The method
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $method;
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
	 * The afnicIdent
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $afnicIdent;
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
	 * The dryRun
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor method for resellerDomainCreate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
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
	 * @param string $_method
	 * @param string $_legalName
	 * @param string $_legalNumber
	 * @param string $_afnicIdent
	 * @param string $_birthDate
	 * @param string $_birthCity
	 * @param string $_birthDepartement
	 * @param string $_birthCountry
	 * @param boolean $_dryRun
	 * @return OvhStructResellerDomainCreate
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_hosting = NULL,$_offer = NULL,$_profile = NULL,$_owo = NULL,$_owner = NULL,$_admin = NULL,$_tech = NULL,$_billing = NULL,$_dns1 = NULL,$_dns2 = NULL,$_dns3 = NULL,$_dns4 = NULL,$_dns5 = NULL,$_method = NULL,$_legalName = NULL,$_legalNumber = NULL,$_afnicIdent = NULL,$_birthDate = NULL,$_birthCity = NULL,$_birthDepartement = NULL,$_birthCountry = NULL,$_dryRun = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'hosting'=>$_hosting,'offer'=>$_offer,'profile'=>$_profile,'owo'=>$_owo,'owner'=>$_owner,'admin'=>$_admin,'tech'=>$_tech,'billing'=>$_billing,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'method'=>$_method,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'afnicIdent'=>$_afnicIdent,'birthDate'=>$_birthDate,'birthCity'=>$_birthCity,'birthDepartement'=>$_birthDepartement,'birthCountry'=>$_birthCountry,'dryRun'=>$_dryRun));
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
	 * Get method value
	 * @return string|null
	 */
	public function getMethod()
	{
		return $this->method;
	}
	/**
	 * Set method value
	 * @param string $_method the method
	 * @return string
	 */
	public function setMethod($_method)
	{
		return ($this->method = $_method);
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
	 * Get afnicIdent value
	 * @return string|null
	 */
	public function getAfnicIdent()
	{
		return $this->afnicIdent;
	}
	/**
	 * Set afnicIdent value
	 * @param string $_afnicIdent the afnicIdent
	 * @return string
	 */
	public function setAfnicIdent($_afnicIdent)
	{
		return ($this->afnicIdent = $_afnicIdent);
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
	 * @return OvhStructResellerDomainCreate
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