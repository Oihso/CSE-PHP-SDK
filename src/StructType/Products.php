<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Products StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Products extends AbstractStructBase
{
    /**
     * The Article
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Article = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The BCProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BCProduct = null;
    /**
     * The Party
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Party = null;
    /**
     * The DayOfParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DayOfParty = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The SerialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SerialNumber = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Package
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Package = null;
    /**
     * The PackageQty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PackageQty = null;
    /**
     * The Qty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Qty = null;
    /**
     * The VATRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $VATRate = null;
    /**
     * The AssessedValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $AssessedValue = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * Constructor method for Products
     * @uses Products::setArticle()
     * @uses Products::setName()
     * @uses Products::setBCProduct()
     * @uses Products::setParty()
     * @uses Products::setDayOfParty()
     * @uses Products::setExpirationDate()
     * @uses Products::setSerialNumber()
     * @uses Products::setPrice()
     * @uses Products::setPackage()
     * @uses Products::setPackageQty()
     * @uses Products::setQty()
     * @uses Products::setVATRate()
     * @uses Products::setAssessedValue()
     * @uses Products::setComment()
     * @param string $article
     * @param string $name
     * @param string $bCProduct
     * @param string $party
     * @param string $dayOfParty
     * @param string $expirationDate
     * @param string $serialNumber
     * @param float $price
     * @param string $package
     * @param int $packageQty
     * @param int $qty
     * @param int $vATRate
     * @param float $assessedValue
     * @param string $comment
     */
    public function __construct(?string $article = null, ?string $name = null, ?string $bCProduct = null, ?string $party = null, ?string $dayOfParty = null, ?string $expirationDate = null, ?string $serialNumber = null, ?float $price = null, ?string $package = null, ?int $packageQty = null, ?int $qty = null, ?int $vATRate = null, ?float $assessedValue = null, ?string $comment = null)
    {
        $this
            ->setArticle($article)
            ->setName($name)
            ->setBCProduct($bCProduct)
            ->setParty($party)
            ->setDayOfParty($dayOfParty)
            ->setExpirationDate($expirationDate)
            ->setSerialNumber($serialNumber)
            ->setPrice($price)
            ->setPackage($package)
            ->setPackageQty($packageQty)
            ->setQty($qty)
            ->setVATRate($vATRate)
            ->setAssessedValue($assessedValue)
            ->setComment($comment);
    }
    /**
     * Get Article value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArticle(): ?string
    {
        return $this->Article ?? null;
    }
    /**
     * Set Article value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $article
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setArticle(?string $article = null): self
    {
        // validation for constraint: string
        if (!is_null($article) && !is_string($article)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($article, true), gettype($article)), __LINE__);
        }
        if (is_null($article) || (is_array($article) && empty($article))) {
            unset($this->Article);
        } else {
            $this->Article = $article;
        }
        
        return $this;
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
     * @return \Oihso\CSESDK\StructType\Products
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
     * Get BCProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBCProduct(): ?string
    {
        return $this->BCProduct ?? null;
    }
    /**
     * Set BCProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bCProduct
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setBCProduct(?string $bCProduct = null): self
    {
        // validation for constraint: string
        if (!is_null($bCProduct) && !is_string($bCProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bCProduct, true), gettype($bCProduct)), __LINE__);
        }
        if (is_null($bCProduct) || (is_array($bCProduct) && empty($bCProduct))) {
            unset($this->BCProduct);
        } else {
            $this->BCProduct = $bCProduct;
        }
        
        return $this;
    }
    /**
     * Get Party value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParty(): ?string
    {
        return $this->Party ?? null;
    }
    /**
     * Set Party value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $party
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setParty(?string $party = null): self
    {
        // validation for constraint: string
        if (!is_null($party) && !is_string($party)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($party, true), gettype($party)), __LINE__);
        }
        if (is_null($party) || (is_array($party) && empty($party))) {
            unset($this->Party);
        } else {
            $this->Party = $party;
        }
        
        return $this;
    }
    /**
     * Get DayOfParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDayOfParty(): ?string
    {
        return $this->DayOfParty ?? null;
    }
    /**
     * Set DayOfParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dayOfParty
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setDayOfParty(?string $dayOfParty = null): self
    {
        // validation for constraint: string
        if (!is_null($dayOfParty) && !is_string($dayOfParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dayOfParty, true), gettype($dayOfParty)), __LINE__);
        }
        if (is_null($dayOfParty) || (is_array($dayOfParty) && empty($dayOfParty))) {
            unset($this->DayOfParty);
        } else {
            $this->DayOfParty = $dayOfParty;
        }
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate ?? null;
    }
    /**
     * Set ExpirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->ExpirationDate);
        } else {
            $this->ExpirationDate = $expirationDate;
        }
        
        return $this;
    }
    /**
     * Get SerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return $this->SerialNumber ?? null;
    }
    /**
     * Set SerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serialNumber
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setSerialNumber(?string $serialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->SerialNumber);
        } else {
            $this->SerialNumber = $serialNumber;
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
     * @return \Oihso\CSESDK\StructType\Products
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
     * @return \Oihso\CSESDK\StructType\Products
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
     * @return \Oihso\CSESDK\StructType\Products
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
     * @return \Oihso\CSESDK\StructType\Products
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
    /**
     * Get VATRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVATRate(): ?int
    {
        return $this->VATRate ?? null;
    }
    /**
     * Set VATRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vATRate
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setVATRate(?int $vATRate = null): self
    {
        // validation for constraint: int
        if (!is_null($vATRate) && !(is_int($vATRate) || ctype_digit($vATRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vATRate, true), gettype($vATRate)), __LINE__);
        }
        if (is_null($vATRate) || (is_array($vATRate) && empty($vATRate))) {
            unset($this->VATRate);
        } else {
            $this->VATRate = $vATRate;
        }
        
        return $this;
    }
    /**
     * Get AssessedValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAssessedValue(): ?float
    {
        return $this->AssessedValue ?? null;
    }
    /**
     * Set AssessedValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $assessedValue
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setAssessedValue(?float $assessedValue = null): self
    {
        // validation for constraint: float
        if (!is_null($assessedValue) && !(is_float($assessedValue) || is_numeric($assessedValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assessedValue, true), gettype($assessedValue)), __LINE__);
        }
        if (is_null($assessedValue) || (is_array($assessedValue) && empty($assessedValue))) {
            unset($this->AssessedValue);
        } else {
            $this->AssessedValue = $assessedValue;
        }
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment ?? null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \Oihso\CSESDK\StructType\Products
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
}
