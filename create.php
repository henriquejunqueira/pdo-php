<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './connection.php';

$conn = getConnection();

try{

  $sql = 'INSERT INTO produtos (descricao, qtd, valor) VALUES (:desc,:qtd,:valor)';
  
  $descricao = 'Arroz 2';
  $qtd = 11;
  $valor = 11.80;

  $stmt = $conn->prepare($sql);

  // $stmt->bindValue(1, 'Arroz');
  // $stmt->bindValue(2, 10);
  // $stmt->bindValue(3, 4.50);

  // $stmt->bindValue(1, 'Feijão');
  // $stmt->bindValue(2, 5);
  // $stmt->bindValue(3, 5.50);

  $stmt->bindParam(':desc', $descricao);
  $stmt->bindParam(':qtd', $qtd);
  $stmt->bindParam(':valor', $valor);

  if($stmt->execute()){
    echo 'Salvo com sucesso!';
  }else{
    echo 'Erro ao salvar!';
  }

} catch (PDOException $e) {
  echo 'Erro ao salvar: ' . $e->getMessage();
}

?>