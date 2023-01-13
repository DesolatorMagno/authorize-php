<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType;

use DesolatorMagno\AuthorizePhp\Traits\SerializeSingleTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;
use JsonSerializable;

/**
 * Class representing MessageAType
 */
class MessageAType implements JsonSerializable
{

    use SerializeSingleTrait, SetSerializeTrait;

    private ?string $code = null;


    private ?string $text = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode($code): MessageAType
    {
        $this->code = $code;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): MessageAType
    {
        $this->text = $text;
        return $this;
    }

}
