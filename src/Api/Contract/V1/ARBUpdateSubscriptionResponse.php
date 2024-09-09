<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;

/**
 * Class representing ARBUpdateSubscriptionResponse
 */
class ARBUpdateSubscriptionResponse extends ANetApiResponseType
{

    /**
     * @property CustomerProfileIdType $profile
     */
    private $profile = null;

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
