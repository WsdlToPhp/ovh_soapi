<?php
/**
 * File for class OvhServiceAutomated
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceAutomated originally named Automated
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceAutomated extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named automatedMailGetVolumeHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailGetVolumeHistory::getSession()
	 * @uses OvhStructAutomatedMailGetVolumeHistory::getDomain()
	 * @param OvhStructAutomatedMailGetVolumeHistory $_ovhStructAutomatedMailGetVolumeHistory
	 * @return OvhStructAutomatedMailGetVolumeHistoryResponse
	 */
	public function automatedMailGetVolumeHistory(OvhStructAutomatedMailGetVolumeHistory $_ovhStructAutomatedMailGetVolumeHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailGetVolumeHistory($_ovhStructAutomatedMailGetVolumeHistory->getSession(),$_ovhStructAutomatedMailGetVolumeHistory->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailGetTodo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailGetTodo::getSession()
	 * @uses OvhStructAutomatedMailGetTodo::getDomain()
	 * @param OvhStructAutomatedMailGetTodo $_ovhStructAutomatedMailGetTodo
	 * @return OvhStructAutomatedMailGetTodoResponse
	 */
	public function automatedMailGetTodo(OvhStructAutomatedMailGetTodo $_ovhStructAutomatedMailGetTodo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailGetTodo($_ovhStructAutomatedMailGetTodo->getSession(),$_ovhStructAutomatedMailGetTodo->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailGetErrors
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailGetErrors::getSession()
	 * @uses OvhStructAutomatedMailGetErrors::getDomain()
	 * @uses OvhStructAutomatedMailGetErrors::getDeep()
	 * @uses OvhStructAutomatedMailGetErrors::getLimit()
	 * @param OvhStructAutomatedMailGetErrors $_ovhStructAutomatedMailGetErrors
	 * @return OvhStructAutomatedMailGetErrorsResponse
	 */
	public function automatedMailGetErrors(OvhStructAutomatedMailGetErrors $_ovhStructAutomatedMailGetErrors)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailGetErrors($_ovhStructAutomatedMailGetErrors->getSession(),$_ovhStructAutomatedMailGetErrors->getDomain(),$_ovhStructAutomatedMailGetErrors->getDeep(),$_ovhStructAutomatedMailGetErrors->getLimit()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailGetState
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailGetState::getSession()
	 * @uses OvhStructAutomatedMailGetState::getDomain()
	 * @param OvhStructAutomatedMailGetState $_ovhStructAutomatedMailGetState
	 * @return OvhStructAutomatedMailGetStateResponse
	 */
	public function automatedMailGetState(OvhStructAutomatedMailGetState $_ovhStructAutomatedMailGetState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailGetState($_ovhStructAutomatedMailGetState->getSession(),$_ovhStructAutomatedMailGetState->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailUnlock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailUnlock::getSession()
	 * @uses OvhStructAutomatedMailUnlock::getDomain()
	 * @param OvhStructAutomatedMailUnlock $_ovhStructAutomatedMailUnlock
	 * @return OvhStructAutomatedMailUnlockResponse
	 */
	public function automatedMailUnlock(OvhStructAutomatedMailUnlock $_ovhStructAutomatedMailUnlock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailUnlock($_ovhStructAutomatedMailUnlock->getSession(),$_ovhStructAutomatedMailUnlock->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailLock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailLock::getSession()
	 * @uses OvhStructAutomatedMailLock::getDomain()
	 * @param OvhStructAutomatedMailLock $_ovhStructAutomatedMailLock
	 * @return OvhStructAutomatedMailLockResponse
	 */
	public function automatedMailLock(OvhStructAutomatedMailLock $_ovhStructAutomatedMailLock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailLock($_ovhStructAutomatedMailLock->getSession(),$_ovhStructAutomatedMailLock->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailReturnSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailReturnSet::getSession()
	 * @uses OvhStructAutomatedMailReturnSet::getDomain()
	 * @uses OvhStructAutomatedMailReturnSet::getEmail()
	 * @param OvhStructAutomatedMailReturnSet $_ovhStructAutomatedMailReturnSet
	 * @return OvhStructAutomatedMailReturnSetResponse
	 */
	public function automatedMailReturnSet(OvhStructAutomatedMailReturnSet $_ovhStructAutomatedMailReturnSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailReturnSet($_ovhStructAutomatedMailReturnSet->getSession(),$_ovhStructAutomatedMailReturnSet->getDomain(),$_ovhStructAutomatedMailReturnSet->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named automatedMailFlush
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAutomatedMailFlush::getSession()
	 * @uses OvhStructAutomatedMailFlush::getDomain()
	 * @param OvhStructAutomatedMailFlush $_ovhStructAutomatedMailFlush
	 * @return OvhStructAutomatedMailFlushResponse
	 */
	public function automatedMailFlush(OvhStructAutomatedMailFlush $_ovhStructAutomatedMailFlush)
	{
		try
		{
			$this->setResult(self::getSoapClient()->automatedMailFlush($_ovhStructAutomatedMailFlush->getSession(),$_ovhStructAutomatedMailFlush->getDomain()));
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
	 * @return OvhStructAutomatedMailFlushResponse|OvhStructAutomatedMailGetErrorsResponse|OvhStructAutomatedMailGetStateResponse|OvhStructAutomatedMailGetTodoResponse|OvhStructAutomatedMailGetVolumeHistoryResponse|OvhStructAutomatedMailLockResponse|OvhStructAutomatedMailReturnSetResponse|OvhStructAutomatedMailUnlockResponse
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