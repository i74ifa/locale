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
    /**
     * getting absolute directory to file
     */
    public function get()
    {
        if ($this->status){
           return $this->dir . '/' . $this->filename;
        }
        return false;
    }

    /**
     * you will give it short name language like 'ar'\
     * he will give you file name ar.php || ar.json
     */

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