<?php
/**
 * File for class OvhStructDedicatedAllowedDistributionMoreStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAllowedDistributionMoreStruct originally named dedicatedAllowedDistributionMoreStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAllowedDistributionMoreStruct extends OvhWsdlClass
{
	/**
	 * The basicDistributions
	 * @var OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public $basicDistributions;
	/**
	 * The readyToUse
	 * @var OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public $readyToUse;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor method for dedicatedAllowedDistributionMoreStruct
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType $_basicDistributions
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType $_readyToUse
	 * @param string $_type
	 * @return OvhStructDedicatedAllowedDistributionMoreStruct
	 */
	public function __construct($_basicDistributions = NULL,$_readyToUse = NULL,$_type = NULL)
	{
		parent::__construct(array('basicDistributions'=>($_basicDistributions instanceof OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType)?$_basicDistributions:new OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType($_basicDistributions),'readyToUse'=>($_readyToUse instanceof OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType)?$_readyToUse:new OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType($_readyToUse),'type'=>$_type));
	}
	/**
	 * Get basicDistributions value
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType|null
	 */
	public function getBasicDistributions()
	{
		return $this->basicDistributions;
	}
	/**
	 * Set basicDistributions value
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType $_basicDistributions the basicDistributions
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function setBasicDistributions($_basicDistributions)
	{
		return ($this->basicDistributions = $_basicDistributions);
	}
	/**
	 * Get readyToUse value
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType|null
	 */
	public function getReadyToUse()
	{
		return $this->readyToUse;
	}
	/**
	 * Set readyToUse value
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType $_readyToUse the readyToUse
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function setReadyToUse($_readyToUse)
	{
		return ($this->readyToUse = $_readyToUse);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAllowedDistributionMoreStruct
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