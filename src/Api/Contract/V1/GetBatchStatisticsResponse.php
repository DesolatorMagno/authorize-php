<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetBatchStatisticsResponse
 */
class GetBatchStatisticsResponse extends ANetApiResponseType
{

    /**
     * @property BatchDetailsType $batch
     */
    private $batch = null;

    /**
     * Gets as batch
     *
     * @return BatchDetailsType
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Sets a new batch
     *
     * @param BatchDetailsType $batch
     * @return self
     */
    public function setBatch(BatchDetailsType $batch)
    {
        $this->batch = $batch;
        return $this;
    }

}
