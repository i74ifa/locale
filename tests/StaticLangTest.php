<?php

namespace I74ifa\Lang\Test;

use I74ifa\Locale\Static\Locale;
use PHPUnit\Framework\TestCase;

class StaticLangTest extends TestCase
{
    /** @test  */
    public function getting_word_from_static_lang_class()
    {
        $locale = 'ar';
        $dir = __DIR__ . '/lang';
        Locale::set($locale, $dir);
        $this->assertEquals('مرحبا', Locale::get('welcome'));
    }

    /** @test  */
    public function if_key_not_exist_return_same_key()
    {
        $locale = 'ar';
        $dir = __DIR__ . '/lang';
        Locale::set($locale, $dir);
        $this->assertEquals('not world', Locale::get('not world'));
        $this->assertEquals('not word exist', Locale::get('not word exist'));
    }
}