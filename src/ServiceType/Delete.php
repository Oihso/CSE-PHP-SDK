<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteDocuments $parameters
     * @return \StructType\DeleteDocumentsResponse|bool
     */
    public function DeleteDocuments(\StructType\DeleteDocuments $parameters)
    {
        try {
            $this->setResult($resultDeleteDocuments = $this->getSoapClient()->__soapCall('DeleteDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteGMH
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteGMH $parameters
     * @return \StructType\DeleteGMHResponse|bool
     */
    public function DeleteGMH(\StructType\DeleteGMH $parameters)
    {
        try {
            $this->setResult($resultDeleteGMH = $this->getSoapClient()->__soapCall('DeleteGMH', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteGMH;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DeleteDocumentsResponse|\StructType\DeleteGMHResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
