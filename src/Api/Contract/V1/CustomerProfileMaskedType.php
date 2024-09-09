<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\CustomerProfileExType;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing CustomerProfileMaskedType
 *
 *
 * XSD Type: customerProfileMaskedType
 */
class CustomerProfileMaskedType extends CustomerProfileExType implements JsonSerializable
{

    /**
     * @property CustomerPaymentProfileMaskedType[]
     * $paymentProfiles
     */
    private $paymentProfiles = null;

    /**
     * @property CustomerAddressExType[] $shipToList
     */
    private $shipToList = null;

    /**
     * @property string $profileType
     */
    private $profileType = null;

    /**
     * Adds as paymentProfiles
     *
     * @param CustomerPaymentProfileMaskedType
     * $paymentProfiles
     *@return self
     */
    public function addToPaymentProfiles(CustomerPaymentProfileMaskedType $paymentProfiles)
    {
        $this->paymentProfiles[] = $paymentProfiles;
        return $this;
    }

    /**
     * isset paymentProfiles
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentProfiles($index)
    {
        return isset($this->paymentProfiles[$index]);
    }

    /**
     * unset paymentProfiles
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentProfiles($index)
    {
        unset($this->paymentProfiles[$index]);
    }

    /**
     * Gets as paymentProfiles
     *
     * @return CustomerPaymentProfileMaskedType[]
     */
    public function getPaymentProfiles()
    {
        return $this->paymentProfiles;
    }

    /**
     * Sets a new paymentProfiles
     *
     * @param CustomerPaymentProfileMaskedType[]
     * $paymentProfiles
     * @return self
     */
    public function setPaymentProfiles(array $paymentProfiles)
    {
        $this->paymentProfiles = $paymentProfiles;
        return $this;
    }

    /**
     * Adds as shipToList
     *
     * @param CustomerAddressExType $shipToList
     *@return self
     */
    public function addToShipToList(CustomerAddressExType $shipToList)
    {
        $this->shipToList[] = $shipToList;
        return $this;
    }

    /**
     * isset shipToList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipToList($index)
    {
        return isset($this->shipToList[$index]);
    }

    /**
     * unset shipToList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipToList($index)
    {
        unset($this->shipToList[$index]);
    }

    /**
     * Gets as shipToList
     *
     * @return CustomerAddressExType[]
     */
    public function getShipToList()
    {
        return $this->shipToList;
    }

    /**
     * Sets a new shipToList
     *
     * @param CustomerAddressExType[] $shipToList
     * @return self
     */
    public function setShipToList(array $shipToList)
    {
        $this->shipToList = $shipToList;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
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
