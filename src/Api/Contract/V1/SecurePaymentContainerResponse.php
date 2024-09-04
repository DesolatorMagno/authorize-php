<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing SecurePaymentContainerResponse
 */
class SecurePaymentContainerResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OpaqueDataType $opaqueData
     */
    private $opaqueData = null;

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

}
