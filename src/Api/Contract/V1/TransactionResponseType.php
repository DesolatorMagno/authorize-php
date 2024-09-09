<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType;
use DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType;
use DesolatorMagno\AuthorizePhp\Traits\JsonSerializeGlobalTrait;
use DesolatorMagno\AuthorizePhp\Traits\SetGlobalTrait;
use JsonSerializable;

/**
 * Class representing TransactionResponseType
 *
 *
 * XSD Type: transactionResponse
 */
class TransactionResponseType implements JsonSerializable
{
    use JsonSerializeGlobalTrait, SetGlobalTrait;

    private string|null $responseCode = null;

    private string|null $rawResponseCode = null;

    private string|null $authCode = null;

    private string|null $avsResultCode = null;

    private string|null $cvvResultCode = null;

    private string|null $cavvResultCode = null;

    private string|null $transId = null;

    private string|null $refTransID = null;

    private string|null $transHash = null;

    private string|null $testRequest = null;

    private string|null $accountNumber = null;

    private string|null $entryMode = null;

    private string|null $accountType = null;

    private string|null $splitTenderId = null;

    private TransactionResponseType\PrePaidCardAType|null $prePaidCard = null;

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
    private NameAndAddressType|null $shipTo = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType
     * $secureAcceptance
     */
    private $secureAcceptance = null;

    private TransactionResponseType\EmvResponseAType|null $emvResponse = null;

    private string|null $transHashSha2 = null;

    private CustomerProfileIdType|null $profile = null;

    private string|null $networkTransId = null;

    public function getResponseCode(): string|null
    {
        return $this->responseCode;
    }

    public function setResponseCode(string $responseCode): self
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    public function getRawResponseCode(): string|null
    {
        return $this->rawResponseCode;
    }

    public function setRawResponseCode(string $rawResponseCode): self
    {
        $this->rawResponseCode = $rawResponseCode;
        return $this;
    }

    public function getAuthCode(): string|null
    {
        return $this->authCode;
    }

    public function setAuthCode(string $authCode): self
    {
        $this->authCode = $authCode;
        return $this;
    }

    public function getAvsResultCode(): string|null
    {
        return $this->avsResultCode;
    }

    public function setAvsResultCode(string $avsResultCode): self
    {
        $this->avsResultCode = $avsResultCode;
        return $this;
    }

    public function getCvvResultCode(): string|null
    {
        return $this->cvvResultCode;
    }

    public function setCvvResultCode(string $cvvResultCode): self
    {
        $this->cvvResultCode = $cvvResultCode;
        return $this;
    }

    public function getCavvResultCode(): string|null
    {
        return $this->cavvResultCode;
    }

    public function setCavvResultCode(string $cavvResultCode): self
    {
        $this->cavvResultCode = $cavvResultCode;
        return $this;
    }

    public function getTransId(): string|null
    {
        return $this->transId;
    }

    public function setTransId(string $transId): self
    {
        $this->transId = $transId;
        return $this;
    }

    public function getRefTransID(): string|null
    {
        return $this->refTransID;
    }

    public function setRefTransID(string $refTransID): self
    {
        $this->refTransID = $refTransID;
        return $this;
    }

    public function getTransHash(): string|null
    {
        return $this->transHash;
    }

    public function setTransHash(string $transHash): self
    {
        $this->transHash = $transHash;
        return $this;
    }

    public function getTestRequest(): string|null
    {
        return $this->testRequest;
    }

    public function setTestRequest(string $testRequest): self
    {
        $this->testRequest = $testRequest;
        return $this;
    }

    public function getAccountNumber(): string|null
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    public function getEntryMode(): string|null
    {
        return $this->entryMode;
    }

    public function setEntryMode(string $entryMode): self
    {
        $this->entryMode = $entryMode;
        return $this;
    }

    public function getAccountType(): string|null
    {
        return $this->accountType;
    }

    public function setAccountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function getSplitTenderId(): string|null
    {
        return $this->splitTenderId;
    }

    public function setSplitTenderId(string $splitTenderId): self
    {
        $this->splitTenderId = $splitTenderId;
        return $this;
    }

    public function getPrePaidCard(): TransactionResponseType\PrePaidCardAType|null
    {
        return $this->prePaidCard;
    }

    public function setPrePaidCard(PrePaidCardAType $prePaidCard): self
    {
        $this->prePaidCard = $prePaidCard;
        return $this;
    }

    public function addToMessages(MessageAType $message): self
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
    public function setMessages(array $messages): self
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
    public function addToErrors(ErrorAType $error): self
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
    public function setErrors(array $errors): self
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
    public function addToSplitTenderPayments(SplitTenderPaymentAType $splitTenderPayment): self
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
    public function setSplitTenderPayments(array $splitTenderPayments): self
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
    public function addToUserFields(UserFieldType $userField): self
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
    public function getUserFields(): array|null
    {
        return $this->userFields;
    }

    /**
     * Sets a new userFields
     *
     * @param UserFieldType[] $userFields
     * @return self
     */
    public function setUserFields(array $userFields): self
    {
        $this->userFields = $userFields;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return NameAndAddressType
     */
    public function getShipTo(): NameAndAddressType|null
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param NameAndAddressType $shipTo
     * @return self
     */
    public function setShipTo(NameAndAddressType $shipTo): self
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
    public function setSecureAcceptance(SecureAcceptanceAType $secureAcceptance): self
    {
        $this->secureAcceptance = $secureAcceptance;
        return $this;
    }

    /**
     * Gets as emvResponse
     *
     * @return EmvResponseAType
     */
    public function getEmvResponse(): EmvResponseAType|null
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
    public function setEmvResponse(EmvResponseAType $emvResponse): self
    {
        $this->emvResponse = $emvResponse;
        return $this;
    }

    /**
     * Gets as transHashSha2
     *
     * @return string
     */
    public function getTransHashSha2(): string|null
    {
        return $this->transHashSha2;
    }

    /**
     * Sets a new transHashSha2
     *
     * @param string $transHashSha2
     * @return self
     */
    public function setTransHashSha2(string $transHashSha2): self
    {
        $this->transHashSha2 = $transHashSha2;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return CustomerProfileIdType
     */
    public function getProfile(): CustomerProfileIdType|null
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param CustomerProfileIdType $profile
     * @return self
     */
    public function setProfile(CustomerProfileIdType $profile): self
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as networkTransId
     *
     * @return string
     */
    public function getNetworkTransId(): string|null
    {
        return $this->networkTransId;
    }

    /**
     * Sets a new networkTransId
     *
     * @param string $networkTransId
     * @return self
     */
    public function setNetworkTransId(string $networkTransId): self
    {
        $this->networkTransId = $networkTransId;
        return $this;
    }

}
