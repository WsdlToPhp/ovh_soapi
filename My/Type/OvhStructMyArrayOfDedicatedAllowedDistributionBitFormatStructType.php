<?php
/**
 * File for class OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType originally named MyArrayOfDedicatedAllowedDistributionBitFormatStructType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public $item;
	/**
	 * Constructor method for MyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 * @see parent::__construct()
	 * @param OvhStructDedicatedAllowedDistributionBitFormatStruct $_item
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public function __construct($_item = NULL)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Get item value
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct|null
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Set item value
	 * @param OvhStructDedicatedAllowedDistributionBitFormatStruct $_item the item
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see OvhWsdlClass::item()
	 * @param int $_index
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see OvhWsdlClass::last()
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see OvhWsdlClass::last()
	 * @param int $_offset
	 * @return OvhStructDedicatedAllowedDistributionBitFormatStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see OvhWsdlClass::getAttributeName()
	 * @return string item
	 */
	public function getAttributeName()
	{
		return 'item';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionBitFormatStructType
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