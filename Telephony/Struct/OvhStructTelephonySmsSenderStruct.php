<?php
/**
 * File for class OvhStructTelephonySmsSenderStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsSenderStruct originally named telephonySmsSenderStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsSenderStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor method for telephonySmsSenderStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_status
	 * @param string $_description
	 * @return OvhStructTelephonySmsSenderStruct
	 */
	public function __construct($_number = NULL,$_status = NULL,$_description = NULL)
	{
		parent::__construct(array('number'=>$_number,'status'=>$_status,'description'=>$_description));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsSenderStruct
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