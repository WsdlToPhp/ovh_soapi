<?php
/**
 * File for class OvhStructTelephonyLineLogsListStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineLogsListStruct originally named telephonyLineLogsListStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineLogsListStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The msg
	 * @var string
	 */
	public $msg;
	/**
	 * Constructor method for telephonyLineLogsListStruct
	 * @see parent::__construct()
	 * @param string $_date
	 * @param string $_type
	 * @param string $_msg
	 * @return OvhStructTelephonyLineLogsListStruct
	 */
	public function __construct($_date = NULL,$_type = NULL,$_msg = NULL)
	{
		parent::__construct(array('date'=>$_date,'type'=>$_type,'msg'=>$_msg));
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get msg value
	 * @return string|null
	 */
	public function getMsg()
	{
		return $this->msg;
	}
	/**
	 * Set msg value
	 * @param string $_msg the msg
	 * @return string
	 */
	public function setMsg($_msg)
	{
		return ($this->msg = $_msg);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineLogsListStruct
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