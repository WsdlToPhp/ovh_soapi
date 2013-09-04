<?php
/**
 * File for class OvhStructDomainInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainInfoReturn originally named domainInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The creation
	 * @var string
	 */
	public $creation;
	/**
	 * The modification
	 * @var string
	 */
	public $modification;
	/**
	 * The expiration
	 * @var string
	 */
	public $expiration;
	/**
	 * The nicowner
	 * @var string
	 */
	public $nicowner;
	/**
	 * The nicadmin
	 * @var string
	 */
	public $nicadmin;
	/**
	 * The nictech
	 * @var string
	 */
	public $nictech;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The authinfo
	 * @var string
	 */
	public $authinfo;
	/**
	 * The dns
	 * @var OvhStructMyArrayOfNsStructType
	 */
	public $dns;
	/**
	 * Constructor method for domainInfoReturn
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_creation
	 * @param string $_modification
	 * @param string $_expiration
	 * @param string $_nicowner
	 * @param string $_nicadmin
	 * @param string $_nictech
	 * @param string $_nicbilling
	 * @param string $_authinfo
	 * @param OvhStructMyArrayOfNsStructType $_dns
	 * @return OvhStructDomainInfoReturn
	 */
	public function __construct($_domain = NULL,$_creation = NULL,$_modification = NULL,$_expiration = NULL,$_nicowner = NULL,$_nicadmin = NULL,$_nictech = NULL,$_nicbilling = NULL,$_authinfo = NULL,$_dns = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'creation'=>$_creation,'modification'=>$_modification,'expiration'=>$_expiration,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'authinfo'=>$_authinfo,'dns'=>($_dns instanceof OvhStructMyArrayOfNsStructType)?$_dns:new OvhStructMyArrayOfNsStructType($_dns)));
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
	 * Get creation value
	 * @return string|null
	 */
	public function getCreation()
	{
		return $this->creation;
	}
	/**
	 * Set creation value
	 * @param string $_creation the creation
	 * @return string
	 */
	public function setCreation($_creation)
	{
		return ($this->creation = $_creation);
	}
	/**
	 * Get modification value
	 * @return string|null
	 */
	public function getModification()
	{
		return $this->modification;
	}
	/**
	 * Set modification value
	 * @param string $_modification the modification
	 * @return string
	 */
	public function setModification($_modification)
	{
		return ($this->modification = $_modification);
	}
	/**
	 * Get expiration value
	 * @return string|null
	 */
	public function getExpiration()
	{
		return $this->expiration;
	}
	/**
	 * Set expiration value
	 * @param string $_expiration the expiration
	 * @return string
	 */
	public function setExpiration($_expiration)
	{
		return ($this->expiration = $_expiration);
	}
	/**
	 * Get nicowner value
	 * @return string|null
	 */
	public function getNicowner()
	{
		return $this->nicowner;
	}
	/**
	 * Set nicowner value
	 * @param string $_nicowner the nicowner
	 * @return string
	 */
	public function setNicowner($_nicowner)
	{
		return ($this->nicowner = $_nicowner);
	}
	/**
	 * Get nicadmin value
	 * @return string|null
	 */
	public function getNicadmin()
	{
		return $this->nicadmin;
	}
	/**
	 * Set nicadmin value
	 * @param string $_nicadmin the nicadmin
	 * @return string
	 */
	public function setNicadmin($_nicadmin)
	{
		return ($this->nicadmin = $_nicadmin);
	}
	/**
	 * Get nictech value
	 * @return string|null
	 */
	public function getNictech()
	{
		return $this->nictech;
	}
	/**
	 * Set nictech value
	 * @param string $_nictech the nictech
	 * @return string
	 */
	public function setNictech($_nictech)
	{
		return ($this->nictech = $_nictech);
	}
	/**
	 * Get nicbilling value
	 * @return string|null
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set nicbilling value
	 * @param string $_nicbilling the nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
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
	 * Get dns value
	 * @return OvhStructMyArrayOfNsStructType|null
	 */
	public function getDns()
	{
		return $this->dns;
	}
	/**
	 * Set dns value
	 * @param OvhStructMyArrayOfNsStructType $_dns the dns
	 * @return OvhStructMyArrayOfNsStructType
	 */
	public function setDns($_dns)
	{
		return ($this->dns = $_dns);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainInfoReturn
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