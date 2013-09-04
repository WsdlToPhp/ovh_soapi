<?php
/**
 * File for class OvhStructDedicatedRipeDeleteOrganisation
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedRipeDeleteOrganisation originally named dedicatedRipeDeleteOrganisation
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedRipeDeleteOrganisation extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ripeId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ripeId;
	/**
	 * The comment
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor method for dedicatedRipeDeleteOrganisation
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ripeId
	 * @param string $_comment
	 * @return OvhStructDedicatedRipeDeleteOrganisation
	 */
	public function __construct($_session = NULL,$_ripeId = NULL,$_comment = NULL)
	{
		parent::__construct(array('session'=>$_session,'ripeId'=>$_ripeId,'comment'=>$_comment));
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
	 * Get ripeId value
	 * @return string|null
	 */
	public function getRipeId()
	{
		return $this->ripeId;
	}
	/**
	 * Set ripeId value
	 * @param string $_ripeId the ripeId
	 * @return string
	 */
	public function setRipeId($_ripeId)
	{
		return ($this->ripeId = $_ripeId);
	}
	/**
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedRipeDeleteOrganisation
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