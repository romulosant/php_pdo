<?php

/// pegando as variaveis do env
require_once "env.php";


///criando o meu a variavel dsn
$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_NAME_DATABASE;charset=utf8mb4";



/// motando o try e nele tem a obj de conexão, passandos os parametros corretos.
try {
    $pdo = new PDO($dsn, $ENV_USER_NAME, $ENV_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "erro na conexão: " . $e->getMessage();
}


