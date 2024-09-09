<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing DeviceInfoAType
 */
class DeviceInfoAType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $description
     */
    private string|null $description = null;

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
