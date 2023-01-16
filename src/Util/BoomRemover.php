<?php

namespace DesolatorMagno\AuthorizePhp\Util;

trait BoomRemover
{

    public function removeBoom(?string $jsonResponse): ?array
    {
        if (is_null($jsonResponse)) {
            return null;
        }

        //decoding json and removing bom
        $possibleBOM = substr($jsonResponse, 0, 3);
        $utfBOM = pack("CCC", 0xef, 0xbb, 0xbf);

        if (0 === strncmp($possibleBOM, $utfBOM, 3)) {
            return json_decode(substr($jsonResponse, 3), true);
        } else {
            return json_decode($jsonResponse, true);
        }

    }
}
