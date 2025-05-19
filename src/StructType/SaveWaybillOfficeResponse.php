<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWaybillOfficeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveWaybillOfficeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Oihso\CSESDK\StructType\ResultArray|null
     */
    protected ?\Oihso\CSESDK\StructType\ResultArray $return = null;
    /**
     * Constructor method for SaveWaybillOfficeResponse
     * @uses SaveWaybillOfficeResponse::setReturn()
     * @param \Oihso\CSESDK\StructType\ResultArray $return
     */
    public function __construct(?\Oihso\CSESDK\StructType\ResultArray $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Oihso\CSESDK\StructType\ResultArray|null
     */
    public function getReturn(): ?\Oihso\CSESDK\StructType\ResultArray
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Oihso\CSESDK\StructType\ResultArray $return
     * @return \Oihso\CSESDK\StructType\SaveWaybillOfficeResponse
     */
    public function setReturn(?\Oihso\CSESDK\StructType\ResultArray $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
