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
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType $subscription
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
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType $subscription
     * @return self
     */
    public function setSubscription(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

}
