<?php
/**
 * File for class OvhStructSupportThreadMessageDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportThreadMessageDetailStruct originally named supportThreadMessageDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportThreadMessageDetailStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The unread
	 * @var int
	 */
	public $unread;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor method for supportThreadMessageDetailStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_date
	 * @param int $_unread
	 * @param string $_type
	 * @param string $_reportReason
	 * @return OvhStructSupportThreadMessageDetailStruct
	 */
	public function __construct($_id = NULL,$_date = NULL,$_unread = NULL,$_type = NULL,$_reportReason = NULL)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'unread'=>$_unread,'type'=>$_type,'reportReason'=>$_reportReason));
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
	 * Get unread value
	 * @return int|null
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set unread value
	 * @param int $_unread the unread
	 * @return int
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
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
	 * Get reportReason value
	 * @return string|null
	 */
	public function getReportReason()
	{
		return $this->reportReason;
	}
	/**
	 * Set reportReason value
	 * @param string $_reportReason the reportReason
	 * @return string
	 */
	public function setReportReason($_reportReason)
	{
		return ($this->reportReason = $_reportReason);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportThreadMessageDetailStruct
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