<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutReferenceData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PutReferenceData extends AbstractStructBase
{
    /**
     * The data
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $data = null;
    /**
     * The login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $parameters = null;
    /**
     * Constructor method for PutReferenceData
     * @uses PutReferenceData::setData()
     * @uses PutReferenceData::setLogin()
     * @uses PutReferenceData::setPassword()
     * @uses PutReferenceData::setParameters()
     * @param \StructType\Element $data
     * @param string $login
     * @param string $password
     * @param \StructType\Element $parameters
     */
    public function __construct(?\StructType\Element $data = null, ?string $login = null, ?string $password = null, ?\StructType\Element $parameters = null)
    {
        $this
            ->setData($data)
            ->setLogin($login)
            ->setPassword($password)
            ->setParameters($parameters);
    }
    /**
     * Get data value
     * @return \StructType\Element|null
     */
    public function getData(): ?\StructType\Element
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \StructType\Element $data
     * @return \StructType\PutReferenceData
     */
    public function setData(?\StructType\Element $data = null): self
    {
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \StructType\PutReferenceData
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\PutReferenceData
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get parameters value
     * @return \StructType\Element|null
     */
    public function getParameters(): ?\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \StructType\Element $parameters
     * @return \StructType\PutReferenceData
     */
    public function setParameters(?\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
