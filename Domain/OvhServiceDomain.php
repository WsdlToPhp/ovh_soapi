<?php
/**
 * File for class OvhServiceDomain
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceDomain originally named Domain
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceDomain extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named domainHostUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainHostUpdate::getSession()
	 * @uses OvhStructDomainHostUpdate::getDomain()
	 * @uses OvhStructDomainHostUpdate::getHost()
	 * @uses OvhStructDomainHostUpdate::getIp()
	 * @param OvhStructDomainHostUpdate $_ovhStructDomainHostUpdate
	 * @return OvhStructDomainHostUpdateResponse
	 */
	public function domainHostUpdate(OvhStructDomainHostUpdate $_ovhStructDomainHostUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainHostUpdate($_ovhStructDomainHostUpdate->getSession(),$_ovhStructDomainHostUpdate->getDomain(),$_ovhStructDomainHostUpdate->getHost(),$_ovhStructDomainHostUpdate->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainUnlock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainUnlock::getSession()
	 * @uses OvhStructDomainUnlock::getDomain()
	 * @param OvhStructDomainUnlock $_ovhStructDomainUnlock
	 * @return OvhStructDomainUnlockResponse
	 */
	public function domainUnlock(OvhStructDomainUnlock $_ovhStructDomainUnlock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainUnlock($_ovhStructDomainUnlock->getSession(),$_ovhStructDomainUnlock->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorSetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorSetAll::getSession()
	 * @param OvhStructDomainWhoisObfuscatorSetAll $_ovhStructDomainWhoisObfuscatorSetAll
	 * @return OvhStructDomainWhoisObfuscatorSetAllResponse
	 */
	public function domainWhoisObfuscatorSetAll(OvhStructDomainWhoisObfuscatorSetAll $_ovhStructDomainWhoisObfuscatorSetAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorSetAll($_ovhStructDomainWhoisObfuscatorSetAll->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainList::getSession()
	 * @param OvhStructDomainList $_ovhStructDomainList
	 * @return OvhStructDomainListResponse
	 */
	public function domainList(OvhStructDomainList $_ovhStructDomainList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainList($_ovhStructDomainList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorInfo::getSession()
	 * @uses OvhStructDomainWhoisObfuscatorInfo::getDomain()
	 * @param OvhStructDomainWhoisObfuscatorInfo $_ovhStructDomainWhoisObfuscatorInfo
	 * @return OvhStructDomainWhoisObfuscatorInfoResponse
	 */
	public function domainWhoisObfuscatorInfo(OvhStructDomainWhoisObfuscatorInfo $_ovhStructDomainWhoisObfuscatorInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorInfo($_ovhStructDomainWhoisObfuscatorInfo->getSession(),$_ovhStructDomainWhoisObfuscatorInfo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainCheck
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainCheck::getSession()
	 * @uses OvhStructDomainCheck::getDomain()
	 * @param OvhStructDomainCheck $_ovhStructDomainCheck
	 * @return OvhStructDomainCheckResponse
	 */
	public function domainCheck(OvhStructDomainCheck $_ovhStructDomainCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainCheck($_ovhStructDomainCheck->getSession(),$_ovhStructDomainCheck->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorSet::getSession()
	 * @uses OvhStructDomainWhoisObfuscatorSet::getDomain()
	 * @uses OvhStructDomainWhoisObfuscatorSet::getField()
	 * @param OvhStructDomainWhoisObfuscatorSet $_ovhStructDomainWhoisObfuscatorSet
	 * @return OvhStructDomainWhoisObfuscatorSetResponse
	 */
	public function domainWhoisObfuscatorSet(OvhStructDomainWhoisObfuscatorSet $_ovhStructDomainWhoisObfuscatorSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorSet($_ovhStructDomainWhoisObfuscatorSet->getSession(),$_ovhStructDomainWhoisObfuscatorSet->getDomain(),$_ovhStructDomainWhoisObfuscatorSet->getField()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainResellerSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainResellerSet::getSession()
	 * @uses OvhStructDomainResellerSet::getDomain()
	 * @uses OvhStructDomainResellerSet::getProfile()
	 * @param OvhStructDomainResellerSet $_ovhStructDomainResellerSet
	 * @return OvhStructDomainResellerSetResponse
	 */
	public function domainResellerSet(OvhStructDomainResellerSet $_ovhStructDomainResellerSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainResellerSet($_ovhStructDomainResellerSet->getSession(),$_ovhStructDomainResellerSet->getDomain(),$_ovhStructDomainResellerSet->getProfile()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainOperationRelaunch
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainOperationRelaunch::getSession()
	 * @uses OvhStructDomainOperationRelaunch::getId()
	 * @param OvhStructDomainOperationRelaunch $_ovhStructDomainOperationRelaunch
	 * @return OvhStructDomainOperationRelaunchResponse
	 */
	public function domainOperationRelaunch(OvhStructDomainOperationRelaunch $_ovhStructDomainOperationRelaunch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainOperationRelaunch($_ovhStructDomainOperationRelaunch->getSession(),$_ovhStructDomainOperationRelaunch->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainCapabilities::getSession()
	 * @uses OvhStructDomainCapabilities::getDomain()
	 * @param OvhStructDomainCapabilities $_ovhStructDomainCapabilities
	 * @return OvhStructDomainCapabilitiesResponse
	 */
	public function domainCapabilities(OvhStructDomainCapabilities $_ovhStructDomainCapabilities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainCapabilities($_ovhStructDomainCapabilities->getSession(),$_ovhStructDomainCapabilities->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainDnsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainDnsList::getSession()
	 * @uses OvhStructDomainDnsList::getDomain()
	 * @param OvhStructDomainDnsList $_ovhStructDomainDnsList
	 * @return OvhStructDomainDnsListResponse
	 */
	public function domainDnsList(OvhStructDomainDnsList $_ovhStructDomainDnsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainDnsList($_ovhStructDomainDnsList->getSession(),$_ovhStructDomainDnsList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainOperationInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainOperationInfo::getSession()
	 * @uses OvhStructDomainOperationInfo::getId()
	 * @param OvhStructDomainOperationInfo $_ovhStructDomainOperationInfo
	 * @return OvhStructDomainOperationInfoResponse
	 */
	public function domainOperationInfo(OvhStructDomainOperationInfo $_ovhStructDomainOperationInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainOperationInfo($_ovhStructDomainOperationInfo->getSession(),$_ovhStructDomainOperationInfo->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainDnsUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainDnsUpdate::getSession()
	 * @uses OvhStructDomainDnsUpdate::getDomain()
	 * @uses OvhStructDomainDnsUpdate::getDns1()
	 * @uses OvhStructDomainDnsUpdate::getIp1()
	 * @uses OvhStructDomainDnsUpdate::getDns2()
	 * @uses OvhStructDomainDnsUpdate::getIp2()
	 * @uses OvhStructDomainDnsUpdate::getDns3()
	 * @uses OvhStructDomainDnsUpdate::getIp3()
	 * @uses OvhStructDomainDnsUpdate::getDns4()
	 * @uses OvhStructDomainDnsUpdate::getIp4()
	 * @uses OvhStructDomainDnsUpdate::getDns5()
	 * @uses OvhStructDomainDnsUpdate::getIp5()
	 * @param OvhStructDomainDnsUpdate $_ovhStructDomainDnsUpdate
	 * @return OvhStructDomainDnsUpdateResponse
	 */
	public function domainDnsUpdate(OvhStructDomainDnsUpdate $_ovhStructDomainDnsUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainDnsUpdate($_ovhStructDomainDnsUpdate->getSession(),$_ovhStructDomainDnsUpdate->getDomain(),$_ovhStructDomainDnsUpdate->getDns1(),$_ovhStructDomainDnsUpdate->getIp1(),$_ovhStructDomainDnsUpdate->getDns2(),$_ovhStructDomainDnsUpdate->getIp2(),$_ovhStructDomainDnsUpdate->getDns3(),$_ovhStructDomainDnsUpdate->getIp3(),$_ovhStructDomainDnsUpdate->getDns4(),$_ovhStructDomainDnsUpdate->getIp4(),$_ovhStructDomainDnsUpdate->getDns5(),$_ovhStructDomainDnsUpdate->getIp5()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainResellerDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainResellerDel::getSession()
	 * @uses OvhStructDomainResellerDel::getDomain()
	 * @param OvhStructDomainResellerDel $_ovhStructDomainResellerDel
	 * @return OvhStructDomainResellerDelResponse
	 */
	public function domainResellerDel(OvhStructDomainResellerDel $_ovhStructDomainResellerDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainResellerDel($_ovhStructDomainResellerDel->getSession(),$_ovhStructDomainResellerDel->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainDnsGetOvhDefault
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainDnsGetOvhDefault::getSession()
	 * @param OvhStructDomainDnsGetOvhDefault $_ovhStructDomainDnsGetOvhDefault
	 * @return OvhStructDomainDnsGetOvhDefaultResponse
	 */
	public function domainDnsGetOvhDefault(OvhStructDomainDnsGetOvhDefault $_ovhStructDomainDnsGetOvhDefault)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainDnsGetOvhDefault($_ovhStructDomainDnsGetOvhDefault->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorUnset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorUnset::getSession()
	 * @uses OvhStructDomainWhoisObfuscatorUnset::getDomain()
	 * @uses OvhStructDomainWhoisObfuscatorUnset::getField()
	 * @param OvhStructDomainWhoisObfuscatorUnset $_ovhStructDomainWhoisObfuscatorUnset
	 * @return OvhStructDomainWhoisObfuscatorUnsetResponse
	 */
	public function domainWhoisObfuscatorUnset(OvhStructDomainWhoisObfuscatorUnset $_ovhStructDomainWhoisObfuscatorUnset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorUnset($_ovhStructDomainWhoisObfuscatorUnset->getSession(),$_ovhStructDomainWhoisObfuscatorUnset->getDomain(),$_ovhStructDomainWhoisObfuscatorUnset->getField()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainHostDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainHostDel::getSession()
	 * @uses OvhStructDomainHostDel::getDomain()
	 * @uses OvhStructDomainHostDel::getHost()
	 * @param OvhStructDomainHostDel $_ovhStructDomainHostDel
	 * @return OvhStructDomainHostDelResponse
	 */
	public function domainHostDel(OvhStructDomainHostDel $_ovhStructDomainHostDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainHostDel($_ovhStructDomainHostDel->getSession(),$_ovhStructDomainHostDel->getDomain(),$_ovhStructDomainHostDel->getHost()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainInfo::getSession()
	 * @uses OvhStructDomainInfo::getDomain()
	 * @param OvhStructDomainInfo $_ovhStructDomainInfo
	 * @return OvhStructDomainInfoResponse
	 */
	public function domainInfo(OvhStructDomainInfo $_ovhStructDomainInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainInfo($_ovhStructDomainInfo->getSession(),$_ovhStructDomainInfo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainHostList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainHostList::getSession()
	 * @uses OvhStructDomainHostList::getDomain()
	 * @param OvhStructDomainHostList $_ovhStructDomainHostList
	 * @return OvhStructDomainHostListResponse
	 */
	public function domainHostList(OvhStructDomainHostList $_ovhStructDomainHostList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainHostList($_ovhStructDomainHostList->getSession(),$_ovhStructDomainHostList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainLockStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainLockStatus::getSession()
	 * @uses OvhStructDomainLockStatus::getDomain()
	 * @param OvhStructDomainLockStatus $_ovhStructDomainLockStatus
	 * @return OvhStructDomainLockStatusResponse
	 */
	public function domainLockStatus(OvhStructDomainLockStatus $_ovhStructDomainLockStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainLockStatus($_ovhStructDomainLockStatus->getSession(),$_ovhStructDomainLockStatus->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainLock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainLock::getSession()
	 * @uses OvhStructDomainLock::getDomain()
	 * @param OvhStructDomainLock $_ovhStructDomainLock
	 * @return OvhStructDomainLockResponse
	 */
	public function domainLock(OvhStructDomainLock $_ovhStructDomainLock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainLock($_ovhStructDomainLock->getSession(),$_ovhStructDomainLock->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainOperationCancel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainOperationCancel::getSession()
	 * @uses OvhStructDomainOperationCancel::getId()
	 * @param OvhStructDomainOperationCancel $_ovhStructDomainOperationCancel
	 * @return OvhStructDomainOperationCancelResponse
	 */
	public function domainOperationCancel(OvhStructDomainOperationCancel $_ovhStructDomainOperationCancel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainOperationCancel($_ovhStructDomainOperationCancel->getSession(),$_ovhStructDomainOperationCancel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainHostAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainHostAdd::getSession()
	 * @uses OvhStructDomainHostAdd::getDomain()
	 * @uses OvhStructDomainHostAdd::getHost()
	 * @uses OvhStructDomainHostAdd::getIp()
	 * @param OvhStructDomainHostAdd $_ovhStructDomainHostAdd
	 * @return OvhStructDomainHostAddResponse
	 */
	public function domainHostAdd(OvhStructDomainHostAdd $_ovhStructDomainHostAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainHostAdd($_ovhStructDomainHostAdd->getSession(),$_ovhStructDomainHostAdd->getDomain(),$_ovhStructDomainHostAdd->getHost(),$_ovhStructDomainHostAdd->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorUnsetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorUnsetAll::getSession()
	 * @param OvhStructDomainWhoisObfuscatorUnsetAll $_ovhStructDomainWhoisObfuscatorUnsetAll
	 * @return OvhStructDomainWhoisObfuscatorUnsetAllResponse
	 */
	public function domainWhoisObfuscatorUnsetAll(OvhStructDomainWhoisObfuscatorUnsetAll $_ovhStructDomainWhoisObfuscatorUnsetAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorUnsetAll($_ovhStructDomainWhoisObfuscatorUnsetAll->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainOperationList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainOperationList::getSession()
	 * @uses OvhStructDomainOperationList::getDomain()
	 * @uses OvhStructDomainOperationList::getStatus()
	 * @param OvhStructDomainOperationList $_ovhStructDomainOperationList
	 * @return OvhStructDomainOperationListResponse
	 */
	public function domainOperationList(OvhStructDomainOperationList $_ovhStructDomainOperationList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainOperationList($_ovhStructDomainOperationList->getSession(),$_ovhStructDomainOperationList->getDomain(),$_ovhStructDomainOperationList->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainWhoisObfuscatorList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainWhoisObfuscatorList::getSession()
	 * @param OvhStructDomainWhoisObfuscatorList $_ovhStructDomainWhoisObfuscatorList
	 * @return OvhStructDomainWhoisObfuscatorListResponse
	 */
	public function domainWhoisObfuscatorList(OvhStructDomainWhoisObfuscatorList $_ovhStructDomainWhoisObfuscatorList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainWhoisObfuscatorList($_ovhStructDomainWhoisObfuscatorList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named domainHostInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDomainHostInfo::getSession()
	 * @uses OvhStructDomainHostInfo::getDomain()
	 * @uses OvhStructDomainHostInfo::getHost()
	 * @param OvhStructDomainHostInfo $_ovhStructDomainHostInfo
	 * @return OvhStructDomainHostInfoResponse
	 */
	public function domainHostInfo(OvhStructDomainHostInfo $_ovhStructDomainHostInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->domainHostInfo($_ovhStructDomainHostInfo->getSession(),$_ovhStructDomainHostInfo->getDomain(),$_ovhStructDomainHostInfo->getHost()));
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
	 * @return OvhStructDomainCapabilitiesResponse|OvhStructDomainCheckResponse|OvhStructDomainDnsGetOvhDefaultResponse|OvhStructDomainDnsListResponse|OvhStructDomainDnsUpdateResponse|OvhStructDomainHostAddResponse|OvhStructDomainHostDelResponse|OvhStructDomainHostInfoResponse|OvhStructDomainHostListResponse|OvhStructDomainHostUpdateResponse|OvhStructDomainInfoResponse|OvhStructDomainListResponse|OvhStructDomainLockResponse|OvhStructDomainLockStatusResponse|OvhStructDomainOperationCancelResponse|OvhStructDomainOperationInfoResponse|OvhStructDomainOperationListResponse|OvhStructDomainOperationRelaunchResponse|OvhStructDomainResellerDelResponse|OvhStructDomainResellerSetResponse|OvhStructDomainUnlockResponse|OvhStructDomainWhoisObfuscatorInfoResponse|OvhStructDomainWhoisObfuscatorListResponse|OvhStructDomainWhoisObfuscatorSetAllResponse|OvhStructDomainWhoisObfuscatorSetResponse|OvhStructDomainWhoisObfuscatorUnsetAllResponse|OvhStructDomainWhoisObfuscatorUnsetResponse
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