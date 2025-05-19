<?php

declare(strict_types=1);

namespace Oihso\CSESDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calc ServiceType
 * @subpackage Services
 */
class Calc extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Calc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Calc $parameters
     * @return \StructType\CalcResponse|bool
     */
    public function Calc(\StructType\Calc $parameters)
    {
        try {
            $this->setResult($resultCalc = $this->getSoapClient()->__soapCall('Calc', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CalcResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
