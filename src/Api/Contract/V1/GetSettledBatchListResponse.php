<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetSettledBatchListResponse
 */
class GetSettledBatchListResponse extends ANetApiResponseType
{

    /**
     * @property BatchDetailsType[] $batchList
     */
    private $batchList = null;

    /**
     * Adds as batch
     *
     * @param BatchDetailsType $batch
     *@return self
     */
    public function addToBatchList(BatchDetailsType $batch)
    {
        $this->batchList[] = $batch;
        return $this;
    }

    /**
     * isset batchList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBatchList($index)
    {
        return isset($this->batchList[$index]);
    }

    /**
     * unset batchList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBatchList($index)
    {
        unset($this->batchList[$index]);
    }

    /**
     * Gets as batchList
     *
     * @return BatchDetailsType[]
     */
    public function getBatchList()
    {
        return $this->batchList;
    }

    /**
     * Sets a new batchList
     *
     * @param BatchDetailsType[] $batchList
     * @return self
     */
    public function setBatchList(array $batchList)
    {
        $this->batchList = $batchList;
        return $this;
    }

}
