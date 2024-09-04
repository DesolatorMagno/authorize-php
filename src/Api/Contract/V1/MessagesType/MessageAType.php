<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType;

use DesolatorMagno\AuthorizePhp\Traits\ATypeSerialize;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing MessageAType
 */
class MessageAType implements \JsonSerializable
{
    use ATypeSerialize, SetGlobalTrait;

    /**
     * @property string $code
     */
    private ?string $code = null;

    /**
     * @property string $text
     */
    private ?string $text = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
