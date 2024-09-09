<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileBaseType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;
use JsonSerializable;

/**
 * Class representing CustomerProfileExType
 *
 *
 * XSD Type: customerProfileExType
 */
class CustomerProfileExType extends CustomerProfileBaseType implements JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property string $customerProfileId
     */
    private $customerProfileId = null;

    /**
     * Gets as customerProfileId
     *
     * @return string
     */
    public function getCustomerProfileId()
    {
        return $this->customerProfileId;
    }

    /**
     * Sets a new customerProfileId
     *
     * @param string $customerProfileId
     * @return self
     */
    public function setCustomerProfileId($customerProfileId)
    {
        $this->customerProfileId = $customerProfileId;
        return $this;
    }

}
