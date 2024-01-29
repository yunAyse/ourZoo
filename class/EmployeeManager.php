<?php
include_once '../config/autoload.php';
include_once '../config/database.php';


class EmployeeManager {
  private PDO $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function checkEmloyee(Employee $employee) {
    $request = $this->db->prepare("SELECT * FROM employee WHERE id_zoo = :id_zoo");
    $request->execute([
      'id_zoo' => $employee->getIdZoo(),
    ]);
    $result = $request->fetchAll();
    return $result;
  }

  
  public function addEmployee(Employee $employee) {

    $existingEmployee = $this->checkEmloyee($employee);

    if (empty($existingEmployee)) {
      $request = $this->db->prepare("INSERT INTO employee (name_employee, age_employee, genre_employee, id_zoo) VALUES (:name_employee, :age_employee, :genre_employee, :id_zoo)");
      
      $request->execute([
            'name_employee' => $employee->getEmployeeName(),
            'age_employee' => $employee->getEmployeeAge(),
            'genre_employee' => $employee->getEmployeeGenre(),
            'id_zoo' => $employee->getIdZoo()
          ]);

          $id = $this->db->lastInsertId();
          $employee->setId($id);

          header('Location: ./class/Zoo.php');
    } else {
      header('Location: ./class/Zoo.php');
    }
    
  }

}