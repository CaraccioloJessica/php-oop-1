<?php

class Movie
{
  public $title;
  public $genre;
  public $year;
  public $duration;

  function __construct($title, $genre, $year, $duration)
  {
    $this->title = $title;
    $this->genre = $genre;
    $this->year = $year;
    $this->duration = $duration;
  }

  public function getHtml()
  {
    return
      $this->title
      . ' - ' . $this->genre
      . ' - ' . $this->year
      . ' - ' . $this->duration;
  }
}

$movie1 = new Movie('Black Panther', 'Azione', '2018', '134 min');
$movie2 = new Movie('La città incantata', 'Animazione', '2001', '125 min');
// var_dump($movie1);
// echo "<br><br>";
// var_dump($movie2);

echo $movie1->getHtml();
echo '<br><br>';
echo $movie2->getHtml();
echo '<br><br>';