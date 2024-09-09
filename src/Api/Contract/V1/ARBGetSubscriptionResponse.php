<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ARBGetSubscriptionResponse
 */
class ARBGetSubscriptionResponse extends ANetApiResponseType
{

    /**
     * @property ARBSubscriptionMaskedType $subscription
     */
    private $subscription = null;

    /**
     * Gets as subscription
     *
     * @return ARBSubscriptionMaskedType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param ARBSubscriptionMaskedType $subscription
     * @return self
     */
    public function setSubscription(ARBSubscriptionMaskedType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }


}
