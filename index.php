<?php

include("infra/db/connect.php"); //puxa o código do connect.php

if($_SERVER["REQUEST_METHOD"] == "POST"){ //se o form com metodo post for submitado executa esse codigo

    $usuario = $_POST["usuario"]; //coloca usuario e senha dos inputs nas variaveis
    $senha = $_POST["senha"];

    //procura usuarios no db que estejam com os valores escritos nos inputs
    $sql = "SELECT * FROM users
    WHERE username = '$usuario' 
    AND password = '$senha'";

    $resultado = $conn -> query($sql); //conecta o banco de dados ao codigo

    if($resultado -> num_rows > 0){ //o if verifica se há algum valor encontrado, se sim signfica que o login foi encontrado
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit(); //entra no home.php e sai do index.php
    }else{
        $erro = "Usuário ou senha inválidos."; //guarda o que sera escrito no aviso de erro
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("public/component/table.php"); //puxa a tabela de funcionários do banco de dados e mostra graficamente
    ?>
    <h2>Login com PHP</h2><form method="POST"> <!--login do html-->
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;//mostra o erro no html caso o if entre no else lá em cima no php
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>