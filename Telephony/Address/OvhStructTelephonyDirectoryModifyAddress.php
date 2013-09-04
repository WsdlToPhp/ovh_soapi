<?php
/**
 * File for class OvhStructTelephonyDirectoryModifyAddress
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryModifyAddress originally named telephonyDirectoryModifyAddress
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryModifyAddress extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The callNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $countryCode;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The firstName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The wayNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wayNumber;
	/**
	 * The wayNumberExtra
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wayNumberExtra;
	/**
	 * The wayType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wayType;
	/**
	 * The wayName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wayName;
	/**
	 * The addressExtra
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $addressExtra;
	/**
	 * The urbanDistrict
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $urbanDistrict;
	/**
	 * The postBox
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $postBox;
	/**
	 * The cedex
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $cedex;
	/**
	 * The postCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $postCode;
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
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The legalForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalForm;
	/**
	 * The socialNomination
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $socialNomination;
	/**
	 * The PJSocialNomination
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $PJSocialNomination;
	/**
	 * The socialNominationExtra
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $socialNominationExtra;
	/**
	 * The occupation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $occupation;
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
	 * The PJCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $PJCode;
	/**
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $address;
	/**
	 * Constructor method for telephonyDirectoryModifyAddress
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_callNumber
	 * @param string $_countryCode
	 * @param string $_name
	 * @param string $_firstName
	 * @param string $_wayNumber
	 * @param string $_wayNumberExtra
	 * @param string $_wayType
	 * @param string $_wayName
	 * @param string $_addressExtra
	 * @param string $_urbanDistrict
	 * @param string $_postBox
	 * @param string $_cedex
	 * @param string $_postCode
	 * @param string $_city
	 * @param string $_country
	 * @param string $_email
	 * @param string $_legalForm
	 * @param string $_socialNomination
	 * @param string $_pJSocialNomination
	 * @param string $_socialNominationExtra
	 * @param string $_occupation
	 * @param string $_siret
	 * @param string $_ape
	 * @param string $_pJCode
	 * @param string $_address
	 * @return OvhStructTelephonyDirectoryModifyAddress
	 */
	public function __construct($_session = NULL,$_callNumber = NULL,$_countryCode = NULL,$_name = NULL,$_firstName = NULL,$_wayNumber = NULL,$_wayNumberExtra = NULL,$_wayType = NULL,$_wayName = NULL,$_addressExtra = NULL,$_urbanDistrict = NULL,$_postBox = NULL,$_cedex = NULL,$_postCode = NULL,$_city = NULL,$_country = NULL,$_email = NULL,$_legalForm = NULL,$_socialNomination = NULL,$_pJSocialNomination = NULL,$_socialNominationExtra = NULL,$_occupation = NULL,$_siret = NULL,$_ape = NULL,$_pJCode = NULL,$_address = NULL)
	{
		parent::__construct(array('session'=>$_session,'callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'name'=>$_name,'firstName'=>$_firstName,'wayNumber'=>$_wayNumber,'wayNumberExtra'=>$_wayNumberExtra,'wayType'=>$_wayType,'wayName'=>$_wayName,'addressExtra'=>$_addressExtra,'urbanDistrict'=>$_urbanDistrict,'postBox'=>$_postBox,'cedex'=>$_cedex,'postCode'=>$_postCode,'city'=>$_city,'country'=>$_country,'email'=>$_email,'legalForm'=>$_legalForm,'socialNomination'=>$_socialNomination,'PJSocialNomination'=>$_pJSocialNomination,'socialNominationExtra'=>$_socialNominationExtra,'occupation'=>$_occupation,'siret'=>$_siret,'ape'=>$_ape,'PJCode'=>$_pJCode,'address'=>$_address));
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
	 * Get callNumber value
	 * @return string|null
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set callNumber value
	 * @param string $_callNumber the callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get countryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param string $_countryCode the countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
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
	 * Get firstName value
	 * @return string|null
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	/**
	 * Set firstName value
	 * @param string $_firstName the firstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->firstName = $_firstName);
	}
	/**
	 * Get wayNumber value
	 * @return string|null
	 */
	public function getWayNumber()
	{
		return $this->wayNumber;
	}
	/**
	 * Set wayNumber value
	 * @param string $_wayNumber the wayNumber
	 * @return string
	 */
	public function setWayNumber($_wayNumber)
	{
		return ($this->wayNumber = $_wayNumber);
	}
	/**
	 * Get wayNumberExtra value
	 * @return string|null
	 */
	public function getWayNumberExtra()
	{
		return $this->wayNumberExtra;
	}
	/**
	 * Set wayNumberExtra value
	 * @param string $_wayNumberExtra the wayNumberExtra
	 * @return string
	 */
	public function setWayNumberExtra($_wayNumberExtra)
	{
		return ($this->wayNumberExtra = $_wayNumberExtra);
	}
	/**
	 * Get wayType value
	 * @return string|null
	 */
	public function getWayType()
	{
		return $this->wayType;
	}
	/**
	 * Set wayType value
	 * @param string $_wayType the wayType
	 * @return string
	 */
	public function setWayType($_wayType)
	{
		return ($this->wayType = $_wayType);
	}
	/**
	 * Get wayName value
	 * @return string|null
	 */
	public function getWayName()
	{
		return $this->wayName;
	}
	/**
	 * Set wayName value
	 * @param string $_wayName the wayName
	 * @return string
	 */
	public function setWayName($_wayName)
	{
		return ($this->wayName = $_wayName);
	}
	/**
	 * Get addressExtra value
	 * @return string|null
	 */
	public function getAddressExtra()
	{
		return $this->addressExtra;
	}
	/**
	 * Set addressExtra value
	 * @param string $_addressExtra the addressExtra
	 * @return string
	 */
	public function setAddressExtra($_addressExtra)
	{
		return ($this->addressExtra = $_addressExtra);
	}
	/**
	 * Get urbanDistrict value
	 * @return string|null
	 */
	public function getUrbanDistrict()
	{
		return $this->urbanDistrict;
	}
	/**
	 * Set urbanDistrict value
	 * @param string $_urbanDistrict the urbanDistrict
	 * @return string
	 */
	public function setUrbanDistrict($_urbanDistrict)
	{
		return ($this->urbanDistrict = $_urbanDistrict);
	}
	/**
	 * Get postBox value
	 * @return string|null
	 */
	public function getPostBox()
	{
		return $this->postBox;
	}
	/**
	 * Set postBox value
	 * @param string $_postBox the postBox
	 * @return string
	 */
	public function setPostBox($_postBox)
	{
		return ($this->postBox = $_postBox);
	}
	/**
	 * Get cedex value
	 * @return string|null
	 */
	public function getCedex()
	{
		return $this->cedex;
	}
	/**
	 * Set cedex value
	 * @param string $_cedex the cedex
	 * @return string
	 */
	public function setCedex($_cedex)
	{
		return ($this->cedex = $_cedex);
	}
	/**
	 * Get postCode value
	 * @return string|null
	 */
	public function getPostCode()
	{
		return $this->postCode;
	}
	/**
	 * Set postCode value
	 * @param string $_postCode the postCode
	 * @return string
	 */
	public function setPostCode($_postCode)
	{
		return ($this->postCode = $_postCode);
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
	 * Get PJSocialNomination value
	 * @return string|null
	 */
	public function getPJSocialNomination()
	{
		return $this->PJSocialNomination;
	}
	/**
	 * Set PJSocialNomination value
	 * @param string $_pJSocialNomination the PJSocialNomination
	 * @return string
	 */
	public function setPJSocialNomination($_pJSocialNomination)
	{
		return ($this->PJSocialNomination = $_pJSocialNomination);
	}
	/**
	 * Get socialNominationExtra value
	 * @return string|null
	 */
	public function getSocialNominationExtra()
	{
		return $this->socialNominationExtra;
	}
	/**
	 * Set socialNominationExtra value
	 * @param string $_socialNominationExtra the socialNominationExtra
	 * @return string
	 */
	public function setSocialNominationExtra($_socialNominationExtra)
	{
		return ($this->socialNominationExtra = $_socialNominationExtra);
	}
	/**
	 * Get occupation value
	 * @return string|null
	 */
	public function getOccupation()
	{
		return $this->occupation;
	}
	/**
	 * Set occupation value
	 * @param string $_occupation the occupation
	 * @return string
	 */
	public function setOccupation($_occupation)
	{
		return ($this->occupation = $_occupation);
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
	 * Get PJCode value
	 * @return string|null
	 */
	public function getPJCode()
	{
		return $this->PJCode;
	}
	/**
	 * Set PJCode value
	 * @param string $_pJCode the PJCode
	 * @return string
	 */
	public function setPJCode($_pJCode)
	{
		return ($this->PJCode = $_pJCode);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryModifyAddress
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