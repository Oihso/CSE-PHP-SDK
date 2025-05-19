<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cargo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Cargo extends AbstractStructBase
{
    /**
     * The CargoDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CargoDescription = null;
    /**
     * The CargoPackageQty
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $CargoPackageQty = null;
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
     * The InsuranceRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $InsuranceRate = null;
    /**
     * The InsuranceRateCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InsuranceRateCurrency = null;
    /**
     * The DeclaredValueRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $DeclaredValueRate = null;
    /**
     * The DeclaredValueRateCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeclaredValueRateCurrency = null;
    /**
     * The ValueForCustomsPurposes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $ValueForCustomsPurposes = null;
    /**
     * The ValueForCustomsPurposesCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ValueForCustomsPurposesCurrency = null;
    /**
     * The PackageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PackageID = null;
    /**
     * The COD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $COD = null;
    /**
     * The CODPayer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CODPayer = null;
    /**
     * The CODDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CODDescription = null;
    /**
     * The SenderShippingCost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $SenderShippingCost = null;
    /**
     * The CargoPackages
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CargoPackages[]
     */
    protected ?array $CargoPackages = null;
    /**
     * The CargoDescriptionWhithoutType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CargoDescriptionWhithoutType = null;
    /**
     * The InsuranceRateFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $InsuranceRateFee = null;
    /**
     * The InsuranceRateFeeCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $InsuranceRateFeeCurrency = null;
    /**
     * The CustomerPrepayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $CustomerPrepayment = null;
    /**
     * The Volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Volume = null;
    /**
     * The CODCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CODCurrency = null;
    /**
     * Constructor method for Cargo
     * @uses Cargo::setCargoDescription()
     * @uses Cargo::setCargoPackageQty()
     * @uses Cargo::setWeight()
     * @uses Cargo::setVolumeWeight()
     * @uses Cargo::setLength()
     * @uses Cargo::setWidth()
     * @uses Cargo::setHeight()
     * @uses Cargo::setInsuranceRate()
     * @uses Cargo::setInsuranceRateCurrency()
     * @uses Cargo::setDeclaredValueRate()
     * @uses Cargo::setDeclaredValueRateCurrency()
     * @uses Cargo::setValueForCustomsPurposes()
     * @uses Cargo::setValueForCustomsPurposesCurrency()
     * @uses Cargo::setPackageID()
     * @uses Cargo::setCOD()
     * @uses Cargo::setCODPayer()
     * @uses Cargo::setCODDescription()
     * @uses Cargo::setSenderShippingCost()
     * @uses Cargo::setCargoPackages()
     * @uses Cargo::setCargoDescriptionWhithoutType()
     * @uses Cargo::setInsuranceRateFee()
     * @uses Cargo::setInsuranceRateFeeCurrency()
     * @uses Cargo::setCustomerPrepayment()
     * @uses Cargo::setVolume()
     * @uses Cargo::setCODCurrency()
     * @param string $cargoDescription
     * @param int $cargoPackageQty
     * @param float $weight
     * @param float $volumeWeight
     * @param float $length
     * @param float $width
     * @param float $height
     * @param float $insuranceRate
     * @param string $insuranceRateCurrency
     * @param float $declaredValueRate
     * @param string $declaredValueRateCurrency
     * @param float $valueForCustomsPurposes
     * @param string $valueForCustomsPurposesCurrency
     * @param string $packageID
     * @param float $cOD
     * @param string $cODPayer
     * @param string $cODDescription
     * @param float $senderShippingCost
     * @param \StructType\CargoPackages[] $cargoPackages
     * @param string $cargoDescriptionWhithoutType
     * @param float $insuranceRateFee
     * @param string $insuranceRateFeeCurrency
     * @param float $customerPrepayment
     * @param float $volume
     * @param string $cODCurrency
     */
    public function __construct(?string $cargoDescription = null, ?int $cargoPackageQty = null, ?float $weight = null, ?float $volumeWeight = null, ?float $length = null, ?float $width = null, ?float $height = null, ?float $insuranceRate = null, ?string $insuranceRateCurrency = null, ?float $declaredValueRate = null, ?string $declaredValueRateCurrency = null, ?float $valueForCustomsPurposes = null, ?string $valueForCustomsPurposesCurrency = null, ?string $packageID = null, ?float $cOD = null, ?string $cODPayer = null, ?string $cODDescription = null, ?float $senderShippingCost = null, ?array $cargoPackages = null, ?string $cargoDescriptionWhithoutType = null, ?float $insuranceRateFee = null, ?string $insuranceRateFeeCurrency = null, ?float $customerPrepayment = null, ?float $volume = null, ?string $cODCurrency = null)
    {
        $this
            ->setCargoDescription($cargoDescription)
            ->setCargoPackageQty($cargoPackageQty)
            ->setWeight($weight)
            ->setVolumeWeight($volumeWeight)
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setInsuranceRate($insuranceRate)
            ->setInsuranceRateCurrency($insuranceRateCurrency)
            ->setDeclaredValueRate($declaredValueRate)
            ->setDeclaredValueRateCurrency($declaredValueRateCurrency)
            ->setValueForCustomsPurposes($valueForCustomsPurposes)
            ->setValueForCustomsPurposesCurrency($valueForCustomsPurposesCurrency)
            ->setPackageID($packageID)
            ->setCOD($cOD)
            ->setCODPayer($cODPayer)
            ->setCODDescription($cODDescription)
            ->setSenderShippingCost($senderShippingCost)
            ->setCargoPackages($cargoPackages)
            ->setCargoDescriptionWhithoutType($cargoDescriptionWhithoutType)
            ->setInsuranceRateFee($insuranceRateFee)
            ->setInsuranceRateFeeCurrency($insuranceRateFeeCurrency)
            ->setCustomerPrepayment($customerPrepayment)
            ->setVolume($volume)
            ->setCODCurrency($cODCurrency);
    }
    /**
     * Get CargoDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCargoDescription(): ?string
    {
        return $this->CargoDescription ?? null;
    }
    /**
     * Set CargoDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cargoDescription
     * @return \StructType\Cargo
     */
    public function setCargoDescription(?string $cargoDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cargoDescription) && !is_string($cargoDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cargoDescription, true), gettype($cargoDescription)), __LINE__);
        }
        if (is_null($cargoDescription) || (is_array($cargoDescription) && empty($cargoDescription))) {
            unset($this->CargoDescription);
        } else {
            $this->CargoDescription = $cargoDescription;
        }
        
        return $this;
    }
    /**
     * Get CargoPackageQty value
     * @return int|null
     */
    public function getCargoPackageQty(): ?int
    {
        return $this->CargoPackageQty;
    }
    /**
     * Set CargoPackageQty value
     * @param int $cargoPackageQty
     * @return \StructType\Cargo
     */
    public function setCargoPackageQty(?int $cargoPackageQty = null): self
    {
        // validation for constraint: int
        if (!is_null($cargoPackageQty) && !(is_int($cargoPackageQty) || ctype_digit($cargoPackageQty))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cargoPackageQty, true), gettype($cargoPackageQty)), __LINE__);
        }
        $this->CargoPackageQty = $cargoPackageQty;
        
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
     * @return \StructType\Cargo
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
     * @return \StructType\Cargo
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
     * @return \StructType\Cargo
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
     * @return \StructType\Cargo
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
     * @return \StructType\Cargo
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
     * Get InsuranceRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getInsuranceRate(): ?float
    {
        return $this->InsuranceRate ?? null;
    }
    /**
     * Set InsuranceRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $insuranceRate
     * @return \StructType\Cargo
     */
    public function setInsuranceRate(?float $insuranceRate = null): self
    {
        // validation for constraint: float
        if (!is_null($insuranceRate) && !(is_float($insuranceRate) || is_numeric($insuranceRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuranceRate, true), gettype($insuranceRate)), __LINE__);
        }
        if (is_null($insuranceRate) || (is_array($insuranceRate) && empty($insuranceRate))) {
            unset($this->InsuranceRate);
        } else {
            $this->InsuranceRate = $insuranceRate;
        }
        
        return $this;
    }
    /**
     * Get InsuranceRateCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceRateCurrency(): ?string
    {
        return $this->InsuranceRateCurrency ?? null;
    }
    /**
     * Set InsuranceRateCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceRateCurrency
     * @return \StructType\Cargo
     */
    public function setInsuranceRateCurrency(?string $insuranceRateCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceRateCurrency) && !is_string($insuranceRateCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceRateCurrency, true), gettype($insuranceRateCurrency)), __LINE__);
        }
        if (is_null($insuranceRateCurrency) || (is_array($insuranceRateCurrency) && empty($insuranceRateCurrency))) {
            unset($this->InsuranceRateCurrency);
        } else {
            $this->InsuranceRateCurrency = $insuranceRateCurrency;
        }
        
        return $this;
    }
    /**
     * Get DeclaredValueRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeclaredValueRate(): ?float
    {
        return $this->DeclaredValueRate ?? null;
    }
    /**
     * Set DeclaredValueRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $declaredValueRate
     * @return \StructType\Cargo
     */
    public function setDeclaredValueRate(?float $declaredValueRate = null): self
    {
        // validation for constraint: float
        if (!is_null($declaredValueRate) && !(is_float($declaredValueRate) || is_numeric($declaredValueRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($declaredValueRate, true), gettype($declaredValueRate)), __LINE__);
        }
        if (is_null($declaredValueRate) || (is_array($declaredValueRate) && empty($declaredValueRate))) {
            unset($this->DeclaredValueRate);
        } else {
            $this->DeclaredValueRate = $declaredValueRate;
        }
        
        return $this;
    }
    /**
     * Get DeclaredValueRateCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeclaredValueRateCurrency(): ?string
    {
        return $this->DeclaredValueRateCurrency ?? null;
    }
    /**
     * Set DeclaredValueRateCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $declaredValueRateCurrency
     * @return \StructType\Cargo
     */
    public function setDeclaredValueRateCurrency(?string $declaredValueRateCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($declaredValueRateCurrency) && !is_string($declaredValueRateCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declaredValueRateCurrency, true), gettype($declaredValueRateCurrency)), __LINE__);
        }
        if (is_null($declaredValueRateCurrency) || (is_array($declaredValueRateCurrency) && empty($declaredValueRateCurrency))) {
            unset($this->DeclaredValueRateCurrency);
        } else {
            $this->DeclaredValueRateCurrency = $declaredValueRateCurrency;
        }
        
        return $this;
    }
    /**
     * Get ValueForCustomsPurposes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getValueForCustomsPurposes(): ?float
    {
        return $this->ValueForCustomsPurposes ?? null;
    }
    /**
     * Set ValueForCustomsPurposes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $valueForCustomsPurposes
     * @return \StructType\Cargo
     */
    public function setValueForCustomsPurposes(?float $valueForCustomsPurposes = null): self
    {
        // validation for constraint: float
        if (!is_null($valueForCustomsPurposes) && !(is_float($valueForCustomsPurposes) || is_numeric($valueForCustomsPurposes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueForCustomsPurposes, true), gettype($valueForCustomsPurposes)), __LINE__);
        }
        if (is_null($valueForCustomsPurposes) || (is_array($valueForCustomsPurposes) && empty($valueForCustomsPurposes))) {
            unset($this->ValueForCustomsPurposes);
        } else {
            $this->ValueForCustomsPurposes = $valueForCustomsPurposes;
        }
        
        return $this;
    }
    /**
     * Get ValueForCustomsPurposesCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValueForCustomsPurposesCurrency(): ?string
    {
        return $this->ValueForCustomsPurposesCurrency ?? null;
    }
    /**
     * Set ValueForCustomsPurposesCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $valueForCustomsPurposesCurrency
     * @return \StructType\Cargo
     */
    public function setValueForCustomsPurposesCurrency(?string $valueForCustomsPurposesCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($valueForCustomsPurposesCurrency) && !is_string($valueForCustomsPurposesCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueForCustomsPurposesCurrency, true), gettype($valueForCustomsPurposesCurrency)), __LINE__);
        }
        if (is_null($valueForCustomsPurposesCurrency) || (is_array($valueForCustomsPurposesCurrency) && empty($valueForCustomsPurposesCurrency))) {
            unset($this->ValueForCustomsPurposesCurrency);
        } else {
            $this->ValueForCustomsPurposesCurrency = $valueForCustomsPurposesCurrency;
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
     * @return \StructType\Cargo
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
     * Get COD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCOD(): ?float
    {
        return $this->COD ?? null;
    }
    /**
     * Set COD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $cOD
     * @return \StructType\Cargo
     */
    public function setCOD(?float $cOD = null): self
    {
        // validation for constraint: float
        if (!is_null($cOD) && !(is_float($cOD) || is_numeric($cOD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cOD, true), gettype($cOD)), __LINE__);
        }
        if (is_null($cOD) || (is_array($cOD) && empty($cOD))) {
            unset($this->COD);
        } else {
            $this->COD = $cOD;
        }
        
        return $this;
    }
    /**
     * Get CODPayer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCODPayer(): ?string
    {
        return $this->CODPayer ?? null;
    }
    /**
     * Set CODPayer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cODPayer
     * @return \StructType\Cargo
     */
    public function setCODPayer(?string $cODPayer = null): self
    {
        // validation for constraint: string
        if (!is_null($cODPayer) && !is_string($cODPayer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODPayer, true), gettype($cODPayer)), __LINE__);
        }
        if (is_null($cODPayer) || (is_array($cODPayer) && empty($cODPayer))) {
            unset($this->CODPayer);
        } else {
            $this->CODPayer = $cODPayer;
        }
        
        return $this;
    }
    /**
     * Get CODDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCODDescription(): ?string
    {
        return $this->CODDescription ?? null;
    }
    /**
     * Set CODDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cODDescription
     * @return \StructType\Cargo
     */
    public function setCODDescription(?string $cODDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cODDescription) && !is_string($cODDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODDescription, true), gettype($cODDescription)), __LINE__);
        }
        if (is_null($cODDescription) || (is_array($cODDescription) && empty($cODDescription))) {
            unset($this->CODDescription);
        } else {
            $this->CODDescription = $cODDescription;
        }
        
        return $this;
    }
    /**
     * Get SenderShippingCost value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSenderShippingCost(): ?float
    {
        return $this->SenderShippingCost ?? null;
    }
    /**
     * Set SenderShippingCost value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $senderShippingCost
     * @return \StructType\Cargo
     */
    public function setSenderShippingCost(?float $senderShippingCost = null): self
    {
        // validation for constraint: float
        if (!is_null($senderShippingCost) && !(is_float($senderShippingCost) || is_numeric($senderShippingCost))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($senderShippingCost, true), gettype($senderShippingCost)), __LINE__);
        }
        if (is_null($senderShippingCost) || (is_array($senderShippingCost) && empty($senderShippingCost))) {
            unset($this->SenderShippingCost);
        } else {
            $this->SenderShippingCost = $senderShippingCost;
        }
        
        return $this;
    }
    /**
     * Get CargoPackages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CargoPackages[]
     */
    public function getCargoPackages(): ?array
    {
        return $this->CargoPackages ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCargoPackages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCargoPackages method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCargoPackagesForArrayConstraintFromSetCargoPackages(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cargoCargoPackagesItem) {
            // validation for constraint: itemType
            if (!$cargoCargoPackagesItem instanceof \StructType\CargoPackages) {
                $invalidValues[] = is_object($cargoCargoPackagesItem) ? get_class($cargoCargoPackagesItem) : sprintf('%s(%s)', gettype($cargoCargoPackagesItem), var_export($cargoCargoPackagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CargoPackages property can only contain items of type \StructType\CargoPackages, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CargoPackages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CargoPackages[] $cargoPackages
     * @return \StructType\Cargo
     */
    public function setCargoPackages(?array $cargoPackages = null): self
    {
        // validation for constraint: array
        if ('' !== ($cargoPackagesArrayErrorMessage = self::validateCargoPackagesForArrayConstraintFromSetCargoPackages($cargoPackages))) {
            throw new InvalidArgumentException($cargoPackagesArrayErrorMessage, __LINE__);
        }
        if (is_null($cargoPackages) || (is_array($cargoPackages) && empty($cargoPackages))) {
            unset($this->CargoPackages);
        } else {
            $this->CargoPackages = $cargoPackages;
        }
        
        return $this;
    }
    /**
     * Add item to CargoPackages value
     * @throws InvalidArgumentException
     * @param \StructType\CargoPackages $item
     * @return \StructType\Cargo
     */
    public function addToCargoPackages(\StructType\CargoPackages $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CargoPackages) {
            throw new InvalidArgumentException(sprintf('The CargoPackages property can only contain items of type \StructType\CargoPackages, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CargoPackages[] = $item;
        
        return $this;
    }
    /**
     * Get CargoDescriptionWhithoutType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCargoDescriptionWhithoutType(): ?string
    {
        return $this->CargoDescriptionWhithoutType ?? null;
    }
    /**
     * Set CargoDescriptionWhithoutType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cargoDescriptionWhithoutType
     * @return \StructType\Cargo
     */
    public function setCargoDescriptionWhithoutType(?string $cargoDescriptionWhithoutType = null): self
    {
        // validation for constraint: string
        if (!is_null($cargoDescriptionWhithoutType) && !is_string($cargoDescriptionWhithoutType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cargoDescriptionWhithoutType, true), gettype($cargoDescriptionWhithoutType)), __LINE__);
        }
        if (is_null($cargoDescriptionWhithoutType) || (is_array($cargoDescriptionWhithoutType) && empty($cargoDescriptionWhithoutType))) {
            unset($this->CargoDescriptionWhithoutType);
        } else {
            $this->CargoDescriptionWhithoutType = $cargoDescriptionWhithoutType;
        }
        
        return $this;
    }
    /**
     * Get InsuranceRateFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getInsuranceRateFee(): ?float
    {
        return $this->InsuranceRateFee ?? null;
    }
    /**
     * Set InsuranceRateFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $insuranceRateFee
     * @return \StructType\Cargo
     */
    public function setInsuranceRateFee(?float $insuranceRateFee = null): self
    {
        // validation for constraint: float
        if (!is_null($insuranceRateFee) && !(is_float($insuranceRateFee) || is_numeric($insuranceRateFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuranceRateFee, true), gettype($insuranceRateFee)), __LINE__);
        }
        if (is_null($insuranceRateFee) || (is_array($insuranceRateFee) && empty($insuranceRateFee))) {
            unset($this->InsuranceRateFee);
        } else {
            $this->InsuranceRateFee = $insuranceRateFee;
        }
        
        return $this;
    }
    /**
     * Get InsuranceRateFeeCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceRateFeeCurrency(): ?string
    {
        return $this->InsuranceRateFeeCurrency ?? null;
    }
    /**
     * Set InsuranceRateFeeCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceRateFeeCurrency
     * @return \StructType\Cargo
     */
    public function setInsuranceRateFeeCurrency(?string $insuranceRateFeeCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceRateFeeCurrency) && !is_string($insuranceRateFeeCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceRateFeeCurrency, true), gettype($insuranceRateFeeCurrency)), __LINE__);
        }
        if (is_null($insuranceRateFeeCurrency) || (is_array($insuranceRateFeeCurrency) && empty($insuranceRateFeeCurrency))) {
            unset($this->InsuranceRateFeeCurrency);
        } else {
            $this->InsuranceRateFeeCurrency = $insuranceRateFeeCurrency;
        }
        
        return $this;
    }
    /**
     * Get CustomerPrepayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCustomerPrepayment(): ?float
    {
        return $this->CustomerPrepayment ?? null;
    }
    /**
     * Set CustomerPrepayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $customerPrepayment
     * @return \StructType\Cargo
     */
    public function setCustomerPrepayment(?float $customerPrepayment = null): self
    {
        // validation for constraint: float
        if (!is_null($customerPrepayment) && !(is_float($customerPrepayment) || is_numeric($customerPrepayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerPrepayment, true), gettype($customerPrepayment)), __LINE__);
        }
        if (is_null($customerPrepayment) || (is_array($customerPrepayment) && empty($customerPrepayment))) {
            unset($this->CustomerPrepayment);
        } else {
            $this->CustomerPrepayment = $customerPrepayment;
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
     * @return \StructType\Cargo
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
    /**
     * Get CODCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCODCurrency(): ?string
    {
        return $this->CODCurrency ?? null;
    }
    /**
     * Set CODCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cODCurrency
     * @return \StructType\Cargo
     */
    public function setCODCurrency(?string $cODCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($cODCurrency) && !is_string($cODCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODCurrency, true), gettype($cODCurrency)), __LINE__);
        }
        if (is_null($cODCurrency) || (is_array($cODCurrency) && empty($cODCurrency))) {
            unset($this->CODCurrency);
        } else {
            $this->CODCurrency = $cODCurrency;
        }
        
        return $this;
    }
}
