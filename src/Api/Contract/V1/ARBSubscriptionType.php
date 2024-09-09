<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing ARBSubscriptionType
 *
 *
 * XSD Type: ARBSubscriptionType
 */
class ARBSubscriptionType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property PaymentScheduleType $paymentSchedule
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
     * @property PaymentType $payment
     */
    private $payment = null;

    /**
     * @property OrderType $order
     */
    private $order = null;

    /**
     * @property CustomerType $customer
     */
    private $customer = null;

    /**
     * @property NameAndAddressType $billTo
     */
    private $billTo = null;

    /**
     * @property NameAndAddressType $shipTo
     */
    private $shipTo = null;

    /**
     * @property CustomerProfileIdType $profile
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
     * @return PaymentScheduleType
     */
    public function getPaymentSchedule()
    {
        return $this->paymentSchedule;
    }

    /**
     * Sets a new paymentSchedule
     *
     * @param PaymentScheduleType $paymentSchedule
     * @return self
     */
    public function setPaymentSchedule(PaymentScheduleType $paymentSchedule)
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
     * @return PaymentType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param PaymentType $payment
     * @return self
     */
    public function setPayment(PaymentType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param OrderType $order
     * @return self
     */
    public function setOrder(OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as customer
     *
     * @return CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param CustomerType $customer
     * @return self
     */
    public function setCustomer(CustomerType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as billTo
     *
     * @return NameAndAddressType
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * Sets a new billTo
     *
     * @param NameAndAddressType $billTo
     * @return self
     */
    public function setBillTo(NameAndAddressType $billTo)
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return NameAndAddressType
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(NameAndAddressType $shipTo)
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return CustomerProfileIdType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param CustomerProfileIdType $profile
     * @return self
     */
    public function setProfile(CustomerProfileIdType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

}
