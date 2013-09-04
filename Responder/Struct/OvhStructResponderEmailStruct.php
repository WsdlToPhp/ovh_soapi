<?php
/**
 * File for class OvhStructResponderEmailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResponderEmailStruct originally named responderEmailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResponderEmailStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The responder
	 * @var string
	 */
	public $responder;
	/**
	 * The content
	 * @var string
	 */
	public $content;
	/**
	 * The hasPop
	 * @var boolean
	 */
	public $hasPop;
	/**
	 * The hasAlias
	 * @var boolean
	 */
	public $hasAlias;
	/**
	 * Constructor method for responderEmailStruct
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_responder
	 * @param string $_content
	 * @param boolean $_hasPop
	 * @param boolean $_hasAlias
	 * @return OvhStructResponderEmailStruct
	 */
	public function __construct($_domain = NULL,$_responder = NULL,$_content = NULL,$_hasPop = NULL,$_hasAlias = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'responder'=>$_responder,'content'=>$_content,'hasPop'=>$_hasPop,'hasAlias'=>$_hasAlias));
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
	 * Get responder value
	 * @return string|null
	 */
	public function getResponder()
	{
		return $this->responder;
	}
	/**
	 * Set responder value
	 * @param string $_responder the responder
	 * @return string
	 */
	public function setResponder($_responder)
	{
		return ($this->responder = $_responder);
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
	 * Get hasPop value
	 * @return boolean|null
	 */
	public function getHasPop()
	{
		return $this->hasPop;
	}
	/**
	 * Set hasPop value
	 * @param boolean $_hasPop the hasPop
	 * @return boolean
	 */
	public function setHasPop($_hasPop)
	{
		return ($this->hasPop = $_hasPop);
	}
	/**
	 * Get hasAlias value
	 * @return boolean|null
	 */
	public function getHasAlias()
	{
		return $this->hasAlias;
	}
	/**
	 * Set hasAlias value
	 * @param boolean $_hasAlias the hasAlias
	 * @return boolean
	 */
	public function setHasAlias($_hasAlias)
	{
		return ($this->hasAlias = $_hasAlias);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructResponderEmailStruct
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