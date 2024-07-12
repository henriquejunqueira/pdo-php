<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './connection.php';

$conn = getConnection();

try{
  
  $sql = "SELECT * FROM produtos WHERE id = :id";
  
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", 1);
  $stmt->execute();
  
  $result = $stmt->fetchAll();

  foreach($result as $value){
    echo 'Desc: ' . $value['descricao'].'<br />';
  }
  
}catch (PDOException $e){
  echo 'Erro ao ler dados' . $e.getMessage();
}