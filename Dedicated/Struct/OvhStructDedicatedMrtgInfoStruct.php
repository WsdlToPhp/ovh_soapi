<?php
/**
 * File for class OvhStructDedicatedMrtgInfoStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMrtgInfoStruct originally named dedicatedMrtgInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMrtgInfoStruct extends OvhWsdlClass
{
	/**
	 * The in
	 * @var string
	 */
	public $in;
	/**
	 * The out
	 * @var string
	 */
	public $out;
	/**
	 * Constructor method for dedicatedMrtgInfoStruct
	 * @see parent::__construct()
	 * @param string $_in
	 * @param string $_out
	 * @return OvhStructDedicatedMrtgInfoStruct
	 */
	public function __construct($_in = NULL,$_out = NULL)
	{
		parent::__construct(array('in'=>$_in,'out'=>$_out));
	}
	/**
	 * Get in value
	 * @return string|null
	 */
	public function getIn()
	{
		return $this->in;
	}
	/**
	 * Set in value
	 * @param string $_in the in
	 * @return string
	 */
	public function setIn($_in)
	{
		return ($this->in = $_in);
	}
	/**
	 * Get out value
	 * @return string|null
	 */
	public function getOut()
	{
		return $this->out;
	}
	/**
	 * Set out value
	 * @param string $_out the out
	 * @return string
	 */
	public function setOut($_out)
	{
		return ($this->out = $_out);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMrtgInfoStruct
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