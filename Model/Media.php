<?php

class Media{
    public $path;
    public $name;
    public $type = 'image';

    public function __construct($_path, $_name){
        $this->path = $_path;
        $this->name = $_name;
    }
}