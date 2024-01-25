<?php

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
      <form action="" method="post">
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
          <input type="number" name="age" id="age">
        </div>
        <div>
          <label for="employee"> Sexe : </label>
          <select name="sexe-select">
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