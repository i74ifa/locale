<?php

namespace I74ifa\Lang\Test;

use I74ifa\Lang\Static\Lang;
use PHPUnit\Framework\TestCase;

class StaticLangTest extends TestCase
{
    /** @test  */
    public function getting_word_from_static_lang_class()
    {
        Lang::$lang = 'ar';
        Lang::$dir = __DIR__ . '/lang';
        $this->assertEquals('مرحبا', Lang::get('welcome'));
    }

    /** @test  */
    public function if_key_not_exist_return_same_key()
    {
        Lang::$lang = 'ar';
        Lang::$dir = __DIR__ . '/lang';
        $this->assertEquals('not world', Lang::get('not world'));
        $this->assertEquals('not word exist', Lang::get('not word exist'));
    }
}