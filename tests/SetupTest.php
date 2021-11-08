<?php

namespace I74ifa\Locale\Test;

use I74ifa\Locale\File;
use I74ifa\Locale\Setup;
use PHPUnit\Framework\TestCase;

class SetupTest extends TestCase
{
    /** @test */
    public function check_if_dir_is_correct()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';
        $lang = new Setup($lang, $dir);
        $this->assertEquals(__DIR__ . '/lang', $lang->getDir()->path);
    }

    /** @test  */
    public function directory_file_and_file_name_is_correct()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';

        $lang = new Setup($lang, $dir);
        
        $this->assertEquals($dir . '/ar.php', $lang->getFile());
    }
    /** @test  */
    public function check_file_content()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';

        $lang = new Setup($lang, $dir);
        $this->assertEquals('مرحبا', $lang->locale['welcome']);
    }


}