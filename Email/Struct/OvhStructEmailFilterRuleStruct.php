<?php
/**
 * File for class OvhStructEmailFilterRuleStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailFilterRuleStruct originally named emailFilterRuleStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailFilterRuleStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The header
	 * @var string
	 */
	public $header;
	/**
	 * The rule
	 * @var string
	 */
	public $rule;
	/**
	 * The rule_param
	 * @var string
	 */
	public $rule_param;
	/**
	 * Constructor method for emailFilterRuleStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_header
	 * @param string $_rule
	 * @param string $_rule_param
	 * @return OvhStructEmailFilterRuleStruct
	 */
	public function __construct($_id = NULL,$_header = NULL,$_rule = NULL,$_rule_param = NULL)
	{
		parent::__construct(array('id'=>$_id,'header'=>$_header,'rule'=>$_rule,'rule_param'=>$_rule_param));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * @return OvhStructEmailFilterRuleStruct
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