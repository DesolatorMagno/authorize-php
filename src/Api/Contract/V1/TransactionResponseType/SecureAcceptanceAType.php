<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing SecureAcceptanceAType
 */
class SecureAcceptanceAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $secureAcceptanceUrl
     */
    private ?string $secureAcceptanceUrl = null;

    /**
     * @property string $payerID
     */
    private ?string $payerID = null;

    /**
     * @property string $payerEmail
     */
    private ?string $payerEmail = null;

    /**
     * Gets as secureAcceptanceUrl
     *
     * @return string
     */
    public function getSecureAcceptanceUrl(): ?string
    {
        return $this->secureAcceptanceUrl;
    }

    /**
     * Sets a new secureAcceptanceUrl
     *
     * @param string $secureAcceptanceUrl
     * @return self
     */
    public function setSecureAcceptanceUrl(string $secureAcceptanceUrl): self
    {
        $this->secureAcceptanceUrl = $secureAcceptanceUrl;
        return $this;
    }

    /**
     * Gets as payerID
     *
     * @return string
     */
    public function getPayerID(): ?string
    {
        return $this->payerID;
    }

    /**
     * Sets a new payerID
     *
     * @param string $payerID
     * @return self
     */
    public function setPayerID(string $payerID): self
    {
        $this->payerID = $payerID;
        return $this;
    }

    /**
     * Gets as payerEmail
     *
     * @return string
     */
    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    /**
     * Sets a new payerEmail
     *
     * @param string $payerEmail
     * @return self
     */
    public function setPayerEmail(string $payerEmail): self
    {
        $this->payerEmail = $payerEmail;
        return $this;
    }

}
