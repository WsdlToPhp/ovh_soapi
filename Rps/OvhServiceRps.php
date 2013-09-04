<?php
/**
 * File for class OvhServiceRps
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceRps originally named Rps
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceRps extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named rpsMigrationGetProgressStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRpsMigrationGetProgressStatus::getSession()
	 * @uses OvhStructRpsMigrationGetProgressStatus::getHostname()
	 * @param OvhStructRpsMigrationGetProgressStatus $_ovhStructRpsMigrationGetProgressStatus
	 * @return OvhStructRpsMigrationGetProgressStatusResponse
	 */
	public function rpsMigrationGetProgressStatus(OvhStructRpsMigrationGetProgressStatus $_ovhStructRpsMigrationGetProgressStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->rpsMigrationGetProgressStatus($_ovhStructRpsMigrationGetProgressStatus->getSession(),$_ovhStructRpsMigrationGetProgressStatus->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named rpsMigrationStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRpsMigrationStatus::getSession()
	 * @uses OvhStructRpsMigrationStatus::getHostname()
	 * @param OvhStructRpsMigrationStatus $_ovhStructRpsMigrationStatus
	 * @return OvhStructRpsMigrationStatusResponse
	 */
	public function rpsMigrationStatus(OvhStructRpsMigrationStatus $_ovhStructRpsMigrationStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->rpsMigrationStatus($_ovhStructRpsMigrationStatus->getSession(),$_ovhStructRpsMigrationStatus->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named rpsMigrationTodo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRpsMigrationTodo::getSession()
	 * @uses OvhStructRpsMigrationTodo::getLogicalRpsName()
	 * @uses OvhStructRpsMigrationTodo::getPhysicalRpsTo()
	 * @param OvhStructRpsMigrationTodo $_ovhStructRpsMigrationTodo
	 * @return OvhStructRpsMigrationTodoResponse
	 */
	public function rpsMigrationTodo(OvhStructRpsMigrationTodo $_ovhStructRpsMigrationTodo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->rpsMigrationTodo($_ovhStructRpsMigrationTodo->getSession(),$_ovhStructRpsMigrationTodo->getLogicalRpsName(),$_ovhStructRpsMigrationTodo->getPhysicalRpsTo()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named rpsGetIoStats
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRpsGetIoStats::getSession()
	 * @uses OvhStructRpsGetIoStats::getDomain()
	 * @uses OvhStructRpsGetIoStats::getType()
	 * @uses OvhStructRpsGetIoStats::getDuration()
	 * @param OvhStructRpsGetIoStats $_ovhStructRpsGetIoStats
	 * @return OvhStructRpsGetIoStatsResponse
	 */
	public function rpsGetIoStats(OvhStructRpsGetIoStats $_ovhStructRpsGetIoStats)
	{
		try
		{
			$this->setResult(self::getSoapClient()->rpsGetIoStats($_ovhStructRpsGetIoStats->getSession(),$_ovhStructRpsGetIoStats->getDomain(),$_ovhStructRpsGetIoStats->getType(),$_ovhStructRpsGetIoStats->getDuration()));
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
	 * @return OvhStructRpsGetIoStatsResponse|OvhStructRpsMigrationGetProgressStatusResponse|OvhStructRpsMigrationStatusResponse|OvhStructRpsMigrationTodoResponse
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