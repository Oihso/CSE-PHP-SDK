<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentsPhoto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentsPhoto extends AbstractStructBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Document = null;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Required = null;
    /**
     * Constructor method for DocumentsPhoto
     * @uses DocumentsPhoto::setDocument()
     * @uses DocumentsPhoto::setRequired()
     * @param string $document
     * @param bool $required
     */
    public function __construct(?string $document = null, ?bool $required = null)
    {
        $this
            ->setDocument($document)
            ->setRequired($required);
    }
    /**
     * Get Document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->Document ?? null;
    }
    /**
     * Set Document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $document
     * @return \Oihso\CSESDK\StructType\DocumentsPhoto
     */
    public function setDocument(?string $document = null): self
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document, true), gettype($document)), __LINE__);
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->Document);
        } else {
            $this->Document = $document;
        }
        
        return $this;
    }
    /**
     * Get Required value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->Required ?? null;
    }
    /**
     * Set Required value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $required
     * @return \Oihso\CSESDK\StructType\DocumentsPhoto
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        if (is_null($required) || (is_array($required) && empty($required))) {
            unset($this->Required);
        } else {
            $this->Required = $required;
        }
        
        return $this;
    }
}
