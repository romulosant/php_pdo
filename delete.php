<?php
//incluindo o arquivo de conexão
require_once 'conexao.php';

//criando a minha query
$sql = "DELETE FROM user WHERE id = :id";
//preparando a query
$stmt = $pdo->prepare($sql);
//executando a quary passando o parametro que ela deve excluir
$stmt->execute([
    ':id' => 5
]);
echo "Usuário deletado!";