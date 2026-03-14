<?php

/// incluindo arquivos de conexão
require_once 'conexao.php';

///criando a minha query
$sql = "SELECT * FROM user";

///preparando a minha quary
$stmt = $pdo->prepare($sql);

///executando a minha query
$stmt->execute();

///trazendo um registro para a variavel e trasformando em um array associativo
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Lista de Usuários</title>

    <style>

        /* Reset básico */
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Fundo da página */
        body{
            background:#f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        /* Container principal */
        .container{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
            width:700px;
        }

        /* Título */
        h2{
            margin-bottom:20px;
            color:#333;
        }

        /* Tabela */
        table{
            width:100%;
            border-collapse:collapse;
        }

        /* Cabeçalho */
        thead{
            background:#4CAF50;
            color:white;
        }

        th{
            padding:12px;
            text-align:left;
        }

        /* Células */
        td{
            padding:12px;
            border-bottom:1px solid #ddd;
        }

        /* Hover nas linhas */
        tr:hover{
            background:#f1f1f1;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Usuários cadastrados</h2>

    <table>

        <thead>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        </thead>

        <tbody>

        <?php foreach ($data as $linha): ?>

            <tr>

                <td><?= $linha['id'] ?></td>

                <td><?= $linha['name'] ?></td>

                <td><?= $linha['senha'] ?></td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>