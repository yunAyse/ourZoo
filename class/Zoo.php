<?php
include_once '../config/autoload.php';

class Zoo
{
  private string $name;
  private object $employee;
  private int $enclosureNum = 10;
  private array $enclosures = [];

  public function __construct($name, array $Employee)
  {
    $this->name = $name;
    $this->employee = new Employee($Employee['name'], $Employee['age'], $Employee['genre']);
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmployeeName() {
    return $this->employee;
  }


}



if (
  isset($_POST['zooName']) && !empty($_POST['zooName']) &&
  isset($_POST['employeeName']) && !empty($_POST['employeeName']) &&
  isset($_POST['employeeAge']) && !empty($_POST['employeeAge']) &&
  isset($_POST['employeeGenre']) && !empty($_POST['employeeGenre'])
  ) {
    $name = $_POST['employeeName'];
    $age = $_POST['employeeAge'];
    $genre = $_POST['employeeGenre'];
    
    $newEmployee = ([
      'name' => $name,
      'age' => $age,
      'genre' => $genre
    ]);
    
    $zooName = $_POST['zooName'];
    $newZoo = new Zoo($zooName, $newEmployee);
    
    
    var_dump($newZoo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ourZoo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <?php echo $newZoo->getName() ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Our Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header"><?php ?></div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </ul>

          </div>
        </div>
      </div>
    </nav>
  </header>

  <section>
    <div>
      <form action="" method="post">
        <div>
          <label for=""></label>
        </div>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>