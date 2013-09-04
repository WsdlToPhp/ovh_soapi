<?php
/**
 * File for class OvhServiceLogs
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceLogs originally named Logs
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceLogs extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named logsAccessList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructLogsAccessList::getSession()
	 * @uses OvhStructLogsAccessList::getDomain()
	 * @param OvhStructLogsAccessList $_ovhStructLogsAccessList
	 * @return OvhStructLogsAccessListResponse
	 */
	public function logsAccessList(OvhStructLogsAccessList $_ovhStructLogsAccessList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->logsAccessList($_ovhStructLogsAccessList->getSession(),$_ovhStructLogsAccessList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named logsAccessDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructLogsAccessDel::getSession()
	 * @uses OvhStructLogsAccessDel::getDomain()
	 * @uses OvhStructLogsAccessDel::getUser()
	 * @param OvhStructLogsAccessDel $_ovhStructLogsAccessDel
	 * @return OvhStructLogsAccessDelResponse
	 */
	public function logsAccessDel(OvhStructLogsAccessDel $_ovhStructLogsAccessDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->logsAccessDel($_ovhStructLogsAccessDel->getSession(),$_ovhStructLogsAccessDel->getDomain(),$_ovhStructLogsAccessDel->getUser()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named logsAccessAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructLogsAccessAdd::getSession()
	 * @uses OvhStructLogsAccessAdd::getDomain()
	 * @uses OvhStructLogsAccessAdd::getUser()
	 * @uses OvhStructLogsAccessAdd::getPassword()
	 * @param OvhStructLogsAccessAdd $_ovhStructLogsAccessAdd
	 * @return OvhStructLogsAccessAddResponse
	 */
	public function logsAccessAdd(OvhStructLogsAccessAdd $_ovhStructLogsAccessAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->logsAccessAdd($_ovhStructLogsAccessAdd->getSession(),$_ovhStructLogsAccessAdd->getDomain(),$_ovhStructLogsAccessAdd->getUser(),$_ovhStructLogsAccessAdd->getPassword()));
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
	 * @return OvhStructLogsAccessAddResponse|OvhStructLogsAccessDelResponse|OvhStructLogsAccessListResponse
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