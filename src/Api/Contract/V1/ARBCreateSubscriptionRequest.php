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
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType $subscription
     */
    private $subscription = null;

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
    public function setSubscription(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionType $subscription): self
    {
        $this->subscription = $subscription;
        return $this;
    }


}
