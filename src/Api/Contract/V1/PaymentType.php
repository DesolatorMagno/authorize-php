<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing PaymentType
 *
 *
 * XSD Type: paymentType
 */
class PaymentType implements JsonSerializable
{

    /**
     * @property CreditCardType $creditCard
     */
    private $creditCard = null;

    /**
     * @property BankAccountType $bankAccount
     */
    private $bankAccount = null;

    /**
     * @property CreditCardTrackType $trackData
     */
    private $trackData = null;

    /**
     * @property EncryptedTrackDataType
     * $encryptedTrackData
     */
    private $encryptedTrackData = null;

    /**
     * @property PayPalType $payPal
     */
    private $payPal = null;

    /**
     * @property OpaqueDataType $opaqueData
     */
    private $opaqueData = null;

    /**
     * @property PaymentEmvType $emv
     */
    private $emv = null;

    /**
     * @property string $dataSource
     */
    private $dataSource = null;

    /**
     * Gets as creditCard
     *
     * @return CreditCardType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param CreditCardType $creditCard
     * @return self
     */
    public function setCreditCard(CreditCardType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Gets as bankAccount
     *
     * @return BankAccountType
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param BankAccountType $bankAccount
     * @return self
     */
    public function setBankAccount(BankAccountType $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * Gets as trackData
     *
     * @return CreditCardTrackType
     */
    public function getTrackData()
    {
        return $this->trackData;
    }

    /**
     * Sets a new trackData
     *
     * @param CreditCardTrackType $trackData
     * @return self
     */
    public function setTrackData(CreditCardTrackType $trackData)
    {
        $this->trackData = $trackData;
        return $this;
    }

    /**
     * Gets as encryptedTrackData
     *
     * @return EncryptedTrackDataType
     */
    public function getEncryptedTrackData()
    {
        return $this->encryptedTrackData;
    }

    /**
     * Sets a new encryptedTrackData
     *
     * @param EncryptedTrackDataType $encryptedTrackData
     * @return self
     */
    public function setEncryptedTrackData(EncryptedTrackDataType $encryptedTrackData)
    {
        $this->encryptedTrackData = $encryptedTrackData;
        return $this;
    }

    /**
     * Gets as payPal
     *
     * @return PayPalType
     */
    public function getPayPal()
    {
        return $this->payPal;
    }

    /**
     * Sets a new payPal
     *
     * @param PayPalType $payPal
     * @return self
     */
    public function setPayPal(PayPalType $payPal)
    {
        $this->payPal = $payPal;
        return $this;
    }

    /**
     * Gets as opaqueData
     *
     * @return OpaqueDataType
     */
    public function getOpaqueData()
    {
        return $this->opaqueData;
    }

    /**
     * Sets a new opaqueData
     *
     * @param OpaqueDataType $opaqueData
     * @return self
     */
    public function setOpaqueData(OpaqueDataType $opaqueData)
    {
        $this->opaqueData = $opaqueData;
        return $this;
    }

    /**
     * Gets as emv
     *
     * @return PaymentEmvType
     */
    public function getEmv()
    {
        return $this->emv;
    }

    /**
     * Sets a new emv
     *
     * @param PaymentEmvType $emv
     * @return self
     */
    public function setEmv(PaymentEmvType $emv)
    {
        $this->emv = $emv;
        return $this;
    }

    /**
     * Gets as dataSource
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Sets a new dataSource
     *
     * @param string $dataSource
     * @return self
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;
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
