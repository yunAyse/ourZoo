<?php
include_once '../config/autoload.php';

class Employee {
  private $name;
  private $age;
  private $genre;

  public function __construct($name, $age, $genre) {
    $this->name = $name;
    $this->age = $age;
    $this->genre = $genre;
  }

  public function setEmployeeName($name)
  {
    $this->name = $name;
  }
  
  public function getEmployeeName()
  {
    return $this->name;
  }

}

