<?php
/**
 * File for class OvhStructDedicatedAllowedDistributionReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAllowedDistributionReturn originally named dedicatedAllowedDistributionReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAllowedDistributionReturn extends OvhWsdlClass
{
	/**
	 * The distribution
	 * @var OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public $distribution;
	/**
	 * Constructor method for dedicatedAllowedDistributionReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType $_distribution
	 * @return OvhStructDedicatedAllowedDistributionReturn
	 */
	public function __construct($_distribution = NULL)
	{
		parent::__construct(array('distribution'=>($_distribution instanceof OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType)?$_distribution:new OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType($_distribution)));
	}
	/**
	 * Get distribution value
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType|null
	 */
	public function getDistribution()
	{
		return $this->distribution;
	}
	/**
	 * Set distribution value
	 * @param OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType $_distribution the distribution
	 * @return OvhStructMyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public function setDistribution($_distribution)
	{
		return ($this->distribution = $_distribution);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAllowedDistributionReturn
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