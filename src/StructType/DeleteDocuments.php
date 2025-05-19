<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocuments StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDocuments extends AbstractStructBase
{
    /**
     * The parameters
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $parameters = null;
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
     * Constructor method for DeleteDocuments
     * @uses DeleteDocuments::setParameters()
     * @uses DeleteDocuments::setLogin()
     * @uses DeleteDocuments::setPassword()
     * @param \Oihso\CSESDK\StructType\Element $parameters
     * @param string $login
     * @param string $password
     */
    public function __construct(?\Oihso\CSESDK\StructType\Element $parameters = null, ?string $login = null, ?string $password = null)
    {
        $this
            ->setParameters($parameters)
            ->setLogin($login)
            ->setPassword($password);
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
     * @return \Oihso\CSESDK\StructType\DeleteDocuments
     */
    public function setParameters(?\Oihso\CSESDK\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
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
     * @return \Oihso\CSESDK\StructType\DeleteDocuments
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
     * @return \Oihso\CSESDK\StructType\DeleteDocuments
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
}
