<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing CreateTransactionResponse
 */
class CreateTransactionResponse extends ANetApiResponseType
{

    /**
     * @property TransactionResponseType
     * $transactionResponse
     */
    private TransactionResponseType|null $transactionResponse = null;

    /**
     * @property CreateProfileResponseType
     * $profileResponse
     */
    private CreateProfileResponseType|null $profileResponse = null;

    /**
     * Gets as transactionResponse
     *
     * @return TransactionResponseType
     */
    public function getTransactionResponse(): TransactionResponseType|null
    {
        return $this->transactionResponse;
    }

    public function setTransactionResponse(TransactionResponseType $transactionResponse): self
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
    public function getProfileResponse(): CreateProfileResponseType|null
    {
        return $this->profileResponse;
    }

    /**
     * Sets a new profileResponse
     *
     * @param CreateProfileResponseType $profileResponse
     * @return self
     */
    public function setProfileResponse(CreateProfileResponseType $profileResponse): self
    {
        $this->profileResponse = $profileResponse;
        return $this;
    }

}
