<?php
class Movie
{
    public $title;
    public $year;
    public $genre;
    public $poster;
    public $vote_average;

    public function __construct($poster, $title, $year, $genre, $vote_average)
    {
        $this->poster = $poster;
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->vote_average = $this->voteConvert($vote_average);
    }
    public function voteConvert($value)
    {
        return floor($value / 2);
    }
}

// $movie1 = new Movie('MHA-Heroes-Rising', 'My Hero Academia Heroes: Rising', 2020, 'Animation', 9.1);

// $movie2 = new Movie('AGG-il-cosmo-sul-comò', 'Il cosmo sul comò', 2008, 'Comedy', 4);

// $movie3 = new Movie('The-Hunt-and-the-ice-queen', 'The Huntsman: Winter\'s War', 2016, 'Fantasy', 7.5);

// echo '<pre>';

// var_dump($movie1, $movie2, $movie3);

// echo '</pre>';


// echo $movie1->title;
