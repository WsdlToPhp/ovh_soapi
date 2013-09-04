<?php
/**
 * File for class OvhServiceDatabase
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceDatabase originally named Database
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceDatabase extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named databaseChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseChangePassword::getSession()
	 * @uses OvhStructDatabaseChangePassword::getDomain()
	 * @uses OvhStructDatabaseChangePassword::getDb()
	 * @uses OvhStructDatabaseChangePassword::getPassword()
	 * @param OvhStructDatabaseChangePassword $_ovhStructDatabaseChangePassword
	 * @return OvhStructDatabaseChangePasswordResponse
	 */
	public function databaseChangePassword(OvhStructDatabaseChangePassword $_ovhStructDatabaseChangePassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseChangePassword($_ovhStructDatabaseChangePassword->getSession(),$_ovhStructDatabaseChangePassword->getDomain(),$_ovhStructDatabaseChangePassword->getDb(),$_ovhStructDatabaseChangePassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named databaseDump
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseDump::getSession()
	 * @uses OvhStructDatabaseDump::getDomain()
	 * @uses OvhStructDatabaseDump::getDb()
	 * @uses OvhStructDatabaseDump::getBackup()
	 * @param OvhStructDatabaseDump $_ovhStructDatabaseDump
	 * @return OvhStructDatabaseDumpResponse
	 */
	public function databaseDump(OvhStructDatabaseDump $_ovhStructDatabaseDump)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseDump($_ovhStructDatabaseDump->getSession(),$_ovhStructDatabaseDump->getDomain(),$_ovhStructDatabaseDump->getDb(),$_ovhStructDatabaseDump->getBackup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named databaseCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseCreate::getSession()
	 * @uses OvhStructDatabaseCreate::getDomain()
	 * @uses OvhStructDatabaseCreate::getDb()
	 * @uses OvhStructDatabaseCreate::getPassword()
	 * @uses OvhStructDatabaseCreate::getDbType()
	 * @param OvhStructDatabaseCreate $_ovhStructDatabaseCreate
	 * @return OvhStructDatabaseCreateResponse
	 */
	public function databaseCreate(OvhStructDatabaseCreate $_ovhStructDatabaseCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseCreate($_ovhStructDatabaseCreate->getSession(),$_ovhStructDatabaseCreate->getDomain(),$_ovhStructDatabaseCreate->getDb(),$_ovhStructDatabaseCreate->getPassword(),$_ovhStructDatabaseCreate->getDbType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named databaseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseList::getSession()
	 * @uses OvhStructDatabaseList::getDomain()
	 * @param OvhStructDatabaseList $_ovhStructDatabaseList
	 * @return OvhStructDatabaseListResponse
	 */
	public function databaseList(OvhStructDatabaseList $_ovhStructDatabaseList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseList($_ovhStructDatabaseList->getSession(),$_ovhStructDatabaseList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named databaseDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseDelete::getSession()
	 * @uses OvhStructDatabaseDelete::getDomain()
	 * @uses OvhStructDatabaseDelete::getDb()
	 * @param OvhStructDatabaseDelete $_ovhStructDatabaseDelete
	 * @return OvhStructDatabaseDeleteResponse
	 */
	public function databaseDelete(OvhStructDatabaseDelete $_ovhStructDatabaseDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseDelete($_ovhStructDatabaseDelete->getSession(),$_ovhStructDatabaseDelete->getDomain(),$_ovhStructDatabaseDelete->getDb()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named databaseRecreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDatabaseRecreate::getSession()
	 * @uses OvhStructDatabaseRecreate::getDomain()
	 * @uses OvhStructDatabaseRecreate::getDb()
	 * @param OvhStructDatabaseRecreate $_ovhStructDatabaseRecreate
	 * @return OvhStructDatabaseRecreateResponse
	 */
	public function databaseRecreate(OvhStructDatabaseRecreate $_ovhStructDatabaseRecreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->databaseRecreate($_ovhStructDatabaseRecreate->getSession(),$_ovhStructDatabaseRecreate->getDomain(),$_ovhStructDatabaseRecreate->getDb()));
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
	 * @return OvhStructDatabaseChangePasswordResponse|OvhStructDatabaseCreateResponse|OvhStructDatabaseDeleteResponse|OvhStructDatabaseDumpResponse|OvhStructDatabaseListResponse|OvhStructDatabaseRecreateResponse
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