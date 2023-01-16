<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;

/**
 * Class representing ARBGetSubscriptionListRequest
 */
class ARBGetSubscriptionListRequest extends ANetApiRequestType
{

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
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = \DesolatorMagno\AuthorizePhp\Util\Mapper::Instance();
        foreach($values as $key => $value){
            $classDetails = $mapper->getClass(get_class() , $key);
            if (isset($value)){
                if ($classDetails->className === 'Date'){
                    $dateTime = $value->format('Y-m-d');
                    $values[$key] = $dateTime;
                }
                else if ($classDetails->className === 'DateTime'){
                    $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                    $values[$key] = $dateTime;
                }
                if (is_array($value)){
                    if (!$classDetails->isInlineArray){
                        $subKey = $classDetails->arrayEntryName;
                        $subArray = [$subKey => $value];
                        $values[$key] = $subArray;
                    }
                }
            }
        }
        return array_merge(parent::jsonSerialize(), $values);
    }

}
