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
}