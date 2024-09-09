<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing ProfileTransAmountType
 *
 *
 * XSD Type: profileTransAmountType
 */
class ProfileTransAmountType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property ExtendedAmountType $tax
     */
    private $tax = null;

    /**
     * @property ExtendedAmountType $shipping
     */
    private $shipping = null;

    /**
     * @property ExtendedAmountType $duty
     */
    private $duty = null;

    /**
     * @property LineItemType[] $lineItems
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
     * @return ExtendedAmountType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param ExtendedAmountType $tax
     * @return self
     */
    public function setTax(ExtendedAmountType $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as shipping
     *
     * @return ExtendedAmountType
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets a new shipping
     *
     * @param ExtendedAmountType $shipping
     * @return self
     */
    public function setShipping(ExtendedAmountType $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * Gets as duty
     *
     * @return ExtendedAmountType
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param ExtendedAmountType $duty
     * @return self
     */
    public function setDuty(ExtendedAmountType $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Adds as lineItems
     *
     * @param LineItemType $lineItems
     *@return self
     */
    public function addToLineItems(LineItemType $lineItems)
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
     * @return LineItemType[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * Sets a new lineItems
     *
     * @param LineItemType[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }

}
