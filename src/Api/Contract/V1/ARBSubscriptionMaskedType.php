<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ARBSubscriptionMaskedType
 *
 *
 * XSD Type: ARBSubscriptionMaskedType
 */
class ARBSubscriptionMaskedType implements \JsonSerializable
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule
     */
    private $paymentSchedule = null;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property float $trialAmount
     */
    private $trialAmount = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubscriptionCustomerProfileType
     * $profile
     */
    private $profile = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\OrderType $order
     */
    private $order = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArbTransactionType[] $arbTransactions
     */
    private $arbTransactions = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as paymentSchedule
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType
     */
    public function getPaymentSchedule()
    {
        return $this->paymentSchedule;
    }

    /**
     * Sets a new paymentSchedule
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule
     * @return self
     */
    public function setPaymentSchedule(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\PaymentScheduleType $paymentSchedule)
    {
        $this->paymentSchedule = $paymentSchedule;
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
     * Gets as trialAmount
     *
     * @return float
     */
    public function getTrialAmount()
    {
        return $this->trialAmount;
    }

    /**
     * Sets a new trialAmount
     *
     * @param float $trialAmount
     * @return self
     */
    public function setTrialAmount($trialAmount)
    {
        $this->trialAmount = $trialAmount;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubscriptionCustomerProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubscriptionCustomerProfileType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\SubscriptionCustomerProfileType $profile)
    {
        $this->profile = $profile;
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
     * Adds as arbTransaction
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArbTransactionType $arbTransaction
     *@return self
     */
    public function addToArbTransactions(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArbTransactionType $arbTransaction)
    {
        $this->arbTransactions[] = $arbTransaction;
        return $this;
    }

    /**
     * isset arbTransactions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArbTransactions($index)
    {
        return isset($this->arbTransactions[$index]);
    }

    /**
     * unset arbTransactions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArbTransactions($index)
    {
        unset($this->arbTransactions[$index]);
    }

    /**
     * Gets as arbTransactions
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArbTransactionType[]
     */
    public function getArbTransactions()
    {
        return $this->arbTransactions;
    }

    /**
     * Sets a new arbTransactions
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ArbTransactionType[] $arbTransactions
     * @return self
     */
    public function setArbTransactions(array $arbTransactions)
    {
        $this->arbTransactions = $arbTransactions;
        return $this;
    }


    // Json Serialize Code
    public function jsonSerialize(){
        $values = array_filter((array)get_object_vars($this),
        function ($val){
            return !is_null($val);
        });
        $mapper = \DesolatorMagno\AuthorizePhp\Util\Mapper::Instance();
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
