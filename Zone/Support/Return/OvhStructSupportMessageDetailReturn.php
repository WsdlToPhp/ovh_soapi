<?php
/**
 * File for class OvhStructSupportMessageDetailReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportMessageDetailReturn originally named supportMessageDetailReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportMessageDetailReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The thread
	 * @var int
	 */
	public $thread;
	/**
	 * The unreadThread
	 * @var boolean
	 */
	public $unreadThread;
	/**
	 * The fromEmail
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The dateSent
	 * @var string
	 */
	public $dateSent;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The body
	 * @var string
	 */
	public $body;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor method for supportMessageDetailReturn
	 * @see parent::__construct()
	 * @param int $_id
	 * @param int $_thread
	 * @param boolean $_unreadThread
	 * @param string $_fromEmail
	 * @param string $_dateSent
	 * @param string $_subject
	 * @param string $_body
	 * @param string $_reportReason
	 * @return OvhStructSupportMessageDetailReturn
	 */
	public function __construct($_id = NULL,$_thread = NULL,$_unreadThread = NULL,$_fromEmail = NULL,$_dateSent = NULL,$_subject = NULL,$_body = NULL,$_reportReason = NULL)
	{
		parent::__construct(array('id'=>$_id,'thread'=>$_thread,'unreadThread'=>$_unreadThread,'fromEmail'=>$_fromEmail,'dateSent'=>$_dateSent,'subject'=>$_subject,'body'=>$_body,'reportReason'=>$_reportReason));
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
	 * Get thread value
	 * @return int|null
	 */
	public function getThread()
	{
		return $this->thread;
	}
	/**
	 * Set thread value
	 * @param int $_thread the thread
	 * @return int
	 */
	public function setThread($_thread)
	{
		return ($this->thread = $_thread);
	}
	/**
	 * Get unreadThread value
	 * @return boolean|null
	 */
	public function getUnreadThread()
	{
		return $this->unreadThread;
	}
	/**
	 * Set unreadThread value
	 * @param boolean $_unreadThread the unreadThread
	 * @return boolean
	 */
	public function setUnreadThread($_unreadThread)
	{
		return ($this->unreadThread = $_unreadThread);
	}
	/**
	 * Get fromEmail value
	 * @return string|null
	 */
	public function getFromEmail()
	{
		return $this->fromEmail;
	}
	/**
	 * Set fromEmail value
	 * @param string $_fromEmail the fromEmail
	 * @return string
	 */
	public function setFromEmail($_fromEmail)
	{
		return ($this->fromEmail = $_fromEmail);
	}
	/**
	 * Get dateSent value
	 * @return string|null
	 */
	public function getDateSent()
	{
		return $this->dateSent;
	}
	/**
	 * Set dateSent value
	 * @param string $_dateSent the dateSent
	 * @return string
	 */
	public function setDateSent($_dateSent)
	{
		return ($this->dateSent = $_dateSent);
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
	 * Get body value
	 * @return string|null
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set body value
	 * @param string $_body the body
	 * @return string
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
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
	 * @return OvhStructSupportMessageDetailReturn
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