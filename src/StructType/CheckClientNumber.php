<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckClientNumber StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckClientNumber extends AbstractStructBase
{
    /**
     * The data
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $data = null;
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
     * @var \StructType\Element|null
     */
    protected ?\StructType\Element $parameters = null;
    /**
     * Constructor method for CheckClientNumber
     * @uses CheckClientNumber::setData()
     * @uses CheckClientNumber::setLogin()
     * @uses CheckClientNumber::setPassword()
     * @uses CheckClientNumber::setParameters()
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
     * @return \StructType\CheckClientNumber
     */
    public function setData(?\StructType\Element $data = null): self
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
     * @return \StructType\CheckClientNumber
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
     * @return \StructType\CheckClientNumber
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
     * @return \StructType\Element|null
     */
    public function getParameters(): ?\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \StructType\Element $parameters
     * @return \StructType\CheckClientNumber
     */
    public function setParameters(?\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
