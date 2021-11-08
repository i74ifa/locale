<?php

namespace I74ifa\Locale;

use I74ifa\Locale\Setup;

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
        $locale = new Setup(self::$locale, self::$dir);


        return $locale->get($field);
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