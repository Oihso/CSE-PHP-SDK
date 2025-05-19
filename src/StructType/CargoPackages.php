<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CargoPackages StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CargoPackages extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Length = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Width = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Height = null;
    /**
     * The Package
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Package = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Weight = null;
    /**
     * The VolumeWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $VolumeWeight = null;
    /**
     * The PackageQty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PackageQty = null;
    /**
     * The PackageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PackageID = null;
    /**
     * The Volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Volume = null;
    /**
     * Constructor method for CargoPackages
     * @uses CargoPackages::setLength()
     * @uses CargoPackages::setWidth()
     * @uses CargoPackages::setHeight()
     * @uses CargoPackages::setPackage()
     * @uses CargoPackages::setWeight()
     * @uses CargoPackages::setVolumeWeight()
     * @uses CargoPackages::setPackageQty()
     * @uses CargoPackages::setPackageID()
     * @uses CargoPackages::setVolume()
     * @param float $length
     * @param float $width
     * @param float $height
     * @param string $package
     * @param float $weight
     * @param float $volumeWeight
     * @param int $packageQty
     * @param string $packageID
     * @param float $volume
     */
    public function __construct(?float $length = null, ?float $width = null, ?float $height = null, ?string $package = null, ?float $weight = null, ?float $volumeWeight = null, ?int $packageQty = null, ?string $packageID = null, ?float $volume = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setPackage($package)
            ->setWeight($weight)
            ->setVolumeWeight($volumeWeight)
            ->setPackageQty($packageQty)
            ->setPackageID($packageID)
            ->setVolume($volume);
    }
    /**
     * Get Length value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->Length ?? null;
    }
    /**
     * Set Length value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $length
     * @return \StructType\CargoPackages
     */
    public function setLength(?float $length = null): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        if (is_null($length) || (is_array($length) && empty($length))) {
            unset($this->Length);
        } else {
            $this->Length = $length;
        }
        
        return $this;
    }
    /**
     * Get Width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->Width ?? null;
    }
    /**
     * Set Width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $width
     * @return \StructType\CargoPackages
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->Width);
        } else {
            $this->Width = $width;
        }
        
        return $this;
    }
    /**
     * Get Height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->Height ?? null;
    }
    /**
     * Set Height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $height
     * @return \StructType\CargoPackages
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->Height);
        } else {
            $this->Height = $height;
        }
        
        return $this;
    }
    /**
     * Get Package value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackage(): ?string
    {
        return $this->Package ?? null;
    }
    /**
     * Set Package value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $package
     * @return \StructType\CargoPackages
     */
    public function setPackage(?string $package = null): self
    {
        // validation for constraint: string
        if (!is_null($package) && !is_string($package)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($package, true), gettype($package)), __LINE__);
        }
        if (is_null($package) || (is_array($package) && empty($package))) {
            unset($this->Package);
        } else {
            $this->Package = $package;
        }
        
        return $this;
    }
    /**
     * Get Weight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->Weight ?? null;
    }
    /**
     * Set Weight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $weight
     * @return \StructType\CargoPackages
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        if (is_null($weight) || (is_array($weight) && empty($weight))) {
            unset($this->Weight);
        } else {
            $this->Weight = $weight;
        }
        
        return $this;
    }
    /**
     * Get VolumeWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getVolumeWeight(): ?float
    {
        return $this->VolumeWeight ?? null;
    }
    /**
     * Set VolumeWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $volumeWeight
     * @return \StructType\CargoPackages
     */
    public function setVolumeWeight(?float $volumeWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($volumeWeight) && !(is_float($volumeWeight) || is_numeric($volumeWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volumeWeight, true), gettype($volumeWeight)), __LINE__);
        }
        if (is_null($volumeWeight) || (is_array($volumeWeight) && empty($volumeWeight))) {
            unset($this->VolumeWeight);
        } else {
            $this->VolumeWeight = $volumeWeight;
        }
        
        return $this;
    }
    /**
     * Get PackageQty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPackageQty(): ?int
    {
        return $this->PackageQty ?? null;
    }
    /**
     * Set PackageQty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $packageQty
     * @return \StructType\CargoPackages
     */
    public function setPackageQty(?int $packageQty = null): self
    {
        // validation for constraint: int
        if (!is_null($packageQty) && !(is_int($packageQty) || ctype_digit($packageQty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageQty, true), gettype($packageQty)), __LINE__);
        }
        if (is_null($packageQty) || (is_array($packageQty) && empty($packageQty))) {
            unset($this->PackageQty);
        } else {
            $this->PackageQty = $packageQty;
        }
        
        return $this;
    }
    /**
     * Get PackageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageID(): ?string
    {
        return $this->PackageID ?? null;
    }
    /**
     * Set PackageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageID
     * @return \StructType\CargoPackages
     */
    public function setPackageID(?string $packageID = null): self
    {
        // validation for constraint: string
        if (!is_null($packageID) && !is_string($packageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageID, true), gettype($packageID)), __LINE__);
        }
        if (is_null($packageID) || (is_array($packageID) && empty($packageID))) {
            unset($this->PackageID);
        } else {
            $this->PackageID = $packageID;
        }
        
        return $this;
    }
    /**
     * Get Volume value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->Volume ?? null;
    }
    /**
     * Set Volume value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $volume
     * @return \StructType\CargoPackages
     */
    public function setVolume(?float $volume = null): self
    {
        // validation for constraint: float
        if (!is_null($volume) && !(is_float($volume) || is_numeric($volume))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        if (is_null($volume) || (is_array($volume) && empty($volume))) {
            unset($this->Volume);
        } else {
            $this->Volume = $volume;
        }
        
        return $this;
    }
}
