<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetCustomerShippingAddressResponse
 */
class GetCustomerShippingAddressResponse extends ANetApiResponseType
{

    /**
     * @property boolean $defaultShippingAddress
     */
    private $defaultShippingAddress = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressExType $address
     */
    private $address = null;

    /**
     * @property string[] $subscriptionIds
     */
    private $subscriptionIds = null;

    /**
     * Gets as defaultShippingAddress
     *
     * @return boolean
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * Sets a new defaultShippingAddress
     *
     * @param boolean $defaultShippingAddress
     * @return self
     */
    public function setDefaultShippingAddress($defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressExType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressExType $address
     * @return self
     */
    public function setAddress(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressExType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as subscriptionId
     *
     * @return self
     * @param string $subscriptionId
     */
    public function addToSubscriptionIds($subscriptionId)
    {
        $this->subscriptionIds[] = $subscriptionId;
        return $this;
    }

    /**
     * isset subscriptionIds
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubscriptionIds($index)
    {
        return isset($this->subscriptionIds[$index]);
    }

    /**
     * unset subscriptionIds
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubscriptionIds($index)
    {
        unset($this->subscriptionIds[$index]);
    }

    /**
     * Gets as subscriptionIds
     *
     * @return string[]
     */
    public function getSubscriptionIds()
    {
        return $this->subscriptionIds;
    }

    /**
     * Sets a new subscriptionIds
     *
     * @param string $subscriptionIds
     * @return self
     */
    public function setSubscriptionIds(array $subscriptionIds)
    {
        $this->subscriptionIds = $subscriptionIds;
        return $this;
    }

}
