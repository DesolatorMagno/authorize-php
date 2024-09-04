<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetCustomerProfileResponse
 */
class GetCustomerProfileResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileMaskedType $profile
     */
    private $profile = null;

    /**
     * @property string[] $subscriptionIds
     */
    private $subscriptionIds = null;

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileMaskedType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileMaskedType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileMaskedType $profile)
    {
        $this->profile = $profile;
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
