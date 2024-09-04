<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType;
use DesolatorMagno\AuthorizePhp\Traits\SetSerializeTrait;
use JsonSerializable;

/**
 * Class representing TransactionResponseType
 *
 *
 * XSD Type: transactionResponse
 */
class TransactionResponseType implements JsonSerializable
{
    use SetSerializeTrait;

    private ?string $responseCode = null;

    private ?string $rawResponseCode = null;

    private ?string $authCode = null;

    private ?string $avsResultCode = null;

    private ?string $cvvResultCode = null;

    private ?string $cavvResultCode = null;

    private ?string $transId = null;

    private ?string $refTransID = null;

    private ?string $transHash = null;

    private ?string $testRequest = null;

    private ?string $accountNumber = null;

    private ?string $entryMode = null;

    private ?string $accountType = null;

    private ?string $splitTenderId = null;

    private ?TransactionResponseType\PrePaidCardAType $prePaidCard = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType[]
     * $messages
     */
    private $messages = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     * $errors
     */
    private $errors = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     * $splitTenderPayments
     */
    private $splitTenderPayments = null;

    /**
     * @property UserFieldType[] $userFields
     */
    private $userFields = null;

    /**
     * @property NameAndAddressType $shipTo
     */
    private ?NameAndAddressType $shipTo = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType
     * $secureAcceptance
     */
    private $secureAcceptance = null;

    private ?TransactionResponseType\EmvResponseAType $emvResponse = null;

    private ?string $transHashSha2 = null;

    private ?CustomerProfileIdType $profile = null;

    private ?string $networkTransId = null;

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(string $responseCode): TransactionResponseType
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    public function getRawResponseCode(): ?string
    {
        return $this->rawResponseCode;
    }

