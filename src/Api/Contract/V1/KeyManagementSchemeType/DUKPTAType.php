<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing DUKPTAType
 */
class DUKPTAType implements JsonSerializable
{
    use SetGlobalTrait, JsonSerializeGlobalTrait;

    /**
     * @property string $operation
     */
    private $operation = null;

    /**
     * @property
     * DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     * $mode
     */
    private $mode = null;

    /**
     * @property
     * DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     * $deviceInfo
     */
    private $deviceInfo = null;

    /**
     * @property
     * DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     * $encryptedData
     */
    private $encryptedData = null;

    /**
     * Gets as operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as mode
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     * $mode
     * @return self
     */
    public function setMode(ModeAType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as deviceInfo
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     */
    public function getDeviceInfo()
    {
        return $this->deviceInfo;
    }

    /**
     * Sets a new deviceInfo
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     * $deviceInfo
     * @return self
     */
    public function setDeviceInfo(DeviceInfoAType $deviceInfo)
    {
        $this->deviceInfo = $deviceInfo;
        return $this;
    }

    /**
     * Gets as encryptedData
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     */
    public function getEncryptedData()
    {
        return $this->encryptedData;
    }

    /**
     * Sets a new encryptedData
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     * $encryptedData
     * @return self
     */
    public function setEncryptedData(EncryptedDataAType $encryptedData)
    {
        $this->encryptedData = $encryptedData;
        return $this;
    }

}
