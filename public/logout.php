<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit(); //essa função faz ir para a tela de login após fazer o logout
?>