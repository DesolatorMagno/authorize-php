<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;

/**
 * Class representing MobileDeviceRegistrationRequest
 */
class MobileDeviceRegistrationRequest extends ANetApiRequestType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice
     */
    private $mobileDevice = null;

    /**
     * Gets as mobileDevice
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType
     */
    public function getMobileDevice()
    {
        return $this->mobileDevice;
    }

    /**
     * Sets a new mobileDevice
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice
     * @return self
     */
    public function setMobileDevice(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\MobileDeviceType $mobileDevice)
    {
        $this->mobileDevice = $mobileDevice;
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

}