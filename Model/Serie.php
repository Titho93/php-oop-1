<?php

class Serie extends Production
{
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(string $_title, string $_language, string $_bio, array $_cast, Media $_image, float $_published_year, float $_aired_to_year, float $_number_of_episodes, float $_number_of_seasons)
    {
        $this->aired_to_year = $_aired_to_year;
        $this->number_of_episodes = $_number_of_episodes;
        $this->number_of_seasons = $_number_of_seasons;

        parent::__construct($_title, $_language, $_bio, $_cast, $_image, $_published_year);
    }

    public function getInfo()
    {
        return "Aired to: $this->aired_to_year, Episodes: $this->number_of_episodes, Seasons: $this->number_of_seasons";
    }
}
