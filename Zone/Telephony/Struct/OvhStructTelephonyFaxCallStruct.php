<?php
/**
 * File for class OvhStructTelephonyFaxCallStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCallStruct originally named telephonyFaxCallStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCallStruct extends OvhWsdlClass
{
	/**
	 * The calledNumber
	 * @var string
	 */
	public $calledNumber;
	/**
	 * The callingNumber
	 * @var string
	 */
	public $callingNumber;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * The jobid
	 * @var int
	 */
	public $jobid;
	/**
	 * The nature
	 * @var string
	 */
	public $nature;
	/**
	 * The countryCode
	 * @var int
	 */
	public $countryCode;
	/**
	 * The designation
	 * @var string
	 */
	public $designation;
	/**
	 * The jobtag
	 * @var string
	 */
	public $jobtag;
	/**
	 * The idkey
	 * @var string
	 */
	public $idkey;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * The quality
	 * @var string
	 */
	public $quality;
	/**
	 * The callDate
	 * @var string
	 */
	public $callDate;
	/**
	 * The pages
	 * @var int
	 */
	public $pages;
	/**
	 * Constructor method for telephonyFaxCallStruct
	 * @see parent::__construct()
	 * @param string $_calledNumber
	 * @param string $_callingNumber
	 * @param string $_destination
	 * @param int $_jobid
	 * @param string $_nature
	 * @param int $_countryCode
	 * @param string $_designation
	 * @param string $_jobtag
	 * @param string $_idkey
	 * @param float $_priceWithoutVAT
	 * @param string $_quality
	 * @param string $_callDate
	 * @param int $_pages
	 * @return OvhStructTelephonyFaxCallStruct
	 */
	public function __construct($_calledNumber = NULL,$_callingNumber = NULL,$_destination = NULL,$_jobid = NULL,$_nature = NULL,$_countryCode = NULL,$_designation = NULL,$_jobtag = NULL,$_idkey = NULL,$_priceWithoutVAT = NULL,$_quality = NULL,$_callDate = NULL,$_pages = NULL)
	{
		parent::__construct(array('calledNumber'=>$_calledNumber,'callingNumber'=>$_callingNumber,'destination'=>$_destination,'jobid'=>$_jobid,'nature'=>$_nature,'countryCode'=>$_countryCode,'designation'=>$_designation,'jobtag'=>$_jobtag,'idkey'=>$_idkey,'priceWithoutVAT'=>$_priceWithoutVAT,'quality'=>$_quality,'callDate'=>$_callDate,'pages'=>$_pages));
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
	 * Get jobid value
	 * @return int|null
	 */
	public function getJobid()
	{
		return $this->jobid;
	}
	/**
	 * Set jobid value
	 * @param int $_jobid the jobid
	 * @return int
	 */
	public function setJobid($_jobid)
	{
		return ($this->jobid = $_jobid);
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
	 * Get countryCode value
	 * @return int|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param int $_countryCode the countryCode
	 * @return int
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
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
	 * Get jobtag value
	 * @return string|null
	 */
	public function getJobtag()
	{
		return $this->jobtag;
	}
	/**
	 * Set jobtag value
	 * @param string $_jobtag the jobtag
	 * @return string
	 */
	public function setJobtag($_jobtag)
	{
		return ($this->jobtag = $_jobtag);
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
	 * Get quality value
	 * @return string|null
	 */
	public function getQuality()
	{
		return $this->quality;
	}
	/**
	 * Set quality value
	 * @param string $_quality the quality
	 * @return string
	 */
	public function setQuality($_quality)
	{
		return ($this->quality = $_quality);
	}
	/**
	 * Get callDate value
	 * @return string|null
	 */
	public function getCallDate()
	{
		return $this->callDate;
	}
	/**
	 * Set callDate value
	 * @param string $_callDate the callDate
	 * @return string
	 */
	public function setCallDate($_callDate)
	{
		return ($this->callDate = $_callDate);
	}
	/**
	 * Get pages value
	 * @return int|null
	 */
	public function getPages()
	{
		return $this->pages;
	}
	/**
	 * Set pages value
	 * @param int $_pages the pages
	 * @return int
	 */
	public function setPages($_pages)
	{
		return ($this->pages = $_pages);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCallStruct
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