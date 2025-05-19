<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayClientAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ArrayClientAccount extends AbstractStructBase
{
    /**
     * The OwnerName
     * @var string|null
     */
    protected ?string $OwnerName = null;
    /**
     * The OwnerLegalName
     * @var string|null
     */
    protected ?string $OwnerLegalName = null;
    /**
     * The OwnerINN
     * @var string|null
     */
    protected ?string $OwnerINN = null;
    /**
     * The OwnerKPP
     * @var string|null
     */
    protected ?string $OwnerKPP = null;
    /**
     * The AccountName
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * The AccountBIK
     * @var string|null
     */
    protected ?string $AccountBIK = null;
    /**
     * The AccountNumber
     * @var string|null
     */
    protected ?string $AccountNumber = null;
    /**
     * Constructor method for ArrayClientAccount
     * @uses ArrayClientAccount::setOwnerName()
     * @uses ArrayClientAccount::setOwnerLegalName()
     * @uses ArrayClientAccount::setOwnerINN()
     * @uses ArrayClientAccount::setOwnerKPP()
     * @uses ArrayClientAccount::setAccountName()
     * @uses ArrayClientAccount::setAccountBIK()
     * @uses ArrayClientAccount::setAccountNumber()
     * @param string $ownerName
     * @param string $ownerLegalName
     * @param string $ownerINN
     * @param string $ownerKPP
     * @param string $accountName
     * @param string $accountBIK
     * @param string $accountNumber
     */
    public function __construct(?string $ownerName = null, ?string $ownerLegalName = null, ?string $ownerINN = null, ?string $ownerKPP = null, ?string $accountName = null, ?string $accountBIK = null, ?string $accountNumber = null)
    {
        $this
            ->setOwnerName($ownerName)
            ->setOwnerLegalName($ownerLegalName)
            ->setOwnerINN($ownerINN)
            ->setOwnerKPP($ownerKPP)
            ->setAccountName($accountName)
            ->setAccountBIK($accountBIK)
            ->setAccountNumber($accountNumber);
    }
    /**
     * Get OwnerName value
     * @return string|null
     */
    public function getOwnerName(): ?string
    {
        return $this->OwnerName;
    }
    /**
     * Set OwnerName value
     * @param string $ownerName
     * @return \StructType\ArrayClientAccount
     */
    public function setOwnerName(?string $ownerName = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerName) && !is_string($ownerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerName, true), gettype($ownerName)), __LINE__);
        }
        $this->OwnerName = $ownerName;
        
        return $this;
    }
    /**
     * Get OwnerLegalName value
     * @return string|null
     */
    public function getOwnerLegalName(): ?string
    {
        return $this->OwnerLegalName;
    }
    /**
     * Set OwnerLegalName value
     * @param string $ownerLegalName
     * @return \StructType\ArrayClientAccount
     */
    public function setOwnerLegalName(?string $ownerLegalName = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerLegalName) && !is_string($ownerLegalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerLegalName, true), gettype($ownerLegalName)), __LINE__);
        }
        $this->OwnerLegalName = $ownerLegalName;
        
        return $this;
    }
    /**
     * Get OwnerINN value
     * @return string|null
     */
    public function getOwnerINN(): ?string
    {
        return $this->OwnerINN;
    }
    /**
     * Set OwnerINN value
     * @param string $ownerINN
     * @return \StructType\ArrayClientAccount
     */
    public function setOwnerINN(?string $ownerINN = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerINN) && !is_string($ownerINN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerINN, true), gettype($ownerINN)), __LINE__);
        }
        $this->OwnerINN = $ownerINN;
        
        return $this;
    }
    /**
     * Get OwnerKPP value
     * @return string|null
     */
    public function getOwnerKPP(): ?string
    {
        return $this->OwnerKPP;
    }
    /**
     * Set OwnerKPP value
     * @param string $ownerKPP
     * @return \StructType\ArrayClientAccount
     */
    public function setOwnerKPP(?string $ownerKPP = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerKPP) && !is_string($ownerKPP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerKPP, true), gettype($ownerKPP)), __LINE__);
        }
        $this->OwnerKPP = $ownerKPP;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\ArrayClientAccount
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
        return $this;
    }
    /**
     * Get AccountBIK value
     * @return string|null
     */
    public function getAccountBIK(): ?string
    {
        return $this->AccountBIK;
    }
    /**
     * Set AccountBIK value
     * @param string $accountBIK
     * @return \StructType\ArrayClientAccount
     */
    public function setAccountBIK(?string $accountBIK = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBIK) && !is_string($accountBIK)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBIK, true), gettype($accountBIK)), __LINE__);
        }
        $this->AccountBIK = $accountBIK;
        
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \StructType\ArrayClientAccount
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        
        return $this;
    }
}
