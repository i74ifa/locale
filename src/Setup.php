<?php

namespace I74ifa\Locale;

class Setup
{
    /**
     * dir for all files languages
     * 
     * @var string $dirLanguages
     */
    public $dirLang;

    
    public $dirName;
    
    public $lang;

    public $locale;

    public function __construct(string $lang, $dirName)
    {
        $this->lang = $lang;
        $this->dirName = $dirName;
        $this->dir();
        $this->openFile();
        
    }

    /**
     * convert string to real dir
     */
    protected function dir()
    {
        if (!is_dir($this->dirName)){
            throw new \Exception("not directory to language");
        }
        $this->dirLang = dir($this->dirName); 
    }

    public function getFile()
    {
        return (new File($this->lang, $this->dirLang->path))->get();
    }

    protected function openFile()
    {
        $this->locale = include($this->getFile());
    }

    public function getDir()
    {
        return $this->dirLang;
    }
    
    public function get(string $field)
    {
        if (array_key_exists($field, $this->locale)){
            return $this->locale[$field];
        }
        return $field;
    }


}