<?php
/**
 * File for class OvhStructDedicatedFailoverRipeAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverRipeAdd originally named dedicatedFailoverRipeAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverRipeAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The netname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $netname;
	/**
	 * The description
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $description;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The addressesNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $addressesNumber;
	/**
	 * The comment
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * The routedToInterface
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $routedToInterface;
	/**
	 * Constructor method for dedicatedFailoverRipeAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_netname
	 * @param string $_description
	 * @param string $_country
	 * @param int $_addressesNumber
	 * @param string $_comment
	 * @param string $_routedToInterface
	 * @return OvhStructDedicatedFailoverRipeAdd
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_netname = NULL,$_description = NULL,$_country = NULL,$_addressesNumber = NULL,$_comment = NULL,$_routedToInterface = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'netname'=>$_netname,'description'=>$_description,'country'=>$_country,'addressesNumber'=>$_addressesNumber,'comment'=>$_comment,'routedToInterface'=>$_routedToInterface));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get netname value
	 * @return string|null
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set netname value
	 * @param string $_netname the netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
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
	 * Get addressesNumber value
	 * @return int|null
	 */
	public function getAddressesNumber()
	{
		return $this->addressesNumber;
	}
	/**
	 * Set addressesNumber value
	 * @param int $_addressesNumber the addressesNumber
	 * @return int
	 */
	public function setAddressesNumber($_addressesNumber)
	{
		return ($this->addressesNumber = $_addressesNumber);
	}
	/**
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get routedToInterface value
	 * @return string|null
	 */
	public function getRoutedToInterface()
	{
		return $this->routedToInterface;
	}
	/**
	 * Set routedToInterface value
	 * @param string $_routedToInterface the routedToInterface
	 * @return string
	 */
	public function setRoutedToInterface($_routedToInterface)
	{
		return ($this->routedToInterface = $_routedToInterface);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFailoverRipeAdd
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