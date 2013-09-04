<?php
/**
 * File for class OvhServiceSqlprive
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceSqlprive originally named Sqlprive
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceSqlprive extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named sqlpriveMysqlRestart
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlRestart::getSession()
	 * @uses OvhStructSqlpriveMysqlRestart::getServer()
	 * @param OvhStructSqlpriveMysqlRestart $_ovhStructSqlpriveMysqlRestart
	 * @return OvhStructSqlpriveMysqlRestartResponse
	 */
	public function sqlpriveMysqlRestart(OvhStructSqlpriveMysqlRestart $_ovhStructSqlpriveMysqlRestart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlRestart($_ovhStructSqlpriveMysqlRestart->getSession(),$_ovhStructSqlpriveMysqlRestart->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlVersion
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlVersion::getSession()
	 * @uses OvhStructSqlpriveMysqlVersion::getServer()
	 * @uses OvhStructSqlpriveMysqlVersion::getVersion()
	 * @param OvhStructSqlpriveMysqlVersion $_ovhStructSqlpriveMysqlVersion
	 * @return OvhStructSqlpriveMysqlVersionResponse
	 */
	public function sqlpriveMysqlVersion(OvhStructSqlpriveMysqlVersion $_ovhStructSqlpriveMysqlVersion)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlVersion($_ovhStructSqlpriveMysqlVersion->getSession(),$_ovhStructSqlpriveMysqlVersion->getServer(),$_ovhStructSqlpriveMysqlVersion->getVersion()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlDatabaseImportFromFile
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromFile::getSession()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromFile::getServer()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromFile::getDatabase()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromFile::getFilename()
	 * @param OvhStructSqlpriveMysqlDatabaseImportFromFile $_ovhStructSqlpriveMysqlDatabaseImportFromFile
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromFileResponse
	 */
	public function sqlpriveMysqlDatabaseImportFromFile(OvhStructSqlpriveMysqlDatabaseImportFromFile $_ovhStructSqlpriveMysqlDatabaseImportFromFile)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromFile($_ovhStructSqlpriveMysqlDatabaseImportFromFile->getSession(),$_ovhStructSqlpriveMysqlDatabaseImportFromFile->getServer(),$_ovhStructSqlpriveMysqlDatabaseImportFromFile->getDatabase(),$_ovhStructSqlpriveMysqlDatabaseImportFromFile->getFilename()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlUserList::getSession()
	 * @uses OvhStructSqlpriveMysqlUserList::getServer()
	 * @param OvhStructSqlpriveMysqlUserList $_ovhStructSqlpriveMysqlUserList
	 * @return OvhStructSqlpriveMysqlUserListResponse
	 */
	public function sqlpriveMysqlUserList(OvhStructSqlpriveMysqlUserList $_ovhStructSqlpriveMysqlUserList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlUserList($_ovhStructSqlpriveMysqlUserList->getSession(),$_ovhStructSqlpriveMysqlUserList->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlRamUsed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlRamUsed::getSession()
	 * @uses OvhStructSqlpriveMysqlRamUsed::getServer()
	 * @param OvhStructSqlpriveMysqlRamUsed $_ovhStructSqlpriveMysqlRamUsed
	 * @return OvhStructSqlpriveMysqlRamUsedResponse
	 */
	public function sqlpriveMysqlRamUsed(OvhStructSqlpriveMysqlRamUsed $_ovhStructSqlpriveMysqlRamUsed)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlRamUsed($_ovhStructSqlpriveMysqlRamUsed->getSession(),$_ovhStructSqlpriveMysqlRamUsed->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveAlertInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveAlertInfo::getSession()
	 * @uses OvhStructSqlpriveAlertInfo::getServer()
	 * @param OvhStructSqlpriveAlertInfo $_ovhStructSqlpriveAlertInfo
	 * @return OvhStructSqlpriveAlertInfoResponse
	 */
	public function sqlpriveAlertInfo(OvhStructSqlpriveAlertInfo $_ovhStructSqlpriveAlertInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveAlertInfo($_ovhStructSqlpriveAlertInfo->getSession(),$_ovhStructSqlpriveAlertInfo->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveList::getSession()
	 * @param OvhStructSqlpriveList $_ovhStructSqlpriveList
	 * @return OvhStructSqlpriveListResponse
	 */
	public function sqlpriveList(OvhStructSqlpriveList $_ovhStructSqlpriveList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveList($_ovhStructSqlpriveList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlLogs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlLogs::getSession()
	 * @uses OvhStructSqlpriveMysqlLogs::getServer()
	 * @param OvhStructSqlpriveMysqlLogs $_ovhStructSqlpriveMysqlLogs
	 * @return OvhStructSqlpriveMysqlLogsResponse
	 */
	public function sqlpriveMysqlLogs(OvhStructSqlpriveMysqlLogs $_ovhStructSqlpriveMysqlLogs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlLogs($_ovhStructSqlpriveMysqlLogs->getSession(),$_ovhStructSqlpriveMysqlLogs->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveCronSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveCronSet::getSession()
	 * @uses OvhStructSqlpriveCronSet::getServer()
	 * @uses OvhStructSqlpriveCronSet::getOperation()
	 * @uses OvhStructSqlpriveCronSet::getRecursivityDays()
	 * @uses OvhStructSqlpriveCronSet::getRecursivityHours()
	 * @uses OvhStructSqlpriveCronSet::getEndDate()
	 * @uses OvhStructSqlpriveCronSet::getComment()
	 * @param OvhStructSqlpriveCronSet $_ovhStructSqlpriveCronSet
	 * @return OvhStructSqlpriveCronSetResponse
	 */
	public function sqlpriveCronSet(OvhStructSqlpriveCronSet $_ovhStructSqlpriveCronSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveCronSet($_ovhStructSqlpriveCronSet->getSession(),$_ovhStructSqlpriveCronSet->getServer(),$_ovhStructSqlpriveCronSet->getOperation(),$_ovhStructSqlpriveCronSet->getRecursivityDays(),$_ovhStructSqlpriveCronSet->getRecursivityHours(),$_ovhStructSqlpriveCronSet->getEndDate(),$_ovhStructSqlpriveCronSet->getComment()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlDatabasePrivilegeList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlDatabasePrivilegeList::getSession()
	 * @uses OvhStructSqlpriveMysqlDatabasePrivilegeList::getServer()
	 * @param OvhStructSqlpriveMysqlDatabasePrivilegeList $_ovhStructSqlpriveMysqlDatabasePrivilegeList
	 * @return OvhStructSqlpriveMysqlDatabasePrivilegeListResponse
	 */
	public function sqlpriveMysqlDatabasePrivilegeList(OvhStructSqlpriveMysqlDatabasePrivilegeList $_ovhStructSqlpriveMysqlDatabasePrivilegeList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlDatabasePrivilegeList($_ovhStructSqlpriveMysqlDatabasePrivilegeList->getSession(),$_ovhStructSqlpriveMysqlDatabasePrivilegeList->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveCronDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveCronDel::getSession()
	 * @uses OvhStructSqlpriveCronDel::getServer()
	 * @uses OvhStructSqlpriveCronDel::getCronId()
	 * @param OvhStructSqlpriveCronDel $_ovhStructSqlpriveCronDel
	 * @return OvhStructSqlpriveCronDelResponse
	 */
	public function sqlpriveCronDel(OvhStructSqlpriveCronDel $_ovhStructSqlpriveCronDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveCronDel($_ovhStructSqlpriveCronDel->getSession(),$_ovhStructSqlpriveCronDel->getServer(),$_ovhStructSqlpriveCronDel->getCronId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlDatabaseImportFromHost
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getSession()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getServer()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getDatabase()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getForeignHost()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getForeignUser()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getForeignPassword()
	 * @uses OvhStructSqlpriveMysqlDatabaseImportFromHost::getForeignDatabase()
	 * @param OvhStructSqlpriveMysqlDatabaseImportFromHost $_ovhStructSqlpriveMysqlDatabaseImportFromHost
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromHostResponse
	 */
	public function sqlpriveMysqlDatabaseImportFromHost(OvhStructSqlpriveMysqlDatabaseImportFromHost $_ovhStructSqlpriveMysqlDatabaseImportFromHost)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromHost($_ovhStructSqlpriveMysqlDatabaseImportFromHost->getSession(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getServer(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getDatabase(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getForeignHost(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getForeignUser(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getForeignPassword(),$_ovhStructSqlpriveMysqlDatabaseImportFromHost->getForeignDatabase()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveAlertSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveAlertSet::getSession()
	 * @uses OvhStructSqlpriveAlertSet::getServer()
	 * @uses OvhStructSqlpriveAlertSet::getEmail()
	 * @uses OvhStructSqlpriveAlertSet::getSmsAccount()
	 * @uses OvhStructSqlpriveAlertSet::getSmsNumber()
	 * @uses OvhStructSqlpriveAlertSet::getAlert()
	 * @param OvhStructSqlpriveAlertSet $_ovhStructSqlpriveAlertSet
	 * @return OvhStructSqlpriveAlertSetResponse
	 */
	public function sqlpriveAlertSet(OvhStructSqlpriveAlertSet $_ovhStructSqlpriveAlertSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveAlertSet($_ovhStructSqlpriveAlertSet->getSession(),$_ovhStructSqlpriveAlertSet->getServer(),$_ovhStructSqlpriveAlertSet->getEmail(),$_ovhStructSqlpriveAlertSet->getSmsAccount(),$_ovhStructSqlpriveAlertSet->getSmsNumber(),$_ovhStructSqlpriveAlertSet->getAlert()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlOvhMyAdmin
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getSession()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getServer()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getFunction()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getDatabase()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getUsername()
	 * @uses OvhStructSqlpriveMysqlOvhMyAdmin::getPassword()
	 * @param OvhStructSqlpriveMysqlOvhMyAdmin $_ovhStructSqlpriveMysqlOvhMyAdmin
	 * @return OvhStructSqlpriveMysqlOvhMyAdminResponse
	 */
	public function sqlpriveMysqlOvhMyAdmin(OvhStructSqlpriveMysqlOvhMyAdmin $_ovhStructSqlpriveMysqlOvhMyAdmin)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlOvhMyAdmin($_ovhStructSqlpriveMysqlOvhMyAdmin->getSession(),$_ovhStructSqlpriveMysqlOvhMyAdmin->getServer(),$_ovhStructSqlpriveMysqlOvhMyAdmin->getFunction(),$_ovhStructSqlpriveMysqlOvhMyAdmin->getDatabase(),$_ovhStructSqlpriveMysqlOvhMyAdmin->getUsername(),$_ovhStructSqlpriveMysqlOvhMyAdmin->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlDatabaseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlDatabaseList::getSession()
	 * @uses OvhStructSqlpriveMysqlDatabaseList::getServer()
	 * @param OvhStructSqlpriveMysqlDatabaseList $_ovhStructSqlpriveMysqlDatabaseList
	 * @return OvhStructSqlpriveMysqlDatabaseListResponse
	 */
	public function sqlpriveMysqlDatabaseList(OvhStructSqlpriveMysqlDatabaseList $_ovhStructSqlpriveMysqlDatabaseList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseList($_ovhStructSqlpriveMysqlDatabaseList->getSession(),$_ovhStructSqlpriveMysqlDatabaseList->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlProcessList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlProcessList::getSession()
	 * @uses OvhStructSqlpriveMysqlProcessList::getServer()
	 * @param OvhStructSqlpriveMysqlProcessList $_ovhStructSqlpriveMysqlProcessList
	 * @return OvhStructSqlpriveMysqlProcessListResponse
	 */
	public function sqlpriveMysqlProcessList(OvhStructSqlpriveMysqlProcessList $_ovhStructSqlpriveMysqlProcessList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlProcessList($_ovhStructSqlpriveMysqlProcessList->getSession(),$_ovhStructSqlpriveMysqlProcessList->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlActivateOvhManagement
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlActivateOvhManagement::getSession()
	 * @uses OvhStructSqlpriveMysqlActivateOvhManagement::getServer()
	 * @param OvhStructSqlpriveMysqlActivateOvhManagement $_ovhStructSqlpriveMysqlActivateOvhManagement
	 * @return OvhStructSqlpriveMysqlActivateOvhManagementResponse
	 */
	public function sqlpriveMysqlActivateOvhManagement(OvhStructSqlpriveMysqlActivateOvhManagement $_ovhStructSqlpriveMysqlActivateOvhManagement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlActivateOvhManagement($_ovhStructSqlpriveMysqlActivateOvhManagement->getSession(),$_ovhStructSqlpriveMysqlActivateOvhManagement->getServer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlGetPossibleDump
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlGetPossibleDump::getSession()
	 * @uses OvhStructSqlpriveMysqlGetPossibleDump::getServer()
	 * @uses OvhStructSqlpriveMysqlGetPossibleDump::getDirectory()
	 * @param OvhStructSqlpriveMysqlGetPossibleDump $_ovhStructSqlpriveMysqlGetPossibleDump
	 * @return OvhStructSqlpriveMysqlGetPossibleDumpResponse
	 */
	public function sqlpriveMysqlGetPossibleDump(OvhStructSqlpriveMysqlGetPossibleDump $_ovhStructSqlpriveMysqlGetPossibleDump)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlGetPossibleDump($_ovhStructSqlpriveMysqlGetPossibleDump->getSession(),$_ovhStructSqlpriveMysqlGetPossibleDump->getServer(),$_ovhStructSqlpriveMysqlGetPossibleDump->getDirectory()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveFtpPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveFtpPassword::getSession()
	 * @uses OvhStructSqlpriveFtpPassword::getServer()
	 * @uses OvhStructSqlpriveFtpPassword::getPassword()
	 * @param OvhStructSqlpriveFtpPassword $_ovhStructSqlpriveFtpPassword
	 * @return OvhStructSqlpriveFtpPasswordResponse
	 */
	public function sqlpriveFtpPassword(OvhStructSqlpriveFtpPassword $_ovhStructSqlpriveFtpPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveFtpPassword($_ovhStructSqlpriveFtpPassword->getSession(),$_ovhStructSqlpriveFtpPassword->getServer(),$_ovhStructSqlpriveFtpPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlRootPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlRootPassword::getSession()
	 * @uses OvhStructSqlpriveMysqlRootPassword::getServer()
	 * @uses OvhStructSqlpriveMysqlRootPassword::getPassword()
	 * @param OvhStructSqlpriveMysqlRootPassword $_ovhStructSqlpriveMysqlRootPassword
	 * @return OvhStructSqlpriveMysqlRootPasswordResponse
	 */
	public function sqlpriveMysqlRootPassword(OvhStructSqlpriveMysqlRootPassword $_ovhStructSqlpriveMysqlRootPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlRootPassword($_ovhStructSqlpriveMysqlRootPassword->getSession(),$_ovhStructSqlpriveMysqlRootPassword->getServer(),$_ovhStructSqlpriveMysqlRootPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlProcessKill
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlProcessKill::getSession()
	 * @uses OvhStructSqlpriveMysqlProcessKill::getServer()
	 * @uses OvhStructSqlpriveMysqlProcessKill::getProcess()
	 * @param OvhStructSqlpriveMysqlProcessKill $_ovhStructSqlpriveMysqlProcessKill
	 * @return OvhStructSqlpriveMysqlProcessKillResponse
	 */
	public function sqlpriveMysqlProcessKill(OvhStructSqlpriveMysqlProcessKill $_ovhStructSqlpriveMysqlProcessKill)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlProcessKill($_ovhStructSqlpriveMysqlProcessKill->getSession(),$_ovhStructSqlpriveMysqlProcessKill->getServer(),$_ovhStructSqlpriveMysqlProcessKill->getProcess()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveMysqlDatabaseSave
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveMysqlDatabaseSave::getSession()
	 * @uses OvhStructSqlpriveMysqlDatabaseSave::getServer()
	 * @uses OvhStructSqlpriveMysqlDatabaseSave::getDatabase()
	 * @uses OvhStructSqlpriveMysqlDatabaseSave::getComment()
	 * @uses OvhStructSqlpriveMysqlDatabaseSave::getCompress()
	 * @param OvhStructSqlpriveMysqlDatabaseSave $_ovhStructSqlpriveMysqlDatabaseSave
	 * @return OvhStructSqlpriveMysqlDatabaseSaveResponse
	 */
	public function sqlpriveMysqlDatabaseSave(OvhStructSqlpriveMysqlDatabaseSave $_ovhStructSqlpriveMysqlDatabaseSave)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseSave($_ovhStructSqlpriveMysqlDatabaseSave->getSession(),$_ovhStructSqlpriveMysqlDatabaseSave->getServer(),$_ovhStructSqlpriveMysqlDatabaseSave->getDatabase(),$_ovhStructSqlpriveMysqlDatabaseSave->getComment(),$_ovhStructSqlpriveMysqlDatabaseSave->getCompress()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named sqlpriveCronGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSqlpriveCronGet::getSession()
	 * @uses OvhStructSqlpriveCronGet::getServer()
	 * @param OvhStructSqlpriveCronGet $_ovhStructSqlpriveCronGet
	 * @return OvhStructSqlpriveCronGetResponse
	 */
	public function sqlpriveCronGet(OvhStructSqlpriveCronGet $_ovhStructSqlpriveCronGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->sqlpriveCronGet($_ovhStructSqlpriveCronGet->getSession(),$_ovhStructSqlpriveCronGet->getServer()));
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
	 * @return OvhStructSqlpriveAlertInfoResponse|OvhStructSqlpriveAlertSetResponse|OvhStructSqlpriveCronDelResponse|OvhStructSqlpriveCronGetResponse|OvhStructSqlpriveCronSetResponse|OvhStructSqlpriveFtpPasswordResponse|OvhStructSqlpriveListResponse|OvhStructSqlpriveMysqlActivateOvhManagementResponse|OvhStructSqlpriveMysqlDatabaseImportFromFileResponse|OvhStructSqlpriveMysqlDatabaseImportFromHostResponse|OvhStructSqlpriveMysqlDatabaseListResponse|OvhStructSqlpriveMysqlDatabasePrivilegeListResponse|OvhStructSqlpriveMysqlDatabaseSaveResponse|OvhStructSqlpriveMysqlGetPossibleDumpResponse|OvhStructSqlpriveMysqlLogsResponse|OvhStructSqlpriveMysqlOvhMyAdminResponse|OvhStructSqlpriveMysqlProcessKillResponse|OvhStructSqlpriveMysqlProcessListResponse|OvhStructSqlpriveMysqlRamUsedResponse|OvhStructSqlpriveMysqlRestartResponse|OvhStructSqlpriveMysqlRootPasswordResponse|OvhStructSqlpriveMysqlUserListResponse|OvhStructSqlpriveMysqlVersionResponse
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