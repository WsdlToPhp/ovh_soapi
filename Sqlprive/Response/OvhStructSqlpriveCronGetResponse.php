<?php
/**
 * File for class OvhStructSqlpriveCronGetResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveCronGetResponse originally named sqlpriveCronGetResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveCronGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfSqlpriveCronStructType
	 */
	public $return;
	/**
	 * Constructor method for sqlpriveCronGetResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfSqlpriveCronStructType $_return
	 * @return OvhStructSqlpriveCronGetResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfSqlpriveCronStructType)?$_return:new OvhStructMyArrayOfSqlpriveCronStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfSqlpriveCronStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfSqlpriveCronStructType $_return the return
	 * @return OvhStructMyArrayOfSqlpriveCronStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveCronGetResponse
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