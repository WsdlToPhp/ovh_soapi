<?php
/**
 * File for class OvhStructNotepadAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNotepadAdd originally named notepadAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNotepadAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The content
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $content;
	/**
	 * The offset
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $offset;
	/**
	 * Constructor method for notepadAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_content
	 * @param string $_offset
	 * @return OvhStructNotepadAdd
	 */
	public function __construct($_session = NULL,$_content = NULL,$_offset = NULL)
	{
		parent::__construct(array('session'=>$_session,'content'=>$_content,'offset'=>$_offset));
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
	 * Get content value
	 * @return string|null
	 */
	public function getContent()
	{
		return $this->content;
	}
	/**
	 * Set content value
	 * @param string $_content the content
	 * @return string
	 */
	public function setContent($_content)
	{
		return ($this->content = $_content);
	}
	/**
	 * Get offset value
	 * @return string|null
	 */
	public function getOffset()
	{
		return $this->offset;
	}
	/**
	 * Set offset value
	 * @param string $_offset the offset
	 * @return string
	 */
	public function setOffset($_offset)
	{
		return ($this->offset = $_offset);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNotepadAdd
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