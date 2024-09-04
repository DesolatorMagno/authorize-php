<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;
use DesolatorMagno\AuthorizePhp\Traits\SerializeAnetRequestTrait;

/**
 * Class representing GetHostedPaymentPageRequest
 */
class GetHostedPaymentPageRequest extends ANetApiRequestType
{
    use SerializeAnetRequestTrait;
    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     * $transactionRequest
     */
    private $transactionRequest = null;

    /**
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[] $hostedPaymentSettings
     */
    private $hostedPaymentSettings = null;

    /**
     * Gets as transactionRequest
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     */
    public function getTransactionRequest()
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest)
    {
        $this->transactionRequest = $transactionRequest;
        return $this;
    }

    /**
     * Adds as setting
     *
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType $setting
     *@return self
     */
    public function addToHostedPaymentSettings(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType $setting)
    {
        $this->hostedPaymentSettings[] = $setting;
        return $this;
    }

    /**
     * isset hostedPaymentSettings
     *
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHostedPaymentSettings($index)
    {
        return isset($this->hostedPaymentSettings[$index]);
    }

    /**
     * unset hostedPaymentSettings
     *
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHostedPaymentSettings($index)
    {
        unset($this->hostedPaymentSettings[$index]);
    }

    /**
     * Gets as hostedPaymentSettings
     *
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[]
     */
    public function getHostedPaymentSettings()
    {
        return $this->hostedPaymentSettings;
    }

    /**
     * Sets a new hostedPaymentSettings
     *
     * Allowed values for settingName are: hostedPaymentIFrameCommunicatorUrl,
     * hostedPaymentButtonOptions, hostedPaymentReturnOptions,
     * hostedPaymentOrderOptions, hostedPaymentPaymentOptions,
     * hostedPaymentBillingAddressOptions, hostedPaymentShippingAddressOptions,
     * hostedPaymentSecurityOptions, hostedPaymentCustomerOptions,
     * hostedPaymentStyleOptions
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[] $hostedPaymentSettings
     * @return self
     */
    public function setHostedPaymentSettings(array $hostedPaymentSettings)
    {
        $this->hostedPaymentSettings = $hostedPaymentSettings;
        return $this;
    }

}
