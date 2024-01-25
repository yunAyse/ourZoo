<?php

class Zoo {
  private string $name;
  private $employee;
  private int $enclosureNum = 10 ;
  private array $enclosures = [];

  public function __construct($name, Employee $employee) {
    $this->name = $name;
    $this->employee = $employee;
  }



  
}

if (isset($_POST['zooName']) && !empty($_POST['zooName'])) {
  $newZoo = new Zoo($_POST['zooName'], $employee);

  var_dump($newZoo);
}
