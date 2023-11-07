<?php 

class Serie extends Production {
    public $aired_from_year;
    public $$aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(string $_title, string $_language, string $_bio, float $_year, Media $_image){
        $this->title = $_title;
        $this->language = $_language;
        $this->bio = $_bio;
        $this->year = $_year;
        $this->image = $_image;
    }

    public function setImage(Media $_image){
        $this->image = $_image;
    }
}