<?php
/**
 * File for class OvhStructResponderEmailAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructResponderEmailAdd originally named responderEmailAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructResponderEmailAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The responder
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $responder;
	/**
	 * The content
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $content;
	/**
	 * The delivered_to
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $delivered_to;
	/**
	 * The nic
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nic;
	/**
	 * Constructor method for responderEmailAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_responder
	 * @param string $_content
	 * @param string $_delivered_to
	 * @param string $_nic
	 * @return OvhStructResponderEmailAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_responder = NULL,$_content = NULL,$_delivered_to = NULL,$_nic = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'responder'=>$_responder,'content'=>$_content,'delivered_to'=>$_delivered_to,'nic'=>$_nic));
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
	 * Get delivered_to value
	 * @return string|null
	 */
	public function getDelivered_to()
	{
		return $this->delivered_to;
	}
	/**
	 * Set delivered_to value
	 * @param string $_delivered_to the delivered_to
	 * @return string
	 */
	public function setDelivered_to($_delivered_to)
	{
		return ($this->delivered_to = $_delivered_to);
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructResponderEmailAdd
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