<?php

class Production {
    public $title;
    public $language;
    public $bio;
    public $cast;
    public $image;

    public function __construct( string $_title, string $_language, string $_bio, array $_cast, Media $_image){
        $this->title = $_title;
        $this->language = $_language;
        $this->bio = $_bio;
        $this->cast = $_cast;
        $this->image = $_image;
    }

    public function setImage(Media $_image){
        $this->image = $_image;
    }
}
