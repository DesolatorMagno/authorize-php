<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;

/**
 * Class representing CustomerProfileType
 *
 *
 * XSD Type: customerProfileType
 */
class CustomerProfileType extends CustomerProfileBaseType implements \JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType[]
     * $paymentProfiles
     */
    private $paymentProfiles = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType[] $shipToList
     */
    private $shipToList = null;

    /**
     * @property string $profileType
     */
    private $profileType = null;

    /**
     * Adds as paymentProfiles
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType
     * $paymentProfiles
     *@return self
     */
    public function addToPaymentProfiles(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType $paymentProfiles)
    {
        $this->paymentProfiles[] = $paymentProfiles;
        return $this;
    }

    /**
     * isset paymentProfiles
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentProfiles($index)
    {
        return isset($this->paymentProfiles[$index]);
    }

    /**
     * unset paymentProfiles
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentProfiles($index)
    {
        unset($this->paymentProfiles[$index]);
    }

    /**
     * Gets as paymentProfiles
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType[]
     */
    public function getPaymentProfiles()
    {
        return $this->paymentProfiles;
    }

    /**
     * Sets a new paymentProfiles
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileType[]
     * $paymentProfiles
     * @return self
     */
    public function setPaymentProfiles(array $paymentProfiles)
    {
        $this->paymentProfiles = $paymentProfiles;
        return $this;
    }

    /**
     * Adds as shipToList
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $shipToList
     *@return self
     */
    public function addToShipToList(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $shipToList)
    {
        $this->shipToList[] = $shipToList;
        return $this;
    }

    /**
     * isset shipToList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipToList($index)
    {
        return isset($this->shipToList[$index]);
    }

    /**
     * unset shipToList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipToList($index)
    {
        unset($this->shipToList[$index]);
    }

    /**
     * Gets as shipToList
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType[]
     */
    public function getShipToList()
    {
        return $this->shipToList;
    }

    /**
     * Sets a new shipToList
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType[] $shipToList
     * @return self
     */
    public function setShipToList(array $shipToList)
    {
        $this->shipToList = $shipToList;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

}
