<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        h1 {
            margin: 20px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            margin: 0 auto;
            padding: 5px 10px;
            text-align: center;
            color: #000;
        }

        th {
            color: #FFF;
            background-color: #0A304A;
        }

        .navegar {
            display: block;
            text-align: center;
            border: 1px solid black;
            margin: 5px auto;
            width: 20%;
            background-color: #0A304A;
            color: #FFFFFF;
            border-radius: 5px;
        }

        a {
            color: #0A304A;
        }

    </style>
    <title>Consulta de Clientes</title>
</head>
<body>

    <h1>Clientes Registrados</h1>

    <table>
         
        <th>Id</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Senha</th>
        <th>Arquivos</th>
        <th>Ações</th>

    <?php
        include ('conexao.php');
        include ('validar_login.php');

        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];

        // Conectando ao Banco de Dados:
        $sql = "SELECT * FROM agenda07_dados_usuarios WHERE login = '{$login}' AND senha = '{$senha}'";

        $resultado = mysqli_query($mysqli, $sql) or die ("Error " . mysqli_error($mysqli));

        // Obtendo os dados em loop:
        while ($registro = mysqli_fetch_array ($resultado)) {
            
            $id = $registro['cod'];
            $nome = $registro['nome'];
            $login = $registro['login'];
            $senha = $registro['senha'];
            $arquivo = $registro['arquivo'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$login</td>";
            echo "<td>$senha</td>";
            echo "<td>$arquivo</td>";
            echo "<td><a href='editar_cliente.php?id=" . $registro['cod'] . "'>Editar</a> | ".
            "<a href='excluir_cliente.php?id=" . $registro['cod'] . "'>Excluir</a></td>";
            echo "</tr>";

        }

        mysqli_close ($mysqli);

        
        ?>
    </table>
    
    <nav>
        <a href='index.php' class="navegar">Home</a>
        <a href='cadastrar_cliente.php' class="navegar">Novo Cadastro</a>
        <a href="logout.php" class="navegar">Sair</a>
    </nav>
</body>
</html>