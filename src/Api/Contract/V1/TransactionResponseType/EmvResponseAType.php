<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\EmvTagType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing EmvResponseAType
 */
class EmvResponseAType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $tlvData
     */
    private $tlvData = null;

    /**
     * @property EmvTagType[] $tags
     */
    private $tags = null;

    /**
     * Gets as tlvData
     *
     * @return string
     */
    public function getTlvData()
    {
        return $this->tlvData;
    }

    /**
     * Sets a new tlvData
     *
     * @param string $tlvData
     * @return self
     */
    public function setTlvData($tlvData)
    {
        $this->tlvData = $tlvData;
        return $this;
    }

    /**
     * Adds as tag
     *
     * @return self
     * @param EmvTagType $tag
     */
    public function addToTags(EmvTagType $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * isset tags
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTags($index)
    {
        return isset($this->tags[$index]);
    }

    /**
     * unset tags
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTags($index)
    {
        unset($this->tags[$index]);
    }

    /**
     * Gets as tags
     *
     * @return EmvTagType[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets a new tags
     *
     * @param EmvTagType[] $tags
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

}
