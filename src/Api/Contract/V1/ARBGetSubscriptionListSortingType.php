<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing ARBGetSubscriptionListSortingType
 *
 *
 * XSD Type: ARBGetSubscriptionListSorting
 */
class ARBGetSubscriptionListSortingType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property string $orderBy
     */
    private $orderBy = null;

    /**
     * @property boolean $orderDescending
     */
    private $orderDescending = null;

    /**
     * Gets as orderBy
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Sets a new orderBy
     *
     * @param string $orderBy
     * @return self
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * Gets as orderDescending
     *
     * @return boolean
     */
    public function getOrderDescending()
    {
        return $this->orderDescending;
    }

    /**
     * Sets a new orderDescending
     *
     * @param boolean $orderDescending
     * @return self
     */
    public function setOrderDescending(bool $orderDescending): self
    {
        $this->orderDescending = $orderDescending;
        return $this;
    }

}
