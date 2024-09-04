<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing ProfileTransAmountType
 *
 *
 * XSD Type: profileTransAmountType
 */
class ProfileTransAmountType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     */
    private $tax = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     */
    private $shipping = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     */
    private $duty = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     */
    private $lineItems = null;

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as tax
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     * @return self
     */
    public function setTax(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as shipping
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets a new shipping
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     * @return self
     */
    public function setShipping(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * Gets as duty
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     * @return self
     */
    public function setDuty(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Adds as lineItems
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItems
     *@return self
     */
    public function addToLineItems(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItems)
    {
        $this->lineItems[] = $lineItems;
        return $this;
    }

    /**
     * isset lineItems
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLineItems($index)
    {
        return isset($this->lineItems[$index]);
    }

    /**
     * unset lineItems
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLineItems($index)
    {
        unset($this->lineItems[$index]);
    }

    /**
     * Gets as lineItems
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * Sets a new lineItems
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }

}
