<?php
/**
 * File for class OvhServiceAnonymous
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceAnonymous originally named Anonymous
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceAnonymous extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named anonymousFtpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAnonymousFtpInfo::getSession()
	 * @uses OvhStructAnonymousFtpInfo::getDomain()
	 * @param OvhStructAnonymousFtpInfo $_ovhStructAnonymousFtpInfo
	 * @return OvhStructAnonymousFtpInfoResponse
	 */
	public function anonymousFtpInfo(OvhStructAnonymousFtpInfo $_ovhStructAnonymousFtpInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->anonymousFtpInfo($_ovhStructAnonymousFtpInfo->getSession(),$_ovhStructAnonymousFtpInfo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named anonymousFtpActivate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAnonymousFtpActivate::getSession()
	 * @uses OvhStructAnonymousFtpActivate::getDomain()
	 * @param OvhStructAnonymousFtpActivate $_ovhStructAnonymousFtpActivate
	 * @return OvhStructAnonymousFtpActivateResponse
	 */
	public function anonymousFtpActivate(OvhStructAnonymousFtpActivate $_ovhStructAnonymousFtpActivate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->anonymousFtpActivate($_ovhStructAnonymousFtpActivate->getSession(),$_ovhStructAnonymousFtpActivate->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named anonymousFtpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAnonymousFtpChangePassword::getSession()
	 * @uses OvhStructAnonymousFtpChangePassword::getDomain()
	 * @uses OvhStructAnonymousFtpChangePassword::getPassword()
	 * @param OvhStructAnonymousFtpChangePassword $_ovhStructAnonymousFtpChangePassword
	 * @return OvhStructAnonymousFtpChangePasswordResponse
	 */
	public function anonymousFtpChangePassword(OvhStructAnonymousFtpChangePassword $_ovhStructAnonymousFtpChangePassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->anonymousFtpChangePassword($_ovhStructAnonymousFtpChangePassword->getSession(),$_ovhStructAnonymousFtpChangePassword->getDomain(),$_ovhStructAnonymousFtpChangePassword->getPassword()));
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
	 * @return OvhStructAnonymousFtpActivateResponse|OvhStructAnonymousFtpChangePasswordResponse|OvhStructAnonymousFtpInfoResponse
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