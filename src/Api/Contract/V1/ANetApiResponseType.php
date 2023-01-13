<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeSingleTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;

/**
 * Class representing ANetApiResponseType
 *
 *
 * XSD Type: ANetApiResponse
 */
class ANetApiResponseType implements \JsonSerializable
{

    use SerializeSingleTrait, SetSerializeTrait;

    /**
     * @property string $refId
     */
    private $refId = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType $messages
     */
    private $messages = null;

    /**
     * @property string $sessionToken
     */
    private $sessionToken = null;

    /**
     * Gets as refId
     *
     * @return string
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Sets a new refId
     *
     * @param string $refId
     * @return self
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;
        return $this;
    }

    /**
     * Gets as messages
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType $messages
     * @return self
     */
    public function setMessages(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Gets as sessionToken
     *
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * Sets a new sessionToken
     *
     * @param string $sessionToken
     * @return self
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

}
