<?php


function db_connect() {
  $dsn = "mysql:host=localhost:3306;dbname=project";
  $username = "root";
  $pass = "root";
  try {
    $conn = new PDO( $dsn , $username, $pass);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }
  catch (PDOException $e) {
    echo $e->getMessage();
  }
  return $conn;
}
?>

