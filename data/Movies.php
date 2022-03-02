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
        $this->vote_average = $vote_average;
    }
    public function voteConvert()
    {
        return Math . floor(this . item . vote_average / 2);
    }
}

$movie1 = new Movie('MHA-Heroes-Rising', 'My Hero Academia Heroes: Rising', 2020, 'Animation', '9.1');

$movie2 = new Movie('AGG-il-cosmo-sul-comò', 'Il cosmo sul comò', 2008, 'Comedy', '4');

$movie3 = new Movie('The-Hunt-and-the-ice-queen', 'The Huntsman: Winter\'s War', 2016, 'Fantasy', '7.5');

var_dump($movie1, $movie2, $movie3);
