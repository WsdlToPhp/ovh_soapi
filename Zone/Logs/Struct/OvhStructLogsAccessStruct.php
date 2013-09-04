<?php
/**
 * File for class OvhStructLogsAccessStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructLogsAccessStruct originally named logsAccessStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructLogsAccessStruct extends OvhWsdlClass
{
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * Constructor method for logsAccessStruct
	 * @see parent::__construct()
	 * @param string $_user
	 * @param string $_lastUpdate
	 * @return OvhStructLogsAccessStruct
	 */
	public function __construct($_user = NULL,$_lastUpdate = NULL)
	{
		parent::__construct(array('user'=>$_user,'lastUpdate'=>$_lastUpdate));
	}
	/**
	 * Get user value
	 * @return string|null
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set user value
	 * @param string $_user the user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get lastUpdate value
	 * @return string|null
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
	}
	/**
	 * Set lastUpdate value
	 * @param string $_lastUpdate the lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructLogsAccessStruct
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