<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

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
     * @param \Oihso\CSESDK\StructType\SaveDocuments $parameters
     * @return \Oihso\CSESDK\StructType\SaveDocumentsResponse|bool
     */
    public function SaveDocuments(\Oihso\CSESDK\StructType\SaveDocuments $parameters)
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
     * @param \Oihso\CSESDK\StructType\SaveDocumentsCello $parameters
     * @return \Oihso\CSESDK\StructType\SaveDocumentsCelloResponse|bool
     */
    public function SaveDocumentsCello(\Oihso\CSESDK\StructType\SaveDocumentsCello $parameters)
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
     * @param \Oihso\CSESDK\StructType\SaveAckansCello $parameters
     * @return \Oihso\CSESDK\StructType\SaveAckansCelloResponse|bool
     */
    public function SaveAckansCello(\Oihso\CSESDK\StructType\SaveAckansCello $parameters)
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
     * @param \Oihso\CSESDK\StructType\SaveGenresCello $parameters
     * @return \Oihso\CSESDK\StructType\SaveGenresCelloResponse|bool
     */
    public function SaveGenresCello(\Oihso\CSESDK\StructType\SaveGenresCello $parameters)
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
     * @param \Oihso\CSESDK\StructType\SaveWaybillOffice $parameters
     * @return \Oihso\CSESDK\StructType\SaveWaybillOfficeResponse|bool
     */
    public function SaveWaybillOffice(\Oihso\CSESDK\StructType\SaveWaybillOffice $parameters)
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
     * @param \Oihso\CSESDK\StructType\SaveOwnerOfTheGoods $parameters
     * @return \Oihso\CSESDK\StructType\SaveOwnerOfTheGoodsResponse|bool
     */
    public function SaveOwnerOfTheGoods(\Oihso\CSESDK\StructType\SaveOwnerOfTheGoods $parameters)
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
     * @return \Oihso\CSESDK\StructType\SaveAckansCelloResponse|\Oihso\CSESDK\StructType\SaveDocumentsCelloResponse|\Oihso\CSESDK\StructType\SaveDocumentsResponse|\Oihso\CSESDK\StructType\SaveGenresCelloResponse|\Oihso\CSESDK\StructType\SaveOwnerOfTheGoodsResponse|\Oihso\CSESDK\StructType\SaveWaybillOfficeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
