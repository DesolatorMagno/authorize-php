<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Traits\SerializeTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;


/**
 * Class representing ANetApiRequestType
 *
 *
 * XSD Type: ANetApiRequest
 */
class ANetApiRequestType implements JsonSerializable
{

    use SerializeTrait, SetSerializeTrait;

    private ?MerchantAuthenticationType $merchantAuthentication = null;

    private ?string $clientId = null;

    private ?string $refId = null;


    public function getMerchantAuthentication(): ?MerchantAuthenticationType
    {
        return $this->merchantAuthentication;
    }

    public function setMerchantAuthentication(MerchantAuthenticationType $merchantAuthentication): ANetApiRequestType
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

    public function setClientId(string $clientId): ANetApiRequestType
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getRefId(): ?string
    {
        return $this->refId;
    }

    public function setRefId(string $refId): ANetApiRequestType
    {
        $this->refId = $refId;
        return $this;
    }


}
