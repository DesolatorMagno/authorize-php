<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetHostedProfilePageRequest
 */
class GetHostedProfilePageRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property string $customerProfileId
     */
    private $customerProfileId = null;

    /**
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @property SettingType[] $hostedProfileSettings
     */
    private $hostedProfileSettings = null;

    /**
     * Gets as customerProfileId
     *
     * @return string
     */
    public function getCustomerProfileId()
    {
        return $this->customerProfileId;
    }

    /**
     * Sets a new customerProfileId
     *
     * @param string $customerProfileId
     * @return self
     */
    public function setCustomerProfileId($customerProfileId)
    {
        $this->customerProfileId = $customerProfileId;
        return $this;
    }

    /**
     * Adds as setting
     *
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @param SettingType $setting
     *@return self
     */
    public function addToHostedProfileSettings(SettingType $setting)
    {
        $this->hostedProfileSettings[] = $setting;
        return $this;
    }

    /**
     * isset hostedProfileSettings
     *
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHostedProfileSettings($index)
    {
        return isset($this->hostedProfileSettings[$index]);
    }

    /**
     * unset hostedProfileSettings
     *
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHostedProfileSettings($index)
    {
        unset($this->hostedProfileSettings[$index]);
    }

    /**
     * Gets as hostedProfileSettings
     *
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @return SettingType[]
     */
    public function getHostedProfileSettings()
    {
        return $this->hostedProfileSettings;
    }

    /**
     * Sets a new hostedProfileSettings
     *
     * Allowed values for settingName are: hostedProfileReturnUrl,
     * hostedProfileReturnUrlText, hostedProfilePageBorderVisible,
     * hostedProfileIFrameCommunicatorUrl, hostedProfileHeadingBgColor,
     * hostedProfileBillingAddressRequired, hostedProfileCardCodeRequired,
     * hostedProfileBillingAddressOptions, hostedProfileManageOptions,
     * hostedProfilePaymentOptions, hostedProfileSaveButtonText.
     *
     * @param SettingType[] $hostedProfileSettings
     * @return self
     */
    public function setHostedProfileSettings(array $hostedProfileSettings)
    {
        $this->hostedProfileSettings = $hostedProfileSettings;
        return $this;
    }

}
