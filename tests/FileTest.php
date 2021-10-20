<?php

namespace I74ifa\Lang\Test;

use I74ifa\Lang\File;
use I74ifa\Lang\Lang;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    /** @test  */
    public function directory_file_and_file_name_is_correct()
    {
        $dir = __DIR__ . '/lang';
        $lang = 'ar';

        $file = new File($lang, $dir);
        $this->assertEquals($dir . '/ar.php', $file->get());
    }

}