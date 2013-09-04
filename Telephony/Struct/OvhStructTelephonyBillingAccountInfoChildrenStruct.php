<?php
/**
 * File for class OvhStructTelephonyBillingAccountInfoChildrenStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountInfoChildrenStruct originally named telephonyBillingAccountInfoChildrenStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountInfoChildrenStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The simultaneousLines
	 * @var int
	 */
	public $simultaneousLines;
	/**
	 * Constructor method for telephonyBillingAccountInfoChildrenStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_offer
	 * @param string $_type
	 * @param string $_expirationDate
	 * @param string $_description
	 * @param int $_simultaneousLines
	 * @return OvhStructTelephonyBillingAccountInfoChildrenStruct
	 */
	public function __construct($_number = NULL,$_offer = NULL,$_type = NULL,$_expirationDate = NULL,$_description = NULL,$_simultaneousLines = NULL)
	{
		parent::__construct(array('number'=>$_number,'offer'=>$_offer,'type'=>$_type,'expirationDate'=>$_expirationDate,'description'=>$_description,'simultaneousLines'=>$_simultaneousLines));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
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
	 * Get expirationDate value
	 * @return string|null
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set expirationDate value
	 * @param string $_expirationDate the expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get simultaneousLines value
	 * @return int|null
	 */
	public function getSimultaneousLines()
	{
		return $this->simultaneousLines;
	}
	/**
	 * Set simultaneousLines value
	 * @param int $_simultaneousLines the simultaneousLines
	 * @return int
	 */
	public function setSimultaneousLines($_simultaneousLines)
	{
		return ($this->simultaneousLines = $_simultaneousLines);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountInfoChildrenStruct
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