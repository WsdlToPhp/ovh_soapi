<?php
/**
 * File for class OvhStructTelephonySpareCapabilities
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareCapabilities originally named telephonySpareCapabilities
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareCapabilities extends OvhWsdlClass
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
	 * The family
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $family;
	/**
	 * The model
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $model;
	/**
	 * Constructor method for telephonySpareCapabilities
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_type
	 * @param string $_family
	 * @param string $_model
	 * @return OvhStructTelephonySpareCapabilities
	 */
	public function __construct($_session = NULL,$_type = NULL,$_family = NULL,$_model = NULL)
	{
		parent::__construct(array('session'=>$_session,'type'=>$_type,'family'=>$_family,'model'=>$_model));
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
	 * Get family value
	 * @return string|null
	 */
	public function getFamily()
	{
		return $this->family;
	}
	/**
	 * Set family value
	 * @param string $_family the family
	 * @return string
	 */
	public function setFamily($_family)
	{
		return ($this->family = $_family);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareCapabilities
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