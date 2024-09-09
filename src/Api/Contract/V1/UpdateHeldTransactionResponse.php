<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing UpdateHeldTransactionResponse
 */
class UpdateHeldTransactionResponse extends ANetApiResponseType
{

    /**
     * @property TransactionResponseType
     * $transactionResponse
     */
    private $transactionResponse = null;

    /**
     * Gets as transactionResponse
     *
     * @return TransactionResponseType
     */
    public function getTransactionResponse()
    {
        return $this->transactionResponse;
    }

    /**
     * Sets a new transactionResponse
     *
     * @param TransactionResponseType
     * $transactionResponse
     * @return self
     */
    public function setTransactionResponse(TransactionResponseType $transactionResponse)
    {
        $this->transactionResponse = $transactionResponse;
        return $this;
    }

}
