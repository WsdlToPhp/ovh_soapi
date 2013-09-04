<?php
/**
 * File for class OvhStructDedicatedFreedomStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFreedomStruct originally named dedicatedFreedomStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFreedomStruct extends OvhWsdlClass
{
	/**
	 * The remaining
	 * @var int
	 */
	public $remaining;
	/**
	 * The assigned
	 * @var int
	 */
	public $assigned;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The preset
	 * @var int
	 */
	public $preset;
	/**
	 * Constructor method for dedicatedFreedomStruct
	 * @see parent::__construct()
	 * @param int $_remaining
	 * @param int $_assigned
	 * @param int $_total
	 * @param int $_preset
	 * @return OvhStructDedicatedFreedomStruct
	 */
	public function __construct($_remaining = NULL,$_assigned = NULL,$_total = NULL,$_preset = NULL)
	{
		parent::__construct(array('remaining'=>$_remaining,'assigned'=>$_assigned,'total'=>$_total,'preset'=>$_preset));
	}
	/**
	 * Get remaining value
	 * @return int|null
	 */
	public function getRemaining()
	{
		return $this->remaining;
	}
	/**
	 * Set remaining value
	 * @param int $_remaining the remaining
	 * @return int
	 */
	public function setRemaining($_remaining)
	{
		return ($this->remaining = $_remaining);
	}
	/**
	 * Get assigned value
	 * @return int|null
	 */
	public function getAssigned()
	{
		return $this->assigned;
	}
	/**
	 * Set assigned value
	 * @param int $_assigned the assigned
	 * @return int
	 */
	public function setAssigned($_assigned)
	{
		return ($this->assigned = $_assigned);
	}
	/**
	 * Get total value
	 * @return int|null
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set total value
	 * @param int $_total the total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get preset value
	 * @return int|null
	 */
	public function getPreset()
	{
		return $this->preset;
	}
	/**
	 * Set preset value
	 * @param int $_preset the preset
	 * @return int
	 */
	public function setPreset($_preset)
	{
		return ($this->preset = $_preset);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFreedomStruct
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