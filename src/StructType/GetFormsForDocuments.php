<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFormsForDocuments StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFormsForDocuments extends AbstractStructBase
{
    /**
     * The documents
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $documents = null;
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
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $parameters = null;
    /**
     * Constructor method for GetFormsForDocuments
     * @uses GetFormsForDocuments::setDocuments()
     * @uses GetFormsForDocuments::setLogin()
     * @uses GetFormsForDocuments::setPassword()
     * @uses GetFormsForDocuments::setParameters()
     * @param \Oihso\CSESDK\StructType\Element $documents
     * @param string $login
     * @param string $password
     * @param \Oihso\CSESDK\StructType\Element $parameters
     */
    public function __construct(?\Oihso\CSESDK\StructType\Element $documents = null, ?string $login = null, ?string $password = null, ?\Oihso\CSESDK\StructType\Element $parameters = null)
    {
        $this
            ->setDocuments($documents)
            ->setLogin($login)
            ->setPassword($password)
            ->setParameters($parameters);
    }
    /**
     * Get documents value
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getDocuments(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \Oihso\CSESDK\StructType\Element $documents
     * @return \Oihso\CSESDK\StructType\GetFormsForDocuments
     */
    public function setDocuments(?\Oihso\CSESDK\StructType\Element $documents = null): self
    {
        $this->documents = $documents;
        
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
     * @return \Oihso\CSESDK\StructType\GetFormsForDocuments
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
     * @return \Oihso\CSESDK\StructType\GetFormsForDocuments
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
     * @return \Oihso\CSESDK\StructType\Element|null
     */
    public function getParameters(): ?\Oihso\CSESDK\StructType\Element
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \Oihso\CSESDK\StructType\Element $parameters
     * @return \Oihso\CSESDK\StructType\GetFormsForDocuments
     */
    public function setParameters(?\Oihso\CSESDK\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
}
