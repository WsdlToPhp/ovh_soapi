<?php
/**
 * File for class OvhStructAnonymousFtpInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAnonymousFtpInfoReturn originally named anonymousFtpInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAnonymousFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The max
	 * @var int
	 */
	public $max;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The todo
	 * @var boolean
	 */
	public $todo;
	/**
	 * Constructor method for anonymousFtpInfoReturn
	 * @see parent::__construct()
	 * @param string $_login
	 * @param string $_url
	 * @param int $_max
	 * @param int $_quota
	 * @param boolean $_active
	 * @param boolean $_todo
	 * @return OvhStructAnonymousFtpInfoReturn
	 */
	public function __construct($_login = NULL,$_url = NULL,$_max = NULL,$_quota = NULL,$_active = NULL,$_todo = NULL)
	{
		parent::__construct(array('login'=>$_login,'url'=>$_url,'max'=>$_max,'quota'=>$_quota,'active'=>$_active,'todo'=>$_todo));
	}
	/**
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get max value
	 * @return int|null
	 */
	public function getMax()
	{
		return $this->max;
	}
	/**
	 * Set max value
	 * @param int $_max the max
	 * @return int
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get quota value
	 * @return int|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param int $_quota the quota
	 * @return int
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get active value
	 * @return boolean|null
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set active value
	 * @param boolean $_active the active
	 * @return boolean
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get todo value
	 * @return boolean|null
	 */
	public function getTodo()
	{
		return $this->todo;
	}
	/**
	 * Set todo value
	 * @param boolean $_todo the todo
	 * @return boolean
	 */
	public function setTodo($_todo)
	{
		return ($this->todo = $_todo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAnonymousFtpInfoReturn
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