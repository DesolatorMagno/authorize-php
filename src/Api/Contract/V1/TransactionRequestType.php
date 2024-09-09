<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing TransactionRequestType
 *
 *
 * XSD Type: transactionRequestType
 */
class TransactionRequestType implements JsonSerializable
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
     * @property PaymentType $payment
     */
    private $payment = null;

    /**
     * @property CustomerProfilePaymentType $profile
     */
    private $profile = null;

    /**
     * @property SolutionType $solution
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
     * @property OrderType $order
     */
    private $order = null;

    /**
     * @property LineItemType[] $lineItems
     */
    private $lineItems = null;

    /**
     * @property ExtendedAmountType $tax
     */
    private $tax = null;

    /**
     * @property ExtendedAmountType $duty
     */
    private $duty = null;

    /**
     * @property ExtendedAmountType $shipping
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
     * @property CustomerDataType $customer
     */
    private $customer = null;

    /**
     * @property CustomerAddressType $billTo
     */
    private $billTo = null;

    /**
     * @property NameAndAddressType $shipTo
     */
    private $shipTo = null;

    /**
     * @property string $customerIP
     */
    private $customerIP = null;

    /**
     * @property CcAuthenticationType
     * $cardholderAuthentication
     */
    private $cardholderAuthentication = null;

    /**
     * @property TransRetailInfoType $retail
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
     * @property SettingType[] $transactionSettings
     */
    private $transactionSettings = null;

    /**
     * @property UserFieldType[] $userFields
     */
    private $userFields = null;

    /**
     * @property ExtendedAmountType $surcharge
     */
    private $surcharge = null;

    /**
     * @property string $merchantDescriptor
     */
    private $merchantDescriptor = null;

    /**
     * @property SubMerchantType $subMerchant
     */
    private $subMerchant = null;

    /**
     * @property ExtendedAmountType $tip
     */
    private $tip = null;

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
     * @property OtherTaxType $otherTax
     */
    private $otherTax = null;

    /**
     * @property NameAndAddressType $shipFrom
     */
    private $shipFrom = null;

    /**
     * @property AuthorizationIndicatorType
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
     * @return PaymentType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param PaymentType $payment
     * @return self
     */
    public function setPayment(PaymentType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return CustomerProfilePaymentType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param CustomerProfilePaymentType $profile
     * @return self
     */
    public function setProfile(CustomerProfilePaymentType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as solution
     *
     * @return SolutionType
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Sets a new solution
     *
     * @param SolutionType $solution
     * @return self
     */
    public function setSolution(SolutionType $solution)
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
     * @return OrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param OrderType $order
     * @return self
     */
    public function setOrder(OrderType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Adds as lineItem
     *
     * @param LineItemType $lineItem
     *@return self
     */
    public function addToLineItems(LineItemType $lineItem)
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
     * @return LineItemType[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * Sets a new lineItems
     *
     * @param LineItemType[] $lineItems
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
     * @return ExtendedAmountType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param ExtendedAmountType $tax
     * @return self
     */
    public function setTax(ExtendedAmountType $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as duty
     *
     * @return ExtendedAmountType
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param ExtendedAmountType $duty
     * @return self
     */
    public function setDuty(ExtendedAmountType $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as shipping
     *
     * @return ExtendedAmountType
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Sets a new shipping
     *
     * @param ExtendedAmountType $shipping
     * @return self
     */
    public function setShipping(ExtendedAmountType $shipping)
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
     * @return CustomerDataType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param CustomerDataType $customer
     * @return self
     */
    public function setCustomer(CustomerDataType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as billTo
     *
     * @return CustomerAddressType
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * Sets a new billTo
     *
     * @param CustomerAddressType $billTo
     * @return self
     */
    public function setBillTo(CustomerAddressType $billTo)
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return NameAndAddressType
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(NameAndAddressType $shipTo)
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
     * @return CcAuthenticationType
     */
    public function getCardholderAuthentication()
    {
        return $this->cardholderAuthentication;
    }

    /**
     * Sets a new cardholderAuthentication
     *
     * @param CcAuthenticationType
     * $cardholderAuthentication
     * @return self
     */
    public function setCardholderAuthentication(CcAuthenticationType $cardholderAuthentication)
    {
        $this->cardholderAuthentication = $cardholderAuthentication;
        return $this;
    }

    /**
     * Gets as retail
     *
     * @return TransRetailInfoType
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * Sets a new retail
     *
     * @param TransRetailInfoType $retail
     * @return self
     */
    public function setRetail(TransRetailInfoType $retail)
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
     * @param SettingType $setting
     *@return self
     */
    public function addToTransactionSettings(SettingType $setting)
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
     * @return SettingType[]
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
     * @param SettingType[] $transactionSettings
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
     * @param UserFieldType $userField
     *@return self
     */
    public function addToUserFields(UserFieldType $userField)
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
     * @return UserFieldType[]
     */
    public function getUserFields()
    {
        return $this->userFields;
    }

    /**
     * Sets a new userFields
     *
     * @param UserFieldType[] $userFields
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
     * @return ExtendedAmountType
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * @param ExtendedAmountType $surcharge
     * @return self
     */
    public function setSurcharge(ExtendedAmountType $surcharge)
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
     * @return SubMerchantType
     */
    public function getSubMerchant()
    {
        return $this->subMerchant;
    }

    /**
     * Sets a new subMerchant
     *
     * @param SubMerchantType $subMerchant
     * @return self
     */
    public function setSubMerchant(SubMerchantType $subMerchant)
    {
        $this->subMerchant = $subMerchant;
        return $this;
    }

    /**
     * Gets as tip
     *
     * @return ExtendedAmountType
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * Sets a new tip
     *
     * @param ExtendedAmountType $tip
     * @return self
     */
    public function setTip(ExtendedAmountType $tip)
    {
        $this->tip = $tip;
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
     * Gets as otherTax
     *
     * @return OtherTaxType
     */
    public function getOtherTax()
    {
        return $this->otherTax;
    }

    /**
     * Sets a new otherTax
     *
     * @param OtherTaxType $otherTax
     * @return self
     */
    public function setOtherTax(OtherTaxType $otherTax)
    {
        $this->otherTax = $otherTax;
        return $this;
    }

    /**
     * Gets as shipFrom
     *
     * @return NameAndAddressType
     */
    public function getShipFrom()
    {
        return $this->shipFrom;
    }

    /**
     * Sets a new shipFrom
     *
     * @param NameAndAddressType $shipFrom
     * @return self
     */
    public function setShipFrom(NameAndAddressType $shipFrom)
    {
        $this->shipFrom = $shipFrom;
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
        return $values;
    }

    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class($this) , $key);

				if(!is_null($classDetails)) {
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
								$type = new DateTime($valueChild);
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
							$type = new DateTime($value);
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
