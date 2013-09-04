<?php
/**
 * File for class OvhServiceMulti
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceMulti originally named Multi
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceMulti extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named multiFtpChangeDirectory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiFtpChangeDirectory::getSession()
	 * @uses OvhStructMultiFtpChangeDirectory::getDomain()
	 * @uses OvhStructMultiFtpChangeDirectory::getLogin()
	 * @uses OvhStructMultiFtpChangeDirectory::getDirectory()
	 * @param OvhStructMultiFtpChangeDirectory $_ovhStructMultiFtpChangeDirectory
	 * @return OvhStructMultiFtpChangeDirectoryResponse
	 */
	public function multiFtpChangeDirectory(OvhStructMultiFtpChangeDirectory $_ovhStructMultiFtpChangeDirectory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiFtpChangeDirectory($_ovhStructMultiFtpChangeDirectory->getSession(),$_ovhStructMultiFtpChangeDirectory->getDomain(),$_ovhStructMultiFtpChangeDirectory->getLogin(),$_ovhStructMultiFtpChangeDirectory->getDirectory()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiFtpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiFtpChangePassword::getSession()
	 * @uses OvhStructMultiFtpChangePassword::getDomain()
	 * @uses OvhStructMultiFtpChangePassword::getLogin()
	 * @uses OvhStructMultiFtpChangePassword::getPassword()
	 * @param OvhStructMultiFtpChangePassword $_ovhStructMultiFtpChangePassword
	 * @return OvhStructMultiFtpChangePasswordResponse
	 */
	public function multiFtpChangePassword(OvhStructMultiFtpChangePassword $_ovhStructMultiFtpChangePassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiFtpChangePassword($_ovhStructMultiFtpChangePassword->getSession(),$_ovhStructMultiFtpChangePassword->getDomain(),$_ovhStructMultiFtpChangePassword->getLogin(),$_ovhStructMultiFtpChangePassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiFtpList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiFtpList::getSession()
	 * @uses OvhStructMultiFtpList::getDomain()
	 * @param OvhStructMultiFtpList $_ovhStructMultiFtpList
	 * @return OvhStructMultiFtpListResponse
	 */
	public function multiFtpList(OvhStructMultiFtpList $_ovhStructMultiFtpList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiFtpList($_ovhStructMultiFtpList->getSession(),$_ovhStructMultiFtpList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiFtpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiFtpAdd::getSession()
	 * @uses OvhStructMultiFtpAdd::getDomain()
	 * @uses OvhStructMultiFtpAdd::getSubdir()
	 * @uses OvhStructMultiFtpAdd::getLoginsuffix()
	 * @uses OvhStructMultiFtpAdd::getPassword()
	 * @param OvhStructMultiFtpAdd $_ovhStructMultiFtpAdd
	 * @return OvhStructMultiFtpAddResponse
	 */
	public function multiFtpAdd(OvhStructMultiFtpAdd $_ovhStructMultiFtpAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiFtpAdd($_ovhStructMultiFtpAdd->getSession(),$_ovhStructMultiFtpAdd->getDomain(),$_ovhStructMultiFtpAdd->getSubdir(),$_ovhStructMultiFtpAdd->getLoginsuffix(),$_ovhStructMultiFtpAdd->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiDomainList::getSession()
	 * @uses OvhStructMultiDomainList::getDomain()
	 * @param OvhStructMultiDomainList $_ovhStructMultiDomainList
	 * @return OvhStructMultiDomainListResponse
	 */
	public function multiDomainList(OvhStructMultiDomainList $_ovhStructMultiDomainList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiDomainList($_ovhStructMultiDomainList->getSession(),$_ovhStructMultiDomainList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiFtpDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiFtpDel::getSession()
	 * @uses OvhStructMultiFtpDel::getDomain()
	 * @uses OvhStructMultiFtpDel::getLogin()
	 * @param OvhStructMultiFtpDel $_ovhStructMultiFtpDel
	 * @return OvhStructMultiFtpDelResponse
	 */
	public function multiFtpDel(OvhStructMultiFtpDel $_ovhStructMultiFtpDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiFtpDel($_ovhStructMultiFtpDel->getSession(),$_ovhStructMultiFtpDel->getDomain(),$_ovhStructMultiFtpDel->getLogin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiDomainAdd::getSession()
	 * @uses OvhStructMultiDomainAdd::getDomain()
	 * @uses OvhStructMultiDomainAdd::getMultidomain()
	 * @uses OvhStructMultiDomainAdd::getTarget()
	 * @uses OvhStructMultiDomainAdd::getCountry()
	 * @uses OvhStructMultiDomainAdd::getOwnLog()
	 * @param OvhStructMultiDomainAdd $_ovhStructMultiDomainAdd
	 * @return OvhStructMultiDomainAddResponse
	 */
	public function multiDomainAdd(OvhStructMultiDomainAdd $_ovhStructMultiDomainAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiDomainAdd($_ovhStructMultiDomainAdd->getSession(),$_ovhStructMultiDomainAdd->getDomain(),$_ovhStructMultiDomainAdd->getMultidomain(),$_ovhStructMultiDomainAdd->getTarget(),$_ovhStructMultiDomainAdd->getCountry(),$_ovhStructMultiDomainAdd->getOwnLog()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiDomainModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiDomainModify::getSession()
	 * @uses OvhStructMultiDomainModify::getDomain()
	 * @uses OvhStructMultiDomainModify::getMultidomain()
	 * @uses OvhStructMultiDomainModify::getTarget()
	 * @uses OvhStructMultiDomainModify::getCountry()
	 * @uses OvhStructMultiDomainModify::getOwnLog()
	 * @param OvhStructMultiDomainModify $_ovhStructMultiDomainModify
	 * @return OvhStructMultiDomainModifyResponse
	 */
	public function multiDomainModify(OvhStructMultiDomainModify $_ovhStructMultiDomainModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiDomainModify($_ovhStructMultiDomainModify->getSession(),$_ovhStructMultiDomainModify->getDomain(),$_ovhStructMultiDomainModify->getMultidomain(),$_ovhStructMultiDomainModify->getTarget(),$_ovhStructMultiDomainModify->getCountry(),$_ovhStructMultiDomainModify->getOwnLog()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiDomainInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiDomainInfo::getSession()
	 * @uses OvhStructMultiDomainInfo::getDomain()
	 * @uses OvhStructMultiDomainInfo::getMultidomain()
	 * @param OvhStructMultiDomainInfo $_ovhStructMultiDomainInfo
	 * @return OvhStructMultiDomainInfoResponse
	 */
	public function multiDomainInfo(OvhStructMultiDomainInfo $_ovhStructMultiDomainInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiDomainInfo($_ovhStructMultiDomainInfo->getSession(),$_ovhStructMultiDomainInfo->getDomain(),$_ovhStructMultiDomainInfo->getMultidomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named multiDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMultiDomainDel::getSession()
	 * @uses OvhStructMultiDomainDel::getDomain()
	 * @uses OvhStructMultiDomainDel::getMultidomain()
	 * @param OvhStructMultiDomainDel $_ovhStructMultiDomainDel
	 * @return OvhStructMultiDomainDelResponse
	 */
	public function multiDomainDel(OvhStructMultiDomainDel $_ovhStructMultiDomainDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->multiDomainDel($_ovhStructMultiDomainDel->getSession(),$_ovhStructMultiDomainDel->getDomain(),$_ovhStructMultiDomainDel->getMultidomain()));
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
	 * @return OvhStructMultiDomainAddResponse|OvhStructMultiDomainDelResponse|OvhStructMultiDomainInfoResponse|OvhStructMultiDomainListResponse|OvhStructMultiDomainModifyResponse|OvhStructMultiFtpAddResponse|OvhStructMultiFtpChangeDirectoryResponse|OvhStructMultiFtpChangePasswordResponse|OvhStructMultiFtpDelResponse|OvhStructMultiFtpListResponse
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