<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing CreateTransactionRequest
 */
class CreateTransactionRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;

    /**
     * @property TransactionRequestType
     * $transactionRequest
     */
    private TransactionRequestType|null $transactionRequest = null;

    /**
     * Gets as transactionRequest
     *
     * @return TransactionRequestType
     */
    public function getTransactionRequest(): TransactionRequestType|null
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(TransactionRequestType $transactionRequest): self
    {
        $this->transactionRequest = $transactionRequest;
        return $this;
    }


}
