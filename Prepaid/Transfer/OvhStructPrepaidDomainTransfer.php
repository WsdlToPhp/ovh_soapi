<?php
/**
 * File for class OvhStructPrepaidDomainTransfer
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPrepaidDomainTransfer originally named prepaidDomainTransfer
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPrepaidDomainTransfer extends OvhWsdlClass
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
	 * The nicowner
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nicowner;
	/**
	 * The nicadmin
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nicadmin;
	/**
	 * The nictech
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nictech;
	/**
	 * The nicbilling
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nicbilling;
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
	 * The frpartBirthday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $frpartBirthday;
	/**
	 * The frpartBirthCountry
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $frpartBirthCountry;
	/**
	 * The frpartBirthDepartment
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $frpartBirthDepartment;
	/**
	 * The frpartBirthTown
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $frpartBirthTown;
	/**
	 * The dryRun
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor method for prepaidDomainTransfer
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_nicowner
	 * @param string $_nicadmin
	 * @param string $_nictech
	 * @param string $_nicbilling
	 * @param string $_dns1
	 * @param string $_dns2
	 * @param string $_dns3
	 * @param string $_dns4
	 * @param string $_dns5
	 * @param string $_frpartBirthday
	 * @param string $_frpartBirthCountry
	 * @param string $_frpartBirthDepartment
	 * @param string $_frpartBirthTown
	 * @param boolean $_dryRun
	 * @return OvhStructPrepaidDomainTransfer
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_nicowner = NULL,$_nicadmin = NULL,$_nictech = NULL,$_nicbilling = NULL,$_dns1 = NULL,$_dns2 = NULL,$_dns3 = NULL,$_dns4 = NULL,$_dns5 = NULL,$_frpartBirthday = NULL,$_frpartBirthCountry = NULL,$_frpartBirthDepartment = NULL,$_frpartBirthTown = NULL,$_dryRun = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'frpartBirthday'=>$_frpartBirthday,'frpartBirthCountry'=>$_frpartBirthCountry,'frpartBirthDepartment'=>$_frpartBirthDepartment,'frpartBirthTown'=>$_frpartBirthTown,'dryRun'=>$_dryRun));
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
	 * Get frpartBirthday value
	 * @return string|null
	 */
	public function getFrpartBirthday()
	{
		return $this->frpartBirthday;
	}
	/**
	 * Set frpartBirthday value
	 * @param string $_frpartBirthday the frpartBirthday
	 * @return string
	 */
	public function setFrpartBirthday($_frpartBirthday)
	{
		return ($this->frpartBirthday = $_frpartBirthday);
	}
	/**
	 * Get frpartBirthCountry value
	 * @return string|null
	 */
	public function getFrpartBirthCountry()
	{
		return $this->frpartBirthCountry;
	}
	/**
	 * Set frpartBirthCountry value
	 * @param string $_frpartBirthCountry the frpartBirthCountry
	 * @return string
	 */
	public function setFrpartBirthCountry($_frpartBirthCountry)
	{
		return ($this->frpartBirthCountry = $_frpartBirthCountry);
	}
	/**
	 * Get frpartBirthDepartment value
	 * @return string|null
	 */
	public function getFrpartBirthDepartment()
	{
		return $this->frpartBirthDepartment;
	}
	/**
	 * Set frpartBirthDepartment value
	 * @param string $_frpartBirthDepartment the frpartBirthDepartment
	 * @return string
	 */
	public function setFrpartBirthDepartment($_frpartBirthDepartment)
	{
		return ($this->frpartBirthDepartment = $_frpartBirthDepartment);
	}
	/**
	 * Get frpartBirthTown value
	 * @return string|null
	 */
	public function getFrpartBirthTown()
	{
		return $this->frpartBirthTown;
	}
	/**
	 * Set frpartBirthTown value
	 * @param string $_frpartBirthTown the frpartBirthTown
	 * @return string
	 */
	public function setFrpartBirthTown($_frpartBirthTown)
	{
		return ($this->frpartBirthTown = $_frpartBirthTown);
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
	 * @return OvhStructPrepaidDomainTransfer
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