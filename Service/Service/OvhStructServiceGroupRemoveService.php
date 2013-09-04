<?php
/**
 * File for class OvhStructServiceGroupRemoveService
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceGroupRemoveService originally named serviceGroupRemoveService
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceGroupRemoveService extends OvhWsdlClass
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
	 * The service
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $service;
	/**
	 * The component
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $component;
	/**
	 * Constructor method for serviceGroupRemoveService
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_service
	 * @param string $_component
	 * @return OvhStructServiceGroupRemoveService
	 */
	public function __construct($_session = NULL,$_name = NULL,$_service = NULL,$_component = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'service'=>$_service,'component'=>$_component));
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
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get component value
	 * @return string|null
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set component value
	 * @param string $_component the component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceGroupRemoveService
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