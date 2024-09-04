<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing DecryptPaymentDataRequest
 */
class DecryptPaymentDataRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OpaqueDataType $opaqueData
     */
    private $opaqueData = null;

    /**
     * @property string $callId
     */
    private $callId = null;

    /**
     * Gets as opaqueData
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OpaqueDataType
     */
    public function getOpaqueData()
    {
        return $this->opaqueData;
    }

    /**
     * Sets a new opaqueData
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OpaqueDataType $opaqueData
     * @return self
     */
    public function setOpaqueData(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\OpaqueDataType $opaqueData)
    {
        $this->opaqueData = $opaqueData;
        return $this;
    }

    /**
     * Gets as callId
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Sets a new callId
     *
     * @param string $callId
     * @return self
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;
        return $this;
    }

}
