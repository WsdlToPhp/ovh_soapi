<?php
/**
 * File for class OvhServiceZone
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceZone originally named Zone
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceZone extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named zoneEntryList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneEntryList::getSession()
	 * @uses OvhStructZoneEntryList::getDomain()
	 * @param OvhStructZoneEntryList $_ovhStructZoneEntryList
	 * @return OvhStructZoneEntryListResponse
	 */
	public function zoneEntryList(OvhStructZoneEntryList $_ovhStructZoneEntryList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneEntryList($_ovhStructZoneEntryList->getSession(),$_ovhStructZoneEntryList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneEntryAddCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneEntryAddCustom::getSession()
	 * @uses OvhStructZoneEntryAddCustom::getDomain()
	 * @uses OvhStructZoneEntryAddCustom::getFieldtype()
	 * @uses OvhStructZoneEntryAddCustom::getHostingtype()
	 * @uses OvhStructZoneEntryAddCustom::getHosting()
	 * @uses OvhStructZoneEntryAddCustom::getSubdomain()
	 * @uses OvhStructZoneEntryAddCustom::getPriority()
	 * @uses OvhStructZoneEntryAddCustom::getTarget()
	 * @uses OvhStructZoneEntryAddCustom::getCountry()
	 * @param OvhStructZoneEntryAddCustom $_ovhStructZoneEntryAddCustom
	 * @return OvhStructZoneEntryAddCustomResponse
	 */
	public function zoneEntryAddCustom(OvhStructZoneEntryAddCustom $_ovhStructZoneEntryAddCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneEntryAddCustom($_ovhStructZoneEntryAddCustom->getSession(),$_ovhStructZoneEntryAddCustom->getDomain(),$_ovhStructZoneEntryAddCustom->getFieldtype(),$_ovhStructZoneEntryAddCustom->getHostingtype(),$_ovhStructZoneEntryAddCustom->getHosting(),$_ovhStructZoneEntryAddCustom->getSubdomain(),$_ovhStructZoneEntryAddCustom->getPriority(),$_ovhStructZoneEntryAddCustom->getTarget(),$_ovhStructZoneEntryAddCustom->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneEntryModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneEntryModify::getSession()
	 * @uses OvhStructZoneEntryModify::getDomain()
	 * @uses OvhStructZoneEntryModify::getSubdomain()
	 * @uses OvhStructZoneEntryModify::getFieldtype()
	 * @uses OvhStructZoneEntryModify::getTarget()
	 * @uses OvhStructZoneEntryModify::getNewTarget()
	 * @param OvhStructZoneEntryModify $_ovhStructZoneEntryModify
	 * @return OvhStructZoneEntryModifyResponse
	 */
	public function zoneEntryModify(OvhStructZoneEntryModify $_ovhStructZoneEntryModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneEntryModify($_ovhStructZoneEntryModify->getSession(),$_ovhStructZoneEntryModify->getDomain(),$_ovhStructZoneEntryModify->getSubdomain(),$_ovhStructZoneEntryModify->getFieldtype(),$_ovhStructZoneEntryModify->getTarget(),$_ovhStructZoneEntryModify->getNewTarget()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneEntryDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneEntryDel::getSession()
	 * @uses OvhStructZoneEntryDel::getDomain()
	 * @uses OvhStructZoneEntryDel::getSubdomain()
	 * @uses OvhStructZoneEntryDel::getFieldtype()
	 * @uses OvhStructZoneEntryDel::getTarget()
	 * @param OvhStructZoneEntryDel $_ovhStructZoneEntryDel
	 * @return OvhStructZoneEntryDelResponse
	 */
	public function zoneEntryDel(OvhStructZoneEntryDel $_ovhStructZoneEntryDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneEntryDel($_ovhStructZoneEntryDel->getSession(),$_ovhStructZoneEntryDel->getDomain(),$_ovhStructZoneEntryDel->getSubdomain(),$_ovhStructZoneEntryDel->getFieldtype(),$_ovhStructZoneEntryDel->getTarget()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneEntryAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneEntryAdd::getSession()
	 * @uses OvhStructZoneEntryAdd::getDomain()
	 * @uses OvhStructZoneEntryAdd::getSubdomain()
	 * @uses OvhStructZoneEntryAdd::getFieldtype()
	 * @uses OvhStructZoneEntryAdd::getTarget()
	 * @uses OvhStructZoneEntryAdd::getOverwrite()
	 * @param OvhStructZoneEntryAdd $_ovhStructZoneEntryAdd
	 * @return OvhStructZoneEntryAddResponse
	 */
	public function zoneEntryAdd(OvhStructZoneEntryAdd $_ovhStructZoneEntryAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneEntryAdd($_ovhStructZoneEntryAdd->getSession(),$_ovhStructZoneEntryAdd->getDomain(),$_ovhStructZoneEntryAdd->getSubdomain(),$_ovhStructZoneEntryAdd->getFieldtype(),$_ovhStructZoneEntryAdd->getTarget(),$_ovhStructZoneEntryAdd->getOverwrite()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneExport
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneExport::getSession()
	 * @uses OvhStructZoneExport::getDomain()
	 * @param OvhStructZoneExport $_ovhStructZoneExport
	 * @return OvhStructZoneExportResponse
	 */
	public function zoneExport(OvhStructZoneExport $_ovhStructZoneExport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneExport($_ovhStructZoneExport->getSession(),$_ovhStructZoneExport->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named zoneImport
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructZoneImport::getSession()
	 * @uses OvhStructZoneImport::getDomain()
	 * @uses OvhStructZoneImport::getZone()
	 * @param OvhStructZoneImport $_ovhStructZoneImport
	 * @return OvhStructZoneImportResponse
	 */
	public function zoneImport(OvhStructZoneImport $_ovhStructZoneImport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->zoneImport($_ovhStructZoneImport->getSession(),$_ovhStructZoneImport->getDomain(),$_ovhStructZoneImport->getZone()));
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
	 * @return OvhStructZoneEntryAddCustomResponse|OvhStructZoneEntryAddResponse|OvhStructZoneEntryDelResponse|OvhStructZoneEntryListResponse|OvhStructZoneEntryModifyResponse|OvhStructZoneExportResponse|OvhStructZoneImportResponse
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