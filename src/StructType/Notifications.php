<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notifications StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Notifications extends AbstractStructBase
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
     * The SMS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $SMS = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $Email = null;
    /**
     * Constructor method for Notifications
     * @uses Notifications::setName()
     * @uses Notifications::setSMS()
     * @uses Notifications::setEmail()
     * @param string $name
     * @param bool $sMS
     * @param bool $email
     */
    public function __construct(?string $name = null, ?bool $sMS = null, ?bool $email = null)
    {
        $this
            ->setName($name)
            ->setSMS($sMS)
            ->setEmail($email);
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
     * @return \Oihso\CSESDK\StructType\Notifications
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
     * Get SMS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSMS(): ?bool
    {
        return $this->SMS ?? null;
    }
    /**
     * Set SMS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $sMS
     * @return \Oihso\CSESDK\StructType\Notifications
     */
    public function setSMS(?bool $sMS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sMS) && !is_bool($sMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sMS, true), gettype($sMS)), __LINE__);
        }
        if (is_null($sMS) || (is_array($sMS) && empty($sMS))) {
            unset($this->SMS);
        } else {
            $this->SMS = $sMS;
        }
        
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getEmail(): ?bool
    {
        return $this->Email ?? null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $email
     * @return \Oihso\CSESDK\StructType\Notifications
     */
    public function setEmail(?bool $email = null): self
    {
        // validation for constraint: boolean
        if (!is_null($email) && !is_bool($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
        return $this;
    }
}
