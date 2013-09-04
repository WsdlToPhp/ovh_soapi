<?php
/**
 * File for class OvhStructTelephonyVoicemailMailboxStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyVoicemailMailboxStruct originally named telephonyVoicemailMailboxStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyVoicemailMailboxStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The callerid
	 * @var string
	 */
	public $callerid;
	/**
	 * The origdate
	 * @var string
	 */
	public $origdate;
	/**
	 * The origtime
	 * @var string
	 */
	public $origtime;
	/**
	 * The origmailbox
	 * @var string
	 */
	public $origmailbox;
	/**
	 * The duration
	 * @var int
	 */
	public $duration;
	/**
	 * The folder
	 * @var string
	 */
	public $folder;
	/**
	 * Constructor method for telephonyVoicemailMailboxStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_callerid
	 * @param string $_origdate
	 * @param string $_origtime
	 * @param string $_origmailbox
	 * @param int $_duration
	 * @param string $_folder
	 * @return OvhStructTelephonyVoicemailMailboxStruct
	 */
	public function __construct($_id = NULL,$_callerid = NULL,$_origdate = NULL,$_origtime = NULL,$_origmailbox = NULL,$_duration = NULL,$_folder = NULL)
	{
		parent::__construct(array('id'=>$_id,'callerid'=>$_callerid,'origdate'=>$_origdate,'origtime'=>$_origtime,'origmailbox'=>$_origmailbox,'duration'=>$_duration,'folder'=>$_folder));
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
	 * Get callerid value
	 * @return string|null
	 */
	public function getCallerid()
	{
		return $this->callerid;
	}
	/**
	 * Set callerid value
	 * @param string $_callerid the callerid
	 * @return string
	 */
	public function setCallerid($_callerid)
	{
		return ($this->callerid = $_callerid);
	}
	/**
	 * Get origdate value
	 * @return string|null
	 */
	public function getOrigdate()
	{
		return $this->origdate;
	}
	/**
	 * Set origdate value
	 * @param string $_origdate the origdate
	 * @return string
	 */
	public function setOrigdate($_origdate)
	{
		return ($this->origdate = $_origdate);
	}
	/**
	 * Get origtime value
	 * @return string|null
	 */
	public function getOrigtime()
	{
		return $this->origtime;
	}
	/**
	 * Set origtime value
	 * @param string $_origtime the origtime
	 * @return string
	 */
	public function setOrigtime($_origtime)
	{
		return ($this->origtime = $_origtime);
	}
	/**
	 * Get origmailbox value
	 * @return string|null
	 */
	public function getOrigmailbox()
	{
		return $this->origmailbox;
	}
	/**
	 * Set origmailbox value
	 * @param string $_origmailbox the origmailbox
	 * @return string
	 */
	public function setOrigmailbox($_origmailbox)
	{
		return ($this->origmailbox = $_origmailbox);
	}
	/**
	 * Get duration value
	 * @return int|null
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set duration value
	 * @param int $_duration the duration
	 * @return int
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get folder value
	 * @return string|null
	 */
	public function getFolder()
	{
		return $this->folder;
	}
	/**
	 * Set folder value
	 * @param string $_folder the folder
	 * @return string
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyVoicemailMailboxStruct
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