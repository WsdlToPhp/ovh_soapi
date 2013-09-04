<?php
/**
 * File for class OvhStructServiceListPaginatedStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceListPaginatedStruct originally named serviceListPaginatedStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceListPaginatedStruct extends OvhWsdlClass
{
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The results
	 * @var OvhStructMyArrayOfServiceLightStructType
	 */
	public $results;
	/**
	 * Constructor method for serviceListPaginatedStruct
	 * @see parent::__construct()
	 * @param int $_total
	 * @param OvhStructMyArrayOfServiceLightStructType $_results
	 * @return OvhStructServiceListPaginatedStruct
	 */
	public function __construct($_total = NULL,$_results = NULL)
	{
		parent::__construct(array('total'=>$_total,'results'=>($_results instanceof OvhStructMyArrayOfServiceLightStructType)?$_results:new OvhStructMyArrayOfServiceLightStructType($_results)));
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
	 * Get results value
	 * @return OvhStructMyArrayOfServiceLightStructType|null
	 */
	public function getResults()
	{
		return $this->results;
	}
	/**
	 * Set results value
	 * @param OvhStructMyArrayOfServiceLightStructType $_results the results
	 * @return OvhStructMyArrayOfServiceLightStructType
	 */
	public function setResults($_results)
	{
		return ($this->results = $_results);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceListPaginatedStruct
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