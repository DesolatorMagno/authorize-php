<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing MessageAType
 */
class MessageAType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $code
     */
    private string|null $code = null;

    /**
     * @property string $description
     */
    private string|null $description = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode(): string|null
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription(): string|null
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

}
