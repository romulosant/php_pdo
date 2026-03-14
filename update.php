<?php
///incluindo arquivos de conexão
require_once "conexao.php";

///criando a minha query
$sql = 'UPDATE user SET name = :nome where id = :id';

///preparando o minha query
$stmt = $pdo->prepare($sql);

///associando varoleas ao parametros
$stmt->bindValue(':nome', "luciana");
$stmt->bindValue(':id', "8");

///verificando se foi concluida a atualização
if ($stmt->execute()) {
    echo "usuario atualizado com sucesso";
} else {
    echo "erro ao atualizar o user";
}









