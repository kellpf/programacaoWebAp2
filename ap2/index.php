<?php

session_start();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-5" class="teste">
            <div class="col-3">
            </div>
            <div class="col-6 mt-5 card" >
                <form class="form"  action="login.php" method="POST">
                    <br>
                    <p class="text-center h4" >Autenticação AP2</p>
                    <br>
                    <?php
                    if (isset($_SESSION['login_invalido'])) :
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Login ou senha inválidos!
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['login_invalido']);
                    ?>

                    <label>Login</label>
                    <input type="text" class="form-control" name="login">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha">
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                    <br>

                </form>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>

</html>