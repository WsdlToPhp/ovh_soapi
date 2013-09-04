<?php
/**
 * File for class OvhStructTelephonyVoicemailMessagesDownloadReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyVoicemailMessagesDownloadReturn originally named telephonyVoicemailMessagesDownloadReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyVoicemailMessagesDownloadReturn extends OvhWsdlClass
{
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * The fileData
	 * @var string
	 */
	public $fileData;
	/**
	 * The md5sum
	 * @var string
	 */
	public $md5sum;
	/**
	 * Constructor method for telephonyVoicemailMessagesDownloadReturn
	 * @see parent::__construct()
	 * @param string $_fileName
	 * @param string $_fileData
	 * @param string $_md5sum
	 * @return OvhStructTelephonyVoicemailMessagesDownloadReturn
	 */
	public function __construct($_fileName = NULL,$_fileData = NULL,$_md5sum = NULL)
	{
		parent::__construct(array('fileName'=>$_fileName,'fileData'=>$_fileData,'md5sum'=>$_md5sum));
	}
	/**
	 * Get fileName value
	 * @return string|null
	 */
	public function getFileName()
	{
		return $this->fileName;
	}
	/**
	 * Set fileName value
	 * @param string $_fileName the fileName
	 * @return string
	 */
	public function setFileName($_fileName)
	{
		return ($this->fileName = $_fileName);
	}
	/**
	 * Get fileData value
	 * @return string|null
	 */
	public function getFileData()
	{
		return $this->fileData;
	}
	/**
	 * Set fileData value
	 * @param string $_fileData the fileData
	 * @return string
	 */
	public function setFileData($_fileData)
	{
		return ($this->fileData = $_fileData);
	}
	/**
	 * Get md5sum value
	 * @return string|null
	 */
	public function getMd5sum()
	{
		return $this->md5sum;
	}
	/**
	 * Set md5sum value
	 * @param string $_md5sum the md5sum
	 * @return string
	 */
	public function setMd5sum($_md5sum)
	{
		return ($this->md5sum = $_md5sum);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyVoicemailMessagesDownloadReturn
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