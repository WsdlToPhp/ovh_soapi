<?php
/**
 * File for class OvhStructTelephonyPendingActionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPendingActionStruct originally named telephonyPendingActionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPendingActionStruct extends OvhWsdlClass
{
	/**
	 * The dateTodo
	 * @var string
	 */
	public $dateTodo;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * Constructor method for telephonyPendingActionStruct
	 * @see parent::__construct()
	 * @param string $_dateTodo
	 * @param string $_offer
	 * @param string $_action
	 * @return OvhStructTelephonyPendingActionStruct
	 */
	public function __construct($_dateTodo = NULL,$_offer = NULL,$_action = NULL)
	{
		parent::__construct(array('dateTodo'=>$_dateTodo,'offer'=>$_offer,'action'=>$_action));
	}
	/**
	 * Get dateTodo value
	 * @return string|null
	 */
	public function getDateTodo()
	{
		return $this->dateTodo;
	}
	/**
	 * Set dateTodo value
	 * @param string $_dateTodo the dateTodo
	 * @return string
	 */
	public function setDateTodo($_dateTodo)
	{
		return ($this->dateTodo = $_dateTodo);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get action value
	 * @return string|null
	 */
	public function getAction()
	{
		return $this->action;
	}
	/**
	 * Set action value
	 * @param string $_action the action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPendingActionStruct
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