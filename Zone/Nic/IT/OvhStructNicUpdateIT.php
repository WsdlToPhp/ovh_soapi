<?php
/**
 * File for class OvhStructNicUpdateIT
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicUpdateIT originally named nicUpdateIT
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicUpdateIT extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nic;
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
	 * The legalForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalForm;
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
	 * Constructor method for nicUpdateIT
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_nic
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_sex
	 * @param string $_legalForm
	 * @param string $_organisation
	 * @param string $_legalName
	 * @param string $_legalNumber
	 * @param string $_vat
	 * @param string $_birthDay
	 * @param string $_birthCity
	 * @param string $_nationalIdentificationNumber
	 * @param string $_companyNationalIdentificationNumber
	 * @param string $_corporationType
	 * @return OvhStructNicUpdateIT
	 */
	public function __construct($_session = NULL,$_nic = NULL,$_name = NULL,$_firstname = NULL,$_sex = NULL,$_legalForm = NULL,$_organisation = NULL,$_legalName = NULL,$_legalNumber = NULL,$_vat = NULL,$_birthDay = NULL,$_birthCity = NULL,$_nationalIdentificationNumber = NULL,$_companyNationalIdentificationNumber = NULL,$_corporationType = NULL)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'name'=>$_name,'firstname'=>$_firstname,'sex'=>$_sex,'legalForm'=>$_legalForm,'organisation'=>$_organisation,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'vat'=>$_vat,'birthDay'=>$_birthDay,'birthCity'=>$_birthCity,'nationalIdentificationNumber'=>$_nationalIdentificationNumber,'companyNationalIdentificationNumber'=>$_companyNationalIdentificationNumber,'corporationType'=>$_corporationType));
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
	 * Get legalForm value
	 * @return string|null
	 */
	public function getLegalForm()
	{
		return $this->legalForm;
	}
	/**
	 * Set legalForm value
	 * @param string $_legalForm the legalForm
	 * @return string
	 */
	public function setLegalForm($_legalForm)
	{
		return ($this->legalForm = $_legalForm);
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
	 * @return OvhStructNicUpdateIT
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