<?php
/**
 * File for class OvhStructSupportReportAnswerProblem
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportReportAnswerProblem originally named supportReportAnswerProblem
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportReportAnswerProblem extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The messageId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $messageId;
	/**
	 * The reportReason
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor method for supportReportAnswerProblem
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_messageId
	 * @param string $_reportReason
	 * @return OvhStructSupportReportAnswerProblem
	 */
	public function __construct($_session = NULL,$_messageId = NULL,$_reportReason = NULL)
	{
		parent::__construct(array('session'=>$_session,'messageId'=>$_messageId,'reportReason'=>$_reportReason));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get messageId value
	 * @return int|null
	 */
	public function getMessageId()
	{
		return $this->messageId;
	}
	/**
	 * Set messageId value
	 * @param int $_messageId the messageId
	 * @return int
	 */
	public function setMessageId($_messageId)
	{
		return ($this->messageId = $_messageId);
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
	 * @return OvhStructSupportReportAnswerProblem
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