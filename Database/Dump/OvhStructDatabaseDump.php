<?php
/**
 * File for class OvhStructDatabaseDump
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDatabaseDump originally named databaseDump
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDatabaseDump extends OvhWsdlClass
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
	 * The backup
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $backup;
	/**
	 * Constructor method for databaseDump
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_db
	 * @param string $_backup
	 * @return OvhStructDatabaseDump
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_db = NULL,$_backup = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'db'=>$_db,'backup'=>$_backup));
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
	 * Get backup value
	 * @return string|null
	 */
	public function getBackup()
	{
		return $this->backup;
	}
	/**
	 * Set backup value
	 * @param string $_backup the backup
	 * @return string
	 */
	public function setBackup($_backup)
	{
		return ($this->backup = $_backup);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDatabaseDump
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