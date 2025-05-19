<?php

declare(strict_types=1);

namespace CSESDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOwnerOfTheGoods StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOwnerOfTheGoods extends AbstractStructBase
{
    /**
     * The Password
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The ListAccount
     * @var \StructType\ArrayClientAccount|null
     */
    protected ?\StructType\ArrayClientAccount $ListAccount = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * Constructor method for SaveOwnerOfTheGoods
     * @uses SaveOwnerOfTheGoods::setPassword()
     * @uses SaveOwnerOfTheGoods::setListAccount()
     * @uses SaveOwnerOfTheGoods::setLogin()
     * @param string $password
     * @param \StructType\ArrayClientAccount $listAccount
     * @param string $login
     */
    public function __construct(?string $password = null, ?\StructType\ArrayClientAccount $listAccount = null, ?string $login = null)
    {
        $this
            ->setPassword($password)
            ->setListAccount($listAccount)
            ->setLogin($login);
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
     * @return \StructType\SaveOwnerOfTheGoods
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
     * Get ListAccount value
     * @return \StructType\ArrayClientAccount|null
     */
    public function getListAccount(): ?\StructType\ArrayClientAccount
    {
        return $this->ListAccount;
    }
    /**
     * Set ListAccount value
     * @param \StructType\ArrayClientAccount $listAccount
     * @return \StructType\SaveOwnerOfTheGoods
     */
    public function setListAccount(?\StructType\ArrayClientAccount $listAccount = null): self
    {
        $this->ListAccount = $listAccount;
        
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
     * @return \StructType\SaveOwnerOfTheGoods
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
}
