<?php
/**
 * File for class OvhStructTelephonyDirectoryInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryInfoReturn originally named telephonyDirectoryInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryInfoReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstName
	 * @var string
	 */
	public $firstName;
	/**
	 * The wayNumber
	 * @var string
	 */
	public $wayNumber;
	/**
	 * The wayType
	 * @var string
	 */
	public $wayType;
	/**
	 * The wayTypeDescription
	 * @var string
	 */
	public $wayTypeDescription;
	/**
	 * The wayNumberExtra
	 * @var string
	 */
	public $wayNumberExtra;
	/**
	 * The wayName
	 * @var string
	 */
	public $wayName;
	/**
	 * The addressExtra
	 * @var string
	 */
	public $addressExtra;
	/**
	 * The urbanDistrict
	 * @var string
	 */
	public $urbanDistrict;
	/**
	 * The postBox
	 * @var string
	 */
	public $postBox;
	/**
	 * The cedex
	 * @var string
	 */
	public $cedex;
	/**
	 * The postCode
	 * @var string
	 */
	public $postCode;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The legalForm
	 * @var string
	 */
	public $legalForm;
	/**
	 * The occupation
	 * @var string
	 */
	public $occupation;
	/**
	 * The socialNomination
	 * @var string
	 */
	public $socialNomination;
	/**
	 * The PJSocialNomination
	 * @var string
	 */
	public $PJSocialNomination;
	/**
	 * The socialNominationExtra
	 * @var string
	 */
	public $socialNominationExtra;
	/**
	 * The lineDescription
	 * @var string
	 */
	public $lineDescription;
	/**
	 * The siret
	 * @var string
	 */
	public $siret;
	/**
	 * The ape
	 * @var string
	 */
	public $ape;
	/**
	 * The displayFirstName
	 * @var string
	 */
	public $displayFirstName;
	/**
	 * The displayOnlyCity
	 * @var string
	 */
	public $displayOnlyCity;
	/**
	 * The displayUniversalDirectory
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The displayMarketingDirectory
	 * @var string
	 */
	public $displayMarketingDirectory;
	/**
	 * The displaySearchReverse
	 * @var string
	 */
	public $displaySearchReverse;
	/**
	 * The receivePJDirectory
	 * @var string
	 */
	public $receivePJDirectory;
	/**
	 * The inseeCode
	 * @var int
	 */
	public $inseeCode;
	/**
	 * The codePJ
	 * @var string
	 */
	public $codePJ;
	/**
	 * The labelPJ
	 * @var string
	 */
	public $labelPJ;
	/**
	 * The modificationType
	 * @var string
	 */
	public $modificationType;
	/**
	 * The modificationDate
	 * @var string
	 */
	public $modificationDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The status_pagesjaunes
	 * @var string
	 */
	public $status_pagesjaunes;
	/**
	 * The status_118712
	 * @var string
	 */
	public $status_118712;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * Constructor method for telephonyDirectoryInfoReturn
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_name
	 * @param string $_firstName
	 * @param string $_wayNumber
	 * @param string $_wayType
	 * @param string $_wayTypeDescription
	 * @param string $_wayNumberExtra
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
	 * @param string $_occupation
	 * @param string $_socialNomination
	 * @param string $_pJSocialNomination
	 * @param string $_socialNominationExtra
	 * @param string $_lineDescription
	 * @param string $_siret
	 * @param string $_ape
	 * @param string $_displayFirstName
	 * @param string $_displayOnlyCity
	 * @param string $_displayUniversalDirectory
	 * @param string $_displayMarketingDirectory
	 * @param string $_displaySearchReverse
	 * @param string $_receivePJDirectory
	 * @param int $_inseeCode
	 * @param string $_codePJ
	 * @param string $_labelPJ
	 * @param string $_modificationType
	 * @param string $_modificationDate
	 * @param string $_status
	 * @param string $_status_pagesjaunes
	 * @param string $_status_118712
	 * @param string $_address
	 * @return OvhStructTelephonyDirectoryInfoReturn
	 */
	public function __construct($_number = NULL,$_name = NULL,$_firstName = NULL,$_wayNumber = NULL,$_wayType = NULL,$_wayTypeDescription = NULL,$_wayNumberExtra = NULL,$_wayName = NULL,$_addressExtra = NULL,$_urbanDistrict = NULL,$_postBox = NULL,$_cedex = NULL,$_postCode = NULL,$_city = NULL,$_country = NULL,$_email = NULL,$_legalForm = NULL,$_occupation = NULL,$_socialNomination = NULL,$_pJSocialNomination = NULL,$_socialNominationExtra = NULL,$_lineDescription = NULL,$_siret = NULL,$_ape = NULL,$_displayFirstName = NULL,$_displayOnlyCity = NULL,$_displayUniversalDirectory = NULL,$_displayMarketingDirectory = NULL,$_displaySearchReverse = NULL,$_receivePJDirectory = NULL,$_inseeCode = NULL,$_codePJ = NULL,$_labelPJ = NULL,$_modificationType = NULL,$_modificationDate = NULL,$_status = NULL,$_status_pagesjaunes = NULL,$_status_118712 = NULL,$_address = NULL)
	{
		parent::__construct(array('number'=>$_number,'name'=>$_name,'firstName'=>$_firstName,'wayNumber'=>$_wayNumber,'wayType'=>$_wayType,'wayTypeDescription'=>$_wayTypeDescription,'wayNumberExtra'=>$_wayNumberExtra,'wayName'=>$_wayName,'addressExtra'=>$_addressExtra,'urbanDistrict'=>$_urbanDistrict,'postBox'=>$_postBox,'cedex'=>$_cedex,'postCode'=>$_postCode,'city'=>$_city,'country'=>$_country,'email'=>$_email,'legalForm'=>$_legalForm,'occupation'=>$_occupation,'socialNomination'=>$_socialNomination,'PJSocialNomination'=>$_pJSocialNomination,'socialNominationExtra'=>$_socialNominationExtra,'lineDescription'=>$_lineDescription,'siret'=>$_siret,'ape'=>$_ape,'displayFirstName'=>$_displayFirstName,'displayOnlyCity'=>$_displayOnlyCity,'displayUniversalDirectory'=>$_displayUniversalDirectory,'displayMarketingDirectory'=>$_displayMarketingDirectory,'displaySearchReverse'=>$_displaySearchReverse,'receivePJDirectory'=>$_receivePJDirectory,'inseeCode'=>$_inseeCode,'codePJ'=>$_codePJ,'labelPJ'=>$_labelPJ,'modificationType'=>$_modificationType,'modificationDate'=>$_modificationDate,'status'=>$_status,'status_pagesjaunes'=>$_status_pagesjaunes,'status_118712'=>$_status_118712,'address'=>$_address));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
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
	 * Get wayTypeDescription value
	 * @return string|null
	 */
	public function getWayTypeDescription()
	{
		return $this->wayTypeDescription;
	}
	/**
	 * Set wayTypeDescription value
	 * @param string $_wayTypeDescription the wayTypeDescription
	 * @return string
	 */
	public function setWayTypeDescription($_wayTypeDescription)
	{
		return ($this->wayTypeDescription = $_wayTypeDescription);
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
	 * Get lineDescription value
	 * @return string|null
	 */
	public function getLineDescription()
	{
		return $this->lineDescription;
	}
	/**
	 * Set lineDescription value
	 * @param string $_lineDescription the lineDescription
	 * @return string
	 */
	public function setLineDescription($_lineDescription)
	{
		return ($this->lineDescription = $_lineDescription);
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
	 * Get displayFirstName value
	 * @return string|null
	 */
	public function getDisplayFirstName()
	{
		return $this->displayFirstName;
	}
	/**
	 * Set displayFirstName value
	 * @param string $_displayFirstName the displayFirstName
	 * @return string
	 */
	public function setDisplayFirstName($_displayFirstName)
	{
		return ($this->displayFirstName = $_displayFirstName);
	}
	/**
	 * Get displayOnlyCity value
	 * @return string|null
	 */
	public function getDisplayOnlyCity()
	{
		return $this->displayOnlyCity;
	}
	/**
	 * Set displayOnlyCity value
	 * @param string $_displayOnlyCity the displayOnlyCity
	 * @return string
	 */
	public function setDisplayOnlyCity($_displayOnlyCity)
	{
		return ($this->displayOnlyCity = $_displayOnlyCity);
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
	 * Get displayMarketingDirectory value
	 * @return string|null
	 */
	public function getDisplayMarketingDirectory()
	{
		return $this->displayMarketingDirectory;
	}
	/**
	 * Set displayMarketingDirectory value
	 * @param string $_displayMarketingDirectory the displayMarketingDirectory
	 * @return string
	 */
	public function setDisplayMarketingDirectory($_displayMarketingDirectory)
	{
		return ($this->displayMarketingDirectory = $_displayMarketingDirectory);
	}
	/**
	 * Get displaySearchReverse value
	 * @return string|null
	 */
	public function getDisplaySearchReverse()
	{
		return $this->displaySearchReverse;
	}
	/**
	 * Set displaySearchReverse value
	 * @param string $_displaySearchReverse the displaySearchReverse
	 * @return string
	 */
	public function setDisplaySearchReverse($_displaySearchReverse)
	{
		return ($this->displaySearchReverse = $_displaySearchReverse);
	}
	/**
	 * Get receivePJDirectory value
	 * @return string|null
	 */
	public function getReceivePJDirectory()
	{
		return $this->receivePJDirectory;
	}
	/**
	 * Set receivePJDirectory value
	 * @param string $_receivePJDirectory the receivePJDirectory
	 * @return string
	 */
	public function setReceivePJDirectory($_receivePJDirectory)
	{
		return ($this->receivePJDirectory = $_receivePJDirectory);
	}
	/**
	 * Get inseeCode value
	 * @return int|null
	 */
	public function getInseeCode()
	{
		return $this->inseeCode;
	}
	/**
	 * Set inseeCode value
	 * @param int $_inseeCode the inseeCode
	 * @return int
	 */
	public function setInseeCode($_inseeCode)
	{
		return ($this->inseeCode = $_inseeCode);
	}
	/**
	 * Get codePJ value
	 * @return string|null
	 */
	public function getCodePJ()
	{
		return $this->codePJ;
	}
	/**
	 * Set codePJ value
	 * @param string $_codePJ the codePJ
	 * @return string
	 */
	public function setCodePJ($_codePJ)
	{
		return ($this->codePJ = $_codePJ);
	}
	/**
	 * Get labelPJ value
	 * @return string|null
	 */
	public function getLabelPJ()
	{
		return $this->labelPJ;
	}
	/**
	 * Set labelPJ value
	 * @param string $_labelPJ the labelPJ
	 * @return string
	 */
	public function setLabelPJ($_labelPJ)
	{
		return ($this->labelPJ = $_labelPJ);
	}
	/**
	 * Get modificationType value
	 * @return string|null
	 */
	public function getModificationType()
	{
		return $this->modificationType;
	}
	/**
	 * Set modificationType value
	 * @param string $_modificationType the modificationType
	 * @return string
	 */
	public function setModificationType($_modificationType)
	{
		return ($this->modificationType = $_modificationType);
	}
	/**
	 * Get modificationDate value
	 * @return string|null
	 */
	public function getModificationDate()
	{
		return $this->modificationDate;
	}
	/**
	 * Set modificationDate value
	 * @param string $_modificationDate the modificationDate
	 * @return string
	 */
	public function setModificationDate($_modificationDate)
	{
		return ($this->modificationDate = $_modificationDate);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status_pagesjaunes value
	 * @return string|null
	 */
	public function getStatus_pagesjaunes()
	{
		return $this->status_pagesjaunes;
	}
	/**
	 * Set status_pagesjaunes value
	 * @param string $_status_pagesjaunes the status_pagesjaunes
	 * @return string
	 */
	public function setStatus_pagesjaunes($_status_pagesjaunes)
	{
		return ($this->status_pagesjaunes = $_status_pagesjaunes);
	}
	/**
	 * Get status_118712 value
	 * @return string|null
	 */
	public function getStatus_118712()
	{
		return $this->status_118712;
	}
	/**
	 * Set status_118712 value
	 * @param string $_status_118712 the status_118712
	 * @return string
	 */
	public function setStatus_118712($_status_118712)
	{
		return ($this->status_118712 = $_status_118712);
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
	 * @return OvhStructTelephonyDirectoryInfoReturn
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