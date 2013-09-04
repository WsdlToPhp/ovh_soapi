<?php
/**
 * File for class OvhStructTelephonyCallsSummaryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyCallsSummaryStruct originally named telephonyCallsSummaryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyCallsSummaryStruct extends OvhWsdlClass
{
	/**
	 * The pricePlan
	 * @var OvhStructTelephonyCallsSummaryDetailsStruct
	 */
	public $pricePlan;
	/**
	 * The outPlan
	 * @var OvhStructTelephonyCallsSummaryDetailsStruct
	 */
	public $outPlan;
	/**
	 * Constructor method for telephonyCallsSummaryStruct
	 * @see parent::__construct()
	 * @param OvhStructTelephonyCallsSummaryDetailsStruct $_pricePlan
	 * @param OvhStructTelephonyCallsSummaryDetailsStruct $_outPlan
	 * @return OvhStructTelephonyCallsSummaryStruct
	 */
	public function __construct($_pricePlan = NULL,$_outPlan = NULL)
	{
		parent::__construct(array('pricePlan'=>$_pricePlan,'outPlan'=>$_outPlan));
	}
	/**
	 * Get pricePlan value
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct|null
	 */
	public function getPricePlan()
	{
		return $this->pricePlan;
	}
	/**
	 * Set pricePlan value
	 * @param OvhStructTelephonyCallsSummaryDetailsStruct $_pricePlan the pricePlan
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct
	 */
	public function setPricePlan($_pricePlan)
	{
		return ($this->pricePlan = $_pricePlan);
	}
	/**
	 * Get outPlan value
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct|null
	 */
	public function getOutPlan()
	{
		return $this->outPlan;
	}
	/**
	 * Set outPlan value
	 * @param OvhStructTelephonyCallsSummaryDetailsStruct $_outPlan the outPlan
	 * @return OvhStructTelephonyCallsSummaryDetailsStruct
	 */
	public function setOutPlan($_outPlan)
	{
		return ($this->outPlan = $_outPlan);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyCallsSummaryStruct
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