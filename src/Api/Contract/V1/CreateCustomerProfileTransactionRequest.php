<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing CreateCustomerProfileTransactionRequest
 */
class CreateCustomerProfileTransactionRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property ProfileTransactionType $transaction
     */
    private $transaction = null;

    /**
     * @property string $extraOptions
     */
    private $extraOptions = null;

    /**
     * Gets as transaction
     *
     * @return ProfileTransactionType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param ProfileTransactionType $transaction
     * @return self
     */
    public function setTransaction(ProfileTransactionType $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Gets as extraOptions
     *
     * @return string
     */
    public function getExtraOptions()
    {
        return $this->extraOptions;
    }

    /**
     * Sets a new extraOptions
     *
     * @param string $extraOptions
     * @return self
     */
    public function setExtraOptions($extraOptions)
    {
        $this->extraOptions = $extraOptions;
        return $this;
    }

}
