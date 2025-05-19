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
     * @param \Oihso\CSESDK\StructType\DeleteDocuments $parameters
     * @return \Oihso\CSESDK\StructType\DeleteDocumentsResponse|bool
     */
    public function DeleteDocuments(\Oihso\CSESDK\StructType\DeleteDocuments $parameters)
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
     * @param \Oihso\CSESDK\StructType\DeleteGMH $parameters
     * @return \Oihso\CSESDK\StructType\DeleteGMHResponse|bool
     */
    public function DeleteGMH(\Oihso\CSESDK\StructType\DeleteGMH $parameters)
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
     * @return \Oihso\CSESDK\StructType\DeleteDocumentsResponse|\Oihso\CSESDK\StructType\DeleteGMHResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
