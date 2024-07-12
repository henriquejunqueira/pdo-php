<?php

  function getConnection(){
    $dsn = 'mysql:host=localhost;dbname=mercadophp;charset=utf8';
    $user = 'henrique';
    $pass = 'slipknot1994';

    try{
      $pdo = new PDO($dsn, $user, $pass);
      return $pdo;
    }catch(PDOException $ex){
      echo "Err: " .$ex->getMessage();
    }
  }
?>