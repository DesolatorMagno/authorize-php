<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;
use JsonSerializable;

/**
 * Class representing CustomerPaymentProfileType
 *
 *
 * XSD Type: customerPaymentProfileType
 */
class CustomerPaymentProfileType extends CustomerPaymentProfileBaseType implements JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property PaymentType $payment
     */
    private $payment = null;

    /**
     * @property DriversLicenseType $driversLicense
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
     * @property SubsequentAuthInformationType
     * $subsequentAuthInformation
     */
    private $subsequentAuthInformation = null;

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
     * Gets as driversLicense
     *
     * @return DriversLicenseType
     */
    public function getDriversLicense()
    {
        return $this->driversLicense;
    }

    /**
     * Sets a new driversLicense
     *
     * @param DriversLicenseType $driversLicense
     * @return self
     */
    public function setDriversLicense(DriversLicenseType $driversLicense)
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
     * @return SubsequentAuthInformationType
     */
    public function getSubsequentAuthInformation()
    {
        return $this->subsequentAuthInformation;
    }

    /**
     * Sets a new subsequentAuthInformation
     *
     * @param SubsequentAuthInformationType
     * $subsequentAuthInformation
     * @return self
     */
    public function setSubsequentAuthInformation(SubsequentAuthInformationType $subsequentAuthInformation)
    {
        $this->subsequentAuthInformation = $subsequentAuthInformation;
        return $this;
    }

}
