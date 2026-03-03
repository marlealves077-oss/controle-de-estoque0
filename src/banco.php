<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "estoque";

    //conecção com o banco de dados
    try {
        $conexao = new PDO("mysql:host=$servidor; dbname=$banco; harset=utf8", $usuario, $senha);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
} catch (\Throwable $error) {
        
    die("erro ao conectar com o banco de dados: " . $erro->getmessage());


    }