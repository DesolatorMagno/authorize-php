<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetAUJobDetailsRequest
 */
class GetAUJobDetailsRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $month
     */
    private $month = null;

    /**
     * @property string $modifiedTypeFilter
     */
    private $modifiedTypeFilter = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PagingType $paging
     */
    private $paging = null;

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
     * Gets as modifiedTypeFilter
     *
     * @return string
     */
    public function getModifiedTypeFilter()
    {
        return $this->modifiedTypeFilter;
    }

    /**
     * Sets a new modifiedTypeFilter
     *
     * @param string $modifiedTypeFilter
     * @return self
     */
    public function setModifiedTypeFilter($modifiedTypeFilter)
    {
        $this->modifiedTypeFilter = $modifiedTypeFilter;
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

}
