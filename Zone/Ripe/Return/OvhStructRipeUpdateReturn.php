<?php
/**
 * File for class OvhStructRipeUpdateReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeUpdateReturn originally named ripeUpdateReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeUpdateReturn extends OvhWsdlClass
{
	/**
	 * The object
	 * @var string
	 */
	public $object;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The result
	 * @var string
	 */
	public $result;
	/**
	 * Constructor method for ripeUpdateReturn
	 * @see parent::__construct()
	 * @param string $_object
	 * @param string $_value
	 * @param string $_operation
	 * @param string $_result
	 * @return OvhStructRipeUpdateReturn
	 */
	public function __construct($_object = NULL,$_value = NULL,$_operation = NULL,$_result = NULL)
	{
		parent::__construct(array('object'=>$_object,'value'=>$_value,'operation'=>$_operation,'result'=>$_result));
	}
	/**
	 * Get object value
	 * @return string|null
	 */
	public function getObject()
	{
		return $this->object;
	}
	/**
	 * Set object value
	 * @param string $_object the object
	 * @return string
	 */
	public function setObject($_object)
	{
		return ($this->object = $_object);
	}
	/**
	 * Get value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param string $_value the value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get operation value
	 * @return string|null
	 */
	public function getOperation()
	{
		return $this->operation;
	}
	/**
	 * Set operation value
	 * @param string $_operation the operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get result value
	 * @return string|null
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set result value
	 * @param string $_result the result
	 * @return string
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeUpdateReturn
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