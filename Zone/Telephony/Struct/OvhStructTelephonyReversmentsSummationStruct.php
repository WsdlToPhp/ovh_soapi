<?php
/**
 * File for class OvhStructTelephonyReversmentsSummationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyReversmentsSummationStruct originally named telephonyReversmentsSummationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyReversmentsSummationStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The seconds
	 * @var string
	 */
	public $seconds;
	/**
	 * The priceReversed
	 * @var string
	 */
	public $priceReversed;
	/**
	 * The calls
	 * @var string
	 */
	public $calls;
	/**
	 * Constructor method for telephonyReversmentsSummationStruct
	 * @see parent::__construct()
	 * @param string $_type
	 * @param string $_name
	 * @param string $_seconds
	 * @param string $_priceReversed
	 * @param string $_calls
	 * @return OvhStructTelephonyReversmentsSummationStruct
	 */
	public function __construct($_type = NULL,$_name = NULL,$_seconds = NULL,$_priceReversed = NULL,$_calls = NULL)
	{
		parent::__construct(array('type'=>$_type,'name'=>$_name,'seconds'=>$_seconds,'priceReversed'=>$_priceReversed,'calls'=>$_calls));
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
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get seconds value
	 * @return string|null
	 */
	public function getSeconds()
	{
		return $this->seconds;
	}
	/**
	 * Set seconds value
	 * @param string $_seconds the seconds
	 * @return string
	 */
	public function setSeconds($_seconds)
	{
		return ($this->seconds = $_seconds);
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
	 * Get calls value
	 * @return string|null
	 */
	public function getCalls()
	{
		return $this->calls;
	}
	/**
	 * Set calls value
	 * @param string $_calls the calls
	 * @return string
	 */
	public function setCalls($_calls)
	{
		return ($this->calls = $_calls);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyReversmentsSummationStruct
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