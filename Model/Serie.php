<?php 

class Serie extends Production {
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(string $_title, string $_language, string $_bio, array $_cast, Media $_image, float $_aired_from_year, float $_aired_to_year, float $_number_of_episodes, float $_number_of_seasons){
        $this->aired_from_year = $_aired_from_year;
        $this->aired_to_year = $_aired_to_year;
        $this->number_of_episodes = $_number_of_episodes;
        $this->number_of_seasons = $_number_of_seasons;

        parent::__construct(string $_title, string $_language, string $_bio, array $_cast, Media $_image);
    }


}