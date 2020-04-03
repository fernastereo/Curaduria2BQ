<?php
  // CURADURIA2BQ
  $dbhost = '198.71.227.95';
  $dbname = 'curad2bq';
  $dbuser = 'usuariocurad';
  $dbpass = '12345678';

  try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo $e->getMessage();
  }