<?php
/**
 * File for class OvhStructMultiDomainModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMultiDomainModify originally named multiDomainModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMultiDomainModify extends OvhWsdlClass
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
	 * The multidomain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $multidomain;
	/**
	 * The target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The ownLog
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $ownLog;
	/**
	 * Constructor method for multiDomainModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_multidomain
	 * @param string $_target
	 * @param string $_country
	 * @param boolean $_ownLog
	 * @return OvhStructMultiDomainModify
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_multidomain = NULL,$_target = NULL,$_country = NULL,$_ownLog = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'multidomain'=>$_multidomain,'target'=>$_target,'country'=>$_country,'ownLog'=>$_ownLog));
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
	 * Get multidomain value
	 * @return string|null
	 */
	public function getMultidomain()
	{
		return $this->multidomain;
	}
	/**
	 * Set multidomain value
	 * @param string $_multidomain the multidomain
	 * @return string
	 */
	public function setMultidomain($_multidomain)
	{
		return ($this->multidomain = $_multidomain);
	}
	/**
	 * Get target value
	 * @return string|null
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set target value
	 * @param string $_target the target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
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
	 * Get ownLog value
	 * @return boolean|null
	 */
	public function getOwnLog()
	{
		return $this->ownLog;
	}
	/**
	 * Set ownLog value
	 * @param boolean $_ownLog the ownLog
	 * @return boolean
	 */
	public function setOwnLog($_ownLog)
	{
		return ($this->ownLog = $_ownLog);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMultiDomainModify
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