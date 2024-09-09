<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing SecurePaymentContainerResponse
 */
class SecurePaymentContainerResponse extends ANetApiResponseType
{

    /**
     * @property OpaqueDataType $opaqueData
     */
    private $opaqueData = null;

    /**
     * Gets as opaqueData
     *
     * @return OpaqueDataType
     */
    public function getOpaqueData()
    {
        return $this->opaqueData;
    }

    /**
     * Sets a new opaqueData
     *
     * @param OpaqueDataType $opaqueData
     * @return self
     */
    public function setOpaqueData(OpaqueDataType $opaqueData)
    {
        $this->opaqueData = $opaqueData;
        return $this;
    }

}
