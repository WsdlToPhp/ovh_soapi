<?php
/**
 * File for class OvhStructMyArrayOfDedicatedBackupListStructType
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMyArrayOfDedicatedBackupListStructType originally named MyArrayOfDedicatedBackupListStructType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMyArrayOfDedicatedBackupListStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var OvhStructDedicatedBackupListStruct
	 */
	public $item;
	/**
	 * Constructor method for MyArrayOfDedicatedBackupListStructType
	 * @see parent::__construct()
	 * @param OvhStructDedicatedBackupListStruct $_item
	 * @return OvhStructMyArrayOfDedicatedBackupListStructType
	 */
	public function __construct($_item = NULL)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Get item value
	 * @return OvhStructDedicatedBackupListStruct|null
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Set item value
	 * @param OvhStructDedicatedBackupListStruct $_item the item
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see OvhWsdlClass::item()
	 * @param int $_index
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see OvhWsdlClass::last()
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see OvhWsdlClass::last()
	 * @param int $_offset
	 * @return OvhStructDedicatedBackupListStruct
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
	 * @return OvhStructMyArrayOfDedicatedBackupListStructType
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