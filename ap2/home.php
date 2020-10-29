<?php
session_start();
include('verifyLogin.php');
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="/style.css" >
    <title>Home</title>
</head>

<body>
    <br>
    <div >
        <button type="button"  class="btn btn-danger btn-lg ">
            <a  href="logout.php" class="text-decoration-none btn  btn-lg " style="color: white;"> Sair </a>
        </button>
    </div>

    <div class="container">
        <div class="row justify-content-md-center mt-5" class="teste">
            <div class="col-3">
            </div>
            <div class="col-6 mt-">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Olá, <?php echo $_SESSION['login'] ?> !</h4>
                    <p>Você efetuou logon com sucesso.</p>
                    <hr>
                    <p class="mb-0">Aula de Programação Web 2.</p>
                </div>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>

</html>