<?php
/**
 * File for class OvhStructDatabaseChangePassword
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDatabaseChangePassword originally named databaseChangePassword
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDatabaseChangePassword extends OvhWsdlClass
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
	 * The db
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $db;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * Constructor method for databaseChangePassword
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_db
	 * @param string $_password
	 * @return OvhStructDatabaseChangePassword
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_db = NULL,$_password = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'db'=>$_db,'password'=>$_password));
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
	 * Get db value
	 * @return string|null
	 */
	public function getDb()
	{
		return $this->db;
	}
	/**
	 * Set db value
	 * @param string $_db the db
	 * @return string
	 */
	public function setDb($_db)
	{
		return ($this->db = $_db);
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
	 * @return OvhStructDatabaseChangePassword
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