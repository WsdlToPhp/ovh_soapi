<?php
/**
 * File for class OvhStructTelephonySpareDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareDetailStruct originally named telephonySpareDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareDetailStruct extends OvhWsdlClass
{
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The price_fr
	 * @var float
	 */
	public $price_fr;
	/**
	 * Constructor method for telephonySpareDetailStruct
	 * @see parent::__construct()
	 * @param string $_model
	 * @param float $_price_fr
	 * @return OvhStructTelephonySpareDetailStruct
	 */
	public function __construct($_model = NULL,$_price_fr = NULL)
	{
		parent::__construct(array('model'=>$_model,'price_fr'=>$_price_fr));
	}
	/**
	 * Get model value
	 * @return string|null
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set model value
	 * @param string $_model the model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get price_fr value
	 * @return float|null
	 */
	public function getPrice_fr()
	{
		return $this->price_fr;
	}
	/**
	 * Set price_fr value
	 * @param float $_price_fr the price_fr
	 * @return float
	 */
	public function setPrice_fr($_price_fr)
	{
		return ($this->price_fr = $_price_fr);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareDetailStruct
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