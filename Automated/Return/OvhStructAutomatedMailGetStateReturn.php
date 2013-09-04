<?php
/**
 * File for class OvhStructAutomatedMailGetStateReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAutomatedMailGetStateReturn originally named automatedMailGetStateReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAutomatedMailGetStateReturn extends OvhWsdlClass
{
	/**
	 * The bounce
	 * @var int
	 */
	public $bounce;
	/**
	 * The sent
	 * @var int
	 */
	public $sent;
	/**
	 * The return
	 * @var string
	 */
	public $return;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor method for automatedMailGetStateReturn
	 * @see parent::__construct()
	 * @param int $_bounce
	 * @param int $_sent
	 * @param string $_return
	 * @param string $_state
	 * @return OvhStructAutomatedMailGetStateReturn
	 */
	public function __construct($_bounce = NULL,$_sent = NULL,$_return = NULL,$_state = NULL)
	{
		parent::__construct(array('bounce'=>$_bounce,'sent'=>$_sent,'return'=>$_return,'state'=>$_state));
	}
	/**
	 * Get bounce value
	 * @return int|null
	 */
	public function getBounce()
	{
		return $this->bounce;
	}
	/**
	 * Set bounce value
	 * @param int $_bounce the bounce
	 * @return int
	 */
	public function setBounce($_bounce)
	{
		return ($this->bounce = $_bounce);
	}
	/**
	 * Get sent value
	 * @return int|null
	 */
	public function getSent()
	{
		return $this->sent;
	}
	/**
	 * Set sent value
	 * @param int $_sent the sent
	 * @return int
	 */
	public function setSent($_sent)
	{
		return ($this->sent = $_sent);
	}
	/**
	 * Get return value
	 * @return string|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param string $_return the return
	 * @return string
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAutomatedMailGetStateReturn
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