<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing UpdateHeldTransactionResponse
 */
class UpdateHeldTransactionResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     * $transactionResponse
     */
    private $transactionResponse = null;

    /**
     * Gets as transactionResponse
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     */
    public function getTransactionResponse()
    {
        return $this->transactionResponse;
    }

    /**
     * Sets a new transactionResponse
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     * $transactionResponse
     * @return self
     */
    public function setTransactionResponse(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType $transactionResponse)
    {
        $this->transactionResponse = $transactionResponse;
        return $this;
    }

}
