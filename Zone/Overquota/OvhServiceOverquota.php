<?php
/**
 * File for class OvhServiceOverquota
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceOverquota originally named Overquota
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceOverquota extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named overquotaInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructOverquotaInfo::getSession()
	 * @uses OvhStructOverquotaInfo::getDomain()
	 * @param OvhStructOverquotaInfo $_ovhStructOverquotaInfo
	 * @return OvhStructOverquotaInfoResponse
	 */
	public function overquotaInfo(OvhStructOverquotaInfo $_ovhStructOverquotaInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->overquotaInfo($_ovhStructOverquotaInfo->getSession(),$_ovhStructOverquotaInfo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see OvhWsdlClass::getResult()
	 * @return OvhStructOverquotaInfoResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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