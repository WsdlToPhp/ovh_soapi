<?php
/**
 * File for class OvhStructTelephonySpareInfoStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareInfoStruct originally named telephonySpareInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareInfoStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The family
	 * @var string
	 */
	public $family;
	/**
	 * The spare
	 * @var string
	 */
	public $spare;
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The compatibles
	 * @var OvhStructMyArrayOfStringType
	 */
	public $compatibles;
	/**
	 * The actions
	 * @var OvhStructTelephonySpareActionsStruct
	 */
	public $actions;
	/**
	 * Constructor method for telephonySpareInfoStruct
	 * @see parent::__construct()
	 * @param string $_type
	 * @param string $_family
	 * @param string $_spare
	 * @param string $_model
	 * @param string $_mac
	 * @param OvhStructMyArrayOfStringType $_compatibles
	 * @param OvhStructTelephonySpareActionsStruct $_actions
	 * @return OvhStructTelephonySpareInfoStruct
	 */
	public function __construct($_type = NULL,$_family = NULL,$_spare = NULL,$_model = NULL,$_mac = NULL,$_compatibles = NULL,$_actions = NULL)
	{
		parent::__construct(array('type'=>$_type,'family'=>$_family,'spare'=>$_spare,'model'=>$_model,'mac'=>$_mac,'compatibles'=>($_compatibles instanceof OvhStructMyArrayOfStringType)?$_compatibles:new OvhStructMyArrayOfStringType($_compatibles),'actions'=>$_actions));
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
	 * Get spare value
	 * @return string|null
	 */
	public function getSpare()
	{
		return $this->spare;
	}
	/**
	 * Set spare value
	 * @param string $_spare the spare
	 * @return string
	 */
	public function setSpare($_spare)
	{
		return ($this->spare = $_spare);
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
	 * Get compatibles value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getCompatibles()
	{
		return $this->compatibles;
	}
	/**
	 * Set compatibles value
	 * @param OvhStructMyArrayOfStringType $_compatibles the compatibles
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setCompatibles($_compatibles)
	{
		return ($this->compatibles = $_compatibles);
	}
	/**
	 * Get actions value
	 * @return OvhStructTelephonySpareActionsStruct|null
	 */
	public function getActions()
	{
		return $this->actions;
	}
	/**
	 * Set actions value
	 * @param OvhStructTelephonySpareActionsStruct $_actions the actions
	 * @return OvhStructTelephonySpareActionsStruct
	 */
	public function setActions($_actions)
	{
		return ($this->actions = $_actions);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareInfoStruct
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