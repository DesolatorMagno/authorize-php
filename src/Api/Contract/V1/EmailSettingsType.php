<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArrayOfSettingType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeExtendTrait;
use JsonSerializable;

/**
 * Class representing EmailSettingsType
 *
 * Allowed values for settingName are: headerEmailReceipt and footerEmailReceipt
 * XSD Type: emailSettingsType
 */
class EmailSettingsType extends ArrayOfSettingType implements JsonSerializable
{
    use JsonSerializeExtendTrait;

    /**
     * @property integer $version
     */
    private $version = null;

    /**
     * Gets as version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param integer $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

}
