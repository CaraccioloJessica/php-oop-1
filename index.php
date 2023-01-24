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