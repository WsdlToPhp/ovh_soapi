<?php
/**
 * File for class OvhStructTelephonyNumberOrder
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberOrder originally named telephonyNumberOrder
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberOrder extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The aliasNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $aliasNumber;
	/**
	 * The prefix
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $prefix;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
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
	 * The streetName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetName;
	/**
	 * The streetNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetNumber;
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
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The numberToReserve
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $numberToReserve;
	/**
	 * The procedureId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $procedureId;
	/**
	 * The legalForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalForm;
	/**
	 * The siret
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $siret;
	/**
	 * The ape
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ape;
	/**
	 * The socialNomination
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $socialNomination;
	/**
	 * The displayUniversalDirectory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The retractation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $retractation;
	/**
	 * Constructor method for telephonyNumberOrder
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_aliasNumber
	 * @param string $_prefix
	 * @param string $_country
	 * @param string $_name
	 * @param string $_firstname
	 * @param string $_streetName
	 * @param string $_streetNumber
	 * @param string $_zip
	 * @param string $_city
	 * @param string $_email
	 * @param string $_numberToReserve
	 * @param int $_procedureId
	 * @param string $_legalForm
	 * @param string $_siret
	 * @param string $_ape
	 * @param string $_socialNomination
	 * @param string $_displayUniversalDirectory
	 * @param string $_retractation
	 * @return OvhStructTelephonyNumberOrder
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_aliasNumber = NULL,$_prefix = NULL,$_country = NULL,$_name = NULL,$_firstname = NULL,$_streetName = NULL,$_streetNumber = NULL,$_zip = NULL,$_city = NULL,$_email = NULL,$_numberToReserve = NULL,$_procedureId = NULL,$_legalForm = NULL,$_siret = NULL,$_ape = NULL,$_socialNomination = NULL,$_displayUniversalDirectory = NULL,$_retractation = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'aliasNumber'=>$_aliasNumber,'prefix'=>$_prefix,'country'=>$_country,'name'=>$_name,'firstname'=>$_firstname,'streetName'=>$_streetName,'streetNumber'=>$_streetNumber,'zip'=>$_zip,'city'=>$_city,'email'=>$_email,'numberToReserve'=>$_numberToReserve,'procedureId'=>$_procedureId,'legalForm'=>$_legalForm,'siret'=>$_siret,'ape'=>$_ape,'socialNomination'=>$_socialNomination,'displayUniversalDirectory'=>$_displayUniversalDirectory,'retractation'=>$_retractation));
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
	 * Get billingAccount value
	 * @return string|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param string $_billingAccount the billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get aliasNumber value
	 * @return string|null
	 */
	public function getAliasNumber()
	{
		return $this->aliasNumber;
	}
	/**
	 * Set aliasNumber value
	 * @param string $_aliasNumber the aliasNumber
	 * @return string
	 */
	public function setAliasNumber($_aliasNumber)
	{
		return ($this->aliasNumber = $_aliasNumber);
	}
	/**
	 * Get prefix value
	 * @return string|null
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set prefix value
	 * @param string $_prefix the prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
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
	 * Get streetName value
	 * @return string|null
	 */
	public function getStreetName()
	{
		return $this->streetName;
	}
	/**
	 * Set streetName value
	 * @param string $_streetName the streetName
	 * @return string
	 */
	public function setStreetName($_streetName)
	{
		return ($this->streetName = $_streetName);
	}
	/**
	 * Get streetNumber value
	 * @return string|null
	 */
	public function getStreetNumber()
	{
		return $this->streetNumber;
	}
	/**
	 * Set streetNumber value
	 * @param string $_streetNumber the streetNumber
	 * @return string
	 */
	public function setStreetNumber($_streetNumber)
	{
		return ($this->streetNumber = $_streetNumber);
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
	 * Get numberToReserve value
	 * @return string|null
	 */
	public function getNumberToReserve()
	{
		return $this->numberToReserve;
	}
	/**
	 * Set numberToReserve value
	 * @param string $_numberToReserve the numberToReserve
	 * @return string
	 */
	public function setNumberToReserve($_numberToReserve)
	{
		return ($this->numberToReserve = $_numberToReserve);
	}
	/**
	 * Get procedureId value
	 * @return int|null
	 */
	public function getProcedureId()
	{
		return $this->procedureId;
	}
	/**
	 * Set procedureId value
	 * @param int $_procedureId the procedureId
	 * @return int
	 */
	public function setProcedureId($_procedureId)
	{
		return ($this->procedureId = $_procedureId);
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
	 * Get siret value
	 * @return string|null
	 */
	public function getSiret()
	{
		return $this->siret;
	}
	/**
	 * Set siret value
	 * @param string $_siret the siret
	 * @return string
	 */
	public function setSiret($_siret)
	{
		return ($this->siret = $_siret);
	}
	/**
	 * Get ape value
	 * @return string|null
	 */
	public function getApe()
	{
		return $this->ape;
	}
	/**
	 * Set ape value
	 * @param string $_ape the ape
	 * @return string
	 */
	public function setApe($_ape)
	{
		return ($this->ape = $_ape);
	}
	/**
	 * Get socialNomination value
	 * @return string|null
	 */
	public function getSocialNomination()
	{
		return $this->socialNomination;
	}
	/**
	 * Set socialNomination value
	 * @param string $_socialNomination the socialNomination
	 * @return string
	 */
	public function setSocialNomination($_socialNomination)
	{
		return ($this->socialNomination = $_socialNomination);
	}
	/**
	 * Get displayUniversalDirectory value
	 * @return string|null
	 */
	public function getDisplayUniversalDirectory()
	{
		return $this->displayUniversalDirectory;
	}
	/**
	 * Set displayUniversalDirectory value
	 * @param string $_displayUniversalDirectory the displayUniversalDirectory
	 * @return string
	 */
	public function setDisplayUniversalDirectory($_displayUniversalDirectory)
	{
		return ($this->displayUniversalDirectory = $_displayUniversalDirectory);
	}
	/**
	 * Get retractation value
	 * @return string|null
	 */
	public function getRetractation()
	{
		return $this->retractation;
	}
	/**
	 * Set retractation value
	 * @param string $_retractation the retractation
	 * @return string
	 */
	public function setRetractation($_retractation)
	{
		return ($this->retractation = $_retractation);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberOrder
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