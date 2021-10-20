<?php

namespace I74ifa\Lang;

use Exception;

class Lang
{
    /**
     * dir for all files languages
     * 
     * @var string $dirLanguages
     */
    public $dirLang;

    
    public $dirName;
    
    public $lang;

    public $file;

    public function __construct(string $lang, $dirName)
    {
        $this->lang = $lang;
        $this->dirName = $dirName;
        $this->dir();
        
    }

    /**
     * convert string to real dir
     */
    protected function dir()
    {
        if (!is_dir($this->dirName)){
            throw new Exception("not directory");
        }
        $this->dirLang = dir($this->dirName); 
    }

    protected function getFile()
    {
        return (new File($this->lang, $this->dirLang->path))->get();
    }

    public function getDir()
    {
        return $this->dirLang;
    }
    
    public function get()
    {

    }


}