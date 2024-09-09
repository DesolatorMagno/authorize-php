<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing AuResponseType
 *
 *
 * XSD Type: auResponseType
 */
class AuResponseType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;
    /**
     * @property string $auReasonCode
     */
    private $auReasonCode = null;

    /**
     * @property integer $profileCount
     */
    private $profileCount = null;

    /**
     * @property string $reasonDescription
     */
    private $reasonDescription = null;

    /**
     * Gets as auReasonCode
     *
     * @return string
     */
    public function getAuReasonCode()
    {
        return $this->auReasonCode;
    }

    /**
     * Sets a new auReasonCode
     *
     * @param string $auReasonCode
     * @return self
     */
    public function setAuReasonCode($auReasonCode)
    {
        $this->auReasonCode = $auReasonCode;
        return $this;
    }

    /**
     * Gets as profileCount
     *
     * @return integer
     */
    public function getProfileCount()
    {
        return $this->profileCount;
    }

    /**
     * Sets a new profileCount
     *
     * @param integer $profileCount
     * @return self
     */
    public function setProfileCount($profileCount)
    {
        $this->profileCount = $profileCount;
        return $this;
    }

    /**
     * Gets as reasonDescription
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * Sets a new reasonDescription
     *
     * @param string $reasonDescription
     * @return self
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
        return $this;
    }

}
