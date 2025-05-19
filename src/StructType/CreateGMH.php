<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateGMH StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateGMH extends AbstractStructBase
{
    /**
     * The data
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $data = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $parameters = null;
    /**
     * Constructor method for CreateGMH
     * @uses CreateGMH::setData()
     * @uses CreateGMH::setLogin()
     * @uses CreateGMH::setPassword()
     * @uses CreateGMH::setParameters()
     * @param \Oihso\CSESDK\StructType\Element $data
     * @param string $login
     * @param string $password
     * @param \Oihso\CSESDK\StructType\Element $parameters
     */
    public function __construct(?\Oihso\CSESDK\StructType\Element $data = null, ?string $login = null, ?string $password = null, ?\Oihso\CSESDK\StructType\Element $parameters = null)
    {
        $this
            ->setData($data)
            ->setLogin($login)
            ->setPassword($password)
            ->setParameters($parameters);
    }
    /**
     * Get data value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getData(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Oihso\CSESDK\StructType\Element $data
     * @return \Oihso\CSESDK\StructType\CreateGMH
     */
    public function setData(?\Oihso\CSESDK\StructType\Element $data = null): self
    {
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \Oihso\CSESDK\StructType\CreateGMH
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->Login = $login;
        
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Oihso\CSESDK\StructType\CreateGMH
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        
        return $this;
    }
    /**
     * Get parameters value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getParameters(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \Oihso\CSESDK\StructType\Element $parameters
     * @return \Oihso\CSESDK\StructType\CreateGMH
     */
    public function setParameters(?\Oihso\CSESDK\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
