<?php
/**
 * File for class OvhStructDedicatedInstallationTemplateStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInstallationTemplateStruct originally named dedicatedInstallationTemplateStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInstallationTemplateStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * Constructor method for dedicatedInstallationTemplateStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_os
	 * @return OvhStructDedicatedInstallationTemplateStruct
	 */
	public function __construct($_name = NULL,$_os = NULL)
	{
		parent::__construct(array('name'=>$_name,'os'=>$_os));
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
	 * Get os value
	 * @return string|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param string $_os the os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedInstallationTemplateStruct
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