    public function setRawResponseCode(string $rawResponseCode): TransactionResponseType
    {
        $this->rawResponseCode = $rawResponseCode;
        return $this;
    }

    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): TransactionResponseType
    {
        $this->authCode = $authCode;
        return $this;
    }

    public function getAvsResultCode(): ?string
    {
        return $this->avsResultCode;
    }

    public function setAvsResultCode(string $avsResultCode): TransactionResponseType
    {
        $this->avsResultCode = $avsResultCode;
        return $this;
    }

    public function getCvvResultCode(): ?string
    {
        return $this->cvvResultCode;
    }

    public function setCvvResultCode(string $cvvResultCode): TransactionResponseType
    {
        $this->cvvResultCode = $cvvResultCode;
        return $this;
    }

    public function getCavvResultCode(): ?string
    {
        return $this->cavvResultCode;
    }

    public function setCavvResultCode(string $cavvResultCode): TransactionResponseType
    {
        $this->cavvResultCode = $cavvResultCode;
        return $this;
    }

    public function getTransId(): ?string
    {
        return $this->transId;
    }

    public function setTransId(string $transId): TransactionResponseType
    {
        $this->transId = $transId;
        return $this;
    }

    public function getRefTransID(): ?string
    {
        return $this->refTransID;
    }

    public function setRefTransID(string $refTransID): TransactionResponseType
    {
        $this->refTransID = $refTransID;
        return $this;
    }

    public function getTransHash(): ?string
    {
        return $this->transHash;
    }

    public function setTransHash(string $transHash): TransactionResponseType
    {
        $this->transHash = $transHash;
        return $this;
    }

    public function getTestRequest(): ?string
    {
        return $this->testRequest;
    }

    public function setTestRequest(string $testRequest): TransactionResponseType
    {
        $this->testRequest = $testRequest;
        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): TransactionResponseType
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    public function getEntryMode(): ?string
    {
        return $this->entryMode;
    }

    public function setEntryMode(string $entryMode): TransactionResponseType
    {
        $this->entryMode = $entryMode;
        return $this;
    }

    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    public function setAccountType(string $accountType): TransactionResponseType
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function getSplitTenderId(): ?string
    {
        return $this->splitTenderId;
    }

    public function setSplitTenderId(string $splitTenderId): TransactionResponseType
    {
        $this->splitTenderId = $splitTenderId;
        return $this;
    }

    public function getPrePaidCard(): ?TransactionResponseType\PrePaidCardAType
    {
        return $this->prePaidCard;
    }

    public function setPrePaidCard(PrePaidCardAType $prePaidCard): TransactionResponseType
    {
        $this->prePaidCard = $prePaidCard;
        return $this;
    }

    public function addToMessages(MessageAType $message): TransactionResponseType
    {
        $this->messages[] = $message;
        return $this;
    }

    /**
     * isset messages
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessages($index): bool
    {
        return isset($this->messages[$index]);
    }

    /**
     * unset messages
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessages($index)
    {
        unset($this->messages[$index]);
    }

    /**
     * Gets as messages
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType[]
     * $messages
     * @return self
     */
    public function setMessages(array $messages): TransactionResponseType
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Adds as error
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType
     * $error
     * @return self
     */
    public function addToErrors(ErrorAType $error): TransactionResponseType
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrors($index): bool
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType[]
     * $errors
     * @return self
     */
    public function setErrors(array $errors): TransactionResponseType
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Adds as splitTenderPayment
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType
     * $splitTenderPayment
     * @return self
     */
    public function addToSplitTenderPayments(SplitTenderPaymentAType $splitTenderPayment): TransactionResponseType
    {
        $this->splitTenderPayments[] = $splitTenderPayment;
        return $this;
    }

    /**
     * isset splitTenderPayments
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSplitTenderPayments($index): bool
    {
        return isset($this->splitTenderPayments[$index]);
    }

    /**
     * unset splitTenderPayments
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSplitTenderPayments($index)
    {
        unset($this->splitTenderPayments[$index]);
    }

    /**
     * Gets as splitTenderPayments
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     */
    public function getSplitTenderPayments()
    {
        return $this->splitTenderPayments;
    }

    /**
     * Sets a new splitTenderPayments
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType[]
     * $splitTenderPayments
     * @return self
     */
    public function setSplitTenderPayments(array $splitTenderPayments): TransactionResponseType
    {
        $this->splitTenderPayments = $splitTenderPayments;
        return $this;
    }

    /**
     * Adds as userField
     *
     * @param UserFieldType $userField
     * @return self
     */
    public function addToUserFields(UserFieldType $userField): TransactionResponseType
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
    public function issetUserFields($index): bool
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
    public function getUserFields(): ?array
    {
        return $this->userFields;
    }

    /**
     * Sets a new userFields
     *
     * @param UserFieldType[] $userFields
     * @return self
     */
    public function setUserFields(array $userFields): TransactionResponseType
    {
        $this->userFields = $userFields;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return NameAndAddressType
     */
    public function getShipTo(): ?NameAndAddressType
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(NameAndAddressType $shipTo): TransactionResponseType
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Gets as secureAcceptance
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType
     */
    public function getSecureAcceptance()
    {
        return $this->secureAcceptance;
    }

    /**
     * Sets a new secureAcceptance
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType
     * $secureAcceptance
     * @return self
     */
    public function setSecureAcceptance(SecureAcceptanceAType $secureAcceptance): TransactionResponseType
    {
        $this->secureAcceptance = $secureAcceptance;
        return $this;
    }

    /**
     * Gets as emvResponse
     *
     * @return EmvResponseAType
     */
    public function getEmvResponse(): ?EmvResponseAType
    {
        return $this->emvResponse;
    }

    /**
     * Sets a new emvResponse
     *
     * @param EmvResponseAType
     * $emvResponse
     * @return self
     */
    public function setEmvResponse(EmvResponseAType $emvResponse): TransactionResponseType
    {
        $this->emvResponse = $emvResponse;
        return $this;
    }

    /**
     * Gets as transHashSha2
     *
     * @return string
     */
    public function getTransHashSha2(): ?string
    {
        return $this->transHashSha2;
    }

    /**
     * Sets a new transHashSha2
     *
     * @param string $transHashSha2
     * @return self
     */
    public function setTransHashSha2(string $transHashSha2): TransactionResponseType
    {
        $this->transHashSha2 = $transHashSha2;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return CustomerProfileIdType
     */
    public function getProfile(): ?CustomerProfileIdType
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param CustomerProfileIdType $profile
     * @return self
     */
    public function setProfile(CustomerProfileIdType $profile): TransactionResponseType
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as networkTransId
     *
     * @return string
     */
    public function getNetworkTransId(): ?string
    {
        return $this->networkTransId;
    }

    /**
     * Sets a new networkTransId
     *
     * @param string $networkTransId
     * @return self
     */
    public function setNetworkTransId(string $networkTransId): TransactionResponseType
    {
        $this->networkTransId = $networkTransId;
        return $this;
    }


    // Json Serialize Code
    public function jsonSerialize()
    {
        $values = array_filter((array)get_object_vars($this),
            function ($val) {
                return !is_null($val);
            });
        $mapper = \DesolatorMagno\AuthorizePhp\Util\Mapper::Instance();
        foreach ($values as $key => $value) {
            $classDetails = $mapper->getClass(get_class($this), $key);
            /*\Log::channel('authorize')->info('ClassDetails');
            \Log::channel('authorize')->info($classDetails->className ?? '');
            \Log::channel('authorize')->info($key);
            \Log::channel('authorize')->info($value);*/
            $classDetails = $mapper->getClass(get_class($this), $key);
            if (isset($value)) {
                if ($classDetails->className === 'Date') {
                    $dateTime = $value->format('Y-m-d');
                    $values[$key] = $dateTime;
                } else if ($classDetails->className === 'DateTime') {
                    $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                    $values[$key] = $dateTime;
                }
                if (is_array($value)) {
                    if (!$classDetails->isInlineArray) {
                        $subKey = $classDetails->arrayEntryName;
                        $subArray = [$subKey => $value];
                        $values[$key] = $subArray;
                    }
                }
            }
        }
        return $values;
    }

}
