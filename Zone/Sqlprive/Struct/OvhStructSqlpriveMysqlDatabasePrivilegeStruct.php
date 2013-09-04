<?php
/**
 * File for class OvhStructSqlpriveMysqlDatabasePrivilegeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlDatabasePrivilegeStruct originally named sqlpriveMysqlDatabasePrivilegeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlDatabasePrivilegeStruct extends OvhWsdlClass
{
	/**
	 * The databaseName
	 * @var string
	 */
	public $databaseName;
	/**
	 * The databaseUsers
	 * @var OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public $databaseUsers;
	/**
	 * Constructor method for sqlpriveMysqlDatabasePrivilegeStruct
	 * @see parent::__construct()
	 * @param string $_databaseName
	 * @param OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $_databaseUsers
	 * @return OvhStructSqlpriveMysqlDatabasePrivilegeStruct
	 */
	public function __construct($_databaseName = NULL,$_databaseUsers = NULL)
	{
		parent::__construct(array('databaseName'=>$_databaseName,'databaseUsers'=>($_databaseUsers instanceof OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType)?$_databaseUsers:new OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType($_databaseUsers)));
	}
	/**
	 * Get databaseName value
	 * @return string|null
	 */
	public function getDatabaseName()
	{
		return $this->databaseName;
	}
	/**
	 * Set databaseName value
	 * @param string $_databaseName the databaseName
	 * @return string
	 */
	public function setDatabaseName($_databaseName)
	{
		return ($this->databaseName = $_databaseName);
	}
	/**
	 * Get databaseUsers value
	 * @return OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType|null
	 */
	public function getDatabaseUsers()
	{
		return $this->databaseUsers;
	}
	/**
	 * Set databaseUsers value
	 * @param OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $_databaseUsers the databaseUsers
	 * @return OvhStructMyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
	 */
	public function setDatabaseUsers($_databaseUsers)
	{
		return ($this->databaseUsers = $_databaseUsers);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlDatabasePrivilegeStruct
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