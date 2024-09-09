<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing GetAUJobDetailsResponse
 */
class GetAUJobDetailsResponse extends ANetApiResponseType
{

    /**
     * @property integer $totalNumInResultSet
     */
    private $totalNumInResultSet = null;

    /**
     * @property ListOfAUDetailsType $auDetails
     */
    private $auDetails = null;

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

    /**
     * Gets as auDetails
     *
     * @return ListOfAUDetailsType
     */
    public function getAuDetails()
    {
        return $this->auDetails;
    }

    /**
     * Sets a new auDetails
     *
     * @param ListOfAUDetailsType $auDetails
     * @return self
     */
    public function setAuDetails(ListOfAUDetailsType $auDetails)
    {
        $this->auDetails = $auDetails;
        return $this;
    }

}
