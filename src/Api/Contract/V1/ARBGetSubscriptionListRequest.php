<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing ARBGetSubscriptionListRequest
 */
class ARBGetSubscriptionListRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $searchType
     */
    private $searchType = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBGetSubscriptionListSortingType
     * $sorting
     */
    private $sorting = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PagingType $paging
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
     * Gets as sorting
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBGetSubscriptionListSortingType
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets a new sorting
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBGetSubscriptionListSortingType $sorting
     * @return self
     */
    public function setSorting(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ARBGetSubscriptionListSortingType $sorting)
    {
        $this->sorting = $sorting;
        return $this;
    }

    /**
     * Gets as paging
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PagingType
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * Sets a new paging
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PagingType $paging
     * @return self
     */
    public function setPaging(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PagingType $paging)
    {
        $this->paging = $paging;
        return $this;
    }


  // Json Serialize Code

}
