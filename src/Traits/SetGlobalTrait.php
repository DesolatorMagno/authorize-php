<?php

namespace DesolatorMagno\AuthorizePhp\Traits;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;
use Exception;

trait SetGlobalTrait {
    /**
     * Json Set code.
     *
     * @throws Exception
     */
    public function set($data)
    {
        if (!is_array($data) && !is_object($data)) return;
        $mapper = Mapper::Instance();

        foreach ($data as $key => $value) {

            $classDetails = $mapper->getClass(get_class($this), $key);
            if (is_null($classDetails)) continue;

            if ($classDetails->isArray) {
                if ($classDetails->isCustomDefined) {
                    foreach ($value as $valueChild) {
                        $type = new $classDetails->className;
                        $type->set($valueChild);
                        $this->{'addTo' . $key}($type);
                    }
                } else if ($classDetails->className === 'DateTime' || $classDetails->className === 'Date') {
                    foreach ($value as $valueChild) {
                        $type = new DateTime($valueChild);
                        $this->{'addTo' . $key}($type);
                    }
                } else {
                    foreach ($value as $valueChild) {
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
