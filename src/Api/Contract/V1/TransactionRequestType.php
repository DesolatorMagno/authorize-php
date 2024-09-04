<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing TransactionRequestType
 *
 *
 * XSD Type: transactionRequestType
 */
class TransactionRequestType implements \JsonSerializable
{

    /**
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment
     */
    private $payment = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfilePaymentType $profile
     */
    private $profile = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SolutionType $solution
     */
    private $solution = null;

    /**
     * @property string $callId
     */
    private $callId = null;

    /**
     * @property string $terminalNumber
     */
    private $terminalNumber = null;

    /**
     * @property string $authCode
     */
    private $authCode = null;

    /**
     * @property string $refTransId
     */
    private $refTransId = null;

    /**
     * @property string $splitTenderId
     */
    private $splitTenderId = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order
     */
    private $order = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     */
    private $lineItems = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     */
    private $tax = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     */
    private $duty = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     */
    private $shipping = null;

    /**
     * @property boolean $taxExempt
     */
    private $taxExempt = null;

    /**
     * @property string $poNumber
     */
    private $poNumber = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerDataType $customer
     */
    private $customer = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo
     */
    private $billTo = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo
     */
    private $shipTo = null;

    /**
     * @property string $customerIP
     */
    private $customerIP = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CcAuthenticationType
     * $cardholderAuthentication
     */
    private $cardholderAuthentication = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $retail
     */
    private $retail = null;

    /**
     * @property string $employeeId
     */
    private $employeeId = null;

    /**
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[] $transactionSettings
     */
    private $transactionSettings = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[] $userFields
     */
    private $userFields = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $surcharge
     */
    private $surcharge = null;

    /**
     * @property string $merchantDescriptor
     */
    private $merchantDescriptor = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubMerchantType $subMerchant
     */
    private $subMerchant = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tip
     */
    private $tip = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProcessingOptionsType
     * $processingOptions
     */
    private $processingOptions = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     * $subsequentAuthInformation
     */
    private $subsequentAuthInformation = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OtherTaxType $otherTax
     */
    private $otherTax = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipFrom
     */
    private $shipFrom = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuthorizationIndicatorType
     * $authorizationIndicatorType
     */
    private $authorizationIndicatorType = null;

