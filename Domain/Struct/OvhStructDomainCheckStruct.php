<?php
/**
 * File for class OvhStructDomainCheckStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainCheckStruct originally named domainCheckStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainCheckStruct extends OvhWsdlClass
{
	/**
	 * The predicate
	 * @var string
	 */
	public $predicate;
	/**
	 * The value
	 * @var boolean
	 */
	public $value;
	/**
	 * The reason
	 * @var string
	 */
	public $reason;
	/**
	 * Constructor method for domainCheckStruct
	 * @see parent::__construct()
	 * @param string $_predicate
	 * @param boolean $_value
	 * @param string $_reason
	 * @return OvhStructDomainCheckStruct
	 */
	public function __construct($_predicate = NULL,$_value = NULL,$_reason = NULL)
	{
		parent::__construct(array('predicate'=>$_predicate,'value'=>$_value,'reason'=>$_reason));
	}
	/**
	 * Get predicate value
	 * @return string|null
	 */
	public function getPredicate()
	{
		return $this->predicate;
	}
	/**
	 * Set predicate value
	 * @param string $_predicate the predicate
	 * @return string
	 */
	public function setPredicate($_predicate)
	{
		return ($this->predicate = $_predicate);
	}
	/**
	 * Get value value
	 * @return boolean|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param boolean $_value the value
	 * @return boolean
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get reason value
	 * @return string|null
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set reason value
	 * @param string $_reason the reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainCheckStruct
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