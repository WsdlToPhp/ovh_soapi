<?php
/**
 * File for class OvhStructDedicatedAllowedDistributionLanguageStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAllowedDistributionLanguageStruct originally named dedicatedAllowedDistributionLanguageStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAllowedDistributionLanguageStruct extends OvhWsdlClass
{
	/**
	 * The code
	 * @var string
	 */
	public $code;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * Constructor method for dedicatedAllowedDistributionLanguageStruct
	 * @see parent::__construct()
	 * @param string $_code
	 * @param string $_desc
	 * @return OvhStructDedicatedAllowedDistributionLanguageStruct
	 */
	public function __construct($_code = NULL,$_desc = NULL)
	{
		parent::__construct(array('code'=>$_code,'desc'=>$_desc));
	}
	/**
	 * Get code value
	 * @return string|null
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set code value
	 * @param string $_code the code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get desc value
	 * @return string|null
	 */
	public function getDesc()
	{
		return $this->desc;
	}
	/**
	 * Set desc value
	 * @param string $_desc the desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAllowedDistributionLanguageStruct
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