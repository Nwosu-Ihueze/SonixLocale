<?php
  // DB Params
  $host = 'us-cdbr-east-02.cleardb.com';
  $db_name = 'heroku_821b7c555506098';
  $username = 'bb5588a45742c3';
  $password = 'd8de6791';

  try { 
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'Connection Error: ' . $e->getMessage();
  }

?>







