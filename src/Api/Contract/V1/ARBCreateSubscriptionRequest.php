<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing ARBCreateSubscriptionRequest
 */
class ARBCreateSubscriptionRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property ARBSubscriptionType $subscription
     */
    private $subscription = null;

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
    public function setSubscription(ARBSubscriptionType $subscription): self
    {
        $this->subscription = $subscription;
        return $this;
    }


}
