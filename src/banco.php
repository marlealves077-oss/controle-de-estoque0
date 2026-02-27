<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "estoque";

    //conecção com o banco de dados
    try {
        $conecxao = new PDO("
        mysql:host=$servidor;
        dbname=$banco;
        charset=utf8",
        $usuario,
        $senha);

        
    } catch (\Throwable $error) {
        //throw $th;
    }