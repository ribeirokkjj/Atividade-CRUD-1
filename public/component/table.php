<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2"> <!--tabela simples para mostrar os usuarios existentes no banco-->

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    

    $sqlUsuarios = "SELECT * FROM users"; //pega os usuários do banco de dados

    $resultadoUsuarios = $conn -> query($sqlUsuarios); //pega do banco de dados os valores

    while($linha = $resultadoUsuarios->fetch_assoc()){ //pega o resultado do banco de dados e cria um echo para colocar os usuarios no html
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        
        </tr>";
    }
    
    ?>

</table>