<?php
/**
 * File for class OvhStructRipeInetnumStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeInetnumStruct originally named ripeInetnumStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeInetnumStruct extends OvhWsdlClass
{
	/**
	 * The inetnum
	 * @var string
	 */
	public $inetnum;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The descr
	 * @var OvhStructMyArrayOfStringType
	 */
	public $descr;
	/**
	 * The org
	 * @var string
	 */
	public $org;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The adminc
	 * @var string
	 */
	public $adminc;
	/**
	 * The techc
	 * @var string
	 */
	public $techc;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The mntby
	 * @var string
	 */
	public $mntby;
	/**
	 * The changed
	 * @var string
	 */
	public $changed;
	/**
	 * The source
	 * @var string
	 */
	public $source;
	/**
	 * Constructor method for ripeInetnumStruct
	 * @see parent::__construct()
	 * @param string $_inetnum
	 * @param string $_netname
	 * @param OvhStructMyArrayOfStringType $_descr
	 * @param string $_org
	 * @param string $_country
	 * @param string $_adminc
	 * @param string $_techc
	 * @param string $_status
	 * @param string $_mntby
	 * @param string $_changed
	 * @param string $_source
	 * @return OvhStructRipeInetnumStruct
	 */
	public function __construct($_inetnum = NULL,$_netname = NULL,$_descr = NULL,$_org = NULL,$_country = NULL,$_adminc = NULL,$_techc = NULL,$_status = NULL,$_mntby = NULL,$_changed = NULL,$_source = NULL)
	{
		parent::__construct(array('inetnum'=>$_inetnum,'netname'=>$_netname,'descr'=>($_descr instanceof OvhStructMyArrayOfStringType)?$_descr:new OvhStructMyArrayOfStringType($_descr),'org'=>$_org,'country'=>$_country,'adminc'=>$_adminc,'techc'=>$_techc,'status'=>$_status,'mntby'=>$_mntby,'changed'=>$_changed,'source'=>$_source));
	}
	/**
	 * Get inetnum value
	 * @return string|null
	 */
	public function getInetnum()
	{
		return $this->inetnum;
	}
	/**
	 * Set inetnum value
	 * @param string $_inetnum the inetnum
	 * @return string
	 */
	public function setInetnum($_inetnum)
	{
		return ($this->inetnum = $_inetnum);
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
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getDescr()
	{
		return $this->descr;
	}
	/**
	 * Set descr value
	 * @param OvhStructMyArrayOfStringType $_descr the descr
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get org value
	 * @return string|null
	 */
	public function getOrg()
	{
		return $this->org;
	}
	/**
	 * Set org value
	 * @param string $_org the org
	 * @return string
	 */
	public function setOrg($_org)
	{
		return ($this->org = $_org);
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get adminc value
	 * @return string|null
	 */
	public function getAdminc()
	{
		return $this->adminc;
	}
	/**
	 * Set adminc value
	 * @param string $_adminc the adminc
	 * @return string
	 */
	public function setAdminc($_adminc)
	{
		return ($this->adminc = $_adminc);
	}
	/**
	 * Get techc value
	 * @return string|null
	 */
	public function getTechc()
	{
		return $this->techc;
	}
	/**
	 * Set techc value
	 * @param string $_techc the techc
	 * @return string
	 */
	public function setTechc($_techc)
	{
		return ($this->techc = $_techc);
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
	 * Get mntby value
	 * @return string|null
	 */
	public function getMntby()
	{
		return $this->mntby;
	}
	/**
	 * Set mntby value
	 * @param string $_mntby the mntby
	 * @return string
	 */
	public function setMntby($_mntby)
	{
		return ($this->mntby = $_mntby);
	}
	/**
	 * Get changed value
	 * @return string|null
	 */
	public function getChanged()
	{
		return $this->changed;
	}
	/**
	 * Set changed value
	 * @param string $_changed the changed
	 * @return string
	 */
	public function setChanged($_changed)
	{
		return ($this->changed = $_changed);
	}
	/**
	 * Get source value
	 * @return string|null
	 */
	public function getSource()
	{
		return $this->source;
	}
	/**
	 * Set source value
	 * @param string $_source the source
	 * @return string
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeInetnumStruct
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