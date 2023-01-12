<?php

namespace DesolatorMagno\AuthorizePhp\api\contract\v1;

use DesolatorMagno\AuthorizePhp\api\contract\v1\ANetApiRequestType;

/**
 * Class representing UpdateHeldTransactionRequest
 */
class UpdateHeldTransactionRequest extends ANetApiRequestType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\HeldTransactionRequestType
     * $heldTransactionRequest
     */
    private $heldTransactionRequest = null;

    /**
     * Gets as heldTransactionRequest
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\HeldTransactionRequestType
     */
    public function getHeldTransactionRequest()
    {
        return $this->heldTransactionRequest;
    }

    /**
     * Sets a new heldTransactionRequest
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\HeldTransactionRequestType
     * $heldTransactionRequest
     * @return self
     */
    public function setHeldTransactionRequest(\DesolatorMagno\AuthorizePhp\api\contract\v1\HeldTransactionRequestType $heldTransactionRequest)
    {
        $this->heldTransactionRequest = $heldTransactionRequest;
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