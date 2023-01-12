<?php

namespace DesolatorMagno\AuthorizePhp\api\contract\v1;

use DesolatorMagno\AuthorizePhp\api\contract\v1\ANetApiRequestType;

/**
 * Class representing CreateCustomerProfileRequest
 */
class CreateCustomerProfileRequest extends ANetApiRequestType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerProfileType $profile
     */
    private $profile = null;

    /**
     * @property string $validationMode
     */
    private $validationMode = null;

    /**
     * Gets as profile
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerProfileType $profile
     * @return self
     */
    public function setProfile(\DesolatorMagno\AuthorizePhp\api\contract\v1\CustomerProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as validationMode
     *
     * @return string
     */
    public function getValidationMode()
    {
        return $this->validationMode;
    }

    /**
     * Sets a new validationMode
     *
     * @param string $validationMode
     * @return self
     */
    public function setValidationMode($validationMode)
    {
        $this->validationMode = $validationMode;
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