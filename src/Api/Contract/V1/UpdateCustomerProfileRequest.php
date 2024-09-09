<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing UpdateCustomerProfileRequest
 */
class UpdateCustomerProfileRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property CustomerProfileExType $profile
     */
    private $profile = null;

    /**
     * Gets as profile
     *
     * @return CustomerProfileExType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param CustomerProfileExType $profile
     * @return self
     */
    public function setProfile(CustomerProfileExType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

}
