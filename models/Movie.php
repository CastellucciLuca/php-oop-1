<?php

class Movie
{
    public $bannerPath;
    public $title;
    public $year;
    public $lenght;
    public $genre;

    
    public function __construct($_bannerPath, $_title, $_year, $_lenght,  $_genre)
    {
        $this->bannerPath = $_bannerPath;
        $this->title = $_title;
        $this->year = $_year;
        $this->lenght = $_lenght;
        $this->genre = $_genre;
    }
}