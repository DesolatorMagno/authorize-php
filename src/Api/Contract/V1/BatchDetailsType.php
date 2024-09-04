<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing BatchDetailsType
 *
 *
 * XSD Type: batchDetailsType
 */
class BatchDetailsType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $batchId
     */
    private $batchId = null;

    /**
     * @property \DateTime $settlementTimeUTC
     */
    private $settlementTimeUTC = null;

    /**
     * @property \DateTime $settlementTimeLocal
     */
    private $settlementTimeLocal = null;

    /**
     * @property string $settlementState
     */
    private $settlementState = null;

    /**
     * @property string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * @property string $marketType
     */
    private $marketType = null;

    /**
     * @property string $product
     */
    private $product = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchStatisticType[] $statistics
     */
    private $statistics = null;

    /**
     * Gets as batchId
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * Sets a new batchId
     *
     * @param string $batchId
     * @return self
     */
    public function setBatchId($batchId): self
    {
        $this->batchId = $batchId;
        return $this;
    }

    /**
     * Gets as settlementTimeUTC
     *
     * @return \DateTime
     */
    public function getSettlementTimeUTC()
    {
        return $this->settlementTimeUTC;
    }

    /**
     * Sets a new settlementTimeUTC
     *
     * @param \DateTime $settlementTimeUTC
     * @return self
     */
    public function setSettlementTimeUTC(\DateTime $settlementTimeUTC): self
    {
        $this->settlementTimeUTC = $settlementTimeUTC;
        return $this;
    }

    /**
     * Gets as settlementTimeLocal
     *
     * @return \DateTime
     */
    public function getSettlementTimeLocal()
    {
        return $this->settlementTimeLocal;
    }

    /**
     * Sets a new settlementTimeLocal
     *
     * @param \DateTime $settlementTimeLocal
     * @return self
     */
    public function setSettlementTimeLocal(\DateTime $settlementTimeLocal): self
    {
        $this->settlementTimeLocal = $settlementTimeLocal;
        return $this;
    }

    /**
     * Gets as settlementState
     *
     * @return string
     */
    public function getSettlementState()
    {
        return $this->settlementState;
    }

    /**
     * Sets a new settlementState
     *
     * @param string $settlementState
     * @return self
     */
    public function setSettlementState($settlementState): self
    {
        $this->settlementState = $settlementState;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as marketType
     *
     * @return string
     */
    public function getMarketType()
    {
        return $this->marketType;
    }

    /**
     * Sets a new marketType
     *
     * @param string $marketType
     * @return self
     */
    public function setMarketType($marketType): self
    {
        $this->marketType = $marketType;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param string $product
     * @return self
     */
    public function setProduct($product): self
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Adds as statistic
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchStatisticType $statistic
     *@return self
     */
    public function addToStatistics(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchStatisticType $statistic): self
    {
        $this->statistics[] = $statistic;
        return $this;
    }

    /**
     * isset statistics
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatistics($index)
    {
        return isset($this->statistics[$index]);
    }

    /**
     * unset statistics
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatistics($index)
    {
        unset($this->statistics[$index]);
    }

    /**
     * Gets as statistics
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchStatisticType[]
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * Sets a new statistics
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchStatisticType[] $statistics
     * @return self
     */
    public function setStatistics(array $statistics): self
    {
        $this->statistics = $statistics;
        return $this;
    }
}
