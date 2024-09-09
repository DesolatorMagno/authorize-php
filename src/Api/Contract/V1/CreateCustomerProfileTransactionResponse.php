<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing CreateCustomerProfileTransactionResponse
 */
class CreateCustomerProfileTransactionResponse extends ANetApiResponseType
{

    private TransactionResponseType|null $transactionResponse = null;

    private string|null $directResponse = null;

    public function getTransactionResponse(): TransactionResponseType|null
    {
        return $this->transactionResponse;
    }

    public function setTransactionResponse(TransactionResponseType $transactionResponse): self
    {
        $this->transactionResponse = $transactionResponse;
        return $this;
    }

    public function getDirectResponse(): string|null
    {
        return $this->directResponse;
    }

    public function setDirectResponse(string $directResponse): self
    {
        $this->directResponse = $directResponse;
        return $this;
    }

}
