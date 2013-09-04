<?php
/**
 * File for class OvhStructBufferStepStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBufferStepStruct originally named bufferStepStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBufferStepStruct extends OvhWsdlClass
{
	/**
	 * The durationUnit
	 * @var string
	 */
	public $durationUnit;
	/**
	 * The durationValue
	 * @var string
	 */
	public $durationValue;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The extraInfo
	 * @var string
	 */
	public $extraInfo;
	/**
	 * Constructor method for bufferStepStruct
	 * @see parent::__construct()
	 * @param string $_durationUnit
	 * @param string $_durationValue
	 * @param string $_date
	 * @param string $_extraInfo
	 * @return OvhStructBufferStepStruct
	 */
	public function __construct($_durationUnit = NULL,$_durationValue = NULL,$_date = NULL,$_extraInfo = NULL)
	{
		parent::__construct(array('durationUnit'=>$_durationUnit,'durationValue'=>$_durationValue,'date'=>$_date,'extraInfo'=>$_extraInfo));
	}
	/**
	 * Get durationUnit value
	 * @return string|null
	 */
	public function getDurationUnit()
	{
		return $this->durationUnit;
	}
	/**
	 * Set durationUnit value
	 * @param string $_durationUnit the durationUnit
	 * @return string
	 */
	public function setDurationUnit($_durationUnit)
	{
		return ($this->durationUnit = $_durationUnit);
	}
	/**
	 * Get durationValue value
	 * @return string|null
	 */
	public function getDurationValue()
	{
		return $this->durationValue;
	}
	/**
	 * Set durationValue value
	 * @param string $_durationValue the durationValue
	 * @return string
	 */
	public function setDurationValue($_durationValue)
	{
		return ($this->durationValue = $_durationValue);
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
	 * Get extraInfo value
	 * @return string|null
	 */
	public function getExtraInfo()
	{
		return $this->extraInfo;
	}
	/**
	 * Set extraInfo value
	 * @param string $_extraInfo the extraInfo
	 * @return string
	 */
	public function setExtraInfo($_extraInfo)
	{
		return ($this->extraInfo = $_extraInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBufferStepStruct
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