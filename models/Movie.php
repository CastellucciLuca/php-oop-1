<?php

class Movie
{
    private $title;
    private $genre;
    private $typeMovie;
    private $cover;
    private $year;
    private $lenght;
    
    function __construct($title,$genre,$typeMovie,$cover,$lenght,$year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->typeMovie = $typeMovie;
        $this->cover = $cover;
        $this->lenght = $lenght;
        $this->year = $year;
    }

    public function getTitle() {
        echo $this->title;
    }

    public function getGenre() {
        echo $this->genre;
    }

    public function getTypeMovie() {
        echo $this->typeMovie;
    }

    public function getCover() {
        echo $this->cover;
    }

    public function getLenght() {
        echo $this->lenght;
    }

    public function getYear() {
        echo $this->year;
    }
}
?>