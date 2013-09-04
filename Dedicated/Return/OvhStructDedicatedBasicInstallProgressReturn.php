<?php
/**
 * File for class OvhStructDedicatedBasicInstallProgressReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBasicInstallProgressReturn originally named dedicatedBasicInstallProgressReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBasicInstallProgressReturn extends OvhWsdlClass
{
	/**
	 * The progress
	 * @var OvhStructMyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public $progress;
	/**
	 * Constructor method for dedicatedBasicInstallProgressReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedBasicInstallProgressStructType $_progress
	 * @return OvhStructDedicatedBasicInstallProgressReturn
	 */
	public function __construct($_progress = NULL)
	{
		parent::__construct(array('progress'=>($_progress instanceof OvhStructMyArrayOfDedicatedBasicInstallProgressStructType)?$_progress:new OvhStructMyArrayOfDedicatedBasicInstallProgressStructType($_progress)));
	}
	/**
	 * Get progress value
	 * @return OvhStructMyArrayOfDedicatedBasicInstallProgressStructType|null
	 */
	public function getProgress()
	{
		return $this->progress;
	}
	/**
	 * Set progress value
	 * @param OvhStructMyArrayOfDedicatedBasicInstallProgressStructType $_progress the progress
	 * @return OvhStructMyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public function setProgress($_progress)
	{
		return ($this->progress = $_progress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBasicInstallProgressReturn
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