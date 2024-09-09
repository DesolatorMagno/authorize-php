<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetCustomerPaymentProfileResponse
 */
class GetCustomerPaymentProfileResponse extends ANetApiResponseType
{

    /**
     * @property CustomerPaymentProfileMaskedType
     * $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * Gets as paymentProfile
     *
     * @return CustomerPaymentProfileMaskedType
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * @param CustomerPaymentProfileMaskedType
     * $paymentProfile
     * @return self
     */
    public function setPaymentProfile(CustomerPaymentProfileMaskedType $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

}
