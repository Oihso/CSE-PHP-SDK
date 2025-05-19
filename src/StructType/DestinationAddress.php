<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationAddress StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationAddress extends AbstractStructBase
{
    /**
     * The FreeForm
     * @var bool|null
     */
    protected ?bool $FreeForm = null;
    /**
     * The Geography
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Geography = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The TypeOfHome
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfHome = null;
    /**
     * The Home
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Home = null;
    /**
     * The TypeOfBuilding
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfBuilding = null;
    /**
     * The Building
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Building = null;
    /**
     * The TypeOfApartment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfApartment = null;
    /**
     * The Apartment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Apartment = null;
    /**
     * The Index
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Index = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Info = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The Region
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Region = null;
    /**
     * The Disrcict
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Disrcict = null;
    /**
     * Constructor method for DestinationAddress
     * @uses DestinationAddress::setFreeForm()
     * @uses DestinationAddress::setGeography()
     * @uses DestinationAddress::setStreet()
     * @uses DestinationAddress::setTypeOfHome()
     * @uses DestinationAddress::setHome()
     * @uses DestinationAddress::setTypeOfBuilding()
     * @uses DestinationAddress::setBuilding()
     * @uses DestinationAddress::setTypeOfApartment()
     * @uses DestinationAddress::setApartment()
     * @uses DestinationAddress::setIndex()
     * @uses DestinationAddress::setInfo()
     * @uses DestinationAddress::setComment()
     * @uses DestinationAddress::setCountry()
     * @uses DestinationAddress::setRegion()
     * @uses DestinationAddress::setDisrcict()
     * @param bool $freeForm
     * @param string $geography
     * @param string $street
     * @param string $typeOfHome
     * @param string $home
     * @param string $typeOfBuilding
     * @param string $building
     * @param string $typeOfApartment
     * @param string $apartment
     * @param string $index
     * @param string $info
     * @param string $comment
     * @param string $country
     * @param string $region
     * @param string $disrcict
     */
    public function __construct(?bool $freeForm = null, ?string $geography = null, ?string $street = null, ?string $typeOfHome = null, ?string $home = null, ?string $typeOfBuilding = null, ?string $building = null, ?string $typeOfApartment = null, ?string $apartment = null, ?string $index = null, ?string $info = null, ?string $comment = null, ?string $country = null, ?string $region = null, ?string $disrcict = null)
    {
        $this
            ->setFreeForm($freeForm)
            ->setGeography($geography)
            ->setStreet($street)
            ->setTypeOfHome($typeOfHome)
            ->setHome($home)
            ->setTypeOfBuilding($typeOfBuilding)
            ->setBuilding($building)
            ->setTypeOfApartment($typeOfApartment)
            ->setApartment($apartment)
            ->setIndex($index)
            ->setInfo($info)
            ->setComment($comment)
            ->setCountry($country)
            ->setRegion($region)
            ->setDisrcict($disrcict);
    }
    /**
     * Get FreeForm value
     * @return bool|null
     */
    public function getFreeForm(): ?bool
    {
        return $this->FreeForm;
    }
    /**
     * Set FreeForm value
     * @param bool $freeForm
     * @return \StructType\DestinationAddress
     */
    public function setFreeForm(?bool $freeForm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freeForm) && !is_bool($freeForm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeForm, true), gettype($freeForm)), __LINE__);
        }
        $this->FreeForm = $freeForm;
        
        return $this;
    }
    /**
     * Get Geography value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGeography(): ?string
    {
        return $this->Geography ?? null;
    }
    /**
     * Set Geography value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $geography
     * @return \StructType\DestinationAddress
     */
    public function setGeography(?string $geography = null): self
    {
        // validation for constraint: string
        if (!is_null($geography) && !is_string($geography)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geography, true), gettype($geography)), __LINE__);
        }
        if (is_null($geography) || (is_array($geography) && empty($geography))) {
            unset($this->Geography);
        } else {
            $this->Geography = $geography;
        }
        
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street ?? null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \StructType\DestinationAddress
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->Street);
        } else {
            $this->Street = $street;
        }
        
        return $this;
    }
    /**
     * Get TypeOfHome value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfHome(): ?string
    {
        return $this->TypeOfHome ?? null;
    }
    /**
     * Set TypeOfHome value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfHome
     * @return \StructType\DestinationAddress
     */
    public function setTypeOfHome(?string $typeOfHome = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfHome) && !is_string($typeOfHome)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfHome, true), gettype($typeOfHome)), __LINE__);
        }
        if (is_null($typeOfHome) || (is_array($typeOfHome) && empty($typeOfHome))) {
            unset($this->TypeOfHome);
        } else {
            $this->TypeOfHome = $typeOfHome;
        }
        
        return $this;
    }
    /**
     * Get Home value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHome(): ?string
    {
        return $this->Home ?? null;
    }
    /**
     * Set Home value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $home
     * @return \StructType\DestinationAddress
     */
    public function setHome(?string $home = null): self
    {
        // validation for constraint: string
        if (!is_null($home) && !is_string($home)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($home, true), gettype($home)), __LINE__);
        }
        if (is_null($home) || (is_array($home) && empty($home))) {
            unset($this->Home);
        } else {
            $this->Home = $home;
        }
        
        return $this;
    }
    /**
     * Get TypeOfBuilding value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfBuilding(): ?string
    {
        return $this->TypeOfBuilding ?? null;
    }
    /**
     * Set TypeOfBuilding value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfBuilding
     * @return \StructType\DestinationAddress
     */
    public function setTypeOfBuilding(?string $typeOfBuilding = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfBuilding) && !is_string($typeOfBuilding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfBuilding, true), gettype($typeOfBuilding)), __LINE__);
        }
        if (is_null($typeOfBuilding) || (is_array($typeOfBuilding) && empty($typeOfBuilding))) {
            unset($this->TypeOfBuilding);
        } else {
            $this->TypeOfBuilding = $typeOfBuilding;
        }
        
        return $this;
    }
    /**
     * Get Building value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuilding(): ?string
    {
        return $this->Building ?? null;
    }
    /**
     * Set Building value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $building
     * @return \StructType\DestinationAddress
     */
    public function setBuilding(?string $building = null): self
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($building, true), gettype($building)), __LINE__);
        }
        if (is_null($building) || (is_array($building) && empty($building))) {
            unset($this->Building);
        } else {
            $this->Building = $building;
        }
        
        return $this;
    }
    /**
     * Get TypeOfApartment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfApartment(): ?string
    {
        return $this->TypeOfApartment ?? null;
    }
    /**
     * Set TypeOfApartment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfApartment
     * @return \StructType\DestinationAddress
     */
    public function setTypeOfApartment(?string $typeOfApartment = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfApartment) && !is_string($typeOfApartment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfApartment, true), gettype($typeOfApartment)), __LINE__);
        }
        if (is_null($typeOfApartment) || (is_array($typeOfApartment) && empty($typeOfApartment))) {
            unset($this->TypeOfApartment);
        } else {
            $this->TypeOfApartment = $typeOfApartment;
        }
        
        return $this;
    }
    /**
     * Get Apartment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getApartment(): ?string
    {
        return $this->Apartment ?? null;
    }
    /**
     * Set Apartment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $apartment
     * @return \StructType\DestinationAddress
     */
    public function setApartment(?string $apartment = null): self
    {
        // validation for constraint: string
        if (!is_null($apartment) && !is_string($apartment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartment, true), gettype($apartment)), __LINE__);
        }
        if (is_null($apartment) || (is_array($apartment) && empty($apartment))) {
            unset($this->Apartment);
        } else {
            $this->Apartment = $apartment;
        }
        
        return $this;
    }
    /**
     * Get Index value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIndex(): ?string
    {
        return $this->Index ?? null;
    }
    /**
     * Set Index value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $index
     * @return \StructType\DestinationAddress
     */
    public function setIndex(?string $index = null): self
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($index, true), gettype($index)), __LINE__);
        }
        if (is_null($index) || (is_array($index) && empty($index))) {
            unset($this->Index);
        } else {
            $this->Index = $index;
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
     * @return \StructType\DestinationAddress
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
     * @return \StructType\DestinationAddress
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
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country ?? null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \StructType\DestinationAddress
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * Get Region value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->Region ?? null;
    }
    /**
     * Set Region value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $region
     * @return \StructType\DestinationAddress
     */
    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        if (is_null($region) || (is_array($region) && empty($region))) {
            unset($this->Region);
        } else {
            $this->Region = $region;
        }
        
        return $this;
    }
    /**
     * Get Disrcict value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisrcict(): ?string
    {
        return $this->Disrcict ?? null;
    }
    /**
     * Set Disrcict value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $disrcict
     * @return \StructType\DestinationAddress
     */
    public function setDisrcict(?string $disrcict = null): self
    {
        // validation for constraint: string
        if (!is_null($disrcict) && !is_string($disrcict)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disrcict, true), gettype($disrcict)), __LINE__);
        }
        if (is_null($disrcict) || (is_array($disrcict) && empty($disrcict))) {
            unset($this->Disrcict);
        } else {
            $this->Disrcict = $disrcict;
        }
        
        return $this;
    }
}
