<?php
/**
 * File for class OvhServiceNotepad
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceNotepad originally named Notepad
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceNotepad extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named notepadSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNotepadSet::getSession()
	 * @uses OvhStructNotepadSet::getContent()
	 * @param OvhStructNotepadSet $_ovhStructNotepadSet
	 * @return OvhStructNotepadSetResponse
	 */
	public function notepadSet(OvhStructNotepadSet $_ovhStructNotepadSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->notepadSet($_ovhStructNotepadSet->getSession(),$_ovhStructNotepadSet->getContent()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named notepadGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNotepadGet::getSession()
	 * @param OvhStructNotepadGet $_ovhStructNotepadGet
	 * @return OvhStructNotepadGetResponse
	 */
	public function notepadGet(OvhStructNotepadGet $_ovhStructNotepadGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->notepadGet($_ovhStructNotepadGet->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named notepadAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNotepadAdd::getSession()
	 * @uses OvhStructNotepadAdd::getContent()
	 * @uses OvhStructNotepadAdd::getOffset()
	 * @param OvhStructNotepadAdd $_ovhStructNotepadAdd
	 * @return OvhStructNotepadAddResponse
	 */
	public function notepadAdd(OvhStructNotepadAdd $_ovhStructNotepadAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->notepadAdd($_ovhStructNotepadAdd->getSession(),$_ovhStructNotepadAdd->getContent(),$_ovhStructNotepadAdd->getOffset()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named notepadFlush
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructNotepadFlush::getSession()
	 * @param OvhStructNotepadFlush $_ovhStructNotepadFlush
	 * @return OvhStructNotepadFlushResponse
	 */
	public function notepadFlush(OvhStructNotepadFlush $_ovhStructNotepadFlush)
	{
		try
		{
			$this->setResult(self::getSoapClient()->notepadFlush($_ovhStructNotepadFlush->getSession()));
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
	 * @return OvhStructNotepadAddResponse|OvhStructNotepadFlushResponse|OvhStructNotepadGetResponse|OvhStructNotepadSetResponse
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