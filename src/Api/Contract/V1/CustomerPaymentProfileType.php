<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;

/**
 * Class representing CustomerPaymentProfileType
 *
 *
 * XSD Type: customerPaymentProfileType
 */
class CustomerPaymentProfileType extends CustomerPaymentProfileBaseType implements \JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment
     */
    private $payment = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\DriversLicenseType $driversLicense
     */
    private $driversLicense = null;

    /**
     * @property string $taxId
     */
    private $taxId = null;

    /**
     * @property boolean $defaultPaymentProfile
     */
    private $defaultPaymentProfile = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     * $subsequentAuthInformation
     */
    private $subsequentAuthInformation = null;

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
     * Gets as driversLicense
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\DriversLicenseType
     */
    public function getDriversLicense()
    {
        return $this->driversLicense;
    }

    /**
     * Sets a new driversLicense
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\DriversLicenseType $driversLicense
     * @return self
     */
    public function setDriversLicense(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\DriversLicenseType $driversLicense)
    {
        $this->driversLicense = $driversLicense;
        return $this;
    }

    /**
     * Gets as taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Sets a new taxId
     *
     * @param string $taxId
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * Gets as defaultPaymentProfile
     *
     * @return boolean
     */
    public function getDefaultPaymentProfile()
    {
        return $this->defaultPaymentProfile;
    }

    /**
     * Sets a new defaultPaymentProfile
     *
     * @param boolean $defaultPaymentProfile
     * @return self
     */
    public function setDefaultPaymentProfile($defaultPaymentProfile)
    {
        $this->defaultPaymentProfile = $defaultPaymentProfile;
        return $this;
    }

    /**
     * Gets as subsequentAuthInformation
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     */
    public function getSubsequentAuthInformation()
    {
        return $this->subsequentAuthInformation;
    }

    /**
     * Sets a new subsequentAuthInformation
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     * $subsequentAuthInformation
     * @return self
     */
    public function setSubsequentAuthInformation(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType $subsequentAuthInformation)
    {
        $this->subsequentAuthInformation = $subsequentAuthInformation;
        return $this;
    }

}
