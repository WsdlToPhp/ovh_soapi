<?php
/**
 * File for class OvhStructSqlpriveMysqlDatabaseUserPrivilegeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlDatabaseUserPrivilegeStruct originally named sqlpriveMysqlDatabaseUserPrivilegeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlDatabaseUserPrivilegeStruct extends OvhWsdlClass
{
	/**
	 * The userName
	 * @var string
	 */
	public $userName;
	/**
	 * The userPriv
	 * @var string
	 */
	public $userPriv;
	/**
	 * Constructor method for sqlpriveMysqlDatabaseUserPrivilegeStruct
	 * @see parent::__construct()
	 * @param string $_userName
	 * @param string $_userPriv
	 * @return OvhStructSqlpriveMysqlDatabaseUserPrivilegeStruct
	 */
	public function __construct($_userName = NULL,$_userPriv = NULL)
	{
		parent::__construct(array('userName'=>$_userName,'userPriv'=>$_userPriv));
	}
	/**
	 * Get userName value
	 * @return string|null
	 */
	public function getUserName()
	{
		return $this->userName;
	}
	/**
	 * Set userName value
	 * @param string $_userName the userName
	 * @return string
	 */
	public function setUserName($_userName)
	{
		return ($this->userName = $_userName);
	}
	/**
	 * Get userPriv value
	 * @return string|null
	 */
	public function getUserPriv()
	{
		return $this->userPriv;
	}
	/**
	 * Set userPriv value
	 * @param string $_userPriv the userPriv
	 * @return string
	 */
	public function setUserPriv($_userPriv)
	{
		return ($this->userPriv = $_userPriv);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlDatabaseUserPrivilegeStruct
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