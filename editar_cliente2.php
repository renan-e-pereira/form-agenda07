<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
</head>

<body>

        <?php
            include ("conexao.php");

            $br = '<br>';
            $id = $_POST['cod'];
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "UPDATE agenda07_dados_usuarios SET";
            $sql .= " nome='$nome', login='$login', senha='$senha' WHERE cod=$id";

            mysqli_query ($mysqli, $sql) or die ("Erro ao tentar cadastrar. $mysqli->error");
            mysqli_close ($mysqli);

            echo "Cadastro editado com sucesso.";

            header("location:consultar_cliente.php");
           
        ?>

</body>

</html>