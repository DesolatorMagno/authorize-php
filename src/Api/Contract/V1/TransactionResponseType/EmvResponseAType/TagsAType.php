<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing TagsAType
 */
class TagsAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType[] $tag
     */
    private $tag = null;

    /**
     * Adds as tag
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType $tag
     *@return self
     */
    public function addToTag(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType $tag)
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
    public function issetTag($index)
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
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType[] $tag
     * @return self
     */
    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }

}
