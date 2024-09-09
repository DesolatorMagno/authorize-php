<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;

/**
 * Class representing GetTransactionListResponse
 */
class GetTransactionListResponse extends ANetApiResponseType
{

    /**
     * @property TransactionSummaryType[] $transactions
     */
    private $transactions = null;

    /**
     * @property integer $totalNumInResultSet
     */
    private $totalNumInResultSet = null;

    /**
     * Adds as transaction
     *
     * @param TransactionSummaryType $transaction
     *@return self
     */
    public function addToTransactions(TransactionSummaryType $transaction)
    {
        $this->transactions[] = $transaction;
        return $this;
    }

    /**
     * isset transactions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransactions($index)
    {
        return isset($this->transactions[$index]);
    }

    /**
     * unset transactions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransactions($index)
    {
        unset($this->transactions[$index]);
    }

    /**
     * Gets as transactions
     *
     * @return TransactionSummaryType[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Sets a new transactions
     *
     * @param TransactionSummaryType[] $transactions
     * @return self
     */
    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * Gets as totalNumInResultSet
     *
     * @return integer
     */
    public function getTotalNumInResultSet()
    {
        return $this->totalNumInResultSet;
    }

    /**
     * Sets a new totalNumInResultSet
     *
     * @param integer $totalNumInResultSet
     * @return self
     */
    public function setTotalNumInResultSet($totalNumInResultSet)
    {
        $this->totalNumInResultSet = $totalNumInResultSet;
        return $this;
    }

}
