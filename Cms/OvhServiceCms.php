<?php
/**
 * File for class OvhServiceCms
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceCms originally named Cms
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceCms extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named cmsInstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCmsInstall::getSession()
	 * @uses OvhStructCmsInstall::getDomain()
	 * @uses OvhStructCmsInstall::getCmsName()
	 * @uses OvhStructCmsInstall::getPath()
	 * @uses OvhStructCmsInstall::getLanguage()
	 * @param OvhStructCmsInstall $_ovhStructCmsInstall
	 * @return OvhStructCmsInstallResponse
	 */
	public function cmsInstall(OvhStructCmsInstall $_ovhStructCmsInstall)
	{
		try
		{
			$this->setResult(self::getSoapClient()->cmsInstall($_ovhStructCmsInstall->getSession(),$_ovhStructCmsInstall->getDomain(),$_ovhStructCmsInstall->getCmsName(),$_ovhStructCmsInstall->getPath(),$_ovhStructCmsInstall->getLanguage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named cmsAvailableList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCmsAvailableList::getSession()
	 * @uses OvhStructCmsAvailableList::getDomain()
	 * @param OvhStructCmsAvailableList $_ovhStructCmsAvailableList
	 * @return OvhStructCmsAvailableListResponse
	 */
	public function cmsAvailableList(OvhStructCmsAvailableList $_ovhStructCmsAvailableList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->cmsAvailableList($_ovhStructCmsAvailableList->getSession(),$_ovhStructCmsAvailableList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named cmsRemove
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCmsRemove::getSession()
	 * @uses OvhStructCmsRemove::getId()
	 * @param OvhStructCmsRemove $_ovhStructCmsRemove
	 * @return OvhStructCmsRemoveResponse
	 */
	public function cmsRemove(OvhStructCmsRemove $_ovhStructCmsRemove)
	{
		try
		{
			$this->setResult(self::getSoapClient()->cmsRemove($_ovhStructCmsRemove->getSession(),$_ovhStructCmsRemove->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named cmsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCmsList::getSession()
	 * @uses OvhStructCmsList::getDomain()
	 * @param OvhStructCmsList $_ovhStructCmsList
	 * @return OvhStructCmsListResponse
	 */
	public function cmsList(OvhStructCmsList $_ovhStructCmsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->cmsList($_ovhStructCmsList->getSession(),$_ovhStructCmsList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named cmsRenewAdminPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCmsRenewAdminPassword::getSession()
	 * @uses OvhStructCmsRenewAdminPassword::getId()
	 * @param OvhStructCmsRenewAdminPassword $_ovhStructCmsRenewAdminPassword
	 * @return OvhStructCmsRenewAdminPasswordResponse
	 */
	public function cmsRenewAdminPassword(OvhStructCmsRenewAdminPassword $_ovhStructCmsRenewAdminPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->cmsRenewAdminPassword($_ovhStructCmsRenewAdminPassword->getSession(),$_ovhStructCmsRenewAdminPassword->getId()));
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
	 * @return OvhStructCmsAvailableListResponse|OvhStructCmsInstallResponse|OvhStructCmsListResponse|OvhStructCmsRemoveResponse|OvhStructCmsRenewAdminPasswordResponse
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