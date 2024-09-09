<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing ANetApiResponseType
 *
 *
 * XSD Type: ANetApiResponse
 */
class ANetApiResponseType implements JsonSerializable
{

    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property string $refId
     */
    private $refId = null;

    /**
     * @property MessagesType $messages
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
    public function setRefId($refId): self
    {
        $this->refId = $refId;
        return $this;
    }

    /**
     * Gets as messages
     *
     * @return MessagesType
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * @param MessagesType $messages
     * @return self
     */
    public function setMessages(MessagesType $messages): self
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Gets as sessionToken
     *
     * @return string
     */
    public function getSessionToken(): ?string
    {
        return $this->sessionToken;
    }

    /**
     * Sets a new sessionToken
     *
     * @param string $sessionToken
     * @return self
     */
    public function setSessionToken(string $sessionToken): self
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

}
