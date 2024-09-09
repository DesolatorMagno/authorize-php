<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing SplitTenderPaymentsAType
 */
class SplitTenderPaymentsAType implements JsonSerializable
{
    Use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     * $splitTenderPayment
     */
    private $splitTenderPayment = null;

    /**
     * Adds as splitTenderPayment
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType
     * $splitTenderPayment
     */
    public function addToSplitTenderPayment(SplitTenderPaymentAType $splitTenderPayment): self
    {
        $this->splitTenderPayment[] = $splitTenderPayment;
        return $this;
    }

    /**
     * isset splitTenderPayment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSplitTenderPayment($index)
    {
        return isset($this->splitTenderPayment[$index]);
    }

    /**
     * unset splitTenderPayment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSplitTenderPayment($index)
    {
        unset($this->splitTenderPayment[$index]);
    }

    /**
     * Gets as splitTenderPayment
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     */
    public function getSplitTenderPayment()
    {
        return $this->splitTenderPayment;
    }

    /**
     * Sets a new splitTenderPayment
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     * $splitTenderPayment
     * @return self
     */
    public function setSplitTenderPayment(array $splitTenderPayment): self
    {
        $this->splitTenderPayment = $splitTenderPayment;
        return $this;
    }

}
