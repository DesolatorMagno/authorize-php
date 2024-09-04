<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetBatchStatisticsResponse
 */
class GetBatchStatisticsResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchDetailsType $batch
     */
    private $batch = null;

    /**
     * Gets as batch
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchDetailsType
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Sets a new batch
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchDetailsType $batch
     * @return self
     */
    public function setBatch(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\BatchDetailsType $batch)
    {
        $this->batch = $batch;
        return $this;
    }

}
