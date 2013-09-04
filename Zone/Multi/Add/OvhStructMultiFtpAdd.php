<?php
/**
 * File for class OvhStructMultiFtpAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMultiFtpAdd originally named multiFtpAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMultiFtpAdd extends OvhWsdlClass
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
	 * The subdir
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subdir;
	/**
	 * The loginsuffix
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $loginsuffix;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * Constructor method for multiFtpAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_subdir
	 * @param string $_loginsuffix
	 * @param string $_password
	 * @return OvhStructMultiFtpAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_subdir = NULL,$_loginsuffix = NULL,$_password = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdir'=>$_subdir,'loginsuffix'=>$_loginsuffix,'password'=>$_password));
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
	 * Get subdir value
	 * @return string|null
	 */
	public function getSubdir()
	{
		return $this->subdir;
	}
	/**
	 * Set subdir value
	 * @param string $_subdir the subdir
	 * @return string
	 */
	public function setSubdir($_subdir)
	{
		return ($this->subdir = $_subdir);
	}
	/**
	 * Get loginsuffix value
	 * @return string|null
	 */
	public function getLoginsuffix()
	{
		return $this->loginsuffix;
	}
	/**
	 * Set loginsuffix value
	 * @param string $_loginsuffix the loginsuffix
	 * @return string
	 */
	public function setLoginsuffix($_loginsuffix)
	{
		return ($this->loginsuffix = $_loginsuffix);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMultiFtpAdd
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