<?php

namespace I74ifa\Locale\Static;

use I74ifa\Locale\Locale as LocaleLocale;

/**
 * give me directory languages and locale name
 */
class Locale
{
    public static $dir;    
    public static $lang;

    public static function get($field)
    {
        $lang = new LocaleLocale(self::$lang, self::$dir);
        if (array_key_exists($field, $lang->locale)){
            return $lang->locale[$field];
        }
        return $field;
    }
}