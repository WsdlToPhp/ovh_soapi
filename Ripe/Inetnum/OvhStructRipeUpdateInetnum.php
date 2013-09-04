<?php
/**
 * File for class OvhStructRipeUpdateInetnum
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeUpdateInetnum originally named ripeUpdateInetnum
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeUpdateInetnum extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The block
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $block;
	/**
	 * The netname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $netname;
	/**
	 * The descr
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $descr;
	/**
	 * The ripeId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ripeId;
	/**
	 * Constructor method for ripeUpdateInetnum
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_block
	 * @param string $_netname
	 * @param string $_descr
	 * @param string $_ripeId
	 * @return OvhStructRipeUpdateInetnum
	 */
	public function __construct($_session = NULL,$_block = NULL,$_netname = NULL,$_descr = NULL,$_ripeId = NULL)
	{
		parent::__construct(array('session'=>$_session,'block'=>$_block,'netname'=>$_netname,'descr'=>$_descr,'ripeId'=>$_ripeId));
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
	 * Get block value
	 * @return string|null
	 */
	public function getBlock()
	{
		return $this->block;
	}
	/**
	 * Set block value
	 * @param string $_block the block
	 * @return string
	 */
	public function setBlock($_block)
	{
		return ($this->block = $_block);
	}
	/**
	 * Get netname value
	 * @return string|null
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set netname value
	 * @param string $_netname the netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get descr value
	 * @return string|null
	 */
	public function getDescr()
	{
		return $this->descr;
	}
	/**
	 * Set descr value
	 * @param string $_descr the descr
	 * @return string
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get ripeId value
	 * @return string|null
	 */
	public function getRipeId()
	{
		return $this->ripeId;
	}
	/**
	 * Set ripeId value
	 * @param string $_ripeId the ripeId
	 * @return string
	 */
	public function setRipeId($_ripeId)
	{
		return ($this->ripeId = $_ripeId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeUpdateInetnum
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