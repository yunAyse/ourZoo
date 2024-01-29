<?php
include_once '../config/autoload.php';
include_once '../config/database.php';


class ZooManager {
  private PDO $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function checkZoo(Zoo $zoo) {
    $request = $this->db->prepare("SELECT * FROM zoo WHERE name_zoo = :name_zoo");
    $request->execute([
      'name_zoo' => $zoo->getName()
    ]);
    $result = $request->fetchAll();
    return $result;
  }

  
  public function addZoo(Zoo $zoo) {

    $existingZoo = $this->checkZoo($zoo);

    if (empty($existingZoo)) {
      $request = $this->db->prepare("INSERT INTO zoo (name_zoo) VALUES (:name_zoo)");
      $request->execute([
            'name_zoo' => $zoo->getName(),
          ]);

          $id = $this->db->lastInsertId();
          $zoo->setId($id);

          header('Location: ./class/Zoo.php');
    } else {
      header('Location: ./class/Zoo.php');
    }
    
  }


}