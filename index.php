<?php

class Movie
{
  public $title;
  public $year;
  public $duration;

  function __construct($title, $year, $duration)
  {
    $this->title = $title;
    $this->year = $year;
    $this->duration = $duration;
  }
}

$movie1 = new Movie("Black Panther", "2018", "134 min");
$movie2 = new Movie("Iron Man", "2008", "126 min");
var_dump($movie1);
echo "<br><br>";
var_dump($movie2);