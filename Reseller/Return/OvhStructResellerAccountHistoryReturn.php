<?php
/**
 * File for class OvhStructResellerAccountHistoryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResellerAccountHistoryReturn originally named resellerAccountHistoryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResellerAccountHistoryReturn extends OvhWsdlClass
{
	/**
	 * The month
	 * @var int
	 */
	public $month;
	/**
	 * The year
	 * @var int
	 */
	public $year;
	/**
	 * The movements
	 * @var OvhStructMyArrayOfResellerAccountMovementStructType
	 */
	public $movements;
	/**
	 * Constructor method for resellerAccountHistoryReturn
	 * @see parent::__construct()
	 * @param int $_month
	 * @param int $_year
	 * @param OvhStructMyArrayOfResellerAccountMovementStructType $_movements
	 * @return OvhStructResellerAccountHistoryReturn
	 */
	public function __construct($_month = NULL,$_year = NULL,$_movements = NULL)
	{
		parent::__construct(array('month'=>$_month,'year'=>$_year,'movements'=>($_movements instanceof OvhStructMyArrayOfResellerAccountMovementStructType)?$_movements:new OvhStructMyArrayOfResellerAccountMovementStructType($_movements)));
	}
	/**
	 * Get month value
	 * @return int|null
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set month value
	 * @param int $_month the month
	 * @return int
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get year value
	 * @return int|null
	 */
	public function getYear()
	{
		return $this->year;
	}
	/**
	 * Set year value
	 * @param int $_year the year
	 * @return int
	 */
	public function setYear($_year)
	{
		return ($this->year = $_year);
	}
	/**
	 * Get movements value
	 * @return OvhStructMyArrayOfResellerAccountMovementStructType|null
	 */
	public function getMovements()
	{
		return $this->movements;
	}
	/**
	 * Set movements value
	 * @param OvhStructMyArrayOfResellerAccountMovementStructType $_movements the movements
	 * @return OvhStructMyArrayOfResellerAccountMovementStructType
	 */
	public function setMovements($_movements)
	{
		return ($this->movements = $_movements);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructResellerAccountHistoryReturn
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