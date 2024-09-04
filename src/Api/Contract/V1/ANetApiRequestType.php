<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing ANetApiRequestType
 *
 *
 * XSD Type: ANetApiRequest
 */
class ANetApiRequestType implements JsonSerializable
{

    use JsonSerializeGlobalTrait, SetGlobalTrait;

    private ?MerchantAuthenticationType $merchantAuthentication = null;

    private ?string $clientId = null;

    private ?string $refId = null;


    public function getMerchantAuthentication(): ?MerchantAuthenticationType
    {
        return $this->merchantAuthentication;
    }

    public function setMerchantAuthentication(MerchantAuthenticationType $merchantAuthentication): self
    {
        $this->merchantAuthentication = $merchantAuthentication;
        return $this;
    }

    /**
     * Gets as clientId
     *
     * @return string
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getRefId(): ?string
    {
        return $this->refId;
    }

    public function setRefId(string $refId): self
    {
        $this->refId = $refId;
        return $this;
    }

}
