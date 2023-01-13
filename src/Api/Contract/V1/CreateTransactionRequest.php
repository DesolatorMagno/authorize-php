<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeTrait;

/**
 * Class representing CreateTransactionRequest
 */
class CreateTransactionRequest extends ANetApiRequestType
{
    use SerializeTrait;

    /**
     * @property TransactionRequestType
     * $transactionRequest
     */
    private ?TransactionRequestType $transactionRequest = null;

    /**
     * Gets as transactionRequest
     *
     * @return TransactionRequestType
     */
    public function getTransactionRequest(): ?TransactionRequestType
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(TransactionRequestType $transactionRequest)
    {
        $this->transactionRequest = $transactionRequest;
        return $this;
    }


}
