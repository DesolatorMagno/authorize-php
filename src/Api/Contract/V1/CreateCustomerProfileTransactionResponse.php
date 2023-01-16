<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;

/**
 * Class representing CreateCustomerProfileTransactionResponse
 */
class CreateCustomerProfileTransactionResponse extends ANetApiResponseType
{

    use SetSerializeTrait;

    private ?TransactionResponseType $transactionResponse = null;

    private ?string $directResponse = null;

    public function getTransactionResponse(): ?TransactionResponseType
    {
        return $this->transactionResponse;
    }

    public function setTransactionResponse(TransactionResponseType $transactionResponse): CreateCustomerProfileTransactionResponse
    {
        $this->transactionResponse = $transactionResponse;
        return $this;
    }


    public function getDirectResponse(): ?string
    {
        return $this->directResponse;
    }

    public function setDirectResponse(string $directResponse): CreateCustomerProfileTransactionResponse
    {
        $this->directResponse = $directResponse;
        return $this;
    }

}
