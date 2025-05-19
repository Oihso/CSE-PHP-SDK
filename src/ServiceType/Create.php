<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateGMH
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Oihso\CSESDK\StructType\CreateGMH $parameters
     * @return \Oihso\CSESDK\StructType\CreateGMHResponse|bool
     */
    public function CreateGMH(\Oihso\CSESDK\StructType\CreateGMH $parameters)
    {
        try {
            $this->setResult($resultCreateGMH = $this->getSoapClient()->__soapCall('CreateGMH', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateGMH;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Oihso\CSESDK\StructType\CreateGMHResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
