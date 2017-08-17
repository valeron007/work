<?php
/**
 * Created by PhpStorm.
 * User: valeron
 * Date: 17.08.17
 * Time: 0:41
 */

class Logger
{
    public $file;
    public $name;
    public $lines = [];

    public function __construct($fname, $f)
    {
        $this->name = $fname;
        $this->file = fopen($f, "a+");
        $this->Log("Constructor called");
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->Log("Destructe called");
        fputs($this->file, join("",$this->lines));
        fclose($this->file);
    }

    public function Log($str)
    {
        $prefix = "[".date("Y:m:d_h:i:s")."-    {$this->name}]";
        $str = preg_replace("/^m/", $prefix, rtrim($str));
        $this->lines[] = $str."\n";
    }


}