<?php
/**
 * File for class OvhStructServiceGroupSetName
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceGroupSetName originally named serviceGroupSetName
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceGroupSetName extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The newName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $newName;
	/**
	 * Constructor method for serviceGroupSetName
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_newName
	 * @return OvhStructServiceGroupSetName
	 */
	public function __construct($_session = NULL,$_name = NULL,$_newName = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'newName'=>$_newName));
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
	 * Get newName value
	 * @return string|null
	 */
	public function getNewName()
	{
		return $this->newName;
	}
	/**
	 * Set newName value
	 * @param string $_newName the newName
	 * @return string
	 */
	public function setNewName($_newName)
	{
		return ($this->newName = $_newName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceGroupSetName
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