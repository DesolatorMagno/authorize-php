<?php

namespace DesolatorMagno\AuthorizePhp\api\contract\v1;

use DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerProfileExType;

/**
 * Class representing SubscriptionCustomerProfileType
 *
 *
 * XSD Type: subscriptionCustomerProfileType
 */
class SubscriptionCustomerProfileType extends CustomerProfileExType implements \JsonSerializable
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerPaymentProfileMaskedType
     * $paymentProfile
     */
    private $paymentProfile = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerAddressExType $shippingProfile
     */
    private $shippingProfile = null;

    /**
     * Gets as paymentProfile
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerPaymentProfileMaskedType
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerPaymentProfileMaskedType
     * $paymentProfile
     * @return self
     */
    public function setPaymentProfile(\DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerPaymentProfileMaskedType $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    /**
     * Gets as shippingProfile
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerAddressExType
     */
    public function getShippingProfile()
    {
        return $this->shippingProfile;
    }

    /**
     * Sets a new shippingProfile
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerAddressExType $shippingProfile
     * @return self
     */
    public function setShippingProfile(\DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerAddressExType $shippingProfile)
    {
        $this->shippingProfile = $shippingProfile;
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
        return array_merge(parent::jsonSerialize(), $values);
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