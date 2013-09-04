<?php
/**
 * File for class OvhStructRpsGetIoStatsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsGetIoStatsReturn originally named rpsGetIoStatsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsGetIoStatsReturn extends OvhWsdlClass
{
	/**
	 * The average
	 * @var OvhStructRpsGetIOStatsDetailStruct
	 */
	public $average;
	/**
	 * The current
	 * @var OvhStructRpsGetIOStatsDetailStruct
	 */
	public $current;
	/**
	 * The max
	 * @var OvhStructRpsGetIOStatsDetailStruct
	 */
	public $max;
	/**
	 * The image
	 * @var string
	 */
	public $image;
	/**
	 * Constructor method for rpsGetIoStatsReturn
	 * @see parent::__construct()
	 * @param OvhStructRpsGetIOStatsDetailStruct $_average
	 * @param OvhStructRpsGetIOStatsDetailStruct $_current
	 * @param OvhStructRpsGetIOStatsDetailStruct $_max
	 * @param string $_image
	 * @return OvhStructRpsGetIoStatsReturn
	 */
	public function __construct($_average = NULL,$_current = NULL,$_max = NULL,$_image = NULL)
	{
		parent::__construct(array('average'=>$_average,'current'=>$_current,'max'=>$_max,'image'=>$_image));
	}
	/**
	 * Get average value
	 * @return OvhStructRpsGetIOStatsDetailStruct|null
	 */
	public function getAverage()
	{
		return $this->average;
	}
	/**
	 * Set average value
	 * @param OvhStructRpsGetIOStatsDetailStruct $_average the average
	 * @return OvhStructRpsGetIOStatsDetailStruct
	 */
	public function setAverage($_average)
	{
		return ($this->average = $_average);
	}
	/**
	 * Get current value
	 * @return OvhStructRpsGetIOStatsDetailStruct|null
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set current value
	 * @param OvhStructRpsGetIOStatsDetailStruct $_current the current
	 * @return OvhStructRpsGetIOStatsDetailStruct
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get max value
	 * @return OvhStructRpsGetIOStatsDetailStruct|null
	 */
	public function getMax()
	{
		return $this->max;
	}
	/**
	 * Set max value
	 * @param OvhStructRpsGetIOStatsDetailStruct $_max the max
	 * @return OvhStructRpsGetIOStatsDetailStruct
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
	 * @return OvhStructRpsGetIoStatsReturn
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