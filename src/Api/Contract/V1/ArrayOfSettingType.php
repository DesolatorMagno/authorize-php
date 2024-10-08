<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing ArrayOfSettingType
 *
 *
 * XSD Type: ArrayOfSetting
 */
class ArrayOfSettingType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    /**
     * @property SettingType[] $setting
     */
    private $setting = null;

    /**
     * Adds as setting
     *
     * @param SettingType $setting
     *@return self
     */
    public function addToSetting(SettingType $setting)
    {
        $this->setting[] = $setting;
        return $this;
    }

    /**
     * isset setting
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSetting($index)
    {
        return isset($this->setting[$index]);
    }

    /**
     * unset setting
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSetting($index)
    {
        unset($this->setting[$index]);
    }

    /**
     * Gets as setting
     *
     * @return SettingType[]
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Sets a new setting
     *
     * @param SettingType[] $setting
     * @return self
     */
    public function setSetting(array $setting)
    {
        $this->setting = $setting;
        return $this;
    }

}
