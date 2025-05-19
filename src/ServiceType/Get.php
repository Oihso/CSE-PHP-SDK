<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDocuments $parameters
     * @return \StructType\GetDocumentsResponse|bool
     */
    public function GetDocuments(\StructType\GetDocuments $parameters)
    {
        try {
            $this->setResult($resultGetDocuments = $this->getSoapClient()->__soapCall('GetDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFormsForDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFormsForDocuments $parameters
     * @return \StructType\GetFormsForDocumentsResponse|bool
     */
    public function GetFormsForDocuments(\StructType\GetFormsForDocuments $parameters)
    {
        try {
            $this->setResult($resultGetFormsForDocuments = $this->getSoapClient()->__soapCall('GetFormsForDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFormsForDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListOfDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetListOfDocuments $parameters
     * @return \StructType\GetListOfDocumentsResponse|bool
     */
    public function GetListOfDocuments(\StructType\GetListOfDocuments $parameters)
    {
        try {
            $this->setResult($resultGetListOfDocuments = $this->getSoapClient()->__soapCall('GetListOfDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetListOfDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReferenceData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetReferenceData $parameters
     * @return \StructType\GetReferenceDataResponse|bool
     */
    public function GetReferenceData(\StructType\GetReferenceData $parameters)
    {
        try {
            $this->setResult($resultGetReferenceData = $this->getSoapClient()->__soapCall('GetReferenceData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReferenceData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserInfo $parameters
     * @return \StructType\GetUserInfoResponse|bool
     */
    public function GetUserInfo(\StructType\GetUserInfo $parameters)
    {
        try {
            $this->setResult($resultGetUserInfo = $this->getSoapClient()->__soapCall('GetUserInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetDocumentsResponse|\StructType\GetFormsForDocumentsResponse|\StructType\GetListOfDocumentsResponse|\StructType\GetReferenceDataResponse|\StructType\GetUserInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
