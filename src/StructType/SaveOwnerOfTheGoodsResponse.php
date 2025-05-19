<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOwnerOfTheGoodsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOwnerOfTheGoodsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $return = null;
    /**
     * Constructor method for SaveOwnerOfTheGoodsResponse
     * @uses SaveOwnerOfTheGoodsResponse::setReturn()
     * @param \Oihso\CSESDK\StructType\Element $return
     */
    public function __construct(?\Oihso\CSESDK\StructType\Element $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getReturn(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Oihso\CSESDK\StructType\Element $return
     * @return \Oihso\CSESDK\StructType\SaveOwnerOfTheGoodsResponse
     */
    public function setReturn(?\Oihso\CSESDK\StructType\Element $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
