<?php
/**
 * File for class OvhStructDedicatedMrtgInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMrtgInfoReturn originally named dedicatedMrtgInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMrtgInfoReturn extends OvhWsdlClass
{
	/**
	 * The average
	 * @var OvhStructDedicatedMrtgInfoStruct
	 */
	public $average;
	/**
	 * The current
	 * @var OvhStructDedicatedMrtgInfoStruct
	 */
	public $current;
	/**
	 * The max
	 * @var OvhStructDedicatedMrtgInfoStruct
	 */
	public $max;
	/**
	 * The image
	 * @var string
	 */
	public $image;
	/**
	 * Constructor method for dedicatedMrtgInfoReturn
	 * @see parent::__construct()
	 * @param OvhStructDedicatedMrtgInfoStruct $_average
	 * @param OvhStructDedicatedMrtgInfoStruct $_current
	 * @param OvhStructDedicatedMrtgInfoStruct $_max
	 * @param string $_image
	 * @return OvhStructDedicatedMrtgInfoReturn
	 */
	public function __construct($_average = NULL,$_current = NULL,$_max = NULL,$_image = NULL)
	{
		parent::__construct(array('average'=>$_average,'current'=>$_current,'max'=>$_max,'image'=>$_image));
	}
	/**
	 * Get average value
	 * @return OvhStructDedicatedMrtgInfoStruct|null
	 */
	public function getAverage()
	{
		return $this->average;
	}
	/**
	 * Set average value
	 * @param OvhStructDedicatedMrtgInfoStruct $_average the average
	 * @return OvhStructDedicatedMrtgInfoStruct
	 */
	public function setAverage($_average)
	{
		return ($this->average = $_average);
	}
	/**
	 * Get current value
	 * @return OvhStructDedicatedMrtgInfoStruct|null
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set current value
	 * @param OvhStructDedicatedMrtgInfoStruct $_current the current
	 * @return OvhStructDedicatedMrtgInfoStruct
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get max value
	 * @return OvhStructDedicatedMrtgInfoStruct|null
	 */
	public function getMax()
	{
		return $this->max;
	}
	/**
	 * Set max value
	 * @param OvhStructDedicatedMrtgInfoStruct $_max the max
	 * @return OvhStructDedicatedMrtgInfoStruct
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get image value
	 * @return string|null
	 */
	public function getImage()
	{
		return $this->image;
	}
	/**
	 * Set image value
	 * @param string $_image the image
	 * @return string
	 */
	public function setImage($_image)
	{
		return ($this->image = $_image);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMrtgInfoReturn
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