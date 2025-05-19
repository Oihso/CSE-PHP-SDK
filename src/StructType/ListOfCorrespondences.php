<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOfCorrespondences StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListOfCorrespondences extends AbstractStructBase
{
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Items = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Info = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The Qty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Qty = null;
    /**
     * Constructor method for ListOfCorrespondences
     * @uses ListOfCorrespondences::setItems()
     * @uses ListOfCorrespondences::setInfo()
     * @uses ListOfCorrespondences::setValue()
     * @uses ListOfCorrespondences::setQty()
     * @param string $items
     * @param string $info
     * @param string $value
     * @param int $qty
     */
    public function __construct(?string $items = null, ?string $info = null, ?string $value = null, ?int $qty = null)
    {
        $this
            ->setItems($items)
            ->setInfo($info)
            ->setValue($value)
            ->setQty($qty);
    }
    /**
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItems(): ?string
    {
        return $this->Items ?? null;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $items
     * @return \StructType\ListOfCorrespondences
     */
    public function setItems(?string $items = null): self
    {
        // validation for constraint: string
        if (!is_null($items) && !is_string($items)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($items, true), gettype($items)), __LINE__);
        }
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        
        return $this;
    }
    /**
     * Get Info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->Info ?? null;
    }
    /**
     * Set Info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $info
     * @return \StructType\ListOfCorrespondences
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->Info);
        } else {
            $this->Info = $info;
        }
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value ?? null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\ListOfCorrespondences
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
    /**
     * Get Qty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getQty(): ?int
    {
        return $this->Qty ?? null;
    }
    /**
     * Set Qty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $qty
     * @return \StructType\ListOfCorrespondences
     */
    public function setQty(?int $qty = null): self
    {
        // validation for constraint: int
        if (!is_null($qty) && !(is_int($qty) || ctype_digit($qty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qty, true), gettype($qty)), __LINE__);
        }
        if (is_null($qty) || (is_array($qty) && empty($qty))) {
            unset($this->Qty);
        } else {
            $this->Qty = $qty;
        }
        
        return $this;
    }
}
