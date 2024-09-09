<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetCustomerPaymentProfileListRequest
 */
class GetCustomerPaymentProfileListRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $searchType
     */
    private $searchType = null;

    /**
     * @property string $month
     */
    private $month = null;

    /**
     * @property CustomerPaymentProfileSortingType
     * $sorting
     */
    private $sorting = null;

    /**
     * @property PagingType $paging
     */
    private $paging = null;

    /**
     * Gets as searchType
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * @param string $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Gets as month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets a new month
     *
     * @param string $month
     * @return self
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * Gets as sorting
     *
     * @return CustomerPaymentProfileSortingType
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets a new sorting
     *
     * @param CustomerPaymentProfileSortingType $sorting
     * @return self
     */
    public function setSorting(CustomerPaymentProfileSortingType $sorting)
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
