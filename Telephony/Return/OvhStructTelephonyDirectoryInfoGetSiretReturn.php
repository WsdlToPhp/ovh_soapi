<?php
/**
 * File for class OvhStructTelephonyDirectoryInfoGetSiretReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryInfoGetSiretReturn originally named telephonyDirectoryInfoGetSiretReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryInfoGetSiretReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The siret
	 * @var int
	 */
	public $siret;
	/**
	 * The siren
	 * @var int
	 */
	public $siren;
	/**
	 * The ape
	 * @var string
	 */
	public $ape;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The juridicCategory
	 * @var string
	 */
	public $juridicCategory;
	/**
	 * The brand
	 * @var string
	 */
	public $brand;
	/**
	 * Constructor method for telephonyDirectoryInfoGetSiretReturn
	 * @see parent::__construct()
	 * @param string $_name
	 * @param int $_siret
	 * @param int $_siren
	 * @param string $_ape
	 * @param string $_address
	 * @param string $_juridicCategory
	 * @param string $_brand
	 * @return OvhStructTelephonyDirectoryInfoGetSiretReturn
	 */
	public function __construct($_name = NULL,$_siret = NULL,$_siren = NULL,$_ape = NULL,$_address = NULL,$_juridicCategory = NULL,$_brand = NULL)
	{
		parent::__construct(array('name'=>$_name,'siret'=>$_siret,'siren'=>$_siren,'ape'=>$_ape,'address'=>$_address,'juridicCategory'=>$_juridicCategory,'brand'=>$_brand));
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get siret value
	 * @return int|null
	 */
	public function getSiret()
	{
		return $this->siret;
	}
	/**
	 * Set siret value
	 * @param int $_siret the siret
	 * @return int
	 */
	public function setSiret($_siret)
	{
		return ($this->siret = $_siret);
	}
	/**
	 * Get siren value
	 * @return int|null
	 */
	public function getSiren()
	{
		return $this->siren;
	}
	/**
	 * Set siren value
	 * @param int $_siren the siren
	 * @return int
	 */
	public function setSiren($_siren)
	{
		return ($this->siren = $_siren);
	}
	/**
	 * Get ape value
	 * @return string|null
	 */
	public function getApe()
	{
		return $this->ape;
	}
	/**
	 * Set ape value
	 * @param string $_ape the ape
	 * @return string
	 */
	public function setApe($_ape)
	{
		return ($this->ape = $_ape);
	}
	/**
	 * Get address value
	 * @return string|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param string $_address the address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get juridicCategory value
	 * @return string|null
	 */
	public function getJuridicCategory()
	{
		return $this->juridicCategory;
	}
	/**
	 * Set juridicCategory value
	 * @param string $_juridicCategory the juridicCategory
	 * @return string
	 */
	public function setJuridicCategory($_juridicCategory)
	{
		return ($this->juridicCategory = $_juridicCategory);
	}
	/**
	 * Get brand value
	 * @return string|null
	 */
	public function getBrand()
	{
		return $this->brand;
	}
	/**
	 * Set brand value
	 * @param string $_brand the brand
	 * @return string
	 */
	public function setBrand($_brand)
	{
		return ($this->brand = $_brand);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryInfoGetSiretReturn
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