<?php
/**
 * File for class OvhStructRpsMigrationTodo
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsMigrationTodo originally named rpsMigrationTodo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsMigrationTodo extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The logicalRpsName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $logicalRpsName;
	/**
	 * The physicalRpsTo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $physicalRpsTo;
	/**
	 * Constructor method for rpsMigrationTodo
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_logicalRpsName
	 * @param string $_physicalRpsTo
	 * @return OvhStructRpsMigrationTodo
	 */
	public function __construct($_session = NULL,$_logicalRpsName = NULL,$_physicalRpsTo = NULL)
	{
		parent::__construct(array('session'=>$_session,'logicalRpsName'=>$_logicalRpsName,'physicalRpsTo'=>$_physicalRpsTo));
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
	 * Get logicalRpsName value
	 * @return string|null
	 */
	public function getLogicalRpsName()
	{
		return $this->logicalRpsName;
	}
	/**
	 * Set logicalRpsName value
	 * @param string $_logicalRpsName the logicalRpsName
	 * @return string
	 */
	public function setLogicalRpsName($_logicalRpsName)
	{
		return ($this->logicalRpsName = $_logicalRpsName);
	}
	/**
	 * Get physicalRpsTo value
	 * @return string|null
	 */
	public function getPhysicalRpsTo()
	{
		return $this->physicalRpsTo;
	}
	/**
	 * Set physicalRpsTo value
	 * @param string $_physicalRpsTo the physicalRpsTo
	 * @return string
	 */
	public function setPhysicalRpsTo($_physicalRpsTo)
	{
		return ($this->physicalRpsTo = $_physicalRpsTo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsMigrationTodo
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