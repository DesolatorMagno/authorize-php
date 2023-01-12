<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;

/**
 * Class representing GetHostedPaymentPageRequest
 */
class GetHostedPaymentPageRequest extends ANetApiRequestType
{

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


    // Json Serialize Code
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = \DesolatorMagno\AuthorizePhp\util\Mapper::Instance();
        foreach($values as $key => $value){
            $classDetails = $mapper->getClass(get_class() , $key);
            if (isset($value)){
                if ($classDetails->className === 'Date'){
                    $dateTime = $value->format('Y-m-d');
                    $values[$key] = $dateTime;
                }
                else if ($classDetails->className === 'DateTime'){
                    $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                    $values[$key] = $dateTime;
                }
                if (is_array($value)){
                    if (!$classDetails->isInlineArray){
                        $subKey = $classDetails->arrayEntryname;
                        $subArray = [$subKey => $value];
                        $values[$key] = $subArray;
                    }
                }
            }
        }
        return array_merge(parent::jsonSerialize(), $values);
    }

}
