<?php
/**
 * File for class OvhStructFtpChangePassword
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructFtpChangePassword originally named ftpChangePassword
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructFtpChangePassword extends OvhWsdlClass
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
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * The oldstate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $oldstate;
	/**
	 * The newstate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $newstate;
	/**
	 * Constructor method for ftpChangePassword
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_password
	 * @param string $_oldstate
	 * @param string $_newstate
	 * @return OvhStructFtpChangePassword
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_password = NULL,$_oldstate = NULL,$_newstate = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'password'=>$_password,'oldstate'=>$_oldstate,'newstate'=>$_newstate));
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
	 * Get oldstate value
	 * @return string|null
	 */
	public function getOldstate()
	{
		return $this->oldstate;
	}
	/**
	 * Set oldstate value
	 * @param string $_oldstate the oldstate
	 * @return string
	 */
	public function setOldstate($_oldstate)
	{
		return ($this->oldstate = $_oldstate);
	}
	/**
	 * Get newstate value
	 * @return string|null
	 */
	public function getNewstate()
	{
		return $this->newstate;
	}
	/**
	 * Set newstate value
	 * @param string $_newstate the newstate
	 * @return string
	 */
	public function setNewstate($_newstate)
	{
		return ($this->newstate = $_newstate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructFtpChangePassword
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