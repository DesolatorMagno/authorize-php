<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetTransactionDetailsResponse
 */
class GetTransactionDetailsResponse extends ANetApiResponseType
{

    /**
     * @property TransactionDetailsType $transaction
     */
    private $transaction = null;

    /**
     * @property string $clientId
     */
    private $clientId = null;

    /**
     * @property string $transrefId
     */
    private $transrefId = null;

    /**
     * Gets as transaction
     *
     * @return TransactionDetailsType
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Sets a new transaction
     *
     * @param TransactionDetailsType $transaction
     * @return self
     */
    public function setTransaction(TransactionDetailsType $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Gets as clientId
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Sets a new clientId
     *
     * @param string $clientId
     * @return self
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Gets as transrefId
     *
     * @return string
     */
    public function getTransrefId()
    {
        return $this->transrefId;
    }

    /**
     * Sets a new transrefId
     *
     * @param string $transrefId
     * @return self
     */
    public function setTransrefId($transrefId)
    {
        $this->transrefId = $transrefId;
        return $this;
    }

}
