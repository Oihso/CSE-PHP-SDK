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
     * @param \StructType\UpdateClientProducts $parameters
     * @return \StructType\UpdateClientProductsResponse|bool
     */
    public function UpdateClientProducts(\StructType\UpdateClientProducts $parameters)
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
     * @param \StructType\UpdateDocument $parameters
     * @return \StructType\UpdateDocumentResponse|bool
     */
    public function UpdateDocument(\StructType\UpdateDocument $parameters)
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
     * @return \StructType\UpdateClientProductsResponse|\StructType\UpdateDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
