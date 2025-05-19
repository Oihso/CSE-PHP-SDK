<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateClientProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\UpdateClientProducts $parameters
     * @return \Oihso\CSESDK\StructType\UpdateClientProductsResponse|bool
     */
    public function UpdateClientProducts(\Oihso\CSESDK\StructType\UpdateClientProducts $parameters)
    {
        try {
            $this->setResult($resultUpdateClientProducts = $this->getSoapClient()->__soapCall('UpdateClientProducts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateClientProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\UpdateDocument $parameters
     * @return \Oihso\CSESDK\StructType\UpdateDocumentResponse|bool
     */
    public function UpdateDocument(\Oihso\CSESDK\StructType\UpdateDocument $parameters)
    {
        try {
            $this->setResult($resultUpdateDocument = $this->getSoapClient()->__soapCall('UpdateDocument', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\UpdateClientProductsResponse|\Oihso\CSESDK\StructType\UpdateDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
