<?php
namespace DesolatorMagno\AuthorizePhp\Util;

/**
 * A class defining helpers
 *
 * @package    AuthorizeNet
 * @subpackage net\authorize\Util
 */
class Helpers
{
    private static bool $initialized = false;

    /**
     * @return string current date-time
     */
    public static function now(): string
    {
        //init only once
        if ( ! self::$initialized)
        {
            self::$initialized = true;
        }
        return date( DATE_RFC2822);
    }
}
