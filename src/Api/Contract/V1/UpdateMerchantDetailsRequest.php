<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing UpdateMerchantDetailsRequest
 */
class UpdateMerchantDetailsRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property boolean $isTestMode
     */
    private $isTestMode = null;

    /**
     * Gets as isTestMode
     *
     * @return boolean
     */
    public function getIsTestMode()
    {
        return $this->isTestMode;
    }

    /**
     * Sets a new isTestMode
     *
     * @param boolean $isTestMode
     * @return self
     */
    public function setIsTestMode($isTestMode)
    {
        $this->isTestMode = $isTestMode;
        return $this;
    }

}
