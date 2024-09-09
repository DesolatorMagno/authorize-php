<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing TagAType
 */
class TagAType implements JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;

    private string|null $tagId = null;

    private string|null $data = null;

    public function getTagId(): string|null
    {
        return $this->tagId;
    }

    public function setTagId(string $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }

    public function getData(): string|null
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;
        return $this;
    }

}
