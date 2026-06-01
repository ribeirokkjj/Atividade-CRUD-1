<?php
    include("../infra/db/connect.php"); //puxa o código do connect.php
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php"); //se não tiver logado, ele retorna para pagina de login
        exit();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){   //se o form com metodo post for submitado executa esse codigo
        $usuario = $_POST["usuario"];//coloca usuario e senha dos inputs nas variaveis
        $senha = $_POST["senha"];

        //código para inserir o usuarios novos cadastrados no db
        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";

        if($conn -> query($sql) === TRUE){ //verifica se deu certo o envio do novo usuário
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css"> <!--puxa o css-->
</head>
<body>
    <?php
        include("../public/component/navbar.php");//puxa o código da navbar.php
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?> <!--mostra o usuário que logou-->
    </p>

    <h4>Cadastrar Novo Usuário</h4> <!--formulário simples de cadastro-->
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    
    include("../public/component/table.php"); //puxa a tabela de funcionários do banco de dados e mostra graficamente
    ?>


    <a href="logout.php">Sair</a> <!--botão que executa a função do logout.php-->
    
</body>
</html>