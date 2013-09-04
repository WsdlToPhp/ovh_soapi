<?php
/**
 * File for class OvhStructDedicatedServerPartioningReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedServerPartioningReturn originally named dedicatedServerPartioningReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedServerPartioningReturn extends OvhWsdlClass
{
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * The langaue
	 * @var string
	 */
	public $langaue;
	/**
	 * The partioning
	 * @var OvhStructMyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public $partioning;
	/**
	 * The warn
	 * @var int
	 */
	public $warn;
	/**
	 * Constructor method for dedicatedServerPartioningReturn
	 * @see parent::__construct()
	 * @param string $_os
	 * @param string $_langaue
	 * @param OvhStructMyArrayOfDedicatedServerPartioningDetailStructType $_partioning
	 * @param int $_warn
	 * @return OvhStructDedicatedServerPartioningReturn
	 */
	public function __construct($_os = NULL,$_langaue = NULL,$_partioning = NULL,$_warn = NULL)
	{
		parent::__construct(array('os'=>$_os,'langaue'=>$_langaue,'partioning'=>($_partioning instanceof OvhStructMyArrayOfDedicatedServerPartioningDetailStructType)?$_partioning:new OvhStructMyArrayOfDedicatedServerPartioningDetailStructType($_partioning),'warn'=>$_warn));
	}
	/**
	 * Get os value
	 * @return string|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param string $_os the os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get langaue value
	 * @return string|null
	 */
	public function getLangaue()
	{
		return $this->langaue;
	}
	/**
	 * Set langaue value
	 * @param string $_langaue the langaue
	 * @return string
	 */
	public function setLangaue($_langaue)
	{
		return ($this->langaue = $_langaue);
	}
	/**
	 * Get partioning value
	 * @return OvhStructMyArrayOfDedicatedServerPartioningDetailStructType|null
	 */
	public function getPartioning()
	{
		return $this->partioning;
	}
	/**
	 * Set partioning value
	 * @param OvhStructMyArrayOfDedicatedServerPartioningDetailStructType $_partioning the partioning
	 * @return OvhStructMyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public function setPartioning($_partioning)
	{
		return ($this->partioning = $_partioning);
	}
	/**
	 * Get warn value
	 * @return int|null
	 */
	public function getWarn()
	{
		return $this->warn;
	}
	/**
	 * Set warn value
	 * @param int $_warn the warn
	 * @return int
	 */
	public function setWarn($_warn)
	{
		return ($this->warn = $_warn);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedServerPartioningReturn
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