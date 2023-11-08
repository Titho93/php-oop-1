<?php

class Movie extends Production{
    public $published_year;
    public $running_time;

    public function __construct(string $_title, string $_language, string $_bio, array $_cast, Media $_image, float $_published_year, string $_running_time){
        $this->published_year = $_published_year;
        $this->running_time = $_running_time;

        parent::__construct($_title, $_language, $_bio, $_cast, $_image);
    }

    public function getInfo(){
        return "Published: $this->published_year, Time: $this->running_time";
    }
};