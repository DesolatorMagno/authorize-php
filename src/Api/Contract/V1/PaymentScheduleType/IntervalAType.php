<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing IntervalAType
 */
class IntervalAType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    private int|null $length = null;

    private string|null $unit = null;

    public function getLength(): int|null
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;
        return $this;
    }

    public function getUnit(): string|null
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
