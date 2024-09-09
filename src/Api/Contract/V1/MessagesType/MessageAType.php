<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType;

use DesolatorMagno\AuthorizePhp\Traits\ATypeSerialize;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing MessageAType
 */
class MessageAType implements JsonSerializable
{
    use ATypeSerialize, SetGlobalTrait;

    /**
     * @property string $code
     */
    private string|null $code = null;

    /**
     * @property string $text
     */
    private string|null $text = null;

    public function getCode(): string|null
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getText(): string|null
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
