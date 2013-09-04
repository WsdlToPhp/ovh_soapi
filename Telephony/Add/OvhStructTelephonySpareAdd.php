<?php
/**
 * File for class OvhStructTelephonySpareAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareAdd originally named telephonySpareAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The model
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $model;
	/**
	 * The mac
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mac;
	/**
	 * Constructor method for telephonySpareAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_type
	 * @param string $_model
	 * @param string $_mac
	 * @return OvhStructTelephonySpareAdd
	 */
	public function __construct($_session = NULL,$_type = NULL,$_model = NULL,$_mac = NULL)
	{
		parent::__construct(array('session'=>$_session,'type'=>$_type,'model'=>$_model,'mac'=>$_mac));
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
	 * Get model value
	 * @return string|null
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set model value
	 * @param string $_model the model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get mac value
	 * @return string|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param string $_mac the mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareAdd
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