<?php


trait Published
{
    public $published_year;

    public function getYear()
    {
        return "<strong class='title'>Published:</strong> $this->published_year";
    }
}
