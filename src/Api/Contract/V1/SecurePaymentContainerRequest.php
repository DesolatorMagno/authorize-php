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
     * @property WebCheckOutDataType $data
     */
    private $data = null;

    /**
     * Gets as data
     *
     * @return WebCheckOutDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param WebCheckOutDataType $data
     * @return self
     */
    public function setData(WebCheckOutDataType $data)
    {
        $this->data = $data;
        return $this;
    }

}
