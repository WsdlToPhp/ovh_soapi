<?php
/**
 * File for class OvhStructTelephonyPortabilityOrder
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPortabilityOrder originally named telephonyPortabilityOrder
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPortabilityOrder extends OvhWsdlClass
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
	 * The offer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $offer;
	/**
	 * The desireDate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $desireDate;
	/**
	 * The callNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $callNumber;
	/**
	 * The extraNumbers
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $extraNumbers;
	/**
	 * The legalForm
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $legalForm;
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
	 * The siret
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $siret;
	/**
	 * The streetNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetNumber;
	/**
	 * The streetNumberExtra
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetNumberExtra;
	/**
	 * The streetType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetType;
	/**
	 * The streetName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $streetName;
	/**
	 * The building
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $building;
	/**
	 * The stair
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $stair;
	/**
	 * The floor
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $floor;
	/**
	 * The door
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $door;
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
	 * The displayUniversalDirectory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The contactName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $contactName;
	/**
	 * The contactNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $contactNumber;
	/**
	 * Constructor method for telephonyPortabilityOrder
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_offer
	 * @param string $_desireDate
	 * @param string $_callNumber
	 * @param OvhStructMyArrayOfStringType $_extraNumbers
	 * @param string $_legalForm
	 * @param string $_name
	 * @param string $_firstName
	 * @param string $_siret
	 * @param string $_streetNumber
	 * @param string $_streetNumberExtra
	 * @param string $_streetType
	 * @param string $_streetName
	 * @param string $_building
	 * @param string $_stair
	 * @param string $_floor
	 * @param string $_door
	 * @param string $_zip
	 * @param string $_city
	 * @param string $_country
	 * @param string $_displayUniversalDirectory
	 * @param string $_contactName
	 * @param string $_contactNumber
	 * @return OvhStructTelephonyPortabilityOrder
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_offer = NULL,$_desireDate = NULL,$_callNumber = NULL,$_extraNumbers = NULL,$_legalForm = NULL,$_name = NULL,$_firstName = NULL,$_siret = NULL,$_streetNumber = NULL,$_streetNumberExtra = NULL,$_streetType = NULL,$_streetName = NULL,$_building = NULL,$_stair = NULL,$_floor = NULL,$_door = NULL,$_zip = NULL,$_city = NULL,$_country = NULL,$_displayUniversalDirectory = NULL,$_contactName = NULL,$_contactNumber = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'desireDate'=>$_desireDate,'callNumber'=>$_callNumber,'extraNumbers'=>($_extraNumbers instanceof OvhStructMyArrayOfStringType)?$_extraNumbers:new OvhStructMyArrayOfStringType($_extraNumbers),'legalForm'=>$_legalForm,'name'=>$_name,'firstName'=>$_firstName,'siret'=>$_siret,'streetNumber'=>$_streetNumber,'streetNumberExtra'=>$_streetNumberExtra,'streetType'=>$_streetType,'streetName'=>$_streetName,'building'=>$_building,'stair'=>$_stair,'floor'=>$_floor,'door'=>$_door,'zip'=>$_zip,'city'=>$_city,'country'=>$_country,'displayUniversalDirectory'=>$_displayUniversalDirectory,'contactName'=>$_contactName,'contactNumber'=>$_contactNumber));
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
	 * Get desireDate value
	 * @return string|null
	 */
	public function getDesireDate()
	{
		return $this->desireDate;
	}
	/**
	 * Set desireDate value
	 * @param string $_desireDate the desireDate
	 * @return string
	 */
	public function setDesireDate($_desireDate)
	{
		return ($this->desireDate = $_desireDate);
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
	 * Get extraNumbers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getExtraNumbers()
	{
		return $this->extraNumbers;
	}
	/**
	 * Set extraNumbers value
	 * @param OvhStructMyArrayOfStringType $_extraNumbers the extraNumbers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setExtraNumbers($_extraNumbers)
	{
		return ($this->extraNumbers = $_extraNumbers);
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
	 * Get streetNumberExtra value
	 * @return string|null
	 */
	public function getStreetNumberExtra()
	{
		return $this->streetNumberExtra;
	}
	/**
	 * Set streetNumberExtra value
	 * @param string $_streetNumberExtra the streetNumberExtra
	 * @return string
	 */
	public function setStreetNumberExtra($_streetNumberExtra)
	{
		return ($this->streetNumberExtra = $_streetNumberExtra);
	}
	/**
	 * Get streetType value
	 * @return string|null
	 */
	public function getStreetType()
	{
		return $this->streetType;
	}
	/**
	 * Set streetType value
	 * @param string $_streetType the streetType
	 * @return string
	 */
	public function setStreetType($_streetType)
	{
		return ($this->streetType = $_streetType);
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
	 * Get building value
	 * @return string|null
	 */
	public function getBuilding()
	{
		return $this->building;
	}
	/**
	 * Set building value
	 * @param string $_building the building
	 * @return string
	 */
	public function setBuilding($_building)
	{
		return ($this->building = $_building);
	}
	/**
	 * Get stair value
	 * @return string|null
	 */
	public function getStair()
	{
		return $this->stair;
	}
	/**
	 * Set stair value
	 * @param string $_stair the stair
	 * @return string
	 */
	public function setStair($_stair)
	{
		return ($this->stair = $_stair);
	}
	/**
	 * Get floor value
	 * @return string|null
	 */
	public function getFloor()
	{
		return $this->floor;
	}
	/**
	 * Set floor value
	 * @param string $_floor the floor
	 * @return string
	 */
	public function setFloor($_floor)
	{
		return ($this->floor = $_floor);
	}
	/**
	 * Get door value
	 * @return string|null
	 */
	public function getDoor()
	{
		return $this->door;
	}
	/**
	 * Set door value
	 * @param string $_door the door
	 * @return string
	 */
	public function setDoor($_door)
	{
		return ($this->door = $_door);
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
	 * Get contactName value
	 * @return string|null
	 */
	public function getContactName()
	{
		return $this->contactName;
	}
	/**
	 * Set contactName value
	 * @param string $_contactName the contactName
	 * @return string
	 */
	public function setContactName($_contactName)
	{
		return ($this->contactName = $_contactName);
	}
	/**
	 * Get contactNumber value
	 * @return string|null
	 */
	public function getContactNumber()
	{
		return $this->contactNumber;
	}
	/**
	 * Set contactNumber value
	 * @param string $_contactNumber the contactNumber
	 * @return string
	 */
	public function setContactNumber($_contactNumber)
	{
		return ($this->contactNumber = $_contactNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPortabilityOrder
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