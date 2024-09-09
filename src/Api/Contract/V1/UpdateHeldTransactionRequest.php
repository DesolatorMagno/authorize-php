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
     * @property HeldTransactionRequestType
     * $heldTransactionRequest
     */
    private $heldTransactionRequest = null;

    /**
     * Gets as heldTransactionRequest
     *
     * @return HeldTransactionRequestType
     */
    public function getHeldTransactionRequest()
    {
        return $this->heldTransactionRequest;
    }

    /**
     * Sets a new heldTransactionRequest
     *
     * @param HeldTransactionRequestType
     * $heldTransactionRequest
     * @return self
     */
    public function setHeldTransactionRequest(HeldTransactionRequestType $heldTransactionRequest)
    {
        $this->heldTransactionRequest = $heldTransactionRequest;
        return $this;
    }

}
