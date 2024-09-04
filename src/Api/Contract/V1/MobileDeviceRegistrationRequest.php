<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing MobileDeviceRegistrationRequest
 */
class MobileDeviceRegistrationRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice
     */
    private $mobileDevice = null;

    /**
     * Gets as mobileDevice
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType
     */
    public function getMobileDevice()
    {
        return $this->mobileDevice;
    }

    /**
     * Sets a new mobileDevice
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice
     * @return self
     */
    public function setMobileDevice(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice)
    {
        $this->mobileDevice = $mobileDevice;
        return $this;
    }

}
