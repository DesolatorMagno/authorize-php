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
     * @property TransactionRequestType
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
     * @property SettingType[] $hostedPaymentSettings
     */
    private $hostedPaymentSettings = null;

    /**
     * Gets as transactionRequest
     *
     * @return TransactionRequestType
     */
    public function getTransactionRequest()
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(TransactionRequestType $transactionRequest)
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
     * @param SettingType $setting
     *@return self
     */
    public function addToHostedPaymentSettings(SettingType $setting)
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
     * @return SettingType[]
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
     * @param SettingType[] $hostedPaymentSettings
     * @return self
     */
    public function setHostedPaymentSettings(array $hostedPaymentSettings)
    {
        $this->hostedPaymentSettings = $hostedPaymentSettings;
        return $this;
    }

}
