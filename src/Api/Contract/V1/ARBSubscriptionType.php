<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;

/**
 * Class representing ARBSubscriptionType
 *
 *
 * XSD Type: ARBSubscriptionType
 */
class ARBSubscriptionType implements \JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule
     */
    private $paymentSchedule = null;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property float $trialAmount
     */
    private $trialAmount = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment
     */
    private $payment = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order
     */
    private $order = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerType $customer
     */
    private $customer = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $billTo
     */
    private $billTo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo
     */
    private $shipTo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile
     */
    private $profile = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as paymentSchedule
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType
     */
    public function getPaymentSchedule()
    {
        return $this->paymentSchedule;
    }

    /**
     * Sets a new paymentSchedule
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule
     * @return self
     */
    public function setPaymentSchedule(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule)
    {
        $this->paymentSchedule = $paymentSchedule;
        return $this;
    }

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
     * Gets as trialAmount
     *
     * @return float
     */
    public function getTrialAmount()
    {
        return $this->trialAmount;
    }

    /**
     * Sets a new trialAmount
     *
     * @param float $trialAmount
     * @return self
     */
    public function setTrialAmount($trialAmount)
    {
        $this->trialAmount = $trialAmount;
        return $this;
    }

    /**
     * Gets as payment
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment
     * @return self
     */
    public function setPayment(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order
     * @return self
     */
    public function setOrder(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as customer
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerType $customer
     * @return self
     */
    public function setCustomer(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as billTo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * Sets a new billTo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $billTo
     * @return self
     */
    public function setBillTo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $billTo)
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo)
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

}
