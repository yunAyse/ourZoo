<?php
include_once '../config/autoload.php';

class Employee {
  private $id;
  private $name;
  private $age;
  private $genre;
  private $id_zoo;

  public function __construct($name, $age, $genre) {
    $this->name = $name;
    $this->age = $age;
    $this->genre = $genre;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setEmployeeName($name)
  {
    $this->name = $name;
  }
  
  public function getEmployeeName()
  {
    return $this->name;
  }


  public function getEmployeeAge()
  {
    return $this->age;
  }

 
  public function setEmployeeAge($age)
  {
    $this->age = $age;

    return $this;
  }

  public function getEmployeeGenre()
  {
    return $this->genre;
  }

  public function setEmployeeGenre($genre)
  {
    $this->genre = $genre;

    return $this;
  }

  public function setIdZoo (Zoo $zoo) {
    $this->id_zoo = $zoo->getId();

  }

  public function getIdZoo () {
    return $this->id_zoo;
  }

}


