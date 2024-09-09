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
    private MerchantAuthenticationType|null $merchantAuthentication = null;
    private string|null $clientId = null;
    private string|null $refId = null;


    public function getMerchantAuthentication(): MerchantAuthenticationType|null
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
     */
    public function getClientId(): string|null
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getRefId(): string|null
    {
        return $this->refId;
    }

    public function setRefId(string $refId): self
    {
        $this->refId = $refId;
        return $this;
    }

}
