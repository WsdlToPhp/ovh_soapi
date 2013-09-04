<?php
/**
 * File for class OvhStructResellerDomainCreateASIA
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResellerDomainCreateASIA originally named resellerDomainCreateASIA
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResellerDomainCreateASIA extends OvhWsdlClass
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
	 * The CedCea
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $CedCea;
	/**
	 * The contactCED
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $contactCED;
	/**
	 * The localityCity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $localityCity;
	/**
	 * The localitySp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $localitySp;
	/**
	 * The ccLocality
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ccLocality;
	/**
	 * The legalEntityType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalEntityType;
	/**
	 * The otherLEType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $otherLEType;
	/**
	 * The identForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $identForm;
	/**
	 * The otherIdentForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $otherIdentForm;
	/**
	 * The identNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $identNumber;
	/**
	 * The dryRun
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor method for resellerDomainCreateASIA
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
	 * @param string $_cedCea
	 * @param string $_contactCED
	 * @param string $_localityCity
	 * @param string $_localitySp
	 * @param string $_ccLocality
	 * @param string $_legalEntityType
	 * @param string $_otherLEType
	 * @param string $_identForm
	 * @param string $_otherIdentForm
	 * @param string $_identNumber
	 * @param boolean $_dryRun
	 * @return OvhStructResellerDomainCreateASIA
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_hosting = NULL,$_offer = NULL,$_profile = NULL,$_owo = NULL,$_owner = NULL,$_admin = NULL,$_tech = NULL,$_billing = NULL,$_dns1 = NULL,$_dns2 = NULL,$_dns3 = NULL,$_dns4 = NULL,$_dns5 = NULL,$_cedCea = NULL,$_contactCED = NULL,$_localityCity = NULL,$_localitySp = NULL,$_ccLocality = NULL,$_legalEntityType = NULL,$_otherLEType = NULL,$_identForm = NULL,$_otherIdentForm = NULL,$_identNumber = NULL,$_dryRun = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'hosting'=>$_hosting,'offer'=>$_offer,'profile'=>$_profile,'owo'=>$_owo,'owner'=>$_owner,'admin'=>$_admin,'tech'=>$_tech,'billing'=>$_billing,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'CedCea'=>$_cedCea,'contactCED'=>$_contactCED,'localityCity'=>$_localityCity,'localitySp'=>$_localitySp,'ccLocality'=>$_ccLocality,'legalEntityType'=>$_legalEntityType,'otherLEType'=>$_otherLEType,'identForm'=>$_identForm,'otherIdentForm'=>$_otherIdentForm,'identNumber'=>$_identNumber,'dryRun'=>$_dryRun));
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
	 * Get CedCea value
	 * @return string|null
	 */
	public function getCedCea()
	{
		return $this->CedCea;
	}
	/**
	 * Set CedCea value
	 * @param string $_cedCea the CedCea
	 * @return string
	 */
	public function setCedCea($_cedCea)
	{
		return ($this->CedCea = $_cedCea);
	}
	/**
	 * Get contactCED value
	 * @return string|null
	 */
	public function getContactCED()
	{
		return $this->contactCED;
	}
	/**
	 * Set contactCED value
	 * @param string $_contactCED the contactCED
	 * @return string
	 */
	public function setContactCED($_contactCED)
	{
		return ($this->contactCED = $_contactCED);
	}
	/**
	 * Get localityCity value
	 * @return string|null
	 */
	public function getLocalityCity()
	{
		return $this->localityCity;
	}
	/**
	 * Set localityCity value
	 * @param string $_localityCity the localityCity
	 * @return string
	 */
	public function setLocalityCity($_localityCity)
	{
		return ($this->localityCity = $_localityCity);
	}
	/**
	 * Get localitySp value
	 * @return string|null
	 */
	public function getLocalitySp()
	{
		return $this->localitySp;
	}
	/**
	 * Set localitySp value
	 * @param string $_localitySp the localitySp
	 * @return string
	 */
	public function setLocalitySp($_localitySp)
	{
		return ($this->localitySp = $_localitySp);
	}
	/**
	 * Get ccLocality value
	 * @return string|null
	 */
	public function getCcLocality()
	{
		return $this->ccLocality;
	}
	/**
	 * Set ccLocality value
	 * @param string $_ccLocality the ccLocality
	 * @return string
	 */
	public function setCcLocality($_ccLocality)
	{
		return ($this->ccLocality = $_ccLocality);
	}
	/**
	 * Get legalEntityType value
	 * @return string|null
	 */
	public function getLegalEntityType()
	{
		return $this->legalEntityType;
	}
	/**
	 * Set legalEntityType value
	 * @param string $_legalEntityType the legalEntityType
	 * @return string
	 */
	public function setLegalEntityType($_legalEntityType)
	{
		return ($this->legalEntityType = $_legalEntityType);
	}
	/**
	 * Get otherLEType value
	 * @return string|null
	 */
	public function getOtherLEType()
	{
		return $this->otherLEType;
	}
	/**
	 * Set otherLEType value
	 * @param string $_otherLEType the otherLEType
	 * @return string
	 */
	public function setOtherLEType($_otherLEType)
	{
		return ($this->otherLEType = $_otherLEType);
	}
	/**
	 * Get identForm value
	 * @return string|null
	 */
	public function getIdentForm()
	{
		return $this->identForm;
	}
	/**
	 * Set identForm value
	 * @param string $_identForm the identForm
	 * @return string
	 */
	public function setIdentForm($_identForm)
	{
		return ($this->identForm = $_identForm);
	}
	/**
	 * Get otherIdentForm value
	 * @return string|null
	 */
	public function getOtherIdentForm()
	{
		return $this->otherIdentForm;
	}
	/**
	 * Set otherIdentForm value
	 * @param string $_otherIdentForm the otherIdentForm
	 * @return string
	 */
	public function setOtherIdentForm($_otherIdentForm)
	{
		return ($this->otherIdentForm = $_otherIdentForm);
	}
	/**
	 * Get identNumber value
	 * @return string|null
	 */
	public function getIdentNumber()
	{
		return $this->identNumber;
	}
	/**
	 * Set identNumber value
	 * @param string $_identNumber the identNumber
	 * @return string
	 */
	public function setIdentNumber($_identNumber)
	{
		return ($this->identNumber = $_identNumber);
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
	 * @return OvhStructResellerDomainCreateASIA
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