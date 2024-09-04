<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetResponseTrait;
use DesolatorMagno\AuthorizePhp\Traits\SerializeResponseTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;

/**
 * Class representing CreateTransactionResponse
 */
class CreateTransactionResponse extends ANetApiResponseType
{

    /**
     * @property TransactionResponseType
     * $transactionResponse
     */
    private ?TransactionResponseType $transactionResponse = null;

    /**
     * @property CreateProfileResponseType
     * $profileResponse
     */
    private ?CreateProfileResponseType $profileResponse = null;

    /**
     * Gets as transactionResponse
     *
     * @return TransactionResponseType
     */
    public function getTransactionResponse(): ?TransactionResponseType
    {
        return $this->transactionResponse;
    }

    public function setTransactionResponse(TransactionResponseType $transactionResponse): CreateTransactionResponse
    {
        //Log::channel('authorize')->debug('Transaction Response', $transactionResponse->jsonSerialize());
        $this->transactionResponse = $transactionResponse;
        return $this;
    }

    /**
     * Gets as profileResponse
     *
     * @return CreateProfileResponseType
     */
    public function getProfileResponse(): ?CreateProfileResponseType
    {
        return $this->profileResponse;
    }

    /**
     * Sets a new profileResponse
     *
     * @param CreateProfileResponseType $profileResponse
     * @return self
     */
    public function setProfileResponse(CreateProfileResponseType $profileResponse): CreateTransactionResponse
    {
        $this->profileResponse = $profileResponse;
        return $this;
    }

}
