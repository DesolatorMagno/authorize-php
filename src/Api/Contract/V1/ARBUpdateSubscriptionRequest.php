<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing ARBUpdateSubscriptionRequest
 */
class ARBUpdateSubscriptionRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;

    /**
     * @property string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * @property ARBSubscriptionType $subscription
     */
    private $subscription = null;

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
     * Gets as subscription
     *
     * @return ARBSubscriptionType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param ARBSubscriptionType $subscription
     * @return self
     */
    public function setSubscription(ARBSubscriptionType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

}
