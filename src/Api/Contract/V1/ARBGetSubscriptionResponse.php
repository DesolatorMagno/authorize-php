<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ARBGetSubscriptionResponse
 */
class ARBGetSubscriptionResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionMaskedType $subscription
     */
    private $subscription = null;

    /**
     * Gets as subscription
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionMaskedType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionMaskedType $subscription
     * @return self
     */
    public function setSubscription(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBSubscriptionMaskedType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }


}
