<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Print ServiceType
 * @subpackage Services
 */
class _Print extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PrintDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\PrintDocument $parameters
     * @return \Oihso\CSESDK\StructType\PrintDocumentResponse|bool
     */
    public function PrintDocument(\Oihso\CSESDK\StructType\PrintDocument $parameters)
    {
        try {
            $this->setResult($resultPrintDocument = $this->getSoapClient()->__soapCall('PrintDocument', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\PrintDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
