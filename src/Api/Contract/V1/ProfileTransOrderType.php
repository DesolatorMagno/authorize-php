<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAmountType;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing ProfileTransOrderType
 *
 *
 * XSD Type: profileTransOrderType
 */
class ProfileTransOrderType extends ProfileTransAmountType implements JsonSerializable
{

    /**
     * @property string $customerProfileId
     */
    private $customerProfileId = null;

    /**
     * @property string $customerPaymentProfileId
     */
    private $customerPaymentProfileId = null;

    /**
     * @property string $customerShippingAddressId
     */
    private $customerShippingAddressId = null;

    /**
     * @property OrderExType $order
     */
    private $order = null;

    /**
     * @property boolean $taxExempt
     */
    private $taxExempt = null;

    /**
     * @property boolean $recurringBilling
     */
    private $recurringBilling = null;

    /**
     * @property string $cardCode
     */
    private $cardCode = null;

    /**
     * @property string $splitTenderId
     */
    private $splitTenderId = null;

    /**
     * @property ProcessingOptionsType
     * $processingOptions
     */
    private $processingOptions = null;

    /**
     * @property SubsequentAuthInformationType
     * $subsequentAuthInformation
     */
    private $subsequentAuthInformation = null;

    /**
     * @property AuthorizationIndicatorType
     * $authorizationIndicatorType
     */
    private $authorizationIndicatorType = null;

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
     * Gets as customerPaymentProfileId
     *
     * @return string
     */
    public function getCustomerPaymentProfileId()
    {
        return $this->customerPaymentProfileId;
    }

    /**
     * Sets a new customerPaymentProfileId
     *
     * @param string $customerPaymentProfileId
     * @return self
     */
    public function setCustomerPaymentProfileId($customerPaymentProfileId)
    {
        $this->customerPaymentProfileId = $customerPaymentProfileId;
        return $this;
    }

    /**
     * Gets as customerShippingAddressId
     *
     * @return string
     */
    public function getCustomerShippingAddressId()
    {
        return $this->customerShippingAddressId;
    }

    /**
     * Sets a new customerShippingAddressId
     *
     * @param string $customerShippingAddressId
     * @return self
     */
    public function setCustomerShippingAddressId($customerShippingAddressId)
    {
        $this->customerShippingAddressId = $customerShippingAddressId;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return OrderExType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param OrderExType $order
     * @return self
     */
    public function setOrder(OrderExType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as taxExempt
     *
     * @return boolean
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    /**
     * Sets a new taxExempt
     *
     * @param boolean $taxExempt
     * @return self
     */
    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;
        return $this;
    }

    /**
     * Gets as recurringBilling
     *
     * @return boolean
     */
    public function getRecurringBilling()
    {
        return $this->recurringBilling;
    }

    /**
     * Sets a new recurringBilling
     *
     * @param boolean $recurringBilling
     * @return self
     */
    public function setRecurringBilling($recurringBilling)
    {
        $this->recurringBilling = $recurringBilling;
        return $this;
    }

    /**
     * Gets as cardCode
     *
     * @return string
     */
    public function getCardCode()
    {
        return $this->cardCode;
    }

    /**
     * Sets a new cardCode
     *
     * @param string $cardCode
     * @return self
     */
    public function setCardCode($cardCode)
    {
        $this->cardCode = $cardCode;
        return $this;
    }

    /**
     * Gets as splitTenderId
     *
     * @return string
     */
    public function getSplitTenderId()
    {
        return $this->splitTenderId;
    }

    /**
     * Sets a new splitTenderId
     *
     * @param string $splitTenderId
     * @return self
     */
    public function setSplitTenderId($splitTenderId)
    {
        $this->splitTenderId = $splitTenderId;
        return $this;
    }

    /**
     * Gets as processingOptions
     *
     * @return ProcessingOptionsType
     */
    public function getProcessingOptions()
    {
        return $this->processingOptions;
    }

    /**
     * Sets a new processingOptions
     *
     * @param ProcessingOptionsType $processingOptions
     * @return self
     */
    public function setProcessingOptions(ProcessingOptionsType $processingOptions)
    {
        $this->processingOptions = $processingOptions;
        return $this;
    }

    /**
     * Gets as subsequentAuthInformation
     *
     * @return SubsequentAuthInformationType
     */
    public function getSubsequentAuthInformation()
    {
        return $this->subsequentAuthInformation;
    }

    /**
     * Sets a new subsequentAuthInformation
     *
     * @param SubsequentAuthInformationType
     * $subsequentAuthInformation
     * @return self
     */
    public function setSubsequentAuthInformation(SubsequentAuthInformationType $subsequentAuthInformation)
    {
        $this->subsequentAuthInformation = $subsequentAuthInformation;
        return $this;
    }

    /**
     * Gets as authorizationIndicatorType
     *
     * @return AuthorizationIndicatorType
     */
    public function getAuthorizationIndicatorType()
    {
        return $this->authorizationIndicatorType;
    }

    /**
     * Sets a new authorizationIndicatorType
     *
     * @param AuthorizationIndicatorType
     * $authorizationIndicatorType
     * @return self
     */
    public function setAuthorizationIndicatorType(AuthorizationIndicatorType $authorizationIndicatorType)
    {
        $this->authorizationIndicatorType = $authorizationIndicatorType;
        return $this;
    }

  // Json Serialize Code
   #[ReturnTypeWillChange]
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = Mapper::Instance();
        foreach($values as $key => $value){
            $classDetails = $mapper->getClass(get_class($this) , $key);
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
                        $subKey = $classDetails->arrayEntryName;
                        $subArray = [$subKey => $value];
                        $values[$key] = $subArray;
                    }
                }
            }
        }
        return array_merge(parent::jsonSerialize(), $values);
    }

}
