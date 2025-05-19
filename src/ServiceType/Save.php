<?php

declare(strict_types=1);

namespace CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SaveDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveDocuments $parameters
     * @return \StructType\SaveDocumentsResponse|bool
     */
    public function SaveDocuments(\StructType\SaveDocuments $parameters)
    {
        try {
            $this->setResult($resultSaveDocuments = $this->getSoapClient()->__soapCall('SaveDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveDocumentsCello
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveDocumentsCello $parameters
     * @return \StructType\SaveDocumentsCelloResponse|bool
     */
    public function SaveDocumentsCello(\StructType\SaveDocumentsCello $parameters)
    {
        try {
            $this->setResult($resultSaveDocumentsCello = $this->getSoapClient()->__soapCall('SaveDocumentsCello', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDocumentsCello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAckansCello
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveAckansCello $parameters
     * @return \StructType\SaveAckansCelloResponse|bool
     */
    public function SaveAckansCello(\StructType\SaveAckansCello $parameters)
    {
        try {
            $this->setResult($resultSaveAckansCello = $this->getSoapClient()->__soapCall('SaveAckansCello', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAckansCello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveGenresCello
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveGenresCello $parameters
     * @return \StructType\SaveGenresCelloResponse|bool
     */
    public function SaveGenresCello(\StructType\SaveGenresCello $parameters)
    {
        try {
            $this->setResult($resultSaveGenresCello = $this->getSoapClient()->__soapCall('SaveGenresCello', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGenresCello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveWaybillOffice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveWaybillOffice $parameters
     * @return \StructType\SaveWaybillOfficeResponse|bool
     */
    public function SaveWaybillOffice(\StructType\SaveWaybillOffice $parameters)
    {
        try {
            $this->setResult($resultSaveWaybillOffice = $this->getSoapClient()->__soapCall('SaveWaybillOffice', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWaybillOffice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveOwnerOfTheGoods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SaveOwnerOfTheGoods $parameters
     * @return \StructType\SaveOwnerOfTheGoodsResponse|bool
     */
    public function SaveOwnerOfTheGoods(\StructType\SaveOwnerOfTheGoods $parameters)
    {
        try {
            $this->setResult($resultSaveOwnerOfTheGoods = $this->getSoapClient()->__soapCall('SaveOwnerOfTheGoods', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOwnerOfTheGoods;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SaveAckansCelloResponse|\StructType\SaveDocumentsCelloResponse|\StructType\SaveDocumentsResponse|\StructType\SaveGenresCelloResponse|\StructType\SaveOwnerOfTheGoodsResponse|\StructType\SaveWaybillOfficeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
