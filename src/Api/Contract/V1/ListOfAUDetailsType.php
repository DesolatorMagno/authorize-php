<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Class representing ListOfAUDetailsType
 *
 *
 * XSD Type: ListOfAUDetailsType
 */
class ListOfAUDetailsType implements JsonSerializable
{

    /**
     * @property AuUpdateType[] $auUpdate
     */
    private $auUpdate = null;

    /**
     * @property AuDeleteType[] $auDelete
     */
    private $auDelete = null;

    /**
     * Adds as auUpdate
     *
     * @param AuUpdateType $auUpdate
     *@return self
     */
    public function addToAuUpdate(AuUpdateType $auUpdate)
    {
        $this->auUpdate[] = $auUpdate;
        return $this;
    }

    /**
     * isset auUpdate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuUpdate($index)
    {
        return isset($this->auUpdate[$index]);
    }

    /**
     * unset auUpdate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuUpdate($index)
    {
        unset($this->auUpdate[$index]);
    }

    /**
     * Gets as auUpdate
     *
     * @return AuUpdateType[]
     */
    public function getAuUpdate()
    {
        return $this->auUpdate;
    }

    /**
     * Sets a new auUpdate
     *
     * @param AuUpdateType[] $auUpdate
     * @return self
     */
    public function setAuUpdate(array $auUpdate)
    {
        $this->auUpdate = $auUpdate;
        return $this;
    }

    /**
     * Adds as auDelete
     *
     * @param AuDeleteType $auDelete
     *@return self
     */
    public function addToAuDelete(AuDeleteType $auDelete)
    {
        $this->auDelete[] = $auDelete;
        return $this;
    }

    /**
     * isset auDelete
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuDelete($index)
    {
        return isset($this->auDelete[$index]);
    }

    /**
     * unset auDelete
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuDelete($index)
    {
        unset($this->auDelete[$index]);
    }

    /**
     * Gets as auDelete
     *
     * @return AuDeleteType[]
     */
    public function getAuDelete()
    {
        return $this->auDelete;
    }

    /**
     * Sets a new auDelete
     *
     * @param AuDeleteType[] $auDelete
     * @return self
     */
    public function setAuDelete(array $auDelete)
    {
        $this->auDelete = $auDelete;
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
