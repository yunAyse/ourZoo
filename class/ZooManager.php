<?php
include_once '../config/autoload.php';
include_once '../config/database.php';


class ZooManager {
  private PDO $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function find(Zoo $zoo) {
    $request = $this->db->prepare("SELECT * FROM zoo WHERE name_zoo = :name_zoo");
    $request->bindValue(':name_zoo', $zoo->getName());
    $request->execute();
    $zooFind = $request->fetchAll();


    if ($zooFind) {
      $zooName = $zooFind['id'];
      return $zooName;
    } 

    var_dump($zooFind);

  }

  public function addZoo(Zoo $zoo) {

    
    // if () {
    //   $request = $this->db->prepare("INSERT INTO zoo (name_zoo) VALUES (:name_zoo) ");
    //   $request->execute([
    //     'name_zoo' => $zoo->getName(),
    //   ]);
    // }

    
    
  }





}