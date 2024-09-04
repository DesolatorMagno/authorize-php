<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing IntervalAType
 */
class IntervalAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    private ?int $length = null;

    private ?string $unit = null;

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;
        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

}
