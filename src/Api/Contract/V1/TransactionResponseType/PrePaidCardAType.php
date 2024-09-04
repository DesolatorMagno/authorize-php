<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing PrePaidCardAType
 */
class PrePaidCardAType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $requestedAmount
     */
    private ?string $requestedAmount = null;

    /**
     * @property string $approvedAmount
     */
    private ?string $approvedAmount = null;

    /**
     * @property string $balanceOnCard
     */
    private ?string $balanceOnCard = null;

    /**
     * Gets as requestedAmount
     *
     * @return string
     */
    public function getRequestedAmount(): ?string
    {
        return $this->requestedAmount;
    }

    /**
     * Sets a new requestedAmount
     *
     * @param string $requestedAmount
     * @return self
     */
    public function setRequestedAmount(string $requestedAmount): self
    {
        $this->requestedAmount = $requestedAmount;
        return $this;
    }

    /**
     * Gets as approvedAmount
     *
     * @return string
     */
    public function getApprovedAmount(): ?string
    {
        return $this->approvedAmount;
    }

    /**
     * Sets a new approvedAmount
     *
     * @param string $approvedAmount
     * @return self
     */
    public function setApprovedAmount(string $approvedAmount): self
    {
        $this->approvedAmount = $approvedAmount;
        return $this;
    }

    /**
     * Gets as balanceOnCard
     *
     * @return string
     */
    public function getBalanceOnCard(): ?string
    {
        return $this->balanceOnCard;
    }

    /**
     * Sets a new balanceOnCard
     *
     * @param string $balanceOnCard
     * @return self
     */
    public function setBalanceOnCard(string $balanceOnCard): self
    {
        $this->balanceOnCard = $balanceOnCard;
        return $this;
    }

}
