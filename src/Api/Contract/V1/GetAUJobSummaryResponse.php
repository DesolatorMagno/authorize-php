<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;

/**
 * Class representing GetAUJobSummaryResponse
 */
class GetAUJobSummaryResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuResponseType[] $auSummary
     */
    private $auSummary = null;

    /**
     * Adds as auResponse
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuResponseType $auResponse
     *@return self
     */
    public function addToAuSummary(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuResponseType $auResponse)
    {
        $this->auSummary[] = $auResponse;
        return $this;
    }

    /**
     * isset auSummary
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuSummary($index)
    {
        return isset($this->auSummary[$index]);
    }

    /**
     * unset auSummary
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuSummary($index)
    {
        unset($this->auSummary[$index]);
    }

    /**
     * Gets as auSummary
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuResponseType[]
     */
    public function getAuSummary()
    {
        return $this->auSummary;
    }

    /**
     * Sets a new auSummary
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuResponseType[] $auSummary
     * @return self
     */
    public function setAuSummary(array $auSummary)
    {
        $this->auSummary = $auSummary;
        return $this;
    }

}
