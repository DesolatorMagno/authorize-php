<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing UpdateHeldTransactionRequest
 */
class UpdateHeldTransactionRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\HeldTransactionRequestType
     * $heldTransactionRequest
     */
    private $heldTransactionRequest = null;

    /**
     * Gets as heldTransactionRequest
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\HeldTransactionRequestType
     */
    public function getHeldTransactionRequest()
    {
        return $this->heldTransactionRequest;
    }

    /**
     * Sets a new heldTransactionRequest
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\HeldTransactionRequestType
     * $heldTransactionRequest
     * @return self
     */
    public function setHeldTransactionRequest(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\HeldTransactionRequestType $heldTransactionRequest)
    {
        $this->heldTransactionRequest = $heldTransactionRequest;
        return $this;
    }

}
