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
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransactionType $transaction
     */
    private $transaction = null;

    /**
     * @property string $extraOptions
     */
    private $extraOptions = null;

    /**
     * Gets as transaction
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransactionType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransactionType $transaction
     * @return self
     */
    public function setTransaction(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransactionType $transaction)
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
