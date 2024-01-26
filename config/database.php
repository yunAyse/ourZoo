<?php

try {

  $dsn = 'mysql:host=localhost;dbname=tp_zoo';
  $user = 'root';
  $password = '';

  $database = new PDO ($dsn, $user, $password);

} catch (Exception $e) {
  echo 'Error' . $e->getMessage();
}