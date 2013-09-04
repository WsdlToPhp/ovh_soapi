<?php
/**
 * File for class OvhStructTelephonySpareServiceInfoStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareServiceInfoStruct originally named telephonySpareServiceInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareServiceInfoStruct extends OvhWsdlClass
{
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The parents
	 * @var OvhStructMyArrayOfStringType
	 */
	public $parents;
	/**
	 * The actions
	 * @var OvhStructTelephonySpareActionsStruct
	 */
	public $actions;
	/**
	 * Constructor method for telephonySpareServiceInfoStruct
	 * @see parent::__construct()
	 * @param string $_service
	 * @param string $_reference
	 * @param OvhStructMyArrayOfStringType $_parents
	 * @param OvhStructTelephonySpareActionsStruct $_actions
	 * @return OvhStructTelephonySpareServiceInfoStruct
	 */
	public function __construct($_service = NULL,$_reference = NULL,$_parents = NULL,$_actions = NULL)
	{
		parent::__construct(array('service'=>$_service,'reference'=>$_reference,'parents'=>($_parents instanceof OvhStructMyArrayOfStringType)?$_parents:new OvhStructMyArrayOfStringType($_parents),'actions'=>$_actions));
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
	 * Get reference value
	 * @return string|null
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set reference value
	 * @param string $_reference the reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get parents value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getParents()
	{
		return $this->parents;
	}
	/**
	 * Set parents value
	 * @param OvhStructMyArrayOfStringType $_parents the parents
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setParents($_parents)
	{
		return ($this->parents = $_parents);
	}
	/**
	 * Get actions value
	 * @return OvhStructTelephonySpareActionsStruct|null
	 */
	public function getActions()
	{
		return $this->actions;
	}
	/**
	 * Set actions value
	 * @param OvhStructTelephonySpareActionsStruct $_actions the actions
	 * @return OvhStructTelephonySpareActionsStruct
	 */
	public function setActions($_actions)
	{
		return ($this->actions = $_actions);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareServiceInfoStruct
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