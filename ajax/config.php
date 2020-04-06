<?php
  // CURADURIA2BQ
  $dbhost = 'host';
  $dbname = 'db';
  $dbuser = 'user';
  $dbpass = 'pass';

  try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo $e->getMessage();
  }