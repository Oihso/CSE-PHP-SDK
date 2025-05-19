<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintDocumentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintDocumentResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\ResultArrayPrint|null
     */
    protected ?\Oihso\CSESDK\StructType\ResultArrayPrint $return = null;
    /**
     * Constructor method for PrintDocumentResponse
     * @uses PrintDocumentResponse::setReturn()
     * @param \Oihso\CSESDK\StructType\ResultArrayPrint $return
     */
    public function __construct(?\Oihso\CSESDK\StructType\ResultArrayPrint $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Oihso\CSESDK\StructType\ResultArrayPrint|null
     */
    public function getReturn(): ?\Oihso\CSESDK\StructType\ResultArrayPrint
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Oihso\CSESDK\StructType\ResultArrayPrint $return
     * @return \Oihso\CSESDK\StructType\PrintDocumentResponse
     */
    public function setReturn(?\Oihso\CSESDK\StructType\ResultArrayPrint $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
