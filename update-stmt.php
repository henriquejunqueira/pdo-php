<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './connection.php';

$conn = getConnection();

try{

  $sql = 'UPDATE produtos SET descricao = :desc, qtd = :qtd, valor = :valor WHERE id = :id';
  
  $descricao = 'Feijão 1';
  $qtd = 11;
  $valor = 11.80;
  $id = 3;

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':desc', $descricao);
  $stmt->bindParam(':qtd', $qtd);
  $stmt->bindParam(':valor', $valor);
  $stmt->bindParam(':id', $id);

  if($stmt->execute()){
    echo 'Atualizado com sucesso!';
  }else{
    echo 'Erro ao atualizar!';
  }

} catch (PDOException $e) {
  echo 'Erro ao atualizar: ' . $e->getMessage();
}

?>