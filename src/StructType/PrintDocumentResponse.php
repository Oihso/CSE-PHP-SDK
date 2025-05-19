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
     * @var \StructType\ResultArrayPrint|null
     */
    protected ?\StructType\ResultArrayPrint $return = null;
    /**
     * Constructor method for PrintDocumentResponse
     * @uses PrintDocumentResponse::setReturn()
     * @param \StructType\ResultArrayPrint $return
     */
    public function __construct(?\StructType\ResultArrayPrint $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultArrayPrint|null
     */
    public function getReturn(): ?\StructType\ResultArrayPrint
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultArrayPrint $return
     * @return \StructType\PrintDocumentResponse
     */
    public function setReturn(?\StructType\ResultArrayPrint $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
