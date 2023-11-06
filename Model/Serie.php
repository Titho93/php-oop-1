<?php 

class Serie {
    public $title;
    public $language;
    public $bio;
    public $year;
    public $image;

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