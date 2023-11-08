<?php


trait Published
{
    public $published_year;

    public function getYear()
    {
        return "Published: $this->published_year";
    }
}
