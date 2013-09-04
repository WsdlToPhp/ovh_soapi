<?php
/**
 * File for class OvhStructGlobalAccessStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructGlobalAccessStruct originally named globalAccessStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructGlobalAccessStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The domain
	 * @var boolean
	 */
	public $domain;
	/**
	 * The hosting
	 * @var boolean
	 */
	public $hosting;
	/**
	 * The email
	 * @var boolean
	 */
	public $email;
	/**
	 * The pop
	 * @var boolean
	 */
	public $pop;
	/**
	 * The dedicated
	 * @var boolean
	 */
	public $dedicated;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The alldom
	 * @var boolean
	 */
	public $alldom;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * The rps
	 * @var boolean
	 */
	public $rps;
	/**
	 * The rpsOrphan
	 * @var boolean
	 */
	public $rpsOrphan;
	/**
	 * The vs
	 * @var boolean
	 */
	public $vs;
	/**
	 * The voip
	 * @var boolean
	 */
	public $voip;
	/**
	 * The housing
	 * @var boolean
	 */
	public $housing;
	/**
	 * The sqlpriv
	 * @var boolean
	 */
	public $sqlpriv;
	/**
	 * Constructor method for globalAccessStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param boolean $_domain
	 * @param boolean $_hosting
	 * @param boolean $_email
	 * @param boolean $_pop
	 * @param boolean $_dedicated
	 * @param string $_reverse
	 * @param boolean $_alldom
	 * @param boolean $_ssl
	 * @param boolean $_rps
	 * @param boolean $_rpsOrphan
	 * @param boolean $_vs
	 * @param boolean $_voip
	 * @param boolean $_housing
	 * @param boolean $_sqlpriv
	 * @return OvhStructGlobalAccessStruct
	 */
	public function __construct($_name = NULL,$_domain = NULL,$_hosting = NULL,$_email = NULL,$_pop = NULL,$_dedicated = NULL,$_reverse = NULL,$_alldom = NULL,$_ssl = NULL,$_rps = NULL,$_rpsOrphan = NULL,$_vs = NULL,$_voip = NULL,$_housing = NULL,$_sqlpriv = NULL)
	{
		parent::__construct(array('name'=>$_name,'domain'=>$_domain,'hosting'=>$_hosting,'email'=>$_email,'pop'=>$_pop,'dedicated'=>$_dedicated,'reverse'=>$_reverse,'alldom'=>$_alldom,'ssl'=>$_ssl,'rps'=>$_rps,'rpsOrphan'=>$_rpsOrphan,'vs'=>$_vs,'voip'=>$_voip,'housing'=>$_housing,'sqlpriv'=>$_sqlpriv));
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
	 * Get domain value
	 * @return boolean|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param boolean $_domain the domain
	 * @return boolean
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get hosting value
	 * @return boolean|null
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set hosting value
	 * @param boolean $_hosting the hosting
	 * @return boolean
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get email value
	 * @return boolean|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param boolean $_email the email
	 * @return boolean
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get pop value
	 * @return boolean|null
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set pop value
	 * @param boolean $_pop the pop
	 * @return boolean
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get dedicated value
	 * @return boolean|null
	 */
	public function getDedicated()
	{
		return $this->dedicated;
	}
	/**
	 * Set dedicated value
	 * @param boolean $_dedicated the dedicated
	 * @return boolean
	 */
	public function setDedicated($_dedicated)
	{
		return ($this->dedicated = $_dedicated);
	}
	/**
	 * Get reverse value
	 * @return string|null
	 */
	public function getReverse()
	{
		return $this->reverse;
	}
	/**
	 * Set reverse value
	 * @param string $_reverse the reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get alldom value
	 * @return boolean|null
	 */
	public function getAlldom()
	{
		return $this->alldom;
	}
	/**
	 * Set alldom value
	 * @param boolean $_alldom the alldom
	 * @return boolean
	 */
	public function setAlldom($_alldom)
	{
		return ($this->alldom = $_alldom);
	}
	/**
	 * Get ssl value
	 * @return boolean|null
	 */
	public function getSsl()
	{
		return $this->ssl;
	}
	/**
	 * Set ssl value
	 * @param boolean $_ssl the ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
	}
	/**
	 * Get rps value
	 * @return boolean|null
	 */
	public function getRps()
	{
		return $this->rps;
	}
	/**
	 * Set rps value
	 * @param boolean $_rps the rps
	 * @return boolean
	 */
	public function setRps($_rps)
	{
		return ($this->rps = $_rps);
	}
	/**
	 * Get rpsOrphan value
	 * @return boolean|null
	 */
	public function getRpsOrphan()
	{
		return $this->rpsOrphan;
	}
	/**
	 * Set rpsOrphan value
	 * @param boolean $_rpsOrphan the rpsOrphan
	 * @return boolean
	 */
	public function setRpsOrphan($_rpsOrphan)
	{
		return ($this->rpsOrphan = $_rpsOrphan);
	}
	/**
	 * Get vs value
	 * @return boolean|null
	 */
	public function getVs()
	{
		return $this->vs;
	}
	/**
	 * Set vs value
	 * @param boolean $_vs the vs
	 * @return boolean
	 */
	public function setVs($_vs)
	{
		return ($this->vs = $_vs);
	}
	/**
	 * Get voip value
	 * @return boolean|null
	 */
	public function getVoip()
	{
		return $this->voip;
	}
	/**
	 * Set voip value
	 * @param boolean $_voip the voip
	 * @return boolean
	 */
	public function setVoip($_voip)
	{
		return ($this->voip = $_voip);
	}
	/**
	 * Get housing value
	 * @return boolean|null
	 */
	public function getHousing()
	{
		return $this->housing;
	}
	/**
	 * Set housing value
	 * @param boolean $_housing the housing
	 * @return boolean
	 */
	public function setHousing($_housing)
	{
		return ($this->housing = $_housing);
	}
	/**
	 * Get sqlpriv value
	 * @return boolean|null
	 */
	public function getSqlpriv()
	{
		return $this->sqlpriv;
	}
	/**
	 * Set sqlpriv value
	 * @param boolean $_sqlpriv the sqlpriv
	 * @return boolean
	 */
	public function setSqlpriv($_sqlpriv)
	{
		return ($this->sqlpriv = $_sqlpriv);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructGlobalAccessStruct
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