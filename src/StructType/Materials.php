<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Materials StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Materials extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Qty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Qty = null;
    /**
     * Constructor method for Materials
     * @uses Materials::setName()
     * @uses Materials::setPrice()
     * @uses Materials::setQty()
     * @param string $name
     * @param float $price
     * @param int $qty
     */
    public function __construct(?string $name = null, ?float $price = null, ?int $qty = null)
    {
        $this
            ->setName($name)
            ->setPrice($price)
            ->setQty($qty);
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\Materials
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get Price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price ?? null;
    }
    /**
     * Set Price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $price
     * @return \StructType\Materials
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->Price);
        } else {
            $this->Price = $price;
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
     * @return \StructType\Materials
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
