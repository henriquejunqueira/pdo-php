<?php

  $dsn = 'mysql:host=localhost;dbname=mercadophp';
  $user = 'henrique';
  $pass = 'slipknot1994';

  try{
    echo "conectou";
  }catch(PDOException $ex){
    echo "Err: " .$ex->getMessage();
  }

  $pdo = new PDO($dsn, $user, $pass);

?>