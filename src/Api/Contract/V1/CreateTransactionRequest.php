<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeTrait;

/**
 * Class representing CreateTransactionRequest
 */
class CreateTransactionRequest extends ANetApiRequestType
{
    use SerializeTrait;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     * $transactionRequest
     */
    private $transactionRequest = null;

    /**
     * Gets as transactionRequest
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     */
    public function getTransactionRequest()
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest)
    {
        $this->transactionRequest = $transactionRequest;
        return $this;
    }


}
