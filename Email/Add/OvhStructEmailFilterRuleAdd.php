<?php
/**
 * File for class OvhStructEmailFilterRuleAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailFilterRuleAdd originally named emailFilterRuleAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailFilterRuleAdd extends OvhWsdlClass
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
	 * Constructor method for emailFilterRuleAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_pop
	 * @param string $_filter
	 * @param string $_header
	 * @param string $_rule
	 * @param string $_rule_param
	 * @return OvhStructEmailFilterRuleAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_pop = NULL,$_filter = NULL,$_header = NULL,$_rule = NULL,$_rule_param = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'filter'=>$_filter,'header'=>$_header,'rule'=>$_rule,'rule_param'=>$_rule_param));
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
	 * @return OvhStructEmailFilterRuleAdd
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