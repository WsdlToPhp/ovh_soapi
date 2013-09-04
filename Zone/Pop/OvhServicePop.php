<?php
/**
 * File for class OvhServicePop
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServicePop originally named Pop
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServicePop extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named popDetachMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopDetachMasterNic::getSession()
	 * @uses OvhStructPopDetachMasterNic::getDomain()
	 * @uses OvhStructPopDetachMasterNic::getPop()
	 * @param OvhStructPopDetachMasterNic $_ovhStructPopDetachMasterNic
	 * @return OvhStructPopDetachMasterNicResponse
	 */
	public function popDetachMasterNic(OvhStructPopDetachMasterNic $_ovhStructPopDetachMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popDetachMasterNic($_ovhStructPopDetachMasterNic->getSession(),$_ovhStructPopDetachMasterNic->getDomain(),$_ovhStructPopDetachMasterNic->getPop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopList::getSession()
	 * @uses OvhStructPopList::getDomain()
	 * @param OvhStructPopList $_ovhStructPopList
	 * @return OvhStructPopListResponse
	 */
	public function popList(OvhStructPopList $_ovhStructPopList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popList($_ovhStructPopList->getSession(),$_ovhStructPopList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popUpgradeQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopUpgradeQuota::getSession()
	 * @uses OvhStructPopUpgradeQuota::getDomain()
	 * @uses OvhStructPopUpgradeQuota::getPop()
	 * @uses OvhStructPopUpgradeQuota::getSize()
	 * @param OvhStructPopUpgradeQuota $_ovhStructPopUpgradeQuota
	 * @return OvhStructPopUpgradeQuotaResponse
	 */
	public function popUpgradeQuota(OvhStructPopUpgradeQuota $_ovhStructPopUpgradeQuota)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popUpgradeQuota($_ovhStructPopUpgradeQuota->getSession(),$_ovhStructPopUpgradeQuota->getDomain(),$_ovhStructPopUpgradeQuota->getPop(),$_ovhStructPopUpgradeQuota->getSize()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopDel::getSession()
	 * @uses OvhStructPopDel::getDomain()
	 * @uses OvhStructPopDel::getPop()
	 * @param OvhStructPopDel $_ovhStructPopDel
	 * @return OvhStructPopDelResponse
	 */
	public function popDel(OvhStructPopDel $_ovhStructPopDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popDel($_ovhStructPopDel->getSession(),$_ovhStructPopDel->getDomain(),$_ovhStructPopDel->getPop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popListByMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopListByMasterNic::getSession()
	 * @param OvhStructPopListByMasterNic $_ovhStructPopListByMasterNic
	 * @return OvhStructPopListByMasterNicResponse
	 */
	public function popListByMasterNic(OvhStructPopListByMasterNic $_ovhStructPopListByMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popListByMasterNic($_ovhStructPopListByMasterNic->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popModifyDescription
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopModifyDescription::getSession()
	 * @uses OvhStructPopModifyDescription::getDomain()
	 * @uses OvhStructPopModifyDescription::getPop()
	 * @uses OvhStructPopModifyDescription::getDescription()
	 * @param OvhStructPopModifyDescription $_ovhStructPopModifyDescription
	 * @return OvhStructPopModifyDescriptionResponse
	 */
	public function popModifyDescription(OvhStructPopModifyDescription $_ovhStructPopModifyDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popModifyDescription($_ovhStructPopModifyDescription->getSession(),$_ovhStructPopModifyDescription->getDomain(),$_ovhStructPopModifyDescription->getPop(),$_ovhStructPopModifyDescription->getDescription()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopInfo::getSession()
	 * @uses OvhStructPopInfo::getDomain()
	 * @uses OvhStructPopInfo::getPop()
	 * @param OvhStructPopInfo $_ovhStructPopInfo
	 * @return OvhStructPopInfoResponse
	 */
	public function popInfo(OvhStructPopInfo $_ovhStructPopInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popInfo($_ovhStructPopInfo->getSession(),$_ovhStructPopInfo->getDomain(),$_ovhStructPopInfo->getPop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopModifyPassword::getSession()
	 * @uses OvhStructPopModifyPassword::getDomain()
	 * @uses OvhStructPopModifyPassword::getPop()
	 * @uses OvhStructPopModifyPassword::getPassword()
	 * @uses OvhStructPopModifyPassword::getDoNotSendMail()
	 * @param OvhStructPopModifyPassword $_ovhStructPopModifyPassword
	 * @return OvhStructPopModifyPasswordResponse
	 */
	public function popModifyPassword(OvhStructPopModifyPassword $_ovhStructPopModifyPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popModifyPassword($_ovhStructPopModifyPassword->getSession(),$_ovhStructPopModifyPassword->getDomain(),$_ovhStructPopModifyPassword->getPop(),$_ovhStructPopModifyPassword->getPassword(),$_ovhStructPopModifyPassword->getDoNotSendMail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popAttachMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopAttachMasterNic::getSession()
	 * @uses OvhStructPopAttachMasterNic::getDomain()
	 * @uses OvhStructPopAttachMasterNic::getPop()
	 * @uses OvhStructPopAttachMasterNic::getNic()
	 * @param OvhStructPopAttachMasterNic $_ovhStructPopAttachMasterNic
	 * @return OvhStructPopAttachMasterNicResponse
	 */
	public function popAttachMasterNic(OvhStructPopAttachMasterNic $_ovhStructPopAttachMasterNic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popAttachMasterNic($_ovhStructPopAttachMasterNic->getSession(),$_ovhStructPopAttachMasterNic->getDomain(),$_ovhStructPopAttachMasterNic->getPop(),$_ovhStructPopAttachMasterNic->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopAdd::getSession()
	 * @uses OvhStructPopAdd::getDomain()
	 * @uses OvhStructPopAdd::getPop()
	 * @uses OvhStructPopAdd::getPassword()
	 * @uses OvhStructPopAdd::getDescription()
	 * @uses OvhStructPopAdd::getNic()
	 * @uses OvhStructPopAdd::getQuota()
	 * @param OvhStructPopAdd $_ovhStructPopAdd
	 * @return OvhStructPopAddResponse
	 */
	public function popAdd(OvhStructPopAdd $_ovhStructPopAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popAdd($_ovhStructPopAdd->getSession(),$_ovhStructPopAdd->getDomain(),$_ovhStructPopAdd->getPop(),$_ovhStructPopAdd->getPassword(),$_ovhStructPopAdd->getDescription(),$_ovhStructPopAdd->getNic(),$_ovhStructPopAdd->getQuota()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named popGetQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPopGetQuota::getSession()
	 * @uses OvhStructPopGetQuota::getDomain()
	 * @uses OvhStructPopGetQuota::getPop()
	 * @param OvhStructPopGetQuota $_ovhStructPopGetQuota
	 * @return OvhStructPopGetQuotaResponse
	 */
	public function popGetQuota(OvhStructPopGetQuota $_ovhStructPopGetQuota)
	{
		try
		{
			$this->setResult(self::getSoapClient()->popGetQuota($_ovhStructPopGetQuota->getSession(),$_ovhStructPopGetQuota->getDomain(),$_ovhStructPopGetQuota->getPop()));
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
	 * @return OvhStructPopAddResponse|OvhStructPopAttachMasterNicResponse|OvhStructPopDelResponse|OvhStructPopDetachMasterNicResponse|OvhStructPopGetQuotaResponse|OvhStructPopInfoResponse|OvhStructPopListByMasterNicResponse|OvhStructPopListResponse|OvhStructPopModifyDescriptionResponse|OvhStructPopModifyPasswordResponse|OvhStructPopUpgradeQuotaResponse
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