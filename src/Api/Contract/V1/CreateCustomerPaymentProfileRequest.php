<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing CreateCustomerPaymentProfileRequest
 */
class CreateCustomerPaymentProfileRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $customerProfileId
     */
    private $customerProfileId = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType
     * $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * @property string $validationMode
     */
    private $validationMode = null;

    /**
     * Gets as customerProfileId
     *
     * @return string
     */
    public function getCustomerProfileId()
    {
        return $this->customerProfileId;
    }

    /**
     * Sets a new customerProfileId
     *
     * @param string $customerProfileId
     * @return self
     */
    public function setCustomerProfileId($customerProfileId)
    {
        $this->customerProfileId = $customerProfileId;
        return $this;
    }

    /**
     * Gets as paymentProfile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType $paymentProfile
     * @return self
     */
    public function setPaymentProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    /**
     * Gets as validationMode
     *
     * @return string
     */
    public function getValidationMode()
    {
        return $this->validationMode;
    }

    /**
     * Sets a new validationMode
     *
     * @param string $validationMode
     * @return self
     */
    public function setValidationMode($validationMode)
    {
        $this->validationMode = $validationMode;
        return $this;
    }

}
