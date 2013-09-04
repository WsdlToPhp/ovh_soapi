<?php
/**
 * File for class OvhStructTelephonyNicSetSipDomain
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNicSetSipDomain originally named telephonyNicSetSipDomain
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNicSetSipDomain extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The fr
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fr;
	/**
	 * The de
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $de;
	/**
	 * The es
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $es;
	/**
	 * The uk
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $uk;
	/**
	 * The be
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $be;
	/**
	 * Constructor method for telephonyNicSetSipDomain
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_fr
	 * @param string $_de
	 * @param string $_es
	 * @param string $_uk
	 * @param string $_be
	 * @return OvhStructTelephonyNicSetSipDomain
	 */
	public function __construct($_session = NULL,$_fr = NULL,$_de = NULL,$_es = NULL,$_uk = NULL,$_be = NULL)
	{
		parent::__construct(array('session'=>$_session,'fr'=>$_fr,'de'=>$_de,'es'=>$_es,'uk'=>$_uk,'be'=>$_be));
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
	 * Get fr value
	 * @return string|null
	 */
	public function getFr()
	{
		return $this->fr;
	}
	/**
	 * Set fr value
	 * @param string $_fr the fr
	 * @return string
	 */
	public function setFr($_fr)
	{
		return ($this->fr = $_fr);
	}
	/**
	 * Get de value
	 * @return string|null
	 */
	public function getDe()
	{
		return $this->de;
	}
	/**
	 * Set de value
	 * @param string $_de the de
	 * @return string
	 */
	public function setDe($_de)
	{
		return ($this->de = $_de);
	}
	/**
	 * Get es value
	 * @return string|null
	 */
	public function getEs()
	{
		return $this->es;
	}
	/**
	 * Set es value
	 * @param string $_es the es
	 * @return string
	 */
	public function setEs($_es)
	{
		return ($this->es = $_es);
	}
	/**
	 * Get uk value
	 * @return string|null
	 */
	public function getUk()
	{
		return $this->uk;
	}
	/**
	 * Set uk value
	 * @param string $_uk the uk
	 * @return string
	 */
	public function setUk($_uk)
	{
		return ($this->uk = $_uk);
	}
	/**
	 * Get be value
	 * @return string|null
	 */
	public function getBe()
	{
		return $this->be;
	}
	/**
	 * Set be value
	 * @param string $_be the be
	 * @return string
	 */
	public function setBe($_be)
	{
		return ($this->be = $_be);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNicSetSipDomain
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