<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Api\Contract\V1\ANetApiRequestType;

/**
 * Class representing CreateTransactionRequest
 */
class CreateTransactionRequest extends ANetApiRequestType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     * $transactionRequest
     */
    private $transactionRequest = null;

    /**
     * Gets as transactionRequest
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType
     */
    public function getTransactionRequest()
    {
        return $this->transactionRequest;
    }

    /**
     * Sets a new transactionRequest
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest
     * @return self
     */
    public function setTransactionRequest(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionRequestType $transactionRequest)
    {
        $this->transactionRequest = $transactionRequest;
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
