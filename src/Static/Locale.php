<?php

namespace I74ifa\Locale\Static;

use I74ifa\Locale\Locale as LocaleLocale;

/**
 * give me directory languages and locale name\
 * start your project or file Locale::set($locale, $dir)
 */
class Locale
{
    /**
     * directory to locales
     * @var string $dir
     */
    protected static string $dir;

    /**
     * locale short name like 'ar' || 'en'
     * @var string $locale
     */
    protected static string $locale;

    /**
     * getting the words
     * @param string $field
     */
    public static function get(string $field): string
    {
        $locale = new LocaleLocale(self::$locale, self::$dir);
        if (array_key_exists($field, $locale->locale)){
            return $locale->locale[$field];
        }
        return $field;
    }

    public static function locale()
    {
        return self::$locale;
    }

    /**
     * set locale and directory
     * @param string $locale
     * @param string $dir
     */
    public static function set($locale, $dir): void
    {
        self::$locale = $locale;
        self::$dir = $dir;
    }
}