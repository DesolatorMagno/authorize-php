<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Traits\SerializeTrait;
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

    use SerializeTrait;

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

    // Json Set Code

    /**
     * @throws \Exception
     */
    public function set($data)
    {
        if (is_array($data) || is_object($data)) {
            $mapper = Mapper::Instance();
            foreach ($data as $key => $value) {
                $classDetails = $mapper->getClass(get_class(), $key);

                if ($classDetails !== NULL) {
                    if ($classDetails->isArray) {
                        if ($classDetails->isCustomDefined) {
                            foreach ($value as $keyChild => $valueChild) {
                                $type = new $classDetails->className;
                                $type->set($valueChild);
                                $this->{'addTo' . $key}($type);
                            }
                        } else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date') {
                            foreach ($value as $keyChild => $valueChild) {
                                $type = new DateTime($valueChild);
                                $this->{'addTo' . $key}($type);
                            }
                        } else {
                            foreach ($value as $keyChild => $valueChild) {
                                $this->{'addTo' . $key}($valueChild);
                            }
                        }
                    } else {
                        if ($classDetails->isCustomDefined) {
                            $type = new $classDetails->className;
                            $type->set($value);
                            $this->{'set' . $key}($type);
                        } else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date') {
                            $type = new DateTime($value);
                            $this->{'set' . $key}($type);
                        } else {
                            $this->{'set' . $key}($value);
                        }
                    }
                }
            }
        }
    }

}
