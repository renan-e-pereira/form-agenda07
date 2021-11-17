<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
</head>

<body>
    
    <?php

        session_start();
        include('conexao.php');

        if (empty($_POST['login']) || empty($_POST['senha'])) {
            header('location: index.php');
            exit();
        }

        $login = mysqli_real_escape_string($mysqli, $_POST['login']);
        $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

        $sql = "SELECT * FROM agenda07_dados_usuarios WHERE login = '{$login}' and senha = '{$senha}'";

        $resultado = mysqli_query($mysqli, $sql);

        $row = mysqli_num_rows($resultado);

        if ($row == 1) {

            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header ('location:consultar_cliente.php');
            exit();

        } else {

            $_SESSION ['nao_autenticado'] = true;
            header ('location:index.php');
            exit();

        }


    ?>
</body>

</html>