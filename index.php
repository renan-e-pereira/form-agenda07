<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bulma.min.css" />

    <style>
        .form-label {
            display: block;
            text-align: left;
        }

        .form-check-input {
            margin-right: 5px;
        }

        .cadastro {
            font-size: 1em;
            color: #212529;
            background-color: #dee2e6;
            border-color: #212529;
        }

        .erro {
            border: 1px solid red;
            border-radius: .3rem;
            color: #FFFFFF;
            background-color: #E6361C;
            margin-bottom: 10px;
            padding-top: 10px;
        }
    </style>

    <title>Login</title>
</head>

<body>


    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Faça seu Login</h3>
                            <?php
                            if (isset($_SESSION['nao_autenticado'])) :
                            ?>

                                <div class="erro">
                                    <p>ERRO: Usuário ou senha inválidos.</p>
                                </div>

                            <?php

                            endif;
                            unset($_SESSION['nao_autenticado']);

                            ?>

                            <form action="login.php" method="post">


                                <div class="form-outline mb-4">

                                    <label class="form-label" for="typeEmailX-2">Digite seu e-mail</label>

                                    <input name="login" value="" type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="exemplo@email.com" required />

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Digite sua senha</label>
                                    <input name="senha" value="" type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="senha" required />
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                                <hr class="my-4">

                                <a class="btn btn-primary btn-lg btn-block cadastro" href="cadastrar_cliente.php">Cadastre-se</a>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>