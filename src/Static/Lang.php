<?php

namespace I74ifa\Lang\Static;

use I74ifa\Lang\Lang as LangLang;

/**
 * give me directory languages and locale name
 */
class Lang
{
    public static $dir;    
    public static $lang;

    public static function get($field)
    {
        $lang = new LangLang(self::$lang, self::$dir);

        return $lang->locale[$field];
        
    }
}