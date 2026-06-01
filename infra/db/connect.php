<?php
    session_start(); //função que inicia a sessão

    $host = "localhost"; // variáveis que determinam o banco de dados específico a conectar
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    $conn = new mysqli($host,$user,$pass,$db); //faz a conexão com o banco de dados

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>