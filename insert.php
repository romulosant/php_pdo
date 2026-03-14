<?php

// incluindo o arquivo de conexão
require_once 'conexao.php';


// lógica de SQL
$sql = "INSERT INTO user (name, senha) VALUES (:name, :senha)";

// preparando o sql
$stmt = $pdo->prepare($sql);

// incluindo os valores
$stmt->bindValue(':name', 'pqp');
$stmt->bindValue(':senha', '123456');

/// verificando se foi executado corretamente
if ($stmt->execute()) {
    echo "Usuário inserido com sucesso!";
}else{
    echo "Usuario não inserido";
}
