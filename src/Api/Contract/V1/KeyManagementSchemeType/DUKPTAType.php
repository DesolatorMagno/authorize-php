<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType;

/**
 * Class representing DUKPTAType
 */
class DUKPTAType implements \JsonSerializable
{

    /**
     * @property string $operation
     */
    private $operation = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     * $mode
     */
    private $mode = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     * $deviceInfo
     */
    private $deviceInfo = null;

    /**
     * @property
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     * $encryptedData
     */
    private $encryptedData = null;

    /**
     * Gets as operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as mode
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType
     * $mode
     * @return self
     */
    public function setMode(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\ModeAType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as deviceInfo
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     */
    public function getDeviceInfo()
    {
        return $this->deviceInfo;
    }

    /**
     * Sets a new deviceInfo
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType
     * $deviceInfo
     * @return self
     */
    public function setDeviceInfo(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType $deviceInfo)
    {
        $this->deviceInfo = $deviceInfo;
        return $this;
    }

    /**
     * Gets as encryptedData
     *
     * @return
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     */
    public function getEncryptedData()
    {
        return $this->encryptedData;
    }

    /**
     * Sets a new encryptedData
     *
     * @param
     * \DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType
     * $encryptedData
     * @return self
     */
    public function setEncryptedData(\DesolatorMagno\AuthorizePhp\Api\Contract\V1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType $encryptedData)
    {
        $this->encryptedData = $encryptedData;
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
