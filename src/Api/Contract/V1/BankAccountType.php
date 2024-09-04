<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing BankAccountType
 *
 *
 * XSD Type: bankAccountType
 */
class BankAccountType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * @property string $routingNumber
     */
    private $routingNumber = null;

    /**
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property string $nameOnAccount
     */
    private $nameOnAccount = null;

    /**
     * @property string $echeckType
     */
    private $echeckType = null;

    /**
     * @property string $bankName
     */
    private $bankName = null;

    /**
     * @property string $checkNumber
     */
    private $checkNumber = null;

    /**
     * Gets as accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as routingNumber
     *
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * Sets a new routingNumber
     *
     * @param string $routingNumber
     * @return self
     */
    public function setRoutingNumber($routingNumber): self
    {
        $this->routingNumber = $routingNumber;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as nameOnAccount
     *
     * @return string
     */
    public function getNameOnAccount()
    {
        return $this->nameOnAccount;
    }

    /**
     * Sets a new nameOnAccount
     *
     * @param string $nameOnAccount
     * @return self
     */
    public function setNameOnAccount($nameOnAccount): self
    {
        $this->nameOnAccount = $nameOnAccount;
        return $this;
    }

    /**
     * Gets as echeckType
     *
     * @return string
     */
    public function getEcheckType()
    {
        return $this->echeckType;
    }

    /**
     * Sets a new echeckType
     *
     * @param string $echeckType
     * @return self
     */
    public function setEcheckType($echeckType): self
    {
        $this->echeckType = $echeckType;
        return $this;
    }

    /**
     * Gets as bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets a new bankName
     *
     * @param string $bankName
     * @return self
     */
    public function setBankName($bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * Gets as checkNumber
     *
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Sets a new checkNumber
     *
     * @param string $checkNumber
     * @return self
     */
    public function setCheckNumber($checkNumber): self
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

}
