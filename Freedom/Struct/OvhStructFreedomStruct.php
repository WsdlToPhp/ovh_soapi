<?php
/**
 * File for class OvhStructFreedomStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructFreedomStruct originally named freedomStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructFreedomStruct extends OvhWsdlClass
{
	/**
	 * The referenceReferer
	 * @var string
	 */
	public $referenceReferer;
	/**
	 * The creationDate
	 * @var string
	 */
	public $creationDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The freeDom
	 * @var string
	 */
	public $freeDom;
	/**
	 * The useDate
	 * @var string
	 */
	public $useDate;
	/**
	 * The domainReferer
	 * @var string
	 */
	public $domainReferer;
	/**
	 * Constructor method for freedomStruct
	 * @see parent::__construct()
	 * @param string $_referenceReferer
	 * @param string $_creationDate
	 * @param string $_status
	 * @param string $_freeDom
	 * @param string $_useDate
	 * @param string $_domainReferer
	 * @return OvhStructFreedomStruct
	 */
	public function __construct($_referenceReferer = NULL,$_creationDate = NULL,$_status = NULL,$_freeDom = NULL,$_useDate = NULL,$_domainReferer = NULL)
	{
		parent::__construct(array('referenceReferer'=>$_referenceReferer,'creationDate'=>$_creationDate,'status'=>$_status,'freeDom'=>$_freeDom,'useDate'=>$_useDate,'domainReferer'=>$_domainReferer));
	}
	/**
	 * Get referenceReferer value
	 * @return string|null
	 */
	public function getReferenceReferer()
	{
		return $this->referenceReferer;
	}
	/**
	 * Set referenceReferer value
	 * @param string $_referenceReferer the referenceReferer
	 * @return string
	 */
	public function setReferenceReferer($_referenceReferer)
	{
		return ($this->referenceReferer = $_referenceReferer);
	}
	/**
	 * Get creationDate value
	 * @return string|null
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
	}
	/**
	 * Set creationDate value
	 * @param string $_creationDate the creationDate
	 * @return string
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get freeDom value
	 * @return string|null
	 */
	public function getFreeDom()
	{
		return $this->freeDom;
	}
	/**
	 * Set freeDom value
	 * @param string $_freeDom the freeDom
	 * @return string
	 */
	public function setFreeDom($_freeDom)
	{
		return ($this->freeDom = $_freeDom);
	}
	/**
	 * Get useDate value
	 * @return string|null
	 */
	public function getUseDate()
	{
		return $this->useDate;
	}
	/**
	 * Set useDate value
	 * @param string $_useDate the useDate
	 * @return string
	 */
	public function setUseDate($_useDate)
	{
		return ($this->useDate = $_useDate);
	}
	/**
	 * Get domainReferer value
	 * @return string|null
	 */
	public function getDomainReferer()
	{
		return $this->domainReferer;
	}
	/**
	 * Set domainReferer value
	 * @param string $_domainReferer the domainReferer
	 * @return string
	 */
	public function setDomainReferer($_domainReferer)
	{
		return ($this->domainReferer = $_domainReferer);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructFreedomStruct
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