<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetResponseTrait;

/**
 * Class representing ARBGetSubscriptionListResponse
 */
class ARBGetSubscriptionListResponse extends ANetApiResponseType
{
    use SerializeAnetResponseTrait;
    /**
     * @property integer $totalNumInResultSet
     */
    private $totalNumInResultSet = null;

    /**
     * @property SubscriptionDetailType[]
     * $subscriptionDetails
     */
    private $subscriptionDetails = null;

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
     * Adds as subscriptionDetail
     *
     * @param SubscriptionDetailType $subscriptionDetail
     *@return self
     */
    public function addToSubscriptionDetails(SubscriptionDetailType $subscriptionDetail)
    {
        $this->subscriptionDetails[] = $subscriptionDetail;
        return $this;
    }

    /**
     * isset subscriptionDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubscriptionDetails($index)
    {
        return isset($this->subscriptionDetails[$index]);
    }

    /**
     * unset subscriptionDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubscriptionDetails($index)
    {
        unset($this->subscriptionDetails[$index]);
    }

    /**
     * Gets as subscriptionDetails
     *
     * @return SubscriptionDetailType[]
     */
    public function getSubscriptionDetails()
    {
        return $this->subscriptionDetails;
    }

    /**
     * Sets a new subscriptionDetails
     *
     * @param SubscriptionDetailType[]
     * $subscriptionDetails
     * @return self
     */
    public function setSubscriptionDetails(array $subscriptionDetails)
    {
        $this->subscriptionDetails = $subscriptionDetails;
        return $this;
    }

}
