<?php
/**
 * File for class OvhStructTelephonySparePurchase
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySparePurchase originally named telephonySparePurchase
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySparePurchase extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The offers
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $offers;
	/**
	 * The quantities
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfIntType
	 */
	public $quantities;
	/**
	 * The nicShipping
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nicShipping;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $address;
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
	 * Constructor method for telephonySparePurchase
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_type
	 * @param OvhStructMyArrayOfStringType $_offers
	 * @param OvhStructMyArrayOfIntType $_quantities
	 * @param string $_nicShipping
	 * @param string $_name
	 * @param string $_address
	 * @param string $_zip
	 * @param string $_city
	 * @param string $_country
	 * @return OvhStructTelephonySparePurchase
	 */
	public function __construct($_session = NULL,$_type = NULL,$_offers = NULL,$_quantities = NULL,$_nicShipping = NULL,$_name = NULL,$_address = NULL,$_zip = NULL,$_city = NULL,$_country = NULL)
	{
		parent::__construct(array('session'=>$_session,'type'=>$_type,'offers'=>($_offers instanceof OvhStructMyArrayOfStringType)?$_offers:new OvhStructMyArrayOfStringType($_offers),'quantities'=>($_quantities instanceof OvhStructMyArrayOfIntType)?$_quantities:new OvhStructMyArrayOfIntType($_quantities),'nicShipping'=>$_nicShipping,'name'=>$_name,'address'=>$_address,'zip'=>$_zip,'city'=>$_city,'country'=>$_country));
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get offers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getOffers()
	{
		return $this->offers;
	}
	/**
	 * Set offers value
	 * @param OvhStructMyArrayOfStringType $_offers the offers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setOffers($_offers)
	{
		return ($this->offers = $_offers);
	}
	/**
	 * Get quantities value
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getQuantities()
	{
		return $this->quantities;
	}
	/**
	 * Set quantities value
	 * @param OvhStructMyArrayOfIntType $_quantities the quantities
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setQuantities($_quantities)
	{
		return ($this->quantities = $_quantities);
	}
	/**
	 * Get nicShipping value
	 * @return string|null
	 */
	public function getNicShipping()
	{
		return $this->nicShipping;
	}
	/**
	 * Set nicShipping value
	 * @param string $_nicShipping the nicShipping
	 * @return string
	 */
	public function setNicShipping($_nicShipping)
	{
		return ($this->nicShipping = $_nicShipping);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySparePurchase
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