<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ARBCreateSubscriptionResponse
 */
class ARBCreateSubscriptionResponse extends ANetApiResponseType
{

    /**
     * @property string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * @property CustomerProfileIdType $profile
     */
    private $profile = null;

    /**
     * Gets as subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Sets a new subscriptionId
     *
     * @param string $subscriptionId
     * @return self
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
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
