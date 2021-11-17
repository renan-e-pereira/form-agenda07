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
            margin-bottom: 50px;
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
            margin-top: 50px;
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



    <title>Cadastrar Clientes</title>
</head>

<body>

    <div class="formulario">
        <h1>Cadastro de Clientes</h1>

        <form action="cadastrar_cliente2.php" method="POST" enctype="multipart/form-data">

            <!-- 
        ==============================
        =========== NOME =============
        ============================== 
        -->
            <label for="nome" class="col-sm-2 col-form-label">Nome Completo:</label>
            <input type="text" name="nome" class="form-control" required="required">



            <!-- 
        ==============================
        ========== E-MAIL ============
        ============================== 
        -->
            <br><label for="email" class="col-sm-2 col-form-label">E-mail:</label>
            <input type="email" name="login" class="form-control" required="required">

            <!-- 
        ==============================
        ========== Senha ============
        ============================== 
        -->
            <br><label for="senha" class="col-sm-2 col-form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" required="required">

            <!-- 
        ==============================
        ========== Arquivo ===========
        ============================== 
        -->
            <br><label for="arquivo" class="col-sm-2 col-form-label">Arquivo:</label>
            <input type="file" name="arquivo" class="form-control" required="required">

            <br>

            <div style="display:block; text-align:center;">

                <input class="botao limpar" type="reset" name="reset" value="Limpar">

                <input class="botao" type="submit" name="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>

</html>