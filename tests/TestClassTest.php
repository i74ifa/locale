<?php

namespace I74ifa\Lang\Test;

use I74ifa\Lang\TestClass;
use PHPUnit\Framework\TestCase;

class TestClassTest extends TestCase
{
    /** @test */
    public function get_me_file()
    {
        $file = dirname(__DIR__) . '/.env';

        $file = new TestClass($file);
        $this->assertEquals('lang=ar', $file->getFile());
    }
}