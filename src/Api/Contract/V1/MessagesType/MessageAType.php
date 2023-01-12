<?php

namespace DesolatorMagno\AuthorizePhp\Api\Contract\V1\MessagesType;

use DateTime;
use DesolatorMagno\AuthorizePhp\util\Mapper;
use JsonSerializable;

/**
 * Class representing MessageAType
 */
class MessageAType implements JsonSerializable
{

    /**
     * @property string $code
     */
    private ?string $code = null;

    /**
     * @property string $text
     */
    private ?string $text = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code): MessageAType
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text): MessageAType
    {
        $this->text = $text;
        return $this;
    }


    // Json Serialize Code
    public function jsonSerialize()
    {
        $values = array_filter((array)get_object_vars($this),
            function ($val) {
                return !is_null($val);
            });
        $mapper = Mapper::Instance();
        foreach ($values as $key => $value) {
            $classDetails = $mapper->getClass(get_class(), $key);
            if (isset($value)) {
                if ($classDetails->className === 'Date') {
                    $dateTime = $value->format('Y-m-d');
                    $values[$key] = $dateTime;
                } else if ($classDetails->className === 'DateTime') {
                    $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                    $values[$key] = $dateTime;
                }
                if (is_array($value)) {
                    if (!$classDetails->isInlineArray) {
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
