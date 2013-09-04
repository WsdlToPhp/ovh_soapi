<?php
/**
 * File for class OvhStructDedicatedHardRebootStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedHardRebootStatusReturn originally named dedicatedHardRebootStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedHardRebootStatusReturn extends OvhWsdlClass
{
	/**
	 * The start
	 * @var string
	 */
	public $start;
	/**
	 * The end
	 * @var string
	 */
	public $end;
	/**
	 * Constructor method for dedicatedHardRebootStatusReturn
	 * @see parent::__construct()
	 * @param string $_start
	 * @param string $_end
	 * @return OvhStructDedicatedHardRebootStatusReturn
	 */
	public function __construct($_start = NULL,$_end = NULL)
	{
		parent::__construct(array('start'=>$_start,'end'=>$_end));
	}
	/**
	 * Get start value
	 * @return string|null
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set start value
	 * @param string $_start the start
	 * @return string
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get end value
	 * @return string|null
	 */
	public function getEnd()
	{
		return $this->end;
	}
	/**
	 * Set end value
	 * @param string $_end the end
	 * @return string
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedHardRebootStatusReturn
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