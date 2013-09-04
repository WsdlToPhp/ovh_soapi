<?php
/**
 * File for class OvhStructEmailFilterStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailFilterStruct originally named emailFilterStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailFilterStruct extends OvhWsdlClass
{
	/**
	 * The filter
	 * @var string
	 */
	public $filter;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * The action_param
	 * @var string
	 */
	public $action_param;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The priority
	 * @var string
	 */
	public $priority;
	/**
	 * The nbRules
	 * @var int
	 */
	public $nbRules;
	/**
	 * The rules
	 * @var OvhStructMyArrayOfEmailFilterRuleStructType
	 */
	public $rules;
	/**
	 * Constructor method for emailFilterStruct
	 * @see parent::__construct()
	 * @param string $_filter
	 * @param string $_action
	 * @param string $_action_param
	 * @param boolean $_active
	 * @param string $_priority
	 * @param int $_nbRules
	 * @param OvhStructMyArrayOfEmailFilterRuleStructType $_rules
	 * @return OvhStructEmailFilterStruct
	 */
	public function __construct($_filter = NULL,$_action = NULL,$_action_param = NULL,$_active = NULL,$_priority = NULL,$_nbRules = NULL,$_rules = NULL)
	{
		parent::__construct(array('filter'=>$_filter,'action'=>$_action,'action_param'=>$_action_param,'active'=>$_active,'priority'=>$_priority,'nbRules'=>$_nbRules,'rules'=>($_rules instanceof OvhStructMyArrayOfEmailFilterRuleStructType)?$_rules:new OvhStructMyArrayOfEmailFilterRuleStructType($_rules)));
	}
	/**
	 * Get filter value
	 * @return string|null
	 */
	public function getFilter()
	{
		return $this->filter;
	}
	/**
	 * Set filter value
	 * @param string $_filter the filter
	 * @return string
	 */
	public function setFilter($_filter)
	{
		return ($this->filter = $_filter);
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
	 * Get action_param value
	 * @return string|null
	 */
	public function getAction_param()
	{
		return $this->action_param;
	}
	/**
	 * Set action_param value
	 * @param string $_action_param the action_param
	 * @return string
	 */
	public function setAction_param($_action_param)
	{
		return ($this->action_param = $_action_param);
	}
	/**
	 * Get active value
	 * @return boolean|null
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set active value
	 * @param boolean $_active the active
	 * @return boolean
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get priority value
	 * @return string|null
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set priority value
	 * @param string $_priority the priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
	}
	/**
	 * Get nbRules value
	 * @return int|null
	 */
	public function getNbRules()
	{
		return $this->nbRules;
	}
	/**
	 * Set nbRules value
	 * @param int $_nbRules the nbRules
	 * @return int
	 */
	public function setNbRules($_nbRules)
	{
		return ($this->nbRules = $_nbRules);
	}
	/**
	 * Get rules value
	 * @return OvhStructMyArrayOfEmailFilterRuleStructType|null
	 */
	public function getRules()
	{
		return $this->rules;
	}
	/**
	 * Set rules value
	 * @param OvhStructMyArrayOfEmailFilterRuleStructType $_rules the rules
	 * @return OvhStructMyArrayOfEmailFilterRuleStructType
	 */
	public function setRules($_rules)
	{
		return ($this->rules = $_rules);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructEmailFilterStruct
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