<?php
/**
 * File for class OvhStructTelephonyFaxHistoryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxHistoryStruct originally named telephonyFaxHistoryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxHistoryStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The jobid
	 * @var int
	 */
	public $jobid;
	/**
	 * The jobtag
	 * @var string
	 */
	public $jobtag;
	/**
	 * The sender
	 * @var string
	 */
	public $sender;
	/**
	 * The pages
	 * @var int
	 */
	public $pages;
	/**
	 * The quality
	 * @var string
	 */
	public $quality;
	/**
	 * The callTime
	 * @var string
	 */
	public $callTime;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor method for telephonyFaxHistoryStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_relatedNumber
	 * @param int $_jobid
	 * @param string $_jobtag
	 * @param string $_sender
	 * @param int $_pages
	 * @param string $_quality
	 * @param string $_callTime
	 * @param string $_date
	 * @param string $_state
	 * @return OvhStructTelephonyFaxHistoryStruct
	 */
	public function __construct($_id = NULL,$_relatedNumber = NULL,$_jobid = NULL,$_jobtag = NULL,$_sender = NULL,$_pages = NULL,$_quality = NULL,$_callTime = NULL,$_date = NULL,$_state = NULL)
	{
		parent::__construct(array('id'=>$_id,'relatedNumber'=>$_relatedNumber,'jobid'=>$_jobid,'jobtag'=>$_jobtag,'sender'=>$_sender,'pages'=>$_pages,'quality'=>$_quality,'callTime'=>$_callTime,'date'=>$_date,'state'=>$_state));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get relatedNumber value
	 * @return string|null
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set relatedNumber value
	 * @param string $_relatedNumber the relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
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
	 * Get sender value
	 * @return string|null
	 */
	public function getSender()
	{
		return $this->sender;
	}
	/**
	 * Set sender value
	 * @param string $_sender the sender
	 * @return string
	 */
	public function setSender($_sender)
	{
		return ($this->sender = $_sender);
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
	 * Get callTime value
	 * @return string|null
	 */
	public function getCallTime()
	{
		return $this->callTime;
	}
	/**
	 * Set callTime value
	 * @param string $_callTime the callTime
	 * @return string
	 */
	public function setCallTime($_callTime)
	{
		return ($this->callTime = $_callTime);
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
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxHistoryStruct
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