<?php
/**
 * File for class OvhStructEmailFilterAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailFilterAdd originally named emailFilterAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailFilterAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The pop
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pop;
	/**
	 * The filter
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filter;
	/**
	 * The priority
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $priority;
	/**
	 * The active
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $active;
	/**
	 * The action
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $action;
	/**
	 * The action_param
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $action_param;
	/**
	 * The header
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $header;
	/**
	 * The rule
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $rule;
	/**
	 * The rule_param
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $rule_param;
	/**
	 * Constructor method for emailFilterAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_pop
	 * @param string $_filter
	 * @param int $_priority
	 * @param boolean $_active
	 * @param string $_action
	 * @param string $_action_param
	 * @param string $_header
	 * @param string $_rule
	 * @param string $_rule_param
	 * @return OvhStructEmailFilterAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_pop = NULL,$_filter = NULL,$_priority = NULL,$_active = NULL,$_action = NULL,$_action_param = NULL,$_header = NULL,$_rule = NULL,$_rule_param = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'filter'=>$_filter,'priority'=>$_priority,'active'=>$_active,'action'=>$_action,'action_param'=>$_action_param,'header'=>$_header,'rule'=>$_rule,'rule_param'=>$_rule_param));
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
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get pop value
	 * @return string|null
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set pop value
	 * @param string $_pop the pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
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
	 * Get priority value
	 * @return int|null
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set priority value
	 * @param int $_priority the priority
	 * @return int
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
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
	 * Get header value
	 * @return string|null
	 */
	public function getHeader()
	{
		return $this->header;
	}
	/**
	 * Set header value
	 * @param string $_header the header
	 * @return string
	 */
	public function setHeader($_header)
	{
		return ($this->header = $_header);
	}
	/**
	 * Get rule value
	 * @return string|null
	 */
	public function getRule()
	{
		return $this->rule;
	}
	/**
	 * Set rule value
	 * @param string $_rule the rule
	 * @return string
	 */
	public function setRule($_rule)
	{
		return ($this->rule = $_rule);
	}
	/**
	 * Get rule_param value
	 * @return string|null
	 */
	public function getRule_param()
	{
		return $this->rule_param;
	}
	/**
	 * Set rule_param value
	 * @param string $_rule_param the rule_param
	 * @return string
	 */
	public function setRule_param($_rule_param)
	{
		return ($this->rule_param = $_rule_param);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructEmailFilterAdd
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