    /**
     * Gets as transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as payment
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment
     * @return self
     */
    public function setPayment(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfilePaymentType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfilePaymentType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfilePaymentType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as solution
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SolutionType
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Sets a new solution
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SolutionType $solution
     * @return self
     */
    public function setSolution(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SolutionType $solution)
    {
        $this->solution = $solution;
        return $this;
    }

    /**
     * Gets as callId
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Sets a new callId
     *
     * @param string $callId
     * @return self
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;
        return $this;
    }

    /**
     * Gets as terminalNumber
     *
     * @return string
     */
    public function getTerminalNumber()
    {
        return $this->terminalNumber;
    }

    /**
     * Sets a new terminalNumber
     *
     * @param string $terminalNumber
     * @return self
     */
    public function setTerminalNumber($terminalNumber)
    {
        $this->terminalNumber = $terminalNumber;
        return $this;
    }

    /**
     * Gets as authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Sets a new authCode
     *
     * @param string $authCode
     * @return self
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Gets as refTransId
     *
     * @return string
     */
    public function getRefTransId()
    {
        return $this->refTransId;
    }

    /**
     * Sets a new refTransId
     *
     * @param string $refTransId
     * @return self
     */
    public function setRefTransId($refTransId)
    {
        $this->refTransId = $refTransId;
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
     * Gets as order
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order
     * @return self
     */
    public function setOrder(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Adds as lineItem
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItem
     *@return self
     */
    public function addToLineItems(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType $lineItem)
    {
        $this->lineItems[] = $lineItem;
        return $this;
    }

    /**
     * isset lineItems
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLineItems($index)
    {
        return isset($this->lineItems[$index]);
    }

    /**
     * unset lineItems
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLineItems($index)
    {
        unset($this->lineItems[$index]);
    }

    /**
     * Gets as lineItems
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * Sets a new lineItems
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\LineItemType[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }

    /**
     * Gets as tax
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax
     * @return self
     */
    public function setTax(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as duty
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty
     * @return self
     */
    public function setDuty(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as shipping
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets a new shipping
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping
     * @return self
     */
    public function setShipping(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $shipping)
    {
        $this->shipping = $shipping;
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
     * Gets as poNumber
     *
     * @return string
     */
    public function getPoNumber()
    {
        return $this->poNumber;
    }

    /**
     * Sets a new poNumber
     *
     * @param string $poNumber
     * @return self
     */
    public function setPoNumber($poNumber)
    {
        $this->poNumber = $poNumber;
        return $this;
    }

    /**
     * Gets as customer
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerDataType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerDataType $customer
     * @return self
     */
    public function setCustomer(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerDataType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as billTo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * Sets a new billTo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo
     * @return self
     */
    public function setBillTo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerAddressType $billTo)
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo)
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Gets as customerIP
     *
     * @return string
     */
    public function getCustomerIP()
    {
        return $this->customerIP;
    }

    /**
     * Sets a new customerIP
     *
     * @param string $customerIP
     * @return self
     */
    public function setCustomerIP($customerIP)
    {
        $this->customerIP = $customerIP;
        return $this;
    }

    /**
     * Gets as cardholderAuthentication
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CcAuthenticationType
     */
    public function getCardholderAuthentication()
    {
        return $this->cardholderAuthentication;
    }

    /**
     * Sets a new cardholderAuthentication
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CcAuthenticationType
     * $cardholderAuthentication
     * @return self
     */
    public function setCardholderAuthentication(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CcAuthenticationType $cardholderAuthentication)
    {
        $this->cardholderAuthentication = $cardholderAuthentication;
        return $this;
    }

    /**
     * Gets as retail
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * Sets a new retail
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $retail
     * @return self
     */
    public function setRetail(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransRetailInfoType $retail)
    {
        $this->retail = $retail;
        return $this;
    }

    /**
     * Gets as employeeId
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Sets a new employeeId
     *
     * @param string $employeeId
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
        return $this;
    }

    /**
     * Adds as setting
     *
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType $setting
     *@return self
     */
    public function addToTransactionSettings(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType $setting)
    {
        $this->transactionSettings[] = $setting;
        return $this;
    }

    /**
     * isset transactionSettings
     *
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransactionSettings($index)
    {
        return isset($this->transactionSettings[$index]);
    }

    /**
     * unset transactionSettings
     *
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransactionSettings($index)
    {
        unset($this->transactionSettings[$index]);
    }

    /**
     * Gets as transactionSettings
     *
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[]
     */
    public function getTransactionSettings()
    {
        return $this->transactionSettings;
    }

    /**
     * Sets a new transactionSettings
     *
     * Allowed values for settingName are: emailCustomer, merchantEmail,
     * allowPartialAuth, headerEmailReceipt, footerEmailReceipt, recurringBilling,
     * duplicateWindow, testRequest.
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SettingType[] $transactionSettings
     * @return self
     */
    public function setTransactionSettings(array $transactionSettings)
    {
        $this->transactionSettings = $transactionSettings;
        return $this;
    }

    /**
     * Adds as userField
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType $userField
     *@return self
     */
    public function addToUserFields(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType $userField)
    {
        $this->userFields[] = $userField;
        return $this;
    }

    /**
     * isset userFields
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUserFields($index)
    {
        return isset($this->userFields[$index]);
    }

    /**
     * unset userFields
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUserFields($index)
    {
        unset($this->userFields[$index]);
    }

    /**
     * Gets as userFields
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[]
     */
    public function getUserFields()
    {
        return $this->userFields;
    }

    /**
     * Sets a new userFields
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[] $userFields
     * @return self
     */
    public function setUserFields(array $userFields)
    {
        $this->userFields = $userFields;
        return $this;
    }

    /**
     * Gets as surcharge
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $surcharge
     * @return self
     */
    public function setSurcharge(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $surcharge)
    {
        $this->surcharge = $surcharge;
        return $this;
    }

    /**
     * Gets as merchantDescriptor
     *
     * @return string
     */
    public function getMerchantDescriptor()
    {
        return $this->merchantDescriptor;
    }

    /**
     * Sets a new merchantDescriptor
     *
     * @param string $merchantDescriptor
     * @return self
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->merchantDescriptor = $merchantDescriptor;
        return $this;
    }

    /**
     * Gets as subMerchant
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubMerchantType
     */
    public function getSubMerchant()
    {
        return $this->subMerchant;
    }

    /**
     * Sets a new subMerchant
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubMerchantType $subMerchant
     * @return self
     */
    public function setSubMerchant(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubMerchantType $subMerchant)
    {
        $this->subMerchant = $subMerchant;
        return $this;
    }

    /**
     * Gets as tip
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * Sets a new tip
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tip
     * @return self
     */
    public function setTip(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ExtendedAmountType $tip)
    {
        $this->tip = $tip;
        return $this;
    }

    /**
     * Gets as processingOptions
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProcessingOptionsType
     */
    public function getProcessingOptions()
    {
        return $this->processingOptions;
    }

    /**
     * Sets a new processingOptions
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProcessingOptionsType $processingOptions
     * @return self
     */
    public function setProcessingOptions(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProcessingOptionsType $processingOptions)
    {
        $this->processingOptions = $processingOptions;
        return $this;
    }

    /**
     * Gets as subsequentAuthInformation
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     */
    public function getSubsequentAuthInformation()
    {
        return $this->subsequentAuthInformation;
    }

    /**
     * Sets a new subsequentAuthInformation
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType
     * $subsequentAuthInformation
     * @return self
     */
    public function setSubsequentAuthInformation(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubsequentAuthInformationType $subsequentAuthInformation)
    {
        $this->subsequentAuthInformation = $subsequentAuthInformation;
        return $this;
    }

    /**
     * Gets as otherTax
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OtherTaxType
     */
    public function getOtherTax()
    {
        return $this->otherTax;
    }

    /**
     * Sets a new otherTax
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OtherTaxType $otherTax
     * @return self
     */
    public function setOtherTax(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\OtherTaxType $otherTax)
    {
        $this->otherTax = $otherTax;
        return $this;
    }

    /**
     * Gets as shipFrom
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType
     */
    public function getShipFrom()
    {
        return $this->shipFrom;
    }

    /**
     * Sets a new shipFrom
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipFrom
     * @return self
     */
    public function setShipFrom(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipFrom)
    {
        $this->shipFrom = $shipFrom;
        return $this;
    }

    /**
     * Gets as authorizationIndicatorType
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuthorizationIndicatorType
     */
    public function getAuthorizationIndicatorType()
    {
        return $this->authorizationIndicatorType;
    }

    /**
     * Sets a new authorizationIndicatorType
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuthorizationIndicatorType
     * $authorizationIndicatorType
     * @return self
     */
    public function setAuthorizationIndicatorType(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\AuthorizationIndicatorType $authorizationIndicatorType)
    {
        $this->authorizationIndicatorType = $authorizationIndicatorType;
        return $this;
    }


  // Json Serialize Code
   #[\ReturnTypeWillChange]
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = \DesolatorMagno\AuthorizePhp\Util\Mapper::Instance();
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
        return $values;
    }

    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = \DesolatorMagno\AuthorizePhp\Util\Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class($this) , $key);

				if($classDetails !== NULL ) {
					if ($classDetails->isArray) {
						if ($classDetails->isCustomDefined) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new $classDetails->className;
								$type->set($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							foreach($value AS $keyChild => $valueChild) {
								$type = new \DateTime($valueChild);
								$this->{'addTo' . $key}($type);
							}
						}
						else {
							foreach($value AS $keyChild => $valueChild) {
								$this->{'addTo' . $key}($valueChild);
							}
						}
					}
					else {
						if ($classDetails->isCustomDefined){
							$type = new $classDetails->className;
							$type->set($value);
							$this->{'set' . $key}($type);
						}
						else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date' ) {
							$type = new \DateTime($value);
							$this->{'set' . $key}($type);
						}
						else {
							$this->{'set' . $key}($value);
						}
					}
				}
			}
		}
    }

}
