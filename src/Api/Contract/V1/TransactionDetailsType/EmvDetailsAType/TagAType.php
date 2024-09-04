<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing TagAType
 */
class TagAType implements \JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;

    private ?string $tagId = null;

    private ?string $data = null;

    public function getTagId(): ?string
    {
        return $this->tagId;
    }

    public function setTagId(string $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;
        return $this;
    }

}
