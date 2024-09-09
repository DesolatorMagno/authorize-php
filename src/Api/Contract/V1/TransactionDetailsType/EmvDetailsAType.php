<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType\TagAType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing EmvDetailsAType
 */
class EmvDetailsAType implements JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType\TagAType[]
     * $tag
     */
    private $tag = null;

    /**
     * Adds as tag
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType\TagAType
     * $tag
     */
    public function addToTag(TagAType $tag): self
    {
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * isset tag
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTag($index): bool
    {
        return isset($this->tag[$index]);
    }

    /**
     * unset tag
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTag($index)
    {
        unset($this->tag[$index]);
    }

    /**
     * Gets as tag
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType\TagAType[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionDetailsType\EmvDetailsAType\TagAType[]
     * $tag
     * @return self
     */
    public function setTag(array $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

}
