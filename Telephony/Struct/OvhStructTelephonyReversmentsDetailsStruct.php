<?php
/**
 * File for class OvhStructTelephonyReversmentsDetailsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyReversmentsDetailsStruct originally named telephonyReversmentsDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyReversmentsDetailsStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The connectionDuration
	 * @var string
	 */
	public $connectionDuration;
	/**
	 * The callingNumber
	 * @var string
	 */
	public $callingNumber;
	/**
	 * The priceReversed
	 * @var string
	 */
	public $priceReversed;
	/**
	 * The operatorCode
	 * @var string
	 */
	public $operatorCode;
	/**
	 * Constructor method for telephonyReversmentsDetailsStruct
	 * @see parent::__construct()
	 * @param string $_date
	 * @param string $_connectionDuration
	 * @param string $_callingNumber
	 * @param string $_priceReversed
	 * @param string $_operatorCode
	 * @return OvhStructTelephonyReversmentsDetailsStruct
	 */
	public function __construct($_date = NULL,$_connectionDuration = NULL,$_callingNumber = NULL,$_priceReversed = NULL,$_operatorCode = NULL)
	{
		parent::__construct(array('date'=>$_date,'connectionDuration'=>$_connectionDuration,'callingNumber'=>$_callingNumber,'priceReversed'=>$_priceReversed,'operatorCode'=>$_operatorCode));
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
	 * Get connectionDuration value
	 * @return string|null
	 */
	public function getConnectionDuration()
	{
		return $this->connectionDuration;
	}
	/**
	 * Set connectionDuration value
	 * @param string $_connectionDuration the connectionDuration
	 * @return string
	 */
	public function setConnectionDuration($_connectionDuration)
	{
		return ($this->connectionDuration = $_connectionDuration);
	}
	/**
	 * Get callingNumber value
	 * @return string|null
	 */
	public function getCallingNumber()
	{
		return $this->callingNumber;
	}
	/**
	 * Set callingNumber value
	 * @param string $_callingNumber the callingNumber
	 * @return string
	 */
	public function setCallingNumber($_callingNumber)
	{
		return ($this->callingNumber = $_callingNumber);
	}
	/**
	 * Get priceReversed value
	 * @return string|null
	 */
	public function getPriceReversed()
	{
		return $this->priceReversed;
	}
	/**
	 * Set priceReversed value
	 * @param string $_priceReversed the priceReversed
	 * @return string
	 */
	public function setPriceReversed($_priceReversed)
	{
		return ($this->priceReversed = $_priceReversed);
	}
	/**
	 * Get operatorCode value
	 * @return string|null
	 */
	public function getOperatorCode()
	{
		return $this->operatorCode;
	}
	/**
	 * Set operatorCode value
	 * @param string $_operatorCode the operatorCode
	 * @return string
	 */
	public function setOperatorCode($_operatorCode)
	{
		return ($this->operatorCode = $_operatorCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyReversmentsDetailsStruct
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