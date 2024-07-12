<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting('E_ALL');

include './connection.php';

$conn = getConnection();

try{
  $sql = 'DELETE FROM produtos WHERE id = :id:';
  
  $id = 2;

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':id', $id);

  if($stmt->execute()){
    echo 'Excluído com sucesso!';
  }else{
    echo 'Erro ao excluir!';
  }
}catch(PDOException $ex){
  echo 'Erro ao excluir: ' . $e->getMessage();
}