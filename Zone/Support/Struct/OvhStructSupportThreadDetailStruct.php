<?php
/**
 * File for class OvhStructSupportThreadDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportThreadDetailStruct originally named supportThreadDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportThreadDetailStruct extends OvhWsdlClass
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
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The unread
	 * @var int
	 */
	public $unread;
	/**
	 * The closed
	 * @var int
	 */
	public $closed;
	/**
	 * The answered
	 * @var int
	 */
	public $answered;
	/**
	 * Constructor method for supportThreadDetailStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_date
	 * @param string $_subject
	 * @param string $_domain
	 * @param string $_status
	 * @param int $_unread
	 * @param int $_closed
	 * @param int $_answered
	 * @return OvhStructSupportThreadDetailStruct
	 */
	public function __construct($_id = NULL,$_date = NULL,$_subject = NULL,$_domain = NULL,$_status = NULL,$_unread = NULL,$_closed = NULL,$_answered = NULL)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'subject'=>$_subject,'domain'=>$_domain,'status'=>$_status,'unread'=>$_unread,'closed'=>$_closed,'answered'=>$_answered));
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
	 * Get subject value
	 * @return string|null
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set subject value
	 * @param string $_subject the subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Get closed value
	 * @return int|null
	 */
	public function getClosed()
	{
		return $this->closed;
	}
	/**
	 * Set closed value
	 * @param int $_closed the closed
	 * @return int
	 */
	public function setClosed($_closed)
	{
		return ($this->closed = $_closed);
	}
	/**
	 * Get answered value
	 * @return int|null
	 */
	public function getAnswered()
	{
		return $this->answered;
	}
	/**
	 * Set answered value
	 * @param int $_answered the answered
	 * @return int
	 */
	public function setAnswered($_answered)
	{
		return ($this->answered = $_answered);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportThreadDetailStruct
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