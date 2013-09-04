<?php
/**
 * File for class OvhServiceManaged
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceManaged originally named Managed
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceManaged extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named managedServicesPartitionQuotaUsed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionQuotaUsed::getSession()
	 * @uses OvhStructManagedServicesPartitionQuotaUsed::getStorage()
	 * @uses OvhStructManagedServicesPartitionQuotaUsed::getPartitionName()
	 * @param OvhStructManagedServicesPartitionQuotaUsed $_ovhStructManagedServicesPartitionQuotaUsed
	 * @return OvhStructManagedServicesPartitionQuotaUsedResponse
	 */
	public function managedServicesPartitionQuotaUsed(OvhStructManagedServicesPartitionQuotaUsed $_ovhStructManagedServicesPartitionQuotaUsed)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionQuotaUsed($_ovhStructManagedServicesPartitionQuotaUsed->getSession(),$_ovhStructManagedServicesPartitionQuotaUsed->getStorage(),$_ovhStructManagedServicesPartitionQuotaUsed->getPartitionName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesIpAccessChange
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesIpAccessChange::getSession()
	 * @uses OvhStructManagedServicesIpAccessChange::getStorage()
	 * @uses OvhStructManagedServicesIpAccessChange::getValue()
	 * @uses OvhStructManagedServicesIpAccessChange::getServer()
	 * @uses OvhStructManagedServicesIpAccessChange::getIdZfs()
	 * @param OvhStructManagedServicesIpAccessChange $_ovhStructManagedServicesIpAccessChange
	 * @return OvhStructManagedServicesIpAccessChangeResponse
	 */
	public function managedServicesIpAccessChange(OvhStructManagedServicesIpAccessChange $_ovhStructManagedServicesIpAccessChange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesIpAccessChange($_ovhStructManagedServicesIpAccessChange->getSession(),$_ovhStructManagedServicesIpAccessChange->getStorage(),$_ovhStructManagedServicesIpAccessChange->getValue(),$_ovhStructManagedServicesIpAccessChange->getServer(),$_ovhStructManagedServicesIpAccessChange->getIdZfs()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesSnapshotUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesSnapshotUpdate::getSession()
	 * @uses OvhStructManagedServicesSnapshotUpdate::getDomain()
	 * @uses OvhStructManagedServicesSnapshotUpdate::getSnapShotList()
	 * @param OvhStructManagedServicesSnapshotUpdate $_ovhStructManagedServicesSnapshotUpdate
	 * @return OvhStructManagedServicesSnapshotUpdateResponse
	 */
	public function managedServicesSnapshotUpdate(OvhStructManagedServicesSnapshotUpdate $_ovhStructManagedServicesSnapshotUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesSnapshotUpdate($_ovhStructManagedServicesSnapshotUpdate->getSession(),$_ovhStructManagedServicesSnapshotUpdate->getDomain(),$_ovhStructManagedServicesSnapshotUpdate->getSnapShotList()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesHostMasterIpGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesHostMasterIpGet::getSession()
	 * @uses OvhStructManagedServicesHostMasterIpGet::getDomain()
	 * @param OvhStructManagedServicesHostMasterIpGet $_ovhStructManagedServicesHostMasterIpGet
	 * @return OvhStructManagedServicesHostMasterIpGetResponse
	 */
	public function managedServicesHostMasterIpGet(OvhStructManagedServicesHostMasterIpGet $_ovhStructManagedServicesHostMasterIpGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesHostMasterIpGet($_ovhStructManagedServicesHostMasterIpGet->getSession(),$_ovhStructManagedServicesHostMasterIpGet->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesPartitionDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionDelete::getSession()
	 * @uses OvhStructManagedServicesPartitionDelete::getStorage()
	 * @uses OvhStructManagedServicesPartitionDelete::getName()
	 * @param OvhStructManagedServicesPartitionDelete $_ovhStructManagedServicesPartitionDelete
	 * @return OvhStructManagedServicesPartitionDeleteResponse
	 */
	public function managedServicesPartitionDelete(OvhStructManagedServicesPartitionDelete $_ovhStructManagedServicesPartitionDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionDelete($_ovhStructManagedServicesPartitionDelete->getSession(),$_ovhStructManagedServicesPartitionDelete->getStorage(),$_ovhStructManagedServicesPartitionDelete->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesPartitionStatusCheck
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionStatusCheck::getSession()
	 * @uses OvhStructManagedServicesPartitionStatusCheck::getStorage()
	 * @uses OvhStructManagedServicesPartitionStatusCheck::getPartitionName()
	 * @param OvhStructManagedServicesPartitionStatusCheck $_ovhStructManagedServicesPartitionStatusCheck
	 * @return OvhStructManagedServicesPartitionStatusCheckResponse
	 */
	public function managedServicesPartitionStatusCheck(OvhStructManagedServicesPartitionStatusCheck $_ovhStructManagedServicesPartitionStatusCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionStatusCheck($_ovhStructManagedServicesPartitionStatusCheck->getSession(),$_ovhStructManagedServicesPartitionStatusCheck->getStorage(),$_ovhStructManagedServicesPartitionStatusCheck->getPartitionName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesPartitionCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionCreate::getSession()
	 * @uses OvhStructManagedServicesPartitionCreate::getStorage()
	 * @uses OvhStructManagedServicesPartitionCreate::getName()
	 * @uses OvhStructManagedServicesPartitionCreate::getSize()
	 * @uses OvhStructManagedServicesPartitionCreate::getProtocol()
	 * @param OvhStructManagedServicesPartitionCreate $_ovhStructManagedServicesPartitionCreate
	 * @return OvhStructManagedServicesPartitionCreateResponse
	 */
	public function managedServicesPartitionCreate(OvhStructManagedServicesPartitionCreate $_ovhStructManagedServicesPartitionCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionCreate($_ovhStructManagedServicesPartitionCreate->getSession(),$_ovhStructManagedServicesPartitionCreate->getStorage(),$_ovhStructManagedServicesPartitionCreate->getName(),$_ovhStructManagedServicesPartitionCreate->getSize(),$_ovhStructManagedServicesPartitionCreate->getProtocol()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesPartitionGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionGet::getSession()
	 * @uses OvhStructManagedServicesPartitionGet::getDomain()
	 * @param OvhStructManagedServicesPartitionGet $_ovhStructManagedServicesPartitionGet
	 * @return OvhStructManagedServicesPartitionGetResponse
	 */
	public function managedServicesPartitionGet(OvhStructManagedServicesPartitionGet $_ovhStructManagedServicesPartitionGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionGet($_ovhStructManagedServicesPartitionGet->getSession(),$_ovhStructManagedServicesPartitionGet->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesPartitionUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesPartitionUpdate::getSession()
	 * @uses OvhStructManagedServicesPartitionUpdate::getStorage()
	 * @uses OvhStructManagedServicesPartitionUpdate::getName()
	 * @uses OvhStructManagedServicesPartitionUpdate::getSize()
	 * @param OvhStructManagedServicesPartitionUpdate $_ovhStructManagedServicesPartitionUpdate
	 * @return OvhStructManagedServicesPartitionUpdateResponse
	 */
	public function managedServicesPartitionUpdate(OvhStructManagedServicesPartitionUpdate $_ovhStructManagedServicesPartitionUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesPartitionUpdate($_ovhStructManagedServicesPartitionUpdate->getSession(),$_ovhStructManagedServicesPartitionUpdate->getStorage(),$_ovhStructManagedServicesPartitionUpdate->getName(),$_ovhStructManagedServicesPartitionUpdate->getSize()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named managedServicesNameUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructManagedServicesNameUpdate::getSession()
	 * @uses OvhStructManagedServicesNameUpdate::getStorage()
	 * @uses OvhStructManagedServicesNameUpdate::getCustomName()
	 * @param OvhStructManagedServicesNameUpdate $_ovhStructManagedServicesNameUpdate
	 * @return OvhStructManagedServicesNameUpdateResponse
	 */
	public function managedServicesNameUpdate(OvhStructManagedServicesNameUpdate $_ovhStructManagedServicesNameUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->managedServicesNameUpdate($_ovhStructManagedServicesNameUpdate->getSession(),$_ovhStructManagedServicesNameUpdate->getStorage(),$_ovhStructManagedServicesNameUpdate->getCustomName()));
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
	 * @return OvhStructManagedServicesHostMasterIpGetResponse|OvhStructManagedServicesIpAccessChangeResponse|OvhStructManagedServicesNameUpdateResponse|OvhStructManagedServicesPartitionCreateResponse|OvhStructManagedServicesPartitionDeleteResponse|OvhStructManagedServicesPartitionGetResponse|OvhStructManagedServicesPartitionQuotaUsedResponse|OvhStructManagedServicesPartitionStatusCheckResponse|OvhStructManagedServicesPartitionUpdateResponse|OvhStructManagedServicesSnapshotUpdateResponse
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