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

  // metodo che racchiude gli attributi della classe, da richiamare quando andremo a stampare in pagina
  public function getHtml()
  {
    return " Titolo: " .
      $this->title .
      "<br>" .
      " Genere: " .
      $this->genre .
      "<br>" .
      " Anno: " .
      $this->year .
      "<br>" .
      " Durata: " .
      $this->duration;
  }
}

// creato array con le diverse istanze
$movies = [
  new Movie("Black Panther", "Azione", "2018", "134 min"),
  new Movie("La città incantata", "Animazione", "2001", "125 min"),
  new Movie("Stardust", "Fantastico", "2007", "130 min"),
];

// $movie1 = new Movie('Black Panther', 'Azione', '2018', '134 min');
// $movie2 = new Movie('La città incantata', 'Animazione', '2001', '125 min');
// var_dump($movie1);
// echo "<br><br>";
// var_dump($movie2);

// cicla le istanze all'interno dell'array movies e le stampa su pagina
foreach ($movies as $movie) {
  echo $movie->getHtml();
  echo "<br><br>";
}