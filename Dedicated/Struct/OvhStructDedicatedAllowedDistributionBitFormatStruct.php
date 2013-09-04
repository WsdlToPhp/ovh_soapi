<?php
/**
 * File for class OvhStructDedicatedAllowedDistributionBitFormatStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAllowedDistributionBitFormatStruct originally named dedicatedAllowedDistributionBitFormatStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAllowedDistributionBitFormatStruct extends OvhWsdlClass
{
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The bits
	 * @var int
	 */
	public $bits;
	/**
	 * Constructor method for dedicatedAllowedDistributionBitFormatStruct
	 * @see parent::__construct()
	 * @param string $_reference
	 * @param int $_bits
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function __construct($_reference = NULL,$_bits = NULL)
	{
		parent::__construct(array('reference'=>$_reference,'bits'=>$_bits));
	}
	/**
	 * Get reference value
	 * @return string|null
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set reference value
	 * @param string $_reference the reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
	}
	/**
	 * Get bits value
	 * @return int|null
	 */
	public function getBits()
	{
		return $this->bits;
	}
	/**
	 * Set bits value
	 * @param int $_bits the bits
	 * @return int
	 */
	public function setBits($_bits)
	{
		return ($this->bits = $_bits);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
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