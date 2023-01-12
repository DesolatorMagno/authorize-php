<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing PaymentMaskedType
 *
 *
 * XSD Type: paymentMaskedType
 */
class PaymentMaskedType implements \JsonSerializable
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard
     */
    private $creditCard = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BankAccountMaskedType $bankAccount
     */
    private $bankAccount = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TokenMaskedType $tokenInformation
     */
    private $tokenInformation = null;

    /**
     * Gets as creditCard
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard
     * @return self
     */
    public function setCreditCard(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreditCardMaskedType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Gets as bankAccount
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BankAccountMaskedType
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\BankAccountMaskedType $bankAccount
     * @return self
     */
    public function setBankAccount(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\BankAccountMaskedType $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * Gets as tokenInformation
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TokenMaskedType
     */
    public function getTokenInformation()
    {
        return $this->tokenInformation;
    }

    /**
     * Sets a new tokenInformation
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TokenMaskedType $tokenInformation
     * @return self
     */
    public function setTokenInformation(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TokenMaskedType $tokenInformation)
    {
        $this->tokenInformation = $tokenInformation;
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
