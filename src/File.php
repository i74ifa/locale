<?php
namespace I74ifa\Lang;


class File
{
    protected $filename;

    protected $status = false;
    protected $dir;
    public function __construct($filename, $dir)
    {
        $this->filename =$filename;
        $this->dir = $dir;
        $this->scandir();
    }

    public function get()
    {
        if ($this->status){
           return $this->filename; 
        }
        return false;
    }

    protected function scandir()
    {
        foreach (scandir($this->dir) as $file) {
            if (strpos($file, $this->filename) !== false) {
                $this->filename = $file;
                $this->status = true;
            }
        }
    }
}