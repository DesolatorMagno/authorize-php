<?php

namespace DesolatorMagno\AuthorizePhp\Traits;

use DesolatorMagno\AuthorizePhp\util\Mapper;

trait SerializeTrait
{
    // Json Serialize Code
    public function jsonSerialize(): array
    {
        $values = array_filter((array)get_object_vars($this),
            function ($val){
                return !is_null($val);
            });
        $mapper = Mapper::Instance();
        foreach($values as $key => $value){
            $classDetails = $mapper->getClass(get_class() , $key);
            if(is_null($value)) continue;

            if ($classDetails->className === 'Date'){
                $dateTime = $value->format('Y-m-d');
                $values[$key] = $dateTime;
                continue;
            }
            if ($classDetails->className === 'DateTime'){
                $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                $values[$key] = $dateTime;
                continue;
            }
            if (is_array($value)){
                if (!$classDetails->isInlineArray){
                    $subKey = $classDetails->arrayEntryname;
                    $subArray = [$subKey => $value];
                    $values[$key] = $subArray;
                }
            }
        }
        return array_merge(parent::jsonSerialize(), $values);
    }

    public function set($data)
    {
        if (is_array($data) || is_object($data)) {
            $mapper = Mapper::Instance();
            foreach ($data as $key => $value) {
                $classDetails = $mapper->getClass(get_class(), $key);

                if ($classDetails !== NULL) {
                    if ($classDetails->isArray) {
                        if ($classDetails->isCustomDefined) {
                            foreach ($value as $keyChild => $valueChild) {
                                $type = new $classDetails->className;
                                $type->set($valueChild);
                                $this->{'addTo' . $key}($type);
                            }
                        } else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date') {
                            foreach ($value as $keyChild => $valueChild) {
                                $type = new DateTime($valueChild);
                                $this->{'addTo' . $key}($type);
                            }
                        } else {
                            foreach ($value as $keyChild => $valueChild) {
                                $this->{'addTo' . $key}($valueChild);
                            }
                        }
                    } else {
                        if ($classDetails->isCustomDefined) {
                            $type = new $classDetails->className;
                            $type->set($value);
                            $this->{'set' . $key}($type);
                        } else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date') {
                            $type = new DateTime($value);
                            $this->{'set' . $key}($type);
                        } else {
                            $this->{'set' . $key}($value);
                        }
                    }
                }
            }
        }
    }
}
