<?php
/**
 * File for class OvhStructTelephonyCallsSummaryDetailsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyCallsSummaryDetailsStruct originally named telephonyCallsSummaryDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyCallsSummaryDetailsStruct extends OvhWsdlClass
{
	/**
	 * The count
	 * @var int
	 */
	public $count;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * Constructor method for telephonyCallsSummaryDetailsStruct
	 * @see parent::__construct()
	 * @param int $_count
	 * @param string $_duration
	 * @param float $_priceWithoutVAT
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct
	 */
	public function __construct($_count = NULL,$_duration = NULL,$_priceWithoutVAT = NULL)
	{
		parent::__construct(array('count'=>$_count,'duration'=>$_duration,'priceWithoutVAT'=>$_priceWithoutVAT));
	}
	/**
	 * Get count value
	 * @return int|null
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set count value
	 * @param int $_count the count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get duration value
	 * @return string|null
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set duration value
	 * @param string $_duration the duration
	 * @return string
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get priceWithoutVAT value
	 * @return float|null
	 */
	public function getPriceWithoutVAT()
	{
		return $this->priceWithoutVAT;
	}
	/**
	 * Set priceWithoutVAT value
	 * @param float $_priceWithoutVAT the priceWithoutVAT
	 * @return float
	 */
	public function setPriceWithoutVAT($_priceWithoutVAT)
	{
		return ($this->priceWithoutVAT = $_priceWithoutVAT);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct
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