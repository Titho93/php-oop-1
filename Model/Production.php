<?php

class Production
{

    use Published;

    public $title;
    public $language;
    public $bio;
    public $cast;
    public $image;

    public function __construct(string $_title, string $_language, string $_bio, array $_cast, Media $_image, float $_published_year)
    {
        if (empty($_title)) {
            throw new Exception("Manca il titolo");
        } else {
            $this->title = $_title;
        }
        $this->language = $_language;
        $this->bio = $_bio;
        $this->cast = $_cast;
        $this->image = $_image;
        $this->published_year = $_published_year;
    }

    public function setImage(Media $_image)
    {
        $this->image = $_image;
    }
}
