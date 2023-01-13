<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DesolatorMagno\AuthorizePhp\Util\Mapper;
use Log;

/**
 * Class representing CreateTransactionResponse
 */
class CreateTransactionResponse extends ANetApiResponseType
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     * $transactionResponse
     */
    private $transactionResponse = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreateProfileResponseType
     * $profileResponse
     */
    private $profileResponse = null;

    /**
     * Gets as transactionResponse
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     */
    public function getTransactionResponse()
    {
        return $this->transactionResponse;
    }

    /**
     * Sets a new transactionResponse
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType
     * $transactionResponse
     * @return self
     */
    public function setTransactionResponse(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\TransactionResponseType $transactionResponse)
    {
        $this->transactionResponse = $transactionResponse;
        return $this;
    }

    /**
     * Gets as profileResponse
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreateProfileResponseType
     */
    public function getProfileResponse()
    {
        return $this->profileResponse;
    }

    /**
     * Sets a new profileResponse
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreateProfileResponseType $profileResponse
     * @return self
     */
    public function setProfileResponse(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\CreateProfileResponseType $profileResponse)
    {
        $this->profileResponse = $profileResponse;
        return $this;
    }


    // Json Set Code
    public function set($data)
    {
        if(is_array($data) || is_object($data)) {
			$mapper = Mapper::Instance();
			foreach($data AS $key => $value) {
				$classDetails = $mapper->getClass(get_class() , $key);
                Log::channel('authorize')->info('ClassDetails');
                Log::channel('authorize')->info($classDetails);
                Log::channel('authorize')->info($key);
                Log::channel('authorize')->info($value);

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
