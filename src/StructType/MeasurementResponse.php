<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeasurementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MeasurementResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \StructType\ResultString|null
     */
    protected ?\StructType\ResultString $return = null;
    /**
     * Constructor method for MeasurementResponse
     * @uses MeasurementResponse::setReturn()
     * @param \StructType\ResultString $return
     */
    public function __construct(?\StructType\ResultString $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultString|null
     */
    public function getReturn(): ?\StructType\ResultString
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultString $return
     * @return \StructType\MeasurementResponse
     */
    public function setReturn(?\StructType\ResultString $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
