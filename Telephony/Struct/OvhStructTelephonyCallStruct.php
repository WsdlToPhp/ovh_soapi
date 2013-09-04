<?php
/**
 * File for class OvhStructTelephonyCallStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyCallStruct originally named telephonyCallStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyCallStruct extends OvhWsdlClass
{
	/**
	 * The idkey
	 * @var string
	 */
	public $idkey;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * The nature
	 * @var string
	 */
	public $nature;
	/**
	 * The overLimit
	 * @var boolean
	 */
	public $overLimit;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The callingNumber
	 * @var string
	 */
	public $callingNumber;
	/**
	 * The presentation
	 * @var boolean
	 */
	public $presentation;
	/**
	 * The designation
	 * @var string
	 */
	public $designation;
	/**
	 * The calledNumber
	 * @var string
	 */
	public $calledNumber;
	/**
	 * Constructor method for telephonyCallStruct
	 * @see parent::__construct()
	 * @param string $_idkey
	 * @param string $_number
	 * @param string $_date
	 * @param string $_duration
	 * @param string $_destination
	 * @param float $_priceWithoutVAT
	 * @param string $_nature
	 * @param boolean $_overLimit
	 * @param string $_type
	 * @param string $_callingNumber
	 * @param boolean $_presentation
	 * @param string $_designation
	 * @param string $_calledNumber
	 * @return OvhStructTelephonyCallStruct
	 */
	public function __construct($_idkey = NULL,$_number = NULL,$_date = NULL,$_duration = NULL,$_destination = NULL,$_priceWithoutVAT = NULL,$_nature = NULL,$_overLimit = NULL,$_type = NULL,$_callingNumber = NULL,$_presentation = NULL,$_designation = NULL,$_calledNumber = NULL)
	{
		parent::__construct(array('idkey'=>$_idkey,'number'=>$_number,'date'=>$_date,'duration'=>$_duration,'destination'=>$_destination,'priceWithoutVAT'=>$_priceWithoutVAT,'nature'=>$_nature,'overLimit'=>$_overLimit,'type'=>$_type,'callingNumber'=>$_callingNumber,'presentation'=>$_presentation,'designation'=>$_designation,'calledNumber'=>$_calledNumber));
	}
	/**
	 * Get idkey value
	 * @return string|null
	 */
	public function getIdkey()
	{
		return $this->idkey;
	}
	/**
	 * Set idkey value
	 * @param string $_idkey the idkey
	 * @return string
	 */
	public function setIdkey($_idkey)
	{
		return ($this->idkey = $_idkey);
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
	 * Get destination value
	 * @return string|null
	 */
	public function getDestination()
	{
		return $this->destination;
	}
	/**
	 * Set destination value
	 * @param string $_destination the destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
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
	 * Get nature value
	 * @return string|null
	 */
	public function getNature()
	{
		return $this->nature;
	}
	/**
	 * Set nature value
	 * @param string $_nature the nature
	 * @return string
	 */
	public function setNature($_nature)
	{
		return ($this->nature = $_nature);
	}
	/**
	 * Get overLimit value
	 * @return boolean|null
	 */
	public function getOverLimit()
	{
		return $this->overLimit;
	}
	/**
	 * Set overLimit value
	 * @param boolean $_overLimit the overLimit
	 * @return boolean
	 */
	public function setOverLimit($_overLimit)
	{
		return ($this->overLimit = $_overLimit);
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
	 * Get presentation value
	 * @return boolean|null
	 */
	public function getPresentation()
	{
		return $this->presentation;
	}
	/**
	 * Set presentation value
	 * @param boolean $_presentation the presentation
	 * @return boolean
	 */
	public function setPresentation($_presentation)
	{
		return ($this->presentation = $_presentation);
	}
	/**
	 * Get designation value
	 * @return string|null
	 */
	public function getDesignation()
	{
		return $this->designation;
	}
	/**
	 * Set designation value
	 * @param string $_designation the designation
	 * @return string
	 */
	public function setDesignation($_designation)
	{
		return ($this->designation = $_designation);
	}
	/**
	 * Get calledNumber value
	 * @return string|null
	 */
	public function getCalledNumber()
	{
		return $this->calledNumber;
	}
	/**
	 * Set calledNumber value
	 * @param string $_calledNumber the calledNumber
	 * @return string
	 */
	public function setCalledNumber($_calledNumber)
	{
		return ($this->calledNumber = $_calledNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyCallStruct
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