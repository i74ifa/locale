<?php

namespace I74ifa\Lang\Test;

use I74ifa\Lang\File;
use I74ifa\Lang\Lang;
use PHPUnit\Framework\TestCase;

class LangTest extends TestCase
{
    /** @test */
    public function check_if_dir_is_correct()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';
        $lang = new Lang($lang, $dir);
        $this->assertEquals(__DIR__ . '/lang', $lang->getDir()->path);
    }

    // /** @test  */
    // public function choose_language_test()
    // {
    //     $dir = __DIR__ . '/lang';
    //     $lang = 'ar';
    //     $lang = new Lang($lang, $dir);

    //     $this->assertEquals($lang->get('Welcome'), 'مرحبا');
    // }

    /** @test  */
    public function open_file_test()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';
    }

}