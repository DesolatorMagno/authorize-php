<?php

namespace DesolatorMagno\AuthorizePhp\Traits;

use DesolatorMagno\AuthorizePhp\Util\Mapper;

trait SerializeResponseTrait
{
    use SerializeTrait;

    public function jsonSerialize(): array
    {
        $values = array_filter((array)get_object_vars($this),
            function ($val) {
                return !is_null($val);
            });
        $mapper = Mapper::Instance();
        foreach ($values as $key => $value) {
            $classDetails = $mapper->getClass(get_class(), $key);
            if (is_null($value)) continue;

            if ($classDetails->className === 'Date') {
                $dateTime = $value->format('Y-m-d');
                $values[$key] = $dateTime;
                continue;
            }
            if ($classDetails->className === 'DateTime') {
                $dateTime = $value->format('Y-m-d\TH:i:s\Z');
                $values[$key] = $dateTime;
                continue;
            }
            if (is_array($value)) {
                if (!$classDetails->isInlineArray) {
                    $subKey = $classDetails->arrayEntryName;
                    $subArray = [$subKey => $value];
                    $values[$key] = $subArray;
                }
            }
        }
        return array_merge(parent::jsonSerialize(), $values);
    }
}
