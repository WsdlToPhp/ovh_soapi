<?php
/**
 * File for class OvhStructTelephonySpareActionsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareActionsStruct originally named telephonySpareActionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareActionsStruct extends OvhWsdlClass
{
	/**
	 * The toSpare
	 * @var boolean
	 */
	public $toSpare;
	/**
	 * The toRma
	 * @var boolean
	 */
	public $toRma;
	/**
	 * The rmaType
	 * @var string
	 */
	public $rmaType;
	/**
	 * The toDelete
	 * @var boolean
	 */
	public $toDelete;
	/**
	 * Constructor method for telephonySpareActionsStruct
	 * @see parent::__construct()
	 * @param boolean $_toSpare
	 * @param boolean $_toRma
	 * @param string $_rmaType
	 * @param boolean $_toDelete
	 * @return OvhStructTelephonySpareActionsStruct
	 */
	public function __construct($_toSpare = NULL,$_toRma = NULL,$_rmaType = NULL,$_toDelete = NULL)
	{
		parent::__construct(array('toSpare'=>$_toSpare,'toRma'=>$_toRma,'rmaType'=>$_rmaType,'toDelete'=>$_toDelete));
	}
	/**
	 * Get toSpare value
	 * @return boolean|null
	 */
	public function getToSpare()
	{
		return $this->toSpare;
	}
	/**
	 * Set toSpare value
	 * @param boolean $_toSpare the toSpare
	 * @return boolean
	 */
	public function setToSpare($_toSpare)
	{
		return ($this->toSpare = $_toSpare);
	}
	/**
	 * Get toRma value
	 * @return boolean|null
	 */
	public function getToRma()
	{
		return $this->toRma;
	}
	/**
	 * Set toRma value
	 * @param boolean $_toRma the toRma
	 * @return boolean
	 */
	public function setToRma($_toRma)
	{
		return ($this->toRma = $_toRma);
	}
	/**
	 * Get rmaType value
	 * @return string|null
	 */
	public function getRmaType()
	{
		return $this->rmaType;
	}
	/**
	 * Set rmaType value
	 * @param string $_rmaType the rmaType
	 * @return string
	 */
	public function setRmaType($_rmaType)
	{
		return ($this->rmaType = $_rmaType);
	}
	/**
	 * Get toDelete value
	 * @return boolean|null
	 */
	public function getToDelete()
	{
		return $this->toDelete;
	}
	/**
	 * Set toDelete value
	 * @param boolean $_toDelete the toDelete
	 * @return boolean
	 */
	public function setToDelete($_toDelete)
	{
		return ($this->toDelete = $_toDelete);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareActionsStruct
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