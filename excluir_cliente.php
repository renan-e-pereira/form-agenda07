<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta ao formulário</title>
</head>

<body>

    <div>
        <?php
            include ("conexao.php");

            $br = '<br>';
            $id = $_GET['id'];

            $sql = "DELETE FROM agenda07_dados_usuarios WHERE cod=$id";

            mysqli_query ($mysqli, $sql) or die ("Erro ao tentar deletar. $mysqli->error");
            mysqli_close ($mysqli);

            echo "Cliente excluído com sucesso.";

            header("location:index.php");
           
        ?>
    </div>

</body>

</html>