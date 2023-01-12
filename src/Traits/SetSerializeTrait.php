<?php

namespace DesolatorMagno\AuthorizePhp\Traits;

use DateTime;
use DesolatorMagno\AuthorizePhp\Util\Mapper;

trait SetSerializeTrait
{

    /**
     * @throws \Exception
     */
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
