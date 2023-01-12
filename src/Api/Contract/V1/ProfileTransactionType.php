<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

/**
 * Class representing ProfileTransactionType
 *
 *
 * XSD Type: profileTransactionType
 */
class ProfileTransactionType implements \JsonSerializable
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthCaptureType
     * $profileTransAuthCapture
     */
    private $profileTransAuthCapture = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthOnlyType
     * $profileTransAuthOnly
     */
    private $profileTransAuthOnly = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransPriorAuthCaptureType
     * $profileTransPriorAuthCapture
     */
    private $profileTransPriorAuthCapture = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransCaptureOnlyType
     * $profileTransCaptureOnly
     */
    private $profileTransCaptureOnly = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransRefundType
     * $profileTransRefund
     */
    private $profileTransRefund = null;

    /**
     * @property \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransVoidType $profileTransVoid
     */
    private $profileTransVoid = null;

    /**
     * Gets as profileTransAuthCapture
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthCaptureType
     */
    public function getProfileTransAuthCapture()
    {
        return $this->profileTransAuthCapture;
    }

    /**
     * Sets a new profileTransAuthCapture
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthCaptureType
     * $profileTransAuthCapture
     * @return self
     */
    public function setProfileTransAuthCapture(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthCaptureType $profileTransAuthCapture)
    {
        $this->profileTransAuthCapture = $profileTransAuthCapture;
        return $this;
    }

    /**
     * Gets as profileTransAuthOnly
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthOnlyType
     */
    public function getProfileTransAuthOnly()
    {
        return $this->profileTransAuthOnly;
    }

    /**
     * Sets a new profileTransAuthOnly
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthOnlyType
     * $profileTransAuthOnly
     * @return self
     */
    public function setProfileTransAuthOnly(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransAuthOnlyType $profileTransAuthOnly)
    {
        $this->profileTransAuthOnly = $profileTransAuthOnly;
        return $this;
    }

    /**
     * Gets as profileTransPriorAuthCapture
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransPriorAuthCaptureType
     */
    public function getProfileTransPriorAuthCapture()
    {
        return $this->profileTransPriorAuthCapture;
    }

    /**
     * Sets a new profileTransPriorAuthCapture
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransPriorAuthCaptureType
     * $profileTransPriorAuthCapture
     * @return self
     */
    public function setProfileTransPriorAuthCapture(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransPriorAuthCaptureType $profileTransPriorAuthCapture)
    {
        $this->profileTransPriorAuthCapture = $profileTransPriorAuthCapture;
        return $this;
    }

    /**
     * Gets as profileTransCaptureOnly
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransCaptureOnlyType
     */
    public function getProfileTransCaptureOnly()
    {
        return $this->profileTransCaptureOnly;
    }

    /**
     * Sets a new profileTransCaptureOnly
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransCaptureOnlyType
     * $profileTransCaptureOnly
     * @return self
     */
    public function setProfileTransCaptureOnly(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransCaptureOnlyType $profileTransCaptureOnly)
    {
        $this->profileTransCaptureOnly = $profileTransCaptureOnly;
        return $this;
    }

    /**
     * Gets as profileTransRefund
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransRefundType
     */
    public function getProfileTransRefund()
    {
        return $this->profileTransRefund;
    }

    /**
     * Sets a new profileTransRefund
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransRefundType $profileTransRefund
     * @return self
     */
    public function setProfileTransRefund(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransRefundType $profileTransRefund)
    {
        $this->profileTransRefund = $profileTransRefund;
        return $this;
    }

    /**
     * Gets as profileTransVoid
     *
     * @return \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransVoidType
     */
    public function getProfileTransVoid()
    {
        return $this->profileTransVoid;
    }

    /**
     * Sets a new profileTransVoid
     *
     * @param \DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransVoidType $profileTransVoid
     * @return self
     */
    public function setProfileTransVoid(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\ProfileTransVoidType $profileTransVoid)
    {
        $this->profileTransVoid = $profileTransVoid;
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
        return $values;
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
