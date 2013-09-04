<?php
/**
 * File for class OvhStructTelephonyGetClosureEventsAsArrayEventStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyGetClosureEventsAsArrayEventStruct originally named telephonyGetClosureEventsAsArrayEventStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyGetClosureEventsAsArrayEventStruct extends OvhWsdlClass
{
	/**
	 * The uid
	 * @var string
	 */
	public $uid;
	/**
	 * The summary
	 * @var string
	 */
	public $summary;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The categories
	 * @var string
	 */
	public $categories;
	/**
	 * The created
	 * @var string
	 */
	public $created;
	/**
	 * The lastModified
	 * @var string
	 */
	public $lastModified;
	/**
	 * The dtStart
	 * @var string
	 */
	public $dtStart;
	/**
	 * The dtStartValue
	 * @var string
	 */
	public $dtStartValue;
	/**
	 * The dtStartTzid
	 * @var string
	 */
	public $dtStartTzid;
	/**
	 * The dtStartUserValue
	 * @var string
	 */
	public $dtStartUserValue;
	/**
	 * The dtEnd
	 * @var string
	 */
	public $dtEnd;
	/**
	 * The dtEndValue
	 * @var string
	 */
	public $dtEndValue;
	/**
	 * The dtEndTzid
	 * @var string
	 */
	public $dtEndTzid;
	/**
	 * The dtEndUserValue
	 * @var string
	 */
	public $dtEndUserValue;
	/**
	 * Constructor method for telephonyGetClosureEventsAsArrayEventStruct
	 * @see parent::__construct()
	 * @param string $_uid
	 * @param string $_summary
	 * @param string $_description
	 * @param string $_categories
	 * @param string $_created
	 * @param string $_lastModified
	 * @param string $_dtStart
	 * @param string $_dtStartValue
	 * @param string $_dtStartTzid
	 * @param string $_dtStartUserValue
	 * @param string $_dtEnd
	 * @param string $_dtEndValue
	 * @param string $_dtEndTzid
	 * @param string $_dtEndUserValue
	 * @return OvhStructTelephonyGetClosureEventsAsArrayEventStruct
	 */
	public function __construct($_uid = NULL,$_summary = NULL,$_description = NULL,$_categories = NULL,$_created = NULL,$_lastModified = NULL,$_dtStart = NULL,$_dtStartValue = NULL,$_dtStartTzid = NULL,$_dtStartUserValue = NULL,$_dtEnd = NULL,$_dtEndValue = NULL,$_dtEndTzid = NULL,$_dtEndUserValue = NULL)
	{
		parent::__construct(array('uid'=>$_uid,'summary'=>$_summary,'description'=>$_description,'categories'=>$_categories,'created'=>$_created,'lastModified'=>$_lastModified,'dtStart'=>$_dtStart,'dtStartValue'=>$_dtStartValue,'dtStartTzid'=>$_dtStartTzid,'dtStartUserValue'=>$_dtStartUserValue,'dtEnd'=>$_dtEnd,'dtEndValue'=>$_dtEndValue,'dtEndTzid'=>$_dtEndTzid,'dtEndUserValue'=>$_dtEndUserValue));
	}
	/**
	 * Get uid value
	 * @return string|null
	 */
	public function getUid()
	{
		return $this->uid;
	}
	/**
	 * Set uid value
	 * @param string $_uid the uid
	 * @return string
	 */
	public function setUid($_uid)
	{
		return ($this->uid = $_uid);
	}
	/**
	 * Get summary value
	 * @return string|null
	 */
	public function getSummary()
	{
		return $this->summary;
	}
	/**
	 * Set summary value
	 * @param string $_summary the summary
	 * @return string
	 */
	public function setSummary($_summary)
	{
		return ($this->summary = $_summary);
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
	 * Get categories value
	 * @return string|null
	 */
	public function getCategories()
	{
		return $this->categories;
	}
	/**
	 * Set categories value
	 * @param string $_categories the categories
	 * @return string
	 */
	public function setCategories($_categories)
	{
		return ($this->categories = $_categories);
	}
	/**
	 * Get created value
	 * @return string|null
	 */
	public function getCreated()
	{
		return $this->created;
	}
	/**
	 * Set created value
	 * @param string $_created the created
	 * @return string
	 */
	public function setCreated($_created)
	{
		return ($this->created = $_created);
	}
	/**
	 * Get lastModified value
	 * @return string|null
	 */
	public function getLastModified()
	{
		return $this->lastModified;
	}
	/**
	 * Set lastModified value
	 * @param string $_lastModified the lastModified
	 * @return string
	 */
	public function setLastModified($_lastModified)
	{
		return ($this->lastModified = $_lastModified);
	}
	/**
	 * Get dtStart value
	 * @return string|null
	 */
	public function getDtStart()
	{
		return $this->dtStart;
	}
	/**
	 * Set dtStart value
	 * @param string $_dtStart the dtStart
	 * @return string
	 */
	public function setDtStart($_dtStart)
	{
		return ($this->dtStart = $_dtStart);
	}
	/**
	 * Get dtStartValue value
	 * @return string|null
	 */
	public function getDtStartValue()
	{
		return $this->dtStartValue;
	}
	/**
	 * Set dtStartValue value
	 * @param string $_dtStartValue the dtStartValue
	 * @return string
	 */
	public function setDtStartValue($_dtStartValue)
	{
		return ($this->dtStartValue = $_dtStartValue);
	}
	/**
	 * Get dtStartTzid value
	 * @return string|null
	 */
	public function getDtStartTzid()
	{
		return $this->dtStartTzid;
	}
	/**
	 * Set dtStartTzid value
	 * @param string $_dtStartTzid the dtStartTzid
	 * @return string
	 */
	public function setDtStartTzid($_dtStartTzid)
	{
		return ($this->dtStartTzid = $_dtStartTzid);
	}
	/**
	 * Get dtStartUserValue value
	 * @return string|null
	 */
	public function getDtStartUserValue()
	{
		return $this->dtStartUserValue;
	}
	/**
	 * Set dtStartUserValue value
	 * @param string $_dtStartUserValue the dtStartUserValue
	 * @return string
	 */
	public function setDtStartUserValue($_dtStartUserValue)
	{
		return ($this->dtStartUserValue = $_dtStartUserValue);
	}
	/**
	 * Get dtEnd value
	 * @return string|null
	 */
	public function getDtEnd()
	{
		return $this->dtEnd;
	}
	/**
	 * Set dtEnd value
	 * @param string $_dtEnd the dtEnd
	 * @return string
	 */
	public function setDtEnd($_dtEnd)
	{
		return ($this->dtEnd = $_dtEnd);
	}
	/**
	 * Get dtEndValue value
	 * @return string|null
	 */
	public function getDtEndValue()
	{
		return $this->dtEndValue;
	}
	/**
	 * Set dtEndValue value
	 * @param string $_dtEndValue the dtEndValue
	 * @return string
	 */
	public function setDtEndValue($_dtEndValue)
	{
		return ($this->dtEndValue = $_dtEndValue);
	}
	/**
	 * Get dtEndTzid value
	 * @return string|null
	 */
	public function getDtEndTzid()
	{
		return $this->dtEndTzid;
	}
	/**
	 * Set dtEndTzid value
	 * @param string $_dtEndTzid the dtEndTzid
	 * @return string
	 */
	public function setDtEndTzid($_dtEndTzid)
	{
		return ($this->dtEndTzid = $_dtEndTzid);
	}
	/**
	 * Get dtEndUserValue value
	 * @return string|null
	 */
	public function getDtEndUserValue()
	{
		return $this->dtEndUserValue;
	}
	/**
	 * Set dtEndUserValue value
	 * @param string $_dtEndUserValue the dtEndUserValue
	 * @return string
	 */
	public function setDtEndUserValue($_dtEndUserValue)
	{
		return ($this->dtEndUserValue = $_dtEndUserValue);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyGetClosureEventsAsArrayEventStruct
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