<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing DecryptPaymentDataResponse
 */
class DecryptPaymentDataResponse extends ANetApiResponseType
{

    /**
     * @property CustomerAddressType $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * @property CustomerAddressType $billingInfo
     */
    private $billingInfo = null;

    /**
     * @property CreditCardMaskedType $cardInfo
     */
    private $cardInfo = null;

    /**
     * @property PaymentDetailsType $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Gets as shippingInfo
     *
     * @return CustomerAddressType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * @param CustomerAddressType $shippingInfo
     * @return self
     */
    public function setShippingInfo(CustomerAddressType $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Gets as billingInfo
     *
     * @return CustomerAddressType
     */
    public function getBillingInfo()
    {
        return $this->billingInfo;
    }

    /**
     * Sets a new billingInfo
     *
     * @param CustomerAddressType $billingInfo
     * @return self
     */
    public function setBillingInfo(CustomerAddressType $billingInfo)
    {
        $this->billingInfo = $billingInfo;
        return $this;
    }

    /**
     * Gets as cardInfo
     *
     * @return CreditCardMaskedType
     */
    public function getCardInfo()
    {
        return $this->cardInfo;
    }

    /**
     * Sets a new cardInfo
     *
     * @param CreditCardMaskedType $cardInfo
     * @return self
     */
    public function setCardInfo(CreditCardMaskedType $cardInfo)
    {
        $this->cardInfo = $cardInfo;
        return $this;
    }

    /**
     * Gets as paymentDetails
     *
     * @return PaymentDetailsType
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * @param PaymentDetailsType $paymentDetails
     * @return self
     */
    public function setPaymentDetails(PaymentDetailsType $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

}
