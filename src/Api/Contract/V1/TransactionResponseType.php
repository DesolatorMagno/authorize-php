<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing TransactionResponseType
 *
 *
 * XSD Type: transactionResponse
 */
class TransactionResponseType implements \JsonSerializable
{

    /**
     * @property string $responseCode
     */
    private $responseCode = null;

    /**
     * @property string $rawResponseCode
     */
    private $rawResponseCode = null;

    /**
     * @property string $authCode
     */
    private $authCode = null;

    /**
     * @property string $avsResultCode
     */
    private $avsResultCode = null;

    /**
     * @property string $cvvResultCode
     */
    private $cvvResultCode = null;

    /**
     * @property string $cavvResultCode
     */
    private $cavvResultCode = null;

    /**
     * @property string $transId
     */
    private $transId = null;

    /**
     * @property string $refTransID
     */
    private $refTransID = null;

    /**
     * @property string $transHash
     */
    private $transHash = null;

    /**
     * @property string $testRequest
     */
    private $testRequest = null;

    /**
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property string $entryMode
     */
    private $entryMode = null;

    /**
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * @property string $splitTenderId
     */
    private $splitTenderId = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType
     * $prePaidCard
     */
    private $prePaidCard = null;

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
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\UserFieldType[] $userFields
     */
    private $userFields = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\NameAndAddressType $shipTo
     */
    private $shipTo = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType
     * $secureAcceptance
     */
    private $secureAcceptance = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType
     * $emvResponse
     */
    private $emvResponse = null;

    /**
     * @property string $transHashSha2
     */
    private $transHashSha2 = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile
     */
    private $profile = null;

    /**
     * @property string $networkTransId
     */
    private $networkTransId = null;

    /**
     * Gets as responseCode
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * @param string $responseCode
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Gets as rawResponseCode
     *
     * @return string
     */
    public function getRawResponseCode()
    {
        return $this->rawResponseCode;
    }

    /**
     * Sets a new rawResponseCode
     *
     * @param string $rawResponseCode
     * @return self
     */
    public function setRawResponseCode($rawResponseCode)
    {
        $this->rawResponseCode = $rawResponseCode;
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
     * Gets as avsResultCode
     *
     * @return string
     */
    public function getAvsResultCode()
    {
        return $this->avsResultCode;
    }

    /**
     * Sets a new avsResultCode
     *
     * @param string $avsResultCode
     * @return self
     */
    public function setAvsResultCode($avsResultCode)
    {
        $this->avsResultCode = $avsResultCode;
        return $this;
    }

    /**
     * Gets as cvvResultCode
     *
     * @return string
     */
    public function getCvvResultCode()
    {
        return $this->cvvResultCode;
    }

    /**
     * Sets a new cvvResultCode
     *
     * @param string $cvvResultCode
     * @return self
     */
    public function setCvvResultCode($cvvResultCode)
    {
        $this->cvvResultCode = $cvvResultCode;
        return $this;
    }

    /**
     * Gets as cavvResultCode
     *
     * @return string
     */
    public function getCavvResultCode()
    {
        return $this->cavvResultCode;
    }

    /**
     * Sets a new cavvResultCode
     *
     * @param string $cavvResultCode
     * @return self
     */
    public function setCavvResultCode($cavvResultCode)
    {
        $this->cavvResultCode = $cavvResultCode;
        return $this;
    }

    /**
     * Gets as transId
     *
     * @return string
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * Sets a new transId
     *
     * @param string $transId
     * @return self
     */
    public function setTransId($transId)
    {
        $this->transId = $transId;
        return $this;
    }

    /**
     * Gets as refTransID
     *
     * @return string
     */
    public function getRefTransID()
    {
        return $this->refTransID;
    }

    /**
     * Sets a new refTransID
     *
     * @param string $refTransID
     * @return self
     */
    public function setRefTransID($refTransID)
    {
        $this->refTransID = $refTransID;
        return $this;
    }

    /**
     * Gets as transHash
     *
     * @return string
     */
    public function getTransHash()
    {
        return $this->transHash;
    }

    /**
     * Sets a new transHash
     *
     * @param string $transHash
     * @return self
     */
    public function setTransHash($transHash)
    {
        $this->transHash = $transHash;
        return $this;
    }

    /**
     * Gets as testRequest
     *
     * @return string
     */
    public function getTestRequest()
    {
        return $this->testRequest;
    }

    /**
     * Sets a new testRequest
     *
     * @param string $testRequest
     * @return self
     */
    public function setTestRequest($testRequest)
    {
        $this->testRequest = $testRequest;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as entryMode
     *
     * @return string
     */
    public function getEntryMode()
    {
        return $this->entryMode;
    }

    /**
     * Sets a new entryMode
     *
     * @param string $entryMode
     * @return self
     */
    public function setEntryMode($entryMode)
    {
        $this->entryMode = $entryMode;
        return $this;
    }

    /**
     * Gets as accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
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
     * Gets as prePaidCard
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType
     */
    public function getPrePaidCard()
    {
        return $this->prePaidCard;
    }

    /**
     * Sets a new prePaidCard
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType
     * $prePaidCard
     * @return self
     */
    public function setPrePaidCard(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\PrePaidCardAType $prePaidCard)
    {
        $this->prePaidCard = $prePaidCard;
        return $this;
    }

    /**
     * Adds as message
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType
     * $message
     */
    public function addToMessages(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\MessagesAType\MessageAType $message)
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
    public function issetMessages($index)
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
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType
     * $error
     */
    public function addToErrors(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\ErrorsAType\ErrorAType $error)
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
    public function issetErrors($index)
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
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Adds as splitTenderPayment
     *
     * @return self
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType
     * $splitTenderPayment
     */
    public function addToSplitTenderPayments(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType $splitTenderPayment)
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
    public function issetSplitTenderPayments($index)
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
    public function setSplitTenderPayments(array $splitTenderPayments)
    {
        $this->splitTenderPayments = $splitTenderPayments;
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
    public function setSecureAcceptance(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\SecureAcceptanceAType $secureAcceptance)
    {
        $this->secureAcceptance = $secureAcceptance;
        return $this;
    }

    /**
     * Gets as emvResponse
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType
     */
    public function getEmvResponse()
    {
        return $this->emvResponse;
    }

    /**
     * Sets a new emvResponse
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType
     * $emvResponse
     * @return self
     */
    public function setEmvResponse(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType\EmvResponseAType $emvResponse)
    {
        $this->emvResponse = $emvResponse;
        return $this;
    }

    /**
     * Gets as transHashSha2
     *
     * @return string
     */
    public function getTransHashSha2()
    {
        return $this->transHashSha2;
    }

    /**
     * Sets a new transHashSha2
     *
     * @param string $transHashSha2
     * @return self
     */
    public function setTransHashSha2($transHashSha2)
    {
        $this->transHashSha2 = $transHashSha2;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileIdType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as networkTransId
     *
     * @return string
     */
    public function getNetworkTransId()
    {
        return $this->networkTransId;
    }

    /**
     * Sets a new networkTransId
     *
     * @param string $networkTransId
     * @return self
     */
    public function setNetworkTransId($networkTransId)
    {
        $this->networkTransId = $networkTransId;
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
        return $values;
    }

    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = \DesolatorMagno\AuthorizePhp\util\Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class() , $key);

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