<?php

namespace DesolatorMagno\AuthorizePhp\api\contract\v1;

/**
 * Class representing KeyManagementSchemeType
 *
 *
 * XSD Type: KeyManagementScheme
 */
class KeyManagementSchemeType implements \JsonSerializable
{

    /**
     * @property \DesolatorMagno\AuthorizePhp\api\contract\v1\KeyManagementSchemeType\DUKPTAType
     * $dUKPT
     */
    private $dUKPT = null;

    /**
     * Gets as dUKPT
     *
     * @return \DesolatorMagno\AuthorizePhp\api\contract\v1\KeyManagementSchemeType\DUKPTAType
     */
    public function getDUKPT()
    {
        return $this->dUKPT;
    }

    /**
     * Sets a new dUKPT
     *
     * @param \DesolatorMagno\AuthorizePhp\api\contract\v1\KeyManagementSchemeType\DUKPTAType $dUKPT
     * @return self
     */
    public function setDUKPT(\DesolatorMagno\AuthorizePhp\api\contract\v1\KeyManagementSchemeType\DUKPTAType $dUKPT)
    {
        $this->dUKPT = $dUKPT;
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