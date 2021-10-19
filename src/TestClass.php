<?php


namespace I74ifa\Lang;


class TestClass
{
    protected $filename;


    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFile()
    {
        if (file_exists($this->filename)){
            return file_get_contents($this->filename);
        }
    }
}