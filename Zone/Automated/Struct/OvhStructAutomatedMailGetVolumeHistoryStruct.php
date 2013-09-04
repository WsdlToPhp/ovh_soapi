<?php
/**
 * File for class OvhStructAutomatedMailGetVolumeHistoryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAutomatedMailGetVolumeHistoryStruct originally named automatedMailGetVolumeHistoryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAutomatedMailGetVolumeHistoryStruct extends OvhWsdlClass
{
	/**
	 * The volume
	 * @var int
	 */
	public $volume;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor method for automatedMailGetVolumeHistoryStruct
	 * @see parent::__construct()
	 * @param int $_volume
	 * @param string $_date
	 * @return OvhStructAutomatedMailGetVolumeHistoryStruct
	 */
	public function __construct($_volume = NULL,$_date = NULL)
	{
		parent::__construct(array('volume'=>$_volume,'date'=>$_date));
	}
	/**
	 * Get volume value
	 * @return int|null
	 */
	public function getVolume()
	{
		return $this->volume;
	}
	/**
	 * Set volume value
	 * @param int $_volume the volume
	 * @return int
	 */
	public function setVolume($_volume)
	{
		return ($this->volume = $_volume);
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAutomatedMailGetVolumeHistoryStruct
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