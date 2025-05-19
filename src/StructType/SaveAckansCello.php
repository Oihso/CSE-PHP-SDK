<?php

declare(strict_types=1);

namespace Oihso\CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAckansCello StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAckansCello extends AbstractStructBase
{
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
     * The data
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $data = null;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Oihso\CSESDK\StructType\Element|null
     */
    protected ?\Oihso\CSESDK\StructType\Element $parameters = null;
    /**
     * The log
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $log = null;
    /**
     * Constructor method for SaveAckansCello
     * @uses SaveAckansCello::setLogin()
     * @uses SaveAckansCello::setPassword()
     * @uses SaveAckansCello::setData()
     * @uses SaveAckansCello::setParameters()
     * @uses SaveAckansCello::setLog()
     * @param string $login
     * @param string $password
     * @param \Oihso\CSESDK\StructType\Element $data
     * @param \Oihso\CSESDK\StructType\Element $parameters
     * @param string $log
     */
    public function __construct(?string $login = null, ?string $password = null, ?\Oihso\CSESDK\StructType\Element $data = null, ?\Oihso\CSESDK\StructType\Element $parameters = null, ?string $log = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setData($data)
            ->setParameters($parameters)
            ->setLog($log);
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
     * @return \Oihso\CSESDK\StructType\SaveAckansCello
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
     * @return \Oihso\CSESDK\StructType\SaveAckansCello
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
     * @return \Oihso\CSESDK\StructType\SaveAckansCello
     */
    public function setData(?\Oihso\CSESDK\StructType\Element $data = null): self
    {
        $this->data = $data;
        
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
     * @return \Oihso\CSESDK\StructType\SaveAckansCello
     */
    public function setParameters(?\Oihso\CSESDK\StructType\Element $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
    /**
     * Get log value
     * @return string|null
     */
    public function getLog(): ?string
    {
        return $this->log;
    }
    /**
     * Set log value
     * @param string $log
     * @return \Oihso\CSESDK\StructType\SaveAckansCello
     */
    public function setLog(?string $log = null): self
    {
        // validation for constraint: string
        if (!is_null($log) && !is_string($log)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($log, true), gettype($log)), __LINE__);
        }
        $this->log = $log;
        
        return $this;
    }
}
