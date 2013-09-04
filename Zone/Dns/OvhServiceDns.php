<?php
/**
 * File for class OvhServiceDns
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceDns originally named Dns
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceDns extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named dnsDefaultInstallCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsDefaultInstallCustom::getSession()
	 * @uses OvhStructDnsDefaultInstallCustom::getDomain()
	 * @uses OvhStructDnsDefaultInstallCustom::getSubdomain()
	 * @uses OvhStructDnsDefaultInstallCustom::getHostingtype()
	 * @uses OvhStructDnsDefaultInstallCustom::getHosting()
	 * @uses OvhStructDnsDefaultInstallCustom::getMxtype()
	 * @uses OvhStructDnsDefaultInstallCustom::getMx()
	 * @uses OvhStructDnsDefaultInstallCustom::getCountry()
	 * @uses OvhStructDnsDefaultInstallCustom::getMinimized()
	 * @param OvhStructDnsDefaultInstallCustom $_ovhStructDnsDefaultInstallCustom
	 * @return OvhStructDnsDefaultInstallCustomResponse
	 */
	public function dnsDefaultInstallCustom(OvhStructDnsDefaultInstallCustom $_ovhStructDnsDefaultInstallCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsDefaultInstallCustom($_ovhStructDnsDefaultInstallCustom->getSession(),$_ovhStructDnsDefaultInstallCustom->getDomain(),$_ovhStructDnsDefaultInstallCustom->getSubdomain(),$_ovhStructDnsDefaultInstallCustom->getHostingtype(),$_ovhStructDnsDefaultInstallCustom->getHosting(),$_ovhStructDnsDefaultInstallCustom->getMxtype(),$_ovhStructDnsDefaultInstallCustom->getMx(),$_ovhStructDnsDefaultInstallCustom->getCountry(),$_ovhStructDnsDefaultInstallCustom->getMinimized()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsInstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsInstall::getSession()
	 * @uses OvhStructDnsInstall::getDomain()
	 * @uses OvhStructDnsInstall::getHosting()
	 * @uses OvhStructDnsInstall::getMinimized()
	 * @param OvhStructDnsInstall $_ovhStructDnsInstall
	 * @return OvhStructDnsInstallResponse
	 */
	public function dnsInstall(OvhStructDnsInstall $_ovhStructDnsInstall)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsInstall($_ovhStructDnsInstall->getSession(),$_ovhStructDnsInstall->getDomain(),$_ovhStructDnsInstall->getHosting(),$_ovhStructDnsInstall->getMinimized()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsReset::getSession()
	 * @uses OvhStructDnsReset::getDomain()
	 * @uses OvhStructDnsReset::getHosting()
	 * @uses OvhStructDnsReset::getMinimized()
	 * @param OvhStructDnsReset $_ovhStructDnsReset
	 * @return OvhStructDnsResetResponse
	 */
	public function dnsReset(OvhStructDnsReset $_ovhStructDnsReset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsReset($_ovhStructDnsReset->getSession(),$_ovhStructDnsReset->getDomain(),$_ovhStructDnsReset->getHosting(),$_ovhStructDnsReset->getMinimized()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsSoaModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsSoaModify::getSession()
	 * @uses OvhStructDnsSoaModify::getDomain()
	 * @uses OvhStructDnsSoaModify::getTtl()
	 * @param OvhStructDnsSoaModify $_ovhStructDnsSoaModify
	 * @return OvhStructDnsSoaModifyResponse
	 */
	public function dnsSoaModify(OvhStructDnsSoaModify $_ovhStructDnsSoaModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsSoaModify($_ovhStructDnsSoaModify->getSession(),$_ovhStructDnsSoaModify->getDomain(),$_ovhStructDnsSoaModify->getTtl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsInstallCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsInstallCustom::getSession()
	 * @uses OvhStructDnsInstallCustom::getDomain()
	 * @uses OvhStructDnsInstallCustom::getSubdomain()
	 * @uses OvhStructDnsInstallCustom::getHostingtype()
	 * @uses OvhStructDnsInstallCustom::getHosting()
	 * @uses OvhStructDnsInstallCustom::getMxtype()
	 * @uses OvhStructDnsInstallCustom::getMx()
	 * @uses OvhStructDnsInstallCustom::getCountry()
	 * @uses OvhStructDnsInstallCustom::getMinimized()
	 * @param OvhStructDnsInstallCustom $_ovhStructDnsInstallCustom
	 * @return OvhStructDnsInstallCustomResponse
	 */
	public function dnsInstallCustom(OvhStructDnsInstallCustom $_ovhStructDnsInstallCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsInstallCustom($_ovhStructDnsInstallCustom->getSession(),$_ovhStructDnsInstallCustom->getDomain(),$_ovhStructDnsInstallCustom->getSubdomain(),$_ovhStructDnsInstallCustom->getHostingtype(),$_ovhStructDnsInstallCustom->getHosting(),$_ovhStructDnsInstallCustom->getMxtype(),$_ovhStructDnsInstallCustom->getMx(),$_ovhStructDnsInstallCustom->getCountry(),$_ovhStructDnsInstallCustom->getMinimized()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsUninstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsUninstall::getSession()
	 * @uses OvhStructDnsUninstall::getDomain()
	 * @param OvhStructDnsUninstall $_ovhStructDnsUninstall
	 * @return OvhStructDnsUninstallResponse
	 */
	public function dnsUninstall(OvhStructDnsUninstall $_ovhStructDnsUninstall)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsUninstall($_ovhStructDnsUninstall->getSession(),$_ovhStructDnsUninstall->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dnsGeolocalizeHosting
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDnsGeolocalizeHosting::getSession()
	 * @uses OvhStructDnsGeolocalizeHosting::getDomain()
	 * @uses OvhStructDnsGeolocalizeHosting::getHosting()
	 * @uses OvhStructDnsGeolocalizeHosting::getCountry()
	 * @param OvhStructDnsGeolocalizeHosting $_ovhStructDnsGeolocalizeHosting
	 * @return OvhStructDnsGeolocalizeHostingResponse
	 */
	public function dnsGeolocalizeHosting(OvhStructDnsGeolocalizeHosting $_ovhStructDnsGeolocalizeHosting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dnsGeolocalizeHosting($_ovhStructDnsGeolocalizeHosting->getSession(),$_ovhStructDnsGeolocalizeHosting->getDomain(),$_ovhStructDnsGeolocalizeHosting->getHosting(),$_ovhStructDnsGeolocalizeHosting->getCountry()));
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
	 * @return OvhStructDnsDefaultInstallCustomResponse|OvhStructDnsGeolocalizeHostingResponse|OvhStructDnsInstallCustomResponse|OvhStructDnsInstallResponse|OvhStructDnsResetResponse|OvhStructDnsSoaModifyResponse|OvhStructDnsUninstallResponse
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