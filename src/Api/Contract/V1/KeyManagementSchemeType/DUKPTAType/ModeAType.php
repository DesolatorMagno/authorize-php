<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing ModeAType
 */
class ModeAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $pIN
     */
    private $pIN = null;

    /**
     * @property string $data
     */
    private $data = null;

    /**
     * Gets as pIN
     *
     * @return string
     */
    public function getPIN()
    {
        return $this->pIN;
    }

    /**
     * Sets a new pIN
     *
     * @param string $pIN
     * @return self
     */
    public function setPIN($pIN)
    {
        $this->pIN = $pIN;
        return $this;
    }

    /**
     * Gets as data
     *
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param string $data
     * @return self
     */
    public function setData(string $data): self
    {
        $this->data = $data;
        return $this;
    }

}
