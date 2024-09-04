<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing SecurePaymentContainerRequest
 */
class SecurePaymentContainerRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\WebCheckOutDataType $data
     */
    private $data = null;

    /**
     * Gets as data
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\WebCheckOutDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\WebCheckOutDataType $data
     * @return self
     */
    public function setData(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\WebCheckOutDataType $data)
    {
        $this->data = $data;
        return $this;
    }

}
