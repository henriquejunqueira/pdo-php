<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './connection.php';

$conn = getConnection();

try{

  $sql = "INSERT INTO produtos (descricao, qtd, valor) VALUES ('Arroz', 30, '4.50')";

  if($conn->exec($sql)){
    echo 'Salvo com sucesso!';
  }else{
    echo 'Erro ao salvar!';
  }

} catch (PDOException $e) {
  echo 'Erro ao salvar: ' . $e->getMessage();
}