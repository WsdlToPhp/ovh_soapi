<?php
/**
 * File for class OvhStructSupportThreadTreeReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportThreadTreeReturn originally named supportThreadTreeReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportThreadTreeReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * The closed
	 * @var int
	 */
	public $closed;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * The messages
	 * @var OvhStructMyArrayOfSupportThreadMessageDetailStructType
	 */
	public $messages;
	/**
	 * Constructor method for supportThreadTreeReturn
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_subject
	 * @param string $_domain
	 * @param int $_closed
	 * @param string $_reportReason
	 * @param OvhStructMyArrayOfSupportThreadMessageDetailStructType $_messages
	 * @return OvhStructSupportThreadTreeReturn
	 */
	public function __construct($_id = NULL,$_subject = NULL,$_domain = NULL,$_closed = NULL,$_reportReason = NULL,$_messages = NULL)
	{
		parent::__construct(array('id'=>$_id,'subject'=>$_subject,'domain'=>$_domain,'closed'=>$_closed,'reportReason'=>$_reportReason,'messages'=>($_messages instanceof OvhStructMyArrayOfSupportThreadMessageDetailStructType)?$_messages:new OvhStructMyArrayOfSupportThreadMessageDetailStructType($_messages)));
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
	 * Get messages value
	 * @return OvhStructMyArrayOfSupportThreadMessageDetailStructType|null
	 */
	public function getMessages()
	{
		return $this->messages;
	}
	/**
	 * Set messages value
	 * @param OvhStructMyArrayOfSupportThreadMessageDetailStructType $_messages the messages
	 * @return OvhStructMyArrayOfSupportThreadMessageDetailStructType
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportThreadTreeReturn
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