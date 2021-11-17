<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style type="text/css">
        body {
            width: 40%;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: rgb(245, 253, 253);
        }

        h1 {
            display: block;
            text-align: center;
            margin-bottom: 100px;
        }
        
        .formulario {
            height: 650px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            background-color: #FFF;
        }
        
        .botao {
            display: inline-block;
            width: 150px;
            height: 50px;
            color: #FFFFFF;
            background-color: blue;
            border: 1px solid darkblue;
            border-radius: 12px;
            margin: 12px;
            margin-top: 80px;
        }

        .limpar {
            background-color: grey;
            border: 1px solid black;
        }

        .col-form-label {
            width: 100%;
        }

        @media screen and (max-width:900px) {
            body {
                width: 300px;
            }
        }
    </style>



    <title>Editar Cadastros</title>
</head>

<body>

    <?php
    include('conexao.php');

    $id = $_GET['id'];

    // Conectando ao Banco de Dados:
    $sql = "SELECT * FROM agenda07_dados_usuarios WHERE cod = $id";
    $resultado = mysqli_query($mysqli, $sql) or die("Error " . mysqli_error($mysqli));

    while ($registro = mysqli_fetch_array($resultado)) {

    ?>

        <div class="formulario">
            <h1>Editar Cadastros</h1>

            <form action="editar_cliente2.php" method="POST" enctype="multipart/form-data">


                <label for="id" class="col-sm-2-form-label">Id: </label> <?php echo $registro["cod"]; ?>
                <input type="hidden" name="cod" class="form-control" value="<?php echo $registro["cod"]; ?>"><br>


                <!-- 
        ==============================
        =========== NOME =============
        ============================== 
        -->
                <label for="nome" class="col-sm-2 col-form-label">Nome Completo:</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $registro["nome"]; ?>" required="required">



                <!-- 
        ==============================
        ========== E-MAIL ============
        ============================== 
        -->
                <br><label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                <input type="email" name="login" class="form-control" value="<?php echo $registro["login"]; ?>" required="required">

                <!-- 
        ==============================
        ========== Senha ============
        ============================== 
        -->
                <br><label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                <input type="password" name="senha" class="form-control" value="<?php echo $registro["senha"]; ?>" required="required">

                <!-- 
        ==============================
        ========== Arquivo ===========
        ============================== 
        -->
            <br><label for="arquivo" class="col-sm-2 col-form-label">Arquivo:</label>
            <input type="file" name="arquivo" class="form-control" value="<?php echo $registro['arquivo']; ?>" required="required">

                <br>

                <div style="display:block; text-align:center;">
                    <input class="botao limpar" type="reset" name="reset" value="Limpar">
                    <input class="botao" type="submit" name="submit" value="Salvar">
                </div>
            </form>
        </div>
    <?php

    };
    
    ?>


</body>

</html>