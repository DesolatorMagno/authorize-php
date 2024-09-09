<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetTransactionListRequest
 */
class GetTransactionListRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $batchId
     */
    private $batchId = null;

    /**
     * @property TransactionListSortingType $sorting
     */
    private $sorting = null;

    /**
     * @property PagingType $paging
     */
    private $paging = null;

    /**
     * Gets as batchId
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * Sets a new batchId
     *
     * @param string $batchId
     * @return self
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
        return $this;
    }

    /**
     * Gets as sorting
     *
     * @return TransactionListSortingType
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets a new sorting
     *
     * @param TransactionListSortingType $sorting
     * @return self
     */
    public function setSorting(TransactionListSortingType $sorting)
    {
        $this->sorting = $sorting;
        return $this;
    }

    /**
     * Gets as paging
     *
     * @return PagingType
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * Sets a new paging
     *
     * @param PagingType $paging
     * @return self
     */
    public function setPaging(PagingType $paging)
    {
        $this->paging = $paging;
        return $this;
    }

}
