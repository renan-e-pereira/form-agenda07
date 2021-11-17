<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include ('conexao.php');

        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $arquivo = $_POST['arquivo'];

        
        if (isset($_FILES['arquivo'])) {

            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "upload/";
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

        }

        $sql = "INSERT INTO agenda07_dados_usuarios VALUES ('null', '$nome', '$login', '$senha', '$diretorio . $novo_nome')";
        mysqli_query ($mysqli, $sql) or die ("Erro ao tentar cadastrar.");
        mysqli_close ($mysqli);

        echo "Cadastro efetuado com sucesso.";

        header("location:index.php");

    ?>
</body>
</html>