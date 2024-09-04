<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiResponseType;

/**
 * Class representing GetCustomerPaymentProfileListResponse
 */
class GetCustomerPaymentProfileListResponse extends ANetApiResponseType
{

    /**
     * @property integer $totalNumInResultSet
     */
    private $totalNumInResultSet = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileListItemType[]
     * $paymentProfiles
     */
    private $paymentProfiles = null;

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
     * Adds as paymentProfile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileListItemType
     * $paymentProfile
     *@return self
     */
    public function addToPaymentProfiles(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileListItemType $paymentProfile)
    {
        $this->paymentProfiles[] = $paymentProfile;
        return $this;
    }

    /**
     * isset paymentProfiles
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentProfiles($index)
    {
        return isset($this->paymentProfiles[$index]);
    }

    /**
     * unset paymentProfiles
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentProfiles($index)
    {
        unset($this->paymentProfiles[$index]);
    }

    /**
     * Gets as paymentProfiles
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileListItemType[]
     */
    public function getPaymentProfiles()
    {
        return $this->paymentProfiles;
    }

    /**
     * Sets a new paymentProfiles
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerPaymentProfileListItemType[]
     * $paymentProfiles
     * @return self
     */
    public function setPaymentProfiles(array $paymentProfiles)
    {
        $this->paymentProfiles = $paymentProfiles;
        return $this;
    }

}
