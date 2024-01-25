<?php
include_once './config/autoload.php';
// include_once './class/Zoo.php';
// require_once './class/Employee.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Zoo</title>
</head>

<body>
  <section>
    <div>
      <form action="./class/Zoo.php" method="post">
        <div>
          <label for="zoo">Your Zoo Name : </label>
          <input type="text" name="zooName">
        </div>
        <div>
          <p>Let's create your employee :</p>
          <label for="employee"> Name : </label>
          <input type="text" name="employeeName">
        </div>
        <div>
          <label for="employee"> Age : </label>
          <input type="number" name="employeeAge" id="age">
        </div>
        <div>
          <label for="employee"> Genre : </label>
          <select name="employeeGenre">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div>
          <input type="submit" value="Create">
        </div>
      </form>
    </div>
  </section>
</body>

</html>