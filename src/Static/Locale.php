<?php

namespace I74ifa\Locale\Static;

use I74ifa\Locale\Locale as LocaleLocale;

/**
 * give me directory languages and locale name\
 * start your project or file set $dir and $lang
 */
class Locale
{
    /**
     * directory to locales
     * @var string $dir
     */
    public static string $dir;

    /**
     * locale short name like 'ar' || 'en'
     * @var string $locale
     */
    public static string $locale;

    /**
     * getting the words
     * @param string $field
     */
    public static function get(string $field): string
    {
        $lang = new LocaleLocale(self::$locale, self::$dir);
        if (array_key_exists($field, $lang->locale)){
            return $lang->locale[$field];
        }
        return $field;
    }

    public static function locale()
    {
        return self::$locale;
    }
}