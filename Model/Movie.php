<?php

class Movie{
    public $title;
    public $language;
    public $bio;
    public $year;

    public function __construct( string $_title, string $_language, string $_bio, float $_year){
        $this->title = $_title;
        $this->language = $_language;
        $this->bio = $_bio;
        $this->year = $_year;
    }
}