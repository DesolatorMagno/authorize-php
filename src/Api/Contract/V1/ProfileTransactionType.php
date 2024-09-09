<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing ProfileTransactionType
 *
 *
 * XSD Type: profileTransactionType
 */
class ProfileTransactionType implements JsonSerializable
{

    /**
     * @property ProfileTransAuthCaptureType
     * $profileTransAuthCapture
     */
    private $profileTransAuthCapture = null;

    /**
     * @property ProfileTransAuthOnlyType
     * $profileTransAuthOnly
     */
    private $profileTransAuthOnly = null;

    /**
     * @property ProfileTransPriorAuthCaptureType
     * $profileTransPriorAuthCapture
     */
    private $profileTransPriorAuthCapture = null;

    /**
     * @property ProfileTransCaptureOnlyType
     * $profileTransCaptureOnly
     */
    private $profileTransCaptureOnly = null;

    /**
     * @property ProfileTransRefundType
     * $profileTransRefund
     */
    private $profileTransRefund = null;

    /**
     * @property ProfileTransVoidType $profileTransVoid
     */
    private $profileTransVoid = null;

    /**
     * Gets as profileTransAuthCapture
     *
     * @return ProfileTransAuthCaptureType
     */
    public function getProfileTransAuthCapture()
    {
        return $this->profileTransAuthCapture;
    }

    /**
     * Sets a new profileTransAuthCapture
     *
     * @param ProfileTransAuthCaptureType
     * $profileTransAuthCapture
     * @return self
     */
    public function setProfileTransAuthCapture(ProfileTransAuthCaptureType $profileTransAuthCapture)
    {
        $this->profileTransAuthCapture = $profileTransAuthCapture;
        return $this;
    }

    /**
     * Gets as profileTransAuthOnly
     *
     * @return ProfileTransAuthOnlyType
     */
    public function getProfileTransAuthOnly()
    {
        return $this->profileTransAuthOnly;
    }

    /**
     * Sets a new profileTransAuthOnly
     *
     * @param ProfileTransAuthOnlyType
     * $profileTransAuthOnly
     * @return self
     */
    public function setProfileTransAuthOnly(ProfileTransAuthOnlyType $profileTransAuthOnly)
    {
        $this->profileTransAuthOnly = $profileTransAuthOnly;
        return $this;
    }

    /**
     * Gets as profileTransPriorAuthCapture
     *
     * @return ProfileTransPriorAuthCaptureType
     */
    public function getProfileTransPriorAuthCapture()
    {
        return $this->profileTransPriorAuthCapture;
    }

    /**
     * Sets a new profileTransPriorAuthCapture
     *
     * @param ProfileTransPriorAuthCaptureType
     * $profileTransPriorAuthCapture
     * @return self
     */
    public function setProfileTransPriorAuthCapture(ProfileTransPriorAuthCaptureType $profileTransPriorAuthCapture)
    {
        $this->profileTransPriorAuthCapture = $profileTransPriorAuthCapture;
        return $this;
    }

    /**
     * Gets as profileTransCaptureOnly
     *
     * @return ProfileTransCaptureOnlyType
     */
    public function getProfileTransCaptureOnly()
    {
        return $this->profileTransCaptureOnly;
    }

    /**
     * Sets a new profileTransCaptureOnly
     *
     * @param ProfileTransCaptureOnlyType
     * $profileTransCaptureOnly
     * @return self
     */
    public function setProfileTransCaptureOnly(ProfileTransCaptureOnlyType $profileTransCaptureOnly)
    {
        $this->profileTransCaptureOnly = $profileTransCaptureOnly;
        return $this;
    }

    /**
     * Gets as profileTransRefund
     *
     * @return ProfileTransRefundType
     */
    public function getProfileTransRefund()
    {
        return $this->profileTransRefund;
    }

    /**
     * Sets a new profileTransRefund
     *
     * @param ProfileTransRefundType $profileTransRefund
     * @return self
     */
    public function setProfileTransRefund(ProfileTransRefundType $profileTransRefund)
    {
        $this->profileTransRefund = $profileTransRefund;
        return $this;
    }

    /**
     * Gets as profileTransVoid
     *
     * @return ProfileTransVoidType
     */
    public function getProfileTransVoid()
    {
        return $this->profileTransVoid;
    }

    /**
     * Sets a new profileTransVoid
     *
     * @param ProfileTransVoidType $profileTransVoid
     * @return self
     */
    public function setProfileTransVoid(ProfileTransVoidType $profileTransVoid)
    {
        $this->profileTransVoid = $profileTransVoid;
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
