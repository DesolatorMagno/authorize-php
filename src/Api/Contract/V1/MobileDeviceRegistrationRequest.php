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
     * @property MobileDeviceType $mobileDevice
     */
    private $mobileDevice = null;

    /**
     * Gets as mobileDevice
     *
     * @return MobileDeviceType
     */
    public function getMobileDevice()
    {
        return $this->mobileDevice;
    }

    /**
     * Sets a new mobileDevice
     *
     * @param MobileDeviceType $mobileDevice
     * @return self
     */
    public function setMobileDevice(MobileDeviceType $mobileDevice)
    {
        $this->mobileDevice = $mobileDevice;
        return $this;
    }

}
