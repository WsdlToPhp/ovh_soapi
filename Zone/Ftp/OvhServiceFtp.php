<?php
/**
 * File for class OvhServiceFtp
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceFtp originally named Ftp
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceFtp extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named ftpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructFtpInfo::getSession()
	 * @uses OvhStructFtpInfo::getDomain()
	 * @param OvhStructFtpInfo $_ovhStructFtpInfo
	 * @return OvhStructFtpInfoResponse
	 */
	public function ftpInfo(OvhStructFtpInfo $_ovhStructFtpInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ftpInfo($_ovhStructFtpInfo->getSession(),$_ovhStructFtpInfo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ftpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructFtpChangePassword::getSession()
	 * @uses OvhStructFtpChangePassword::getDomain()
	 * @uses OvhStructFtpChangePassword::getPassword()
	 * @uses OvhStructFtpChangePassword::getOldstate()
	 * @uses OvhStructFtpChangePassword::getNewstate()
	 * @param OvhStructFtpChangePassword $_ovhStructFtpChangePassword
	 * @return OvhStructFtpChangePasswordResponse
	 */
	public function ftpChangePassword(OvhStructFtpChangePassword $_ovhStructFtpChangePassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ftpChangePassword($_ovhStructFtpChangePassword->getSession(),$_ovhStructFtpChangePassword->getDomain(),$_ovhStructFtpChangePassword->getPassword(),$_ovhStructFtpChangePassword->getOldstate(),$_ovhStructFtpChangePassword->getNewstate()));
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
	 * @return OvhStructFtpChangePasswordResponse|OvhStructFtpInfoResponse
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