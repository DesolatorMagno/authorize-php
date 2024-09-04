<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing DecryptPaymentDataResponse
 */
class DecryptPaymentDataResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billingInfo
     */
    private $billingInfo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $cardInfo
     */
    private $cardInfo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentDetailsType $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * Gets as shippingInfo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $shippingInfo
     * @return self
     */
    public function setShippingInfo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Gets as billingInfo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType
     */
    public function getBillingInfo()
    {
        return $this->billingInfo;
    }

    /**
     * Sets a new billingInfo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billingInfo
     * @return self
     */
    public function setBillingInfo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billingInfo)
    {
        $this->billingInfo = $billingInfo;
        return $this;
    }

    /**
     * Gets as cardInfo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType
     */
    public function getCardInfo()
    {
        return $this->cardInfo;
    }

    /**
     * Sets a new cardInfo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $cardInfo
     * @return self
     */
    public function setCardInfo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $cardInfo)
    {
        $this->cardInfo = $cardInfo;
        return $this;
    }

    /**
     * Gets as paymentDetails
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentDetailsType
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentDetailsType $paymentDetails
     * @return self
     */
    public function setPaymentDetails(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentDetailsType $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

